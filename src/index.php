<html>
    <head>
        <title>Raspberry Pi Project</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/annyang/2.6.0/annyang.min.js"></script>
        <script>
            $(document).ready(function(){
                if(annyang){
                var commands = {
                    "turn on the light" : turnOn, 
                    "turn off the light" : turnOff
                    
                };
                
                annyang.addCommands(commands);
                annyang.debug();
                annyang.start();
            }
            });
            
            
            var turnOn = function(){
                var status = "on";
                   $.ajax({
                       url:"servicexecutor.php",
                       type: "POST",
                       data: {onrequest : status}, 
                       beforeSend: function(){
                           
                       }, 
                       success: function(data){
                           console.log("Light on.");
                           $("#lstatus").html("The light is on.");
                       }
                   }); 
            };
            
            var turnOff = function(){
                var status = "off";
                   $.ajax({
                       url:"servicexecutor.php",
                       type: "POST",
                       data: {offrequest : status}, 
                       beforeSend: function(){
                           
                       }, 
                       success: function(data){
                           console.log("Light off");
                           $("#lstatus").html("The light is off.");
                       }
                   });
            };
            
        </script>
        <script>
            
            
         
            $(document).ready(function(){
                
                $("#on").click(function(){
                   var status = "on";
                   $.ajax({
                       url:"servicexecutor.php",
                       type: "POST",
                       data: {onrequest : status}, 
                       beforeSend: function(){
                           
                       }, 
                       success: function(data){
                           console.log("Light on.");
                           $("#lstatus").html("The light is on.");
                       }
                   }); 
                });
                
                $("#off").click(function(){
                    var status = "off";
                   $.ajax({
                       url:"servicexecutor.php",
                       type: "POST",
                       data: {offrequest : status}, 
                       beforeSend: function(){
                           
                       }, 
                       success: function(data){
                           console.log("Light off");
                           $("#lstatus").html("The light is off.");
                       }
                   });
                });
            });
        </script>
    </head>
    <body>
        <div style="text-align: center;">
            <h3>Give a voice command to turn on / off light</h3>
        <input type="button" value="On" id="on" name="on"/><br/><br/>
        <input type="button" value="Off" id="off" name="off"/>
        <br/><br/><span id="lstatus"></span>
        </div>
    </body>
</html>