$(document).ready(function(){

    var num;
    var demoNum;
    var login;

    function showTurn() {

        request =  $.ajax({
            url: "controler.php",
            type: "POST",
            dataType:"json",
            data:{islogin:1},

        });
        request.done(function(data) {

            num = parseInt(data["turn"]);
            demoNum = num;
            $("#queue").html("");
            $("#queue").append('<div class="queue sh" style="color:#c90a0a;"><p>'+demoNum+'</p></div>');
            for(var i = 0 ; i < 3 ; i++){
                demoNum+=1;
                $("#queue").append('<div class="queue sm" style="color:gray;" ><p>'+demoNum+'</p></div>');

            }
        }); 

    }

    var myVar = setInterval(showTurn(), 3000);

    function isLogin(){


        request =  $.ajax({
            url: "controler.php",
            type: "POST",
            dataType:"json",
            data:{is_admin:1},

        });
        request.done(function(data) {

            console.log("log in ");
            $(".login").hide();
            $(".home").show();
            $("#chooseQueue").show();
            $("#logout").show();
            $("#chooseQueue p").append("<b>please enter a number between 1 - 999</b>");
            $("#choose").append('<input type="text" name="queue"><button type="submit" name="choose" class="btn btn-primary btn-block btn-large" name="login">choose <i class="far fa-hand-point-down"></i></button>');
            $("#logout").append('<a href="login.php?logout" ><button class="btn btn-primary btn-block btn-large" name="login">logout <i class="fas fa-sign-out-alt"></i></button></a>');
            $(".home").append('<a href="index.php" ><button class="btn btn-primary btn-block btn-large" name="login"><i class="fas fa-home fa-2x"></i></button></a>');



        });
        request.fail(function(){ 

            console.log("NOT log in ");
            $(".login").show();
            $(".home").show();
            $("#chooseQueue").hide();
            $("#logout").hide();
            $(".login h1").append("Login");
            $(".login form").append('<input type="text" id="userName" name="UserName" placeholder="UserName" required="required" />');
            $(".login form").append('<input type="password" id="password" name="password" placeholder="Password" required="required" />');
            $(".login form").append(' <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Let me in   <i class="fas fa-sign-in-alt"></i></button>');
            $(".home").append('<a href="index.php" ><button class="btn btn-primary btn-block btn-large" name="login"><i class="fas fa-home fa-2x"></i></button></a>');


        });


    }

    isLogin();

    $("#choose").submit(function( event ) {

        event.preventDefault();

        var num = $("input[type=text][name=queue]").val();

        if (isNaN(num) || num < 0 || num > 999 || num === "") {
            alert("Input not valid");
        } else {

            request =  $.ajax({
                url: "controler.php",
                type: "POST",
                dataType:"json",
                data:{choose:num},

            });
            request.done(function(data) {

                location.replace("index.php");
            });
        }
    });



    $("#email").submit(function( event ) {

        event.preventDefault();

        var email = $("input[type=email][name=email]").val();


        if( !validateEmail(email) )alert("Please enter legal email");
        else  {

            $("input[type=email][name=email]").val("");

            request =  $.ajax({
                url: "index.php",
                type: "POST",
                dataType:"json",
                data:{email:email},

            });
            request.done(function(data) {



            });
        }
    });




    //    function myfunction(){
    //
    //        $("#img1").fadeIn(6000).fadeOut(6000);
    //        $("#img2").delay(12100).fadeIn(6000).fadeOut(6000);
    //        $("#img3").delay(24150).fadeIn(6000).fadeOut(6000);
    //        $("#img4").delay(36100).fadeIn(6000).fadeOut(6000,myfunction);
    //
    //    }
    //    myfunction();



    function validateEmail(email) {
        var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
//
//    $("#push").click(function(){
//        
//        console.log("PUSH");
//        Push.craete("Helloe world");
//    })


});








