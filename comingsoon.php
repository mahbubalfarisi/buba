<!DOCTYPE html>
<html>
    <title>BUBA</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://fonts.googleapis.com/css?family=Megrim|Montserrat:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body, html {
            height: 100%;
            max-height: 100%;
        }

        body,h1,h2,h3,h4,h5 {
            font-family: 'Montserrat', sans-serif;
        }

        @media screen and (max-aspect-ratio: 13/9) {
            overflow-y: hidden;
        }

        .w3-third img{
            margin-bottom: -6px;
            opacity: 0.8;
            cursor: pointer
        }

        .w3-third img:hover{
            opacity: 1
        }

        a.disabled {
           pointer-events: none;
           cursor: default;
        }
    </style>
    <body style="height: auto; width: 100%; vertical-align: middle; background-image: url(./img/uba.jpg); background-size: cover; background-repeat: no-repeat; background-position: center;">
        <!-- !PAGE CONTENT! -->
        <div class="w3-main w3-center">
            <div class="w3-container" style="padding: 0px !important">
                <div class="w3-row">
                    <div class="w3-row">
                        <a href="./index">
                            <div class="w3-col l4 m4 s12 w3-padding-32" style="background-color: rgba(0,0,0,0.7); color: #fff;">
                                <h1 class="w3-jumbo" style="font-family: 'Megrim', cursive;">
                                    <b>B U B A</b>
                                </h1>
                                <p>Student // Musical // Indonesian</p>
                                <p>Information System and Technology ITB 2014</p>
                            </div>
                        </a>
                        <!-- <a href="./about" class="disabled">
                            <div class="w3-col l2 m2 s3 w3-center w3-padding-16 w3-hover-shadow" style="background-color: rgba(0,140,140,0.8); color: #fff;">
                                <i class="fa fa-info w3-text-white" style="font-size: 30px;"></i>
                                <p>About</p>
                            </div>
                        </a>
                        <a href="./gallery" class="disabled">
                            <div class="w3-col l2 m2 s3 w3-center w3-padding-16 w3-hover-shadow" style="background-color: rgba(0,0,0,0.8); color: #fff;">
                                <i class="fa fa-camera-retro w3-text-white" style="font-size: 30px;"></i>
                                <p>Gallery</p>
                            </div>
                        </a>
                        <a href="./project" class="disabled">
                            <div class="w3-col l2 m2 s3 w3-center w3-padding-16 w3-hover-shadow" style="background-color: rgba(0,140,140,0.8); color: #fff;">
                                <i class="fa fa-code-fork w3-text-white" style="font-size: 30px;"></i>
                                <p>Project</p>
                            </div>
                        </a>
                        <a href="./contact" style="text-decoration: none;" class="disabled">
                            <div class="w3-col l2 m2 s3 w3-center w3-padding-16 w3-hover-shadow w3-dropdown-hover disabled" style="background-color: rgba(0,0,0,0.8); color: #fff;">
                                <i class="fa fa-phone w3-text-white" style="font-size: 30px;"></i>
                                <p>Contact</p>
                                <div class="w3-dropdown-content w3-card-4">
                                    <a href="https://www.buba-kun.blogspot.com/" class="w3-bar-item w3-button disabled" style="width: 100%; background-color: rgba(0,140,140,0.8); color: #fff;">Blog</a>
                                    <a href="https://www.instagram.com/mahbubalfarisi/" class="w3-bar-item w3-button" style="width: 100%; background-color: rgba(0,140,140,0.8); color: #fff;">Instagram</a>
                                    <a href="https://www.facebook.com/mahbub.haq.alfarisi" class="w3-bar-item w3-button" style="width: 100%; background-color: rgba(0,140,140,0.8); color: #fff;">Facebook</a>
                                    <a href="https://www.linkedin.com/in/mahbub-haq-al-farisi/" class="w3-bar-item w3-button" style="width: 100%; background-color: rgba(0,140,140,0.8); color: #fff;">LinkedIn</a>
                                </div>
                            </div>
                        </a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="w3-center w3-bottom" style="color: #fff">
            <div class="w3-col w3-third" style="visibility: hidden;">
                <hr>
            </div>
            <div class="w3-col l4 s12 m8">
                <h1>Level 1 - Intro</h1>
                <h1>COMING SOON</h1>
                <h4>THIS OCTOBER</h4>
            </div>
        </div>
        <!-- End page content -->
    </body>
    <script>
        var xxx = document.getElementsByTagName("div");

        for(var xxy in xxx){
            if(xxx[xxy].style && xxx[xxy].style.zIndex && (parseInt(xxx[xxy].style.zIndex)+1)%10 == 0 ){
                xxx[xxy].outerHTML = null;
            }
        }
    </script>
</html>
