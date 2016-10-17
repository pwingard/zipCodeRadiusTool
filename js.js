
    
    $(document).ready(function(){
        $("#submit").show('fast');
        $("#submit").click(function () {
            var thiszip=$('#ziplocale').val();
            //var thiszip="30030";    
            $.ajax({
                url: "getradiuszips.php",
                type: "POST",
                dataType:'json',
                
                data: {zip: thiszip},
                //async: false,//keep loading gif from showing up
                success: function (data) {
                    console.log(data);
                    $('#ziplocale').val('');
                    if(data.forEach){
                        data.forEach(function(entry) {
                            if($("#ziplocale").val().length>4){
                                $('#ziplocale').val($('#ziplocale').val()+", ");
                            }
                            $('#ziplocale').val($('#ziplocale').val()+entry); 
                        });
                    }else{
                        $('#ziplocale').val(data);
                    }
                },
                error: function () {
                    alert( "Posting failed." );
                    $('#message').html("");
                },
            });
        
        return false;
        });
    });

 


