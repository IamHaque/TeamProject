<!DOCTYPE html>
<html lang="">
    <head>
       
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
        <title>Mass Bunk Planner</title>
        
<!--    Font Families    -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans|Source+Sans+Pro" />
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Times+New+Roman|Delius" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Sans|Amatic+SC" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo|Lora" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway|Lobster" />
        
<!--     Style Sheets    -->
        <link rel="stylesheet" href="CSS/bootstrap-grid.css" type="text/css">
        <link rel="stylesheet" href="CSS/index.css" type="text/css">
        
    </head>

    <body>
        
        <div class="header">
            <div class="loginDiv selected">Login</div>
            <div class="registerDiv">Register</div>
        </div>
        
        <div class="login">
            <form action="#" method=post class="form" autocomplete="off">
                <div class="input-effect">
                    <input class="effect" type="email" placeholder="" name="email">
                    <label>Placeholder</label>
                    <span class="focus-border"></span>
                </div>
                <div class="input-effect">
                    <input class="effect" type="password" placeholder="" name="password">
                    <label>Placeholder</label>
                    <span class="focus-border"></span>
                </div>
                <input type="submit" value="Login" class="button">
            </form>
        </div>
        <div class="contact">Contact Us</div>
        
        <script src="JS/jquery.min.js"></script>
        <script>
            $(window).load(function() {
                var height = $(window).height();
                var width = $(window).width();
                $("title").html(width + " X " + height);
                
                $(".input-effect input").val("");

                $(".input-effect input").focusout(function() {
                    if ($(this).val() != "") {
                        $(this).addClass("has-content");
                    } else {
                        $(this).removeClass("has-content");
                    }
                });
            });
            $(window).resize(function() {
                var height = $(window).height();
                var width = $(window).width();
                $("title").html(width + " X " + height);
            });
        </script>
    </body>
</html>