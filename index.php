<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("INCLUDE_PATH", "../twc_includes");

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" type="image/png" href="../images/fave.ico"/>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH;?>/js/jquery-ui-1.11.2/jquery-ui.min.css"/>
	<!--<link rel="stylesheet" href="css/app.css"/>-->
	<script type='text/javascript' src='<?php echo INCLUDE_PATH;?>/js/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='<?php echo INCLUDE_PATH;?>/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php echo INCLUDE_PATH;?>/js/jquery-ui-1.11.2/jquery-ui.min.js'></script>
        <script type='text/javascript' src='<?php echo INCLUDE_PATH;?>/js/jquery.tablesorter.min.js'></script>
        <script type='text/javascript' src='<?php echo INCLUDE_PATH;?>/js/typeahead.jquery.min.js'></script>
        <script type='text/javascript' src='js.js'></script>

        <style type="text/css">
            label{display: block;margin: 5px 0 10px 0;}
            .pane { width: 900px; margin-left: auto; margin-right: auto; }
            header { width: 100%; height: 60px; margin: 0; color: white; background: rgba(19, 61, 120, 0.992157); text-align: center; font-size: 30px;}
            .twitter-typeahead { width: 100%; }
            .tt-dropdown-menu { 
                width: 422px;
                margin-top: 12px;
                padding: 8px 0;
                background-color: #fff;
                border: 1px solid #ccc;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                border-radius: 8px;
                -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                box-shadow: 0 5px 10px rgba(0,0,0,.2); 
            }
            .tt-dataset-advertisers {
                padding-left: 8px;
            }
            #getDates Table{
                width: 100%;
                border-spacing: 20px;
                border-collapse: separate;
            }

        </style>
    </head>
<body>
<header>    
<div>Zipcode Radius Tool (Using 3rd Party API)</div>
</header>

<div id="addDiv" class="pane">
    <br /><br />
    <p class="form-group"> 
        This is an example of an app that uses Ajax to call a PHP page that queries 
        <a href="http://zipcodeapi.com">zipcodeapi.com</a> using its API 
        to return a list of zip codes within a five mile radius
        of any U.S. zip code input. Zipcodeapi is a free service until the API call limit of 50 per hour or 
        1,200 per day is reached. (Too many calls will generate an error once this limit is reached.)
        There will be an organic version shortly with no limits other than bandwidth.
    </p>
    <form id="formwhatever" action="" method="post" name="form" enctype="multipart/form-data">
        <div class="form-group"> 
            <label>Enter a zip code</label>
            <textarea rows="4" cols="50" class="form-control" id="ziplocale"></textarea>

        </div>            
        <input type="submit" class="btn btn-default" value="Submit" id="submit">
    </form>
    <p><a href="https://github.com/pwingard/zipCodeRadiusTool">Git</a>&nbsp;&middot;&nbsp;
      <a href="https://www.linkedin.com/in/pwingard">LinkedIn</a>&nbsp;&middot;&nbsp;
        <a href="http://pwingard.com">Home</a></p>
</div>    
    
    
    
    
    



