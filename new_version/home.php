<!DOCTYPE html>
<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="main.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    </head>
    <body>
        <!-- <header>
            <h1>Representation in Video Games</h1>
        </header>
        <main>
            <h1>Gender</h1>
            <h2>Playable Characters</h2>
            <section class="pink">
                <h3>Female Characters</h3>
                <div>
                    <p>In action, RPG, shooter games...</p>
                    <p>45% of games provide players with male & female options</p>
                    <p>however, in games which feature a single protagonist</p>
                    <p>only <strong>4%</strong> have a female protagonist</p>
                </div>
                <div>
                    <p>A study split female characters into 3 of these types:
                        <ul>
                            <li>Sexualized</li>
                            <li>Scantily Clad</li>
                            <li>Vision of Beauty</li>
                        </ul>
                    </p>
                    <p>80% of all female characters represent at least <strong>one</strong> of these</p>
                    <p>25% represent <strong>all three</strong></p>
                </div>
            </section>
            <section class="blue">
                <h3>Male Characters</h3>
                <div>
                    <p>Hypermasculine</p>
                    <p>Unrealistic body proportions
                        <ul>
                            <li>Chests: 2 inches larger</li>
                            <li>Heads: 13 inches bigger</li>
                            <li>Waists: 5 inches wider</li>
                            <li>Hips: 7 inches wider</li>
                        </ul>
                    </p>
                    <p><strong>Male Protagonist Bingo</strong></p>
                    <img src="Male-protagonist-bingo.jpg"/>
                </div>
            </section>
            <h1>Gamers</h1>
            <section class="purple">
                <p>As of 2014, women comprise 48% of gamers</p>
                <p>60% of girls aged 11 to 18 prefer to play a character of their own gender,</p>
                <p>whereas only 35% of boys have a preference for playing only male characters</p>

                <h4>Genre</h4>
                <p>female gamers prefer to play games role-playing games, fantasy, and games which feature in-game communication</p>
                <p>male gamers prefer to play games that are action packed, 1st person shooters, which heavily feature competition</p>
            </section> -->
         
            <main>
                <header>
                    <br>
                    <br>
                    <h1 class="heading">Gender Representation in Video Games</h1>
                    <br>
                    <br>
                </header>
            <section>
            <a href="http://www.theesa.com/wp-content/uploads/2017/04/EF2017_FinalDigital.pdf" target="_blank"><p style="width:730px;"><span class="start">As of 2017 </span> women make up <span class="large">42%</span> of gamers and men <span class="large">58%</span> </p></a>
                <br>
                <div id="fourteen" class="people">
                        <?php 
                        //48 female; 52 male
                            for($i = 0; $i < 20; $i++){
                                echo "<i class='fas fa-female fa-3x'></i>"; //20 1st row
                            }
                            echo "<br>";
                            for($i = 0; $i < 20; $i++){
                                echo "<i class='fas fa-female fa-3x'></i>"; //20 2nd row
                            }
                            echo "<br>";
                            for($i = 0; $i < 2; $i++){
                                echo "<i class='fas fa-female fa-3x'></i>"; //8 3rd row
                            }
                            for($i = 0; $i < 18; $i++){
                                echo "<i class='fas fa-male fa-3x'></i>"; //12 3rd row
                            }
                            echo "<br>";
                            for($i = 0; $i < 20; $i++){
                                echo "<i class='fas fa-male fa-3x'></i>"; //20 4th row
                            }
                            echo "<br>";
                            for($i = 0; $i < 20; $i++){
                                echo "<i class='fas fa-male fa-3x'></i>"; //20 5th row
                            }
                            echo "<br>";

                            
                        ?>
                    </div>
                <br>
                <a href="http://www.theesa.com/wp-content/uploads/2014/10/ESA_EF_2014.pdf"><p style="width:440px;">a 6% drop in female gamers from 2014</p></a>
                <br>
                <br>
                <br>
                <div>
                    <a href="https://feministfrequency.com/2018/06/14/gender-breakdown-of-games-featured-at-e3-2018/"><p style="width:830px;">Although <span class="start">half of video games in 2018</span> now offer male and female protagonists</p></a>
                    <br>
                    
                    <div id="prot_pieChart">
                        <p>multiple protagonists</p>
                        <p>50%</p>
                        <p>50%</p>
                        <p>single protagonist</p>
                    </div>
                    <br>
                    <br>
                    <div class="graph-cont"> 
                        <h1>Protagonist Gender Distribution 2018</h1>
                        <span id="multi" class="barLabel">Multi</span>
                        <div class="bar bar1"> <span class="barText" style="left:210px;">50%</span></div> 
                        <span id="male" class="barLabel">Male</span>
                        <div class="bar bar2"> <span class="barText" style="left:110px;">24%</span></div>
                        <span id="na" class="barLabel">N/A </span>
                        <div class="bar bar3"><span class="barText" style="left:60px;">13%</span></div>
                        <span id="female" class="barLabel">Female</span>
                        <div class="bar bar4"> <span class="barText" style="left:40px;">8%</span></div>
                        <span id="ga" class="barLabel">Gender Ambigious </span>
                        <div class="bar bar5"><span class="barText" style="left:30px;">5%</span></div>
                    </div>
                    <br>
                    <a href="https://feministfrequency.com/2018/06/14/gender-breakdown-of-games-featured-at-e3-2018/"><p style="width:620px;"> only <span class="large">8%</span> of games feature women as sole protagonists</p></a>

                </div>
                <br>
                
                <div id="people">
                
                    <svg aria-hidden="true" data-prefix="fas" data-icon="female" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-female fa-w-8 fa-7x"><path fill="url(#my-cool-gradient)" d="M128 0c35.346 0 64 28.654 64 64s-28.654 64-64 64c-35.346 0-64-28.654-64-64S92.654 0 128 0m119.283 354.179l-48-192A24 24 0 0 0 176 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H80a24 24 0 0 0-23.283 18.179l-48 192C4.935 369.305 16.383 384 32 384h56v104c0 13.255 10.745 24 24 24h32c13.255 0 24-10.745 24-24V384h56c15.591 0 27.071-14.671 23.283-29.821z" class=""></path>
                        <defs>
                        <linearGradient id="my-cool-gradient"  x2="0" y2="1">
                            <stop offset="0%" stop-color="#1A3B91" />
                            <stop offset="6%" stop-color="#1A3B91" />
                            <stop offset="6%" stop-color="lightgray" />
                            <stop offset="40%" stop-color="lightgray" />
                            <stop offset="40%" stop-color="#E0277F" />
                            <stop offset="100%" stop-color="#E0277F" />
                        </linearGradient>
                        </defs>
                    </svg>
                    <div>
                        <div><div style="width:25px; height:25px; background:#1A3B91;"></div><p>male</p></div>
                        <div><div style="width:25px; height:25px; background:lightgray;"></div><p>no preference</p></div>
                        <div><div style="width:25px; height:25px; background:#E0277F;"></div><p>female</p></div>
                    </div>
                    <svg aria-hidden="true" data-prefix="fas" data-icon="male" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="svg-inline--fa fa-male fa-w-6 fa-9x"><path fill="url(#my-cool-gradient2)" d="M96 0c35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64S60.654 0 96 0m48 144h-11.36c-22.711 10.443-49.59 10.894-73.28 0H48c-26.51 0-48 21.49-48 48v136c0 13.255 10.745 24 24 24h16v136c0 13.255 10.745 24 24 24h64c13.255 0 24-10.745 24-24V352h16c13.255 0 24-10.745 24-24V192c0-26.51-21.49-48-48-48z" class=""></path>
                    <defs>
                        <linearGradient id="my-cool-gradient2"  x2="0" y2="1">
                            <stop offset="0%" stop-color="#1A3B91" />
                            <stop offset="39%" stop-color="#1A3B91" />
                            <stop offset="39%" stop-color="lightgray" />
                            <stop offset="85%" stop-color="lightgray" />
                            <stop offset="85%" stop-color="#E0277F" />
                            <stop offset="100%" stop-color="#E0277F" />
                        </linearGradient>
                        </defs>
                </svg>
                
                </div>
                <br>
                <a href="https://www.gdcvault.com/play/1021899/Curiosity-Courage-and-Camouflage-Revealing"><p style="width:960px;"><span class="large">60% </span>of girls between the ages of 11-18 <span class="start">prefer to play a character of their own gender<span></p>
                <p style="width:790px;">while only <span class="large">39%</span> of boys have a preference for playing male characters</p></a>
                <br>
                <br>
                <br>
            </section>
            <br>
            <br>
        </main>
        <footer>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="main.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
        <script src="https://leaverou.github.io/conic-gradient/conic-gradient.js"></script>
        </footer>
    </body>
</html>