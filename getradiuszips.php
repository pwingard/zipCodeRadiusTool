<?php

$key="adX4pXiztZ47CMmkxq6DgrsoTrN9fOlq2jusgM1KM5SpSeJqFP4VhwkbX7ldVGDX"; 

$zipinput=$_POST["zip"];
$zipinputarr=  explode(',', $zipinput);
foreach ($zipinputarr as $zippc) {
    $ziparr[]=trim($zippc);
}

$zipsArr=array();

if(count($ziparr)<1){
    echo json_encode("No zip codes found.");
    die();
} else {
    foreach($ziparr as $zip){ 
        if(!ctype_digit($zip) || strlen($zip)!=5){
            echo json_encode("Not a valid zipcode...");
            die();
        }else{
            $url="http://www.zipcodeapi.com/rest/".$key."/radius.json/".$zip."/5/mile"; 
            $thisArr=httpGet($url);
            
            if(is_null($thisArr)){
                echo json_encode("Sorry, API Limit reached. Come back in an hour...");
                die();
            }
            
            $zipsArr = array_merge($zipsArr, $thisArr);
            $zipsArr = array_unique($zipsArr);
            
        }
        //break;//since the api response is flakey with too many zips 
            // this is a quick hack to limit the call to the first zip in a list
            //and no more...
    }
}
echo json_encode(array_values($zipsArr));


function httpGet($url){
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    //curl_setopt($ch,CURLOPT_HEADER, false); 
    //curl_setopt($ch, CURLOPT_VERBOSE, true);
 
    $output=curl_exec($ch);

    $zipsArr=parsezips($output);
 
    curl_close($ch);
    return $zipsArr;
}

function parsezips($output){
    
    $yo=json_decode($output);
    
    foreach($yo->zip_codes as $ele){
    $zipsArr[]=$ele->zip_code;
    }
    return $zipsArr;
}
