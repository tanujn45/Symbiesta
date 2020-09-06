<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SYMBIESTA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="icon" type="image/png" href="img/favicon.png" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Dawning+of+a+New+Day&display=swap" rel="stylesheet">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/magnific-popup/magnific-popup.css">

    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
        #map {
            height: 500px;
        }

    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD77gHkOQVYKMK3NJzAJ3nXDNhI6E7pKjA"></script>

    <script type="text/javascript">
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 9,

                center: new google.maps.LatLng(22.7525282, 75.7930305),

                styles: [{
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    }]
                }, {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#c9323b"
                    }]
                }, {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#c9323b"
                    }, {
                        "weight": 1.2
                    }]
                }, {
                    "featureType": "administrative.locality",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "lightness": "-1"
                    }]
                }, {
                    "featureType": "administrative.neighborhood",
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "lightness": "0"
                    }, {
                        "saturation": "0"
                    }]
                }, {
                    "featureType": "administrative.neighborhood",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "weight": "0.01"
                    }]
                }, {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "weight": "0.01"
                    }]
                }, {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#c9323b"
                    }]
                }, {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#99282f"
                    }]
                }, {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "visibility": "off"
                    }]
                }, {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#090228"
                    }]
                }, {
                    "featureType": "road.highway.controlled_access",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#99282f"
                    }]
                }, {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#090228"
                    }]
                }, {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#99282f"
                    }]
                }, {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#99282f"
                    }]
                }, {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#090228"
                    }]
                }]
            };

            var mapElement = document.getElementById('map');

            var map = new google.maps.Map(mapElement, mapOptions);

            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(22.7525282, 75.7930305),
                map: map,
                title: 'SYMBIESTA!'
            });
        }

    </script>
</head>

