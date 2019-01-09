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

        /* Create a Parallax Effect */
        .bgimg-1, .bgimg-2{
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* First image (Logo. Full height) */
        .bgimg-1 {
            background-image: url('./img/pro.JPG');
            min-height: 100%;
        }

        /* Second image (Portfolio) */
        .bgimg-2 {
            background-image: url("./img/contact.jpg");
            min-height: 400px;
        }

        .bgexphead {
            background-position: center;
            background-repeat: no-repeat;
            background-image: url("./img/pro.JPG");
            min-height: 400px;
        }

        .bgskillhead {
            background-position: center;
            background-repeat: no-repeat;
            background-image: url("./img/skill.JPG");
            min-height: 400px;
        }

        .bgedu {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("./img/edu.JPG");
            min-height: 400px;
        }

        .bgwork {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("./img/work.jpg");
            min-height: 400px;
        }

        .bgorg {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url("./img/org.JPG");
            min-height: 400px;
        }

        .w3-wide {letter-spacing: 10px;}
        .w3-hover-opacity {cursor: pointer;}

        /* Turn off parallax scrolling for tablets and phones */
        @media only screen and (max-device-width: 1024px) {
            .bgimg-1, .bgimg-2, .bgimg-3 {
                background-attachment: scroll;
            }
        }
    </style>
    <body>
        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
            <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
            <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
            <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
            <a href="#" class="w3-bar-item w3-button">SEARCH</a>
        </div>

        <!-- First Parallax Image with Logo Text -->
        <div class="bgimg-1 w3-display-container" style="background-size: cover" id="home">
            <div class="w3-main w3-center">
                <div class="w3-container" style="padding: 0px !important">
                    <div class="w3-row">
                        <div class="w3-row">
                            <a href="./index">
                                <div class="w3-col l4 m4 s12 w3-padding-32" style="background-color: rgba(0,0,0,0.7); color: #fff;">
                                    <h1 class="w3-jumbo" style="font-family: 'Megrim', cursive;">
                                        <b>B U B A</b>
                                    </h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w3-left w3-bottom w3-padding-32" style="position: absolute;">
                <div class="w3-col l4 s12 m8 w3-padding" style="background-color: rgba(0,0,0,0.7); color: #fff;">
                    <h1>Level 2 - Resume</h1>
                </div>
            </div>
        </div>

        <!-- Container (About Section) -->
        <div class="w3-content w3-container w3-padding-64" id="profile">
            <h1 class="w3-center">PROFILE</h1>
            <p style="text-align: justify;">I am Buba, an information system and technology student at Institut Teknologi Bandung. I am interested in business analysis, system analysis, graphic design, and front-end web development. INTJ-T is my type of personality based on MBTI test and I love instrumental music. I spent my spare time by playing piano, violin, or reading science and technology articles on the internet.</p>
            <p>Wanna know me more? Let's eat together and talk about the future of the world.</p>
            <div class="w3-row">
                <div class="w3-col m6 s12 w3-center w3-padding-large">
                    <h2><b><i class="w3-margin-right"></i>Mahbub Haq Al Farisi</b></h2><br>
                    <img src="./img/buba.jpg" class="w3-card w3-hover-opacity" style="width:85%; border-radius: 50%;">
                </div>

                <div class="w3-col m6 s12 w3-padding-large">
                    <h3><b>Full Name:</b></h3><p>Mahbub Haq Al Farisi</p>
                    <h3><b>Nickname:</b></h3><p>Mahbub/Buba</p>
                    <h3><b>Age:</b></h3><p>21</p>
                    <h3><b>Location:</b></h3><p>Bandung, Indonesia</p>
                    <h3><b>Education:</b></h3><p>7th semester, Bachelor Degree in Information Systems and Technology, Institut Teknologi Bandung</p>
                </div>
            </div>
        </div><!-- 

        <div class="w3-row w3-center w3-dark-grey w3-padding-16">
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">14+</span><br>
                Partners
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">55+</span><br>
                Projects Done
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">89+</span><br>
                Happy Clients
            </div>
            <div class="w3-quarter w3-section">
                <span class="w3-xlarge">150+</span><br>
                Meetings
            </div>
        </div> -->

        <!-- Second Parallax Image with Experiences Text -->
        <div class="bgexphead w3-display-container w3-opacity-min">
          <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">EXPERIENCES</span>
          </div>
        </div>

        <div id="educations">
            <div class="w3-row">
                <div class="w3-col m6 s12 w3-center bgedu w3-hide-small">
                    </hr>
                </div>

                <div class="w3-col m6 s12 w3-padding-large">
                    <h1 class="w3-center">Educations</h1>
                    <h4><b>Bandung Institute of Technology (ITB)</b></h4>
                    <p>Bachelor Degree</p>
                    <p>Information Systems and Technology</p>
                    <p>August 2014 - Present</p>
                    <hr>
                    <h4><b>Indonesia Android Kejar</b></h4>
                    <p>Beginner Class</p>
                    <p>September 2015 - November 2015</p>
                </div>
            </div>
        </div>

        <div id="works">
            <div class="w3-row">
                <div class="w3-col m6 s12 w3-padding-large">
                    <h1 class="w3-center">Works</h1>
                    <h4><b>TrueMoney Indonesia</b></h4>
                    <p>Product Owner Intern</p>
                    <p>May 2017 - August 2017</p>
                    <hr>
                    <h4><b>School of Electrical Engineering and Informatics ITB</b></h4>
                    <p>IST Project Management Course Assistant Coordinator</p>
                    <p>January 2017 - May 2017</p>
                </div>

                <div class="w3-col m6 s12 w3-center bgwork w3-hide-small">
                    </hr>
                </div>
            </div>
        </div>

        <div id="organizations">
            <div class="w3-row bgorg" style="background-color: #f0f0f0">
                <div class="w3-col m6 s12 w3-center bgorg w3-hide-small" style="visibility: hidden;">
                    </hr>
                </div>
                <div class="w3-col m6 s12 w3-padding-large w3-white">
                    <h1 class="w3-center">Organizations</h1>
                    <h4><b>IEEE ITB Student Branch</b></h4>
                    <p>Head of Design Team</p>
                    <p>March 2017 - Present</p>
                    <hr>
                    <h4><b>Himpunan Mahasiswa Informatika ITB</b></h4>
                    <p>Head of Internal Publication</p>
                    <p>January 2017 - Present</p>
                    <p>Creative Staff</p>
                    <p>October 2015 - December 2016</p>
                    <hr>
                    <h4><b>ITB Student Orchestra</b></h4>
                    <p>Member's Representative Council</p>
                    <p>October 2014 - Present</p>
                    <hr>
                    <h4><b>Muslim STEI ITB</b></h4>
                    <p>Head of Creative</p>
                    <p>January 2016 - February 2017</p>
                    <hr>
                    <h4><b>Keluarga Ganesha Mahasiswa Cirebon ITB</b></h4>
                    <p>Chief of Communication and Information</p>
                    <p>August 2015 - August 2016</p>
                </div>
            </div>
        </div>

        <!-- Second Parallax Image with Experiences Text -->
        <div class="bgskillhead w3-display-container w3-opacity-min">
          <div class="w3-display-middle">
            <span class="w3-xxlarge w3-text-white w3-wide">sKILLS & PROJECTS</span>
          </div>
        </div>

        <!-- Container (Skills Section) -->
        <div class="w3-container w3-padding-64" style="background-color: #dee0de" id="skills">
            <div class="w3-content">
                <h2 class="w3-center w3-padding-16">LANGUAGE SKILLS</h2>
                <p class="w3-wide"><i class="fa fa-language"></i>Indonesian</p>
                <p>Native or bilingual proficiency</p>
                <div class="w3-light-grey">
                    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:100%"></div>
                </div>
                <p class="w3-wide"><i class="fa fa-language"></i>English</p>
                <p>Professional working proficiency</p>
                <div class="w3-light-grey">
                    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%"></div>
                </div>
                <p class="w3-wide"><i class="fa fa-language"></i>Japanese</p>
                <div class="w3-light-grey">
                    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:10%"></div>
                </div>
                <p class="w3-wide"><i class="fa fa-language"></i>Korean</p>
                <div class="w3-light-grey">
                    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:3%"></div>
                </div>
                <p class="w3-wide"><i class="fa fa-language"></i>Sundanese</p>
                <div class="w3-light-grey">
                    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:70%"></div>
                </div>
                <p class="w3-wide"><i class="fa fa-language"></i>Javanese</p>
                <div class="w3-light-grey">
                    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:60%"></div>
                </div>
                </br>
            </div>
        </div>

        <!-- Container (Portfolio Section) -->
        <div class="w3-content w3-container w3-padding-64" id="portfolio">
            <h3 class="w3-center">MY WORK</h3>
            <p class="w3-center">Here are some of my latest project</p><br>

            <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
            <div class="w3-row-padding w3-center">
                <div class="w3-col m6">
                    <a href="https://github.com/mahbubalfarisi/kbbi_project" style="text-decoration: none;">
                        <img src="./img/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Keluarga Batik Betawi Indonesia">
                        <h4>Keluarga Batik Betawi Indonesia</h4>
                    </a>
                </div>

                <div class="w3-col m6">
                    <a href="http://ysfmuchtar.com/bandungberbagi/" style="text-decoration: none;">
                        <img src="./img/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bandung Berbagi">
                        <h4>Bandung Berbagi</h4>
                    </a>
                </div>
            </div>
        </div>

        <!-- Third Parallax Image with Portfolio Text -->
        <div class="bgimg-2 w3-display-container w3-opacity-min">
          <div class="w3-display-middle">
             <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
          </div>
        </div>

        <!-- Container (Contact Section) -->
        <div class="w3-content w3-container w3-padding-64" id="contact">
            <div class="w3-row w3-padding-32 w3-section">
                <div class="w3-col m12 w3-container">
                    <div class="w3-col m12 w3-panel">
                        <div class="w3-large w3-margin-bottom">
                            <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Bandung, Indonesia<br>
                            <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>Email: contact@mahbubalfarisi.cf<br>
                        </div>
                        <p>Let's eat some delicious food together :)</p>
                        <form enctype="text/plain" method="get" action="mailto:mahbubalfarisi@gmail.com" target="_blank">
                            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                                </div>
                                <div class="w3-half">
                                    <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                                </div>
                            </div>
                            <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                            <button class="w3-button w3-black w3-section" type="submit" value="Send">
                                Send to Buba
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="w3-center w3-black w3-padding-8">
            <div class="w3-row">
                <div class="w3-col m4">
                    <p>Copyright 2017</p>
                </div>
                <div class="w3-col m4">
                    <div class="w3-col m4">
                        <a href="./index"  class="w3-button" style="background-color: rgb(0,140,140); text-decoration: none;"><i style=" font-size: 20px;" class="fa fa-chevron-left"></i> Level 1</a>
                    </div>
                    <div class="w3-col m4">
                    <a href="#home" class="w3-button" style="background-color: rgb(0,140,140);"><i class="fa fa-chevron-up w3-margin-right"></i>To the top</a>
                    </div>
                    <div class="w3-col m4">
                        <a href="./personal" class="w3-button" style="background-color: rgb(0,140,140); text-decoration: none; margin-left: 10px;">Level 3 <i style=" font-size: 20px;" class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <div class="w3-col m4">
                    <p>Designed and Developed by <a href="https://www.linkedin.com/in/mahbub-haq-al-farisi/" style="text-decoration: none;">BUBA (myself)</a></p>
                </div>
            </div>
        </footer>

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