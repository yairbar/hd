$(document).ready(function(){

    var num;
    var demoNum;
    var login;
    var ding = document.createElement('audio');
    ding.setAttribute('src', 'Ding-dong.wav');

    if(IS_ADMIN){
        console.log(IS_ADMIN)

        $(window).mousedown(function(event) {

            if(event.which == 1){    
                request =  $.ajax({
                    url: "controler.php",
                    type: "POST",
                    dataType:"json",
                    data:{islogin:'p'},

                });
                request.done(function(data) {

                    ding.currentTime = 0;
                    ding.play();
                    num = parseInt(data["turn"]);

                    demoNum = num;
                    $("#queue").html("");

                    $("#queue").append('<div class="queue sh" style="color:#c90a0a;"><p>'+demoNum+'</p></div>');
                    for(var i = 0 ; i < 3 ; i++){
                        demoNum+=1;
                        if(demoNum == 1000)demoNum = 1;
                        $("#queue").append('<div class="queue sm" style="color:gray;"><p>'+demoNum+'</p></div>');

                    }
                });
            }

            else if(event.which == 2){    

                request =  $.ajax({
                    url: "controler.php",
                    type: "POST",
                    dataType:"json",
                    data:{islogin:'m'},

                });
                request.done(function(data) {


                    num = parseInt(data["turn"]);

                    demoNum = num;
                    $("#queue").html("")

                    $("#queue").append('<div class="queue sh" style="color:#c90a0a;"><p>'+demoNum+'</p></div>');
                    for(var i = 0 ; i < 3 ; i++){
                        demoNum+=1;
                        if(demoNum == 1000)demoNum = 1;
                        $("#queue").append('<div class="queue sm" style="color:gray;"><p>'+demoNum+'</p></div>');

                    }
                });


            }} );
    }



});