<body>
    <div id="preloader"></div>

    <script src="js/confetti.min.js"></script>
    <script>
        if (screen.width > 1440) {
            num = 100;
        } else if (screen.width > 768 && screen.width <= 1440) {
            num = 70;
        } else {
            num = 40
        }
        confetti.start();
        confetti.maxCount = num;
        confetti.speed = 0;

    </script>
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <a href="#hero"><img src="img/suas_logo.png" alt="" title="" /><img></a>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Home</a></li>
                    <li><a href="#events">Events</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section id="hero">
        <div class="hero-container">
            <h1>Symbiesta</h1>
            <h2>Symbiosis University of Applied Sciences<br><span style="color: white;">CELEBRATING SKILLS</span><br>2K19</h2>
            <a href="http://bit.ly/Symbiesta2k19" class="btn-get-started">Register Now</a>
        </div>
    </section>

    <main id="main">

        <section id="events">
            <div class="container">
                <h1 class="events-title">EVENTS AND COMPETITIONS</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <a href="#debug" class="open-popup-link" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(7).png" alt="">
                            <p>Debug Adventure</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#treasure" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage.png" alt="">
                            <p>Treasure Hunt</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#line" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(5).png" alt="">
                            <p>Line Follower</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#coding" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(8).png" alt="">
                            <p>Coding Challenge</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(2).png" alt="">
                            <p>Retail Mela</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(4).png" alt="">
                            <p>Photo Walk</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#technical" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(1).png" alt="">
                            <p>Technical Quiz</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#management" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(3).png" alt="">
                            <p>Management Quiz</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#ad" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(9).png" alt="">
                            <p>Ad Mad</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6 open-popup-link">
                        <a href="#gaming" class="open-popup-link">
                            <img class="events-img" src="img/events/Webp.net-resizeimage%20(6).png" alt="">
                            <p>GAMING</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div id="debug" class="white-popup mfp-hide">
            <h1>DEBUGGING CHALLENGE</h1>
            <h2>MAIN DESCRIPTION AND RULES</h2>
            <ul>
                <li>This event is a debugging competition in the form of an adventure.</li>
                <li>Teams will have to debug programs to find their next clue, and solve that clue to go the next location, and debug a problem there and so on. </li>
                <li>The theme of the event will vary from riddles on aptitude to magic.</li>
                <li>Event will last from 2 hr 30 mins to 3 hrs.</li>
                <li>Problems will be written in C++.</li>
                <li>Teams can consist of 4 members.</li>
                <li>8 teams will be able to participate depending upon response.</li>
                <li>Time limits have to be followed and disrespecting the event organizers can lead to disqualification.</li>
                <li>Cash Prize Worth Rs. 3,000</li>
            </ul>
        </div>

        <div id="treasure" class="white-popup mfp-hide">
            <h1>TREASURE HUNT</h1>
            <h2>MAIN DESCRIPTION AND RULES</h2>
            <ul>
                <li>Each treasure hunt team should have 4-5 members atmost.</li>
                <li>Each team should announce a leader at the start of game or before.</li>
                <li>Each registered team will get a unique identification number and Color code: all the clues for the team will be represented by that color, tracing your teams' color which will lead you to next clue.</li>
                <li>Note a member should not possess any kind of internet, electronic transmission devices and gadgets.</li>
                <li>The clue has to be found in a particular order. The team cannot skip a clue. Skipping a clue leads to disqualification of the team.</li>
                <li>If a team is unable to solve a clue, after 8minutes of opening a clue can ask for 2 hints per clue from coordinators. Asking a clue will cause them a delay of 1min. </li>
                <li>No misbehavior, indecency will be tolerated with club members.</li>
                <li>After solving each clue handover it to the coordinator; There will be a midpoint where all the clues will be given to Anti-Cheating Team.</li>
                <li>No communication is allowed with other teams or anyone, communication only allowed with in your team and team coordinators.</li>
                <li>If you found other team's clue by chance never touch/tamper it. Tampering/Touching other team's clue will lead to disqualification and penalty.</li>
                <li>Do not search for clues in off-limit/restricted areas.</li>
                <li>An entire team must stay together. Do not split-up to find different clues. If a team splits it will be penalized and disqualified.</li>
                <li>All the means used by the teams should be fair, in case of any violation of the rules or any use of unfair means, teams will be disqualified and blacklisted with fines.</li>
                <li>All the clues of the teams are different and located at different places but the final destination i.e. the treasure is same. The team which finds the treasure first wins.</li>
                <li>Clues will be coded and known only to Event Head.</li>
                <li>All the activities, timestamps, progress will be watched and kept in record</li>
                <li>Cash Prize Worth Rs. 11,000.</li>
            </ul>
        </div>

        <div id="coding" class="white-popup mfp-hide">
            <h1>CODING CHALLENGE</h1>
            <H2>MAIN DESCRIPTION AND RULES</H2>
            <ul>
                <li>Coding competition will test students skills and aptitude in solving various domains of coding. </li>
                <li>First round will consist of a blind test, students will be required to write code without a display. </li>
                <li>Second round be will be a traditional coding challenge. Students will have to write optimized code within a time limit. </li>
                <li>Students can participate in teams of 2. </li>
                <li>Event will last for 1 to 1hr 30mins. </li>
                <li>Time limits have to be followed and disrespecting the event organizers can lead to disqualification.</li>
                <li>Cash Prize Worth Rs. 2,500.</li>
            </ul>
        </div>

        <div id="technical" class="white-popup mfp-hide">
            <h1>TECHNICAL QUIZ</h1>
            <h2>MAIN DESCRIPTION AND RULES</h2>
            <ul>
                <li>Far from classroom rote, challenge the techie inside you by taking this technical quiz and brainstorm with your team members to qualify the round.</li>
                <li>Technical quiz will test students on IT tech giants and current technology. </li>
                <li>Quiz will have 2 rounds.</li>
                <li>Students can participate in teams of 2.</li>
                <li>Event will last for 1 hr. </li>
                <li>Cash Prize Worth Rs. 2,500</li>
            </ul>
        </div>

        <div id="management" class="white-popup mfp-hide">
            <h1>MANAGEMENT QUIZ</h1>
            <h2>MAIN DESCRIPTION AND RULES</h2>
            <h3>Round 1: business and G.K questions</h3>
            <ul>
                <li>There will be questions in this round.</li>
                <li>For every correct answer 10 points.</li>
                <li>No carry forward point will be allotted.</li>
                <li>Unanswered questions will be for audience.</li>
            </ul>
            <h3>Round 2: personality and logo</h3>
            <ul>
                <li>Picture will be shown to the candidates</li>
                <li>Example: - picture of Steve jobs or a brand logo of Wipro.</li>
            </ul>
            <h3>Round 3: taglines and abbreviations:</h3>
            <ul>
                <li>Example: - Full form or abbreviation of BHEL- Bharat Heavy Electronics Limited.</li>
                <li>Example: - Tagline of daag acche hai ! surf excel.</li>li>
            </ul>
            <h3>Round 4: cryptography</h3>
            <ul>
                <li>Final round of the quiz</li>
                <li>In this round candidate will have some image or clue about the brand and they have to recognize it.</li>
            </ul>
            <h3>RULES AND REGULATIONS</h3>
            <ul>
                <li>This first round will be on paper.</li>
                <li>Only the pass candidate of the 1st round will attempt 2nd round and so on.</li>
                <li>No pass (unanswered questions will be answered by audience)</li>
                <li>Time given to answer one question </li>
                <li>Time taken by one round</li>
                <li>BOTH WILL BE NOTED</li>
            </ul>
        </div>

        <div id="gaming" class="white-popup mfp-hide">
            <h1>PUBG MOBILE</h1>
            <h2>MAIN DESCRIPTION AND RULES</h2>
            <ul>
                <li>STUDENTS HAVE TO BE PRESENT AT CAMPUS AT THE INFORMED TIME.</li>
                <li>Room will be made details would be shared through event head and not reaching at time will lead to disqualification.</li>
                <li>Decision given by event head would be final as he would even be spectating the ongoing match.</li>
                <li>The match would be played on Erangel map.</li>
                <li>There is no league only first 25 teams registered will play and winner will get the prize.</li>
                <li>No prize for kills and second team.</li>
                <li>Cash prize worth Rs. 4500.</li>
            </ul>
        </div>

        <div id="ad" class="white-popup mfp-hide">
            <h1>AD MANIAC RULES</h1>
            <h2>MAIN DESCRIPTION AND RULES</h2>
            <h3>Round 1: Product and poster demonstration</h3>
            <ul>
                <li>The participants are required to make a dummy model of the product.</li>
                <li>It should be handmade.</li>
                <li>It should be followed by digital poster explaining Product name, Price, Features, USP, Tagline, Target Audience.</li>
                <li>Poster should be made in advance on A4 size sheet.</li>
                <li>Duration 1:00 Minute</li>
            </ul>
            <h3>Round 2: The Aakashvaani Radio Show </h3>
            <ul>
                <li>The act has to be a radio advertisement (audio)</li>
                <li>Duration 2:00 Minute</li>
            </ul>
            <h3>Round 3: ROFL (The Funny Show)</h3>
            <ul>
                <li>The participants are supposed to play the act which has humor and relatable to the product.</li>
                <li>Duration 4:00 Minute</li>
            </ul>
            <h3>Round 4: Question and answer</h3>
            <ul>
                <li>Panel will ask questions based on the above three rounds</li>
            </ul>
            <h3>Rules and Regulations </h3>
            <ul>
                <li>Each team should have min 5 members and max 8 members.</li>
                <li>Products will be given by event coordinator through mail.</li>
                <li>Both the language i.e. English and Hindi can be used by the participants</li>
                <li>The act should be according to the product.</li>
                <li>Participants need to carry all the required props with themselves. </li>
                <li>The act should not contain any obscene word or any subject that hurts the feeling and benefits of a culture, region, religion etc.</li>
                <li>Disobedience of rules will be lead to disqualification.</li>
                <li>Coordinators will not be responsible for the security of participants personal belongings.</li>
                <li>Exceeding time limit in any of the round would lead to negative marking.</li>
                <li>Result will be announce on the same date of the event.</li>
            </ul>
            <h3>JUDGING CRITERIA:</h3>
            <p>Story line, Performance, Brand concept, Team coordination, Tagline/Jingle, Poster presentation, Use of props and creativity.</p>
        </div>

        <div id="line" class="white-popup mfp-hide">
            <h1>Line Following Robot</h1>
            <h2>CHALLENGE:</h2>
            <p>Build your own autonomous robot within the specified dimensions to achieve the maximum speed to beat other robots on the given track and reach the destination in minimum time. The robot must start behind the starting point and is considered to have crossed the finishing line if any part of the robot crosses it in a full lap of the course. The robot must follow the black line. The competition area has a special place defined for the robot's operation (hereafter COMPETITION FIELD).</p>
            <h2>The ROBOT:</h2>
            <ul>
                <li>The robot participating in the event must be autonomous.</li>
                <li>Changing of Robots will be strictly prohibited and if found to do so leads disqualification.</li>
                <li>Lego kits are strictly prohibited. </li>
                <li>The Robot must be non-destructive and non-harmful to humans and the track.</li>
                <li>Participants must arrange their own batteries.</li>
                <li>The Robot must not emit smoke or fire, leak, stain or soil.</li>
                <li>Power source must be on board.</li>
                <li>Robot must have sensors onboard to sense the black line marked on the arena.</li>
            </ul>
            <h2>Dimensions: </h2>
            <p>The following size limitations apply for each robot.</p>
            <ul>
                <li>Width - Not more than 30 centimetres</li>
                <li>Length - Not more than 30 centimetres</li>
                <li>Height - Not more than 30 centimetres</li>
            </ul>
            <p>Maximum weight must not exceed 1 kg (However a tolerance of 5% is acceptable)</p>
            <h2>Power Source:</h2>
            <p>The electric voltage anywhere in the machine should not be more then 12V DC at any point of time.</p>
            <h2>Race Track:</h2>
            <ul>
                <li>Width of the black line will not be more than 25mm.</li>
                <li>Arena Dimension: 20x10 Sq. Ft.</li>
                <li>Surface of the track will be white with black line marked on it.</li>
                <li>The track may contain crossed, curved or discontinues black lines, and no acute angles.</li>
            </ul>
            <h2>Gameplay:</h2>
            <p>Pre-Game setup: </p>
            <p>Before starting the competition, each team will get 5 mins to calibrate the robot and make a trial/testing run. All the preparations must be done during this time (adjusting the sensors, reprogramming the robot etc).</p>
            <p>Game Zone: </p>
            <p>An area around the field will be designated as the GAME ZONE. No one is allowed inside the game zone except the contesting team and the referees.</p>
            <p>There will be two rounds i.e. Knockout round and Final round.</p>
            <p>Single Round: </p>
            <ul>
                <li>All the teams need to finish the track in the given time to qualify for the final round.</li>
                <li>Any team failing to finish the track will lead to disqualification.</li>
                <li>Any hand-touch or robot leaving the line will count as a foul.</li>
                <li>The teams will get a limit of 3 fouls. Each foul will lead to a penalty of 5 seconds. Any teams with more than 3 fouls will be disqualified immediately. </li>
                <li>At any foul, the robot must be re-positioned immediately back at the last checkpoint.</li>
                <li>The COMPETITION CLOCK (maximum access time) will keep running during all fouls.</li>
                <li>Single run will be conducted for each qualified team with no fouls allowed.</li>
                <li>Any robot distracting from the line will be disqualified immediately.</li>
                <li>Teams with the minimum runtime will be nominated as the winner of the competition. </li>
            </ul>
            <p>Competition Scoring:</p>
            <ul>
                <li>The only criteria to score are the final Runtime achieved (including the penalties in Knockout round) during each rounds of the competition. Teams with the minimum Runtime will get maximum points.</li>
            </ul>
            <h2>General Rules:</h2>
            <p>For Teams:</p>
            <ul>
                <li>Maximum of 4 members are allowed in a team.</li>
                <li>Different Teams from the same school/college must use their own individual Robots for the competition.</li>
                <li>The robot should follow the robot specifications provided. Any deviation from the mentioned specifications will lead to disqualification.</li>
                <li>The Race track is subject to change before the commencement of any round.</li>
                <li>The decision of the judges will be final and abiding. Argument with judges in any form will lead to the disqualification of the team right-away.</li>
            </ul>
            <p>Code of Conduct: Fair Play</p>
            <ul>
                <li>Robots that cause deliberate interference with other robots or damage to the track will be disqualified.</li>
                <li>Humans that cause deliberate interference with robots or damage to the track will be disqualified.</li>
                <li>It is expected that the aim of all teams is to play a fair and clean game.</li>
            </ul>

        </div>

        <section id="sponsors">
            <div class="container">
                <h1 class="sponsors-title">Come and spend some time with us at <span style="color: red">Symbiesta</span>!</h1>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h1 class="contact-title">CONTACT</h1>
                <div id="map"></div>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-4">
                        <div class="info">
                            <div>
                                <i class="fa fa-map-marker"></i>
                                <p>Symbiosis University of Applied Sciences, Super Corridor, Near Airport, Bada Bangarda, Indore, Madhya Pradesh 453112 </p>
                            </div>

                            <div class="email">
                                <i class="fa fa-envelope"></i>
                                <p>symbiesta@gmail.com</p>
                            </div>

                            <div>
                                <i class="fa fa-phone"></i>
                                <p>+91 97636 76061</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-8">
                        <form class="contact-form-area" action="contactform.php" method="get">
                            <input type="text" name="name" placeholder="NAME">
                            <input type="email" name="email" placeholder="EMAIL">
                            <textarea name="content" cols="30" rows="10" placeholder="MESSAGE"></textarea>
                            <button class="contact-button">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer">
        <div class="container">
            <div style="text-align: center;">
                Made with <i style="color: red;" class="fa fa-heart"></i> by CODEC
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="js/main.js"></script>

    <script>
        (function($) {
            $(document).ready(function() {
                $('.open-popup-link').magnificPopup({
                    type: 'inline',
                    preloader: false,
                    midClick: true,
                    fixedBgPos: true,
                    fixedContentPos: true,
                    mainClass: 'mfp-with-zoom'
                });
            });
        })(jQuery);
        
        $(document).ready(function() {
            $("a").on('click', function(event) {
                    
                if (this.hash !== "" && (this.hash == "#events" || this.hash == "hero" || this.hash == "#contact")) {
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });

    </script>
</body>

</html>
