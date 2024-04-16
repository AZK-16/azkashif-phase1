<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/aboutme.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

</head>
<body>

<!-- <script src="../azkashif-phase2/addEntry.js" defer></script> -->

<div class="grid"> 
<div class="gridheader">
    <header>
        <div class="headerelements">

            <nav>
                <ul id="headertitles">
                    <div class="headername">
                        <li><a href="./index.php">Aafreen Zainab Kashif</a></li>
                    </div>

                    <div class="headerabout">
                        <li><a href="./aboutme.php">About Me</a></li>
                    </div>

                    <div class="headerachieve">
                        <li><a href="./skillsandexperience.php">Achievements & Experiences</a></li>
                    </div>

                    <div class="headerskills">
                        <li><a href="./skillsandexperience.php">Skills</a></li>
                    </div>

                    <div class="headereducation">
                        <li><a href="./education.php">Education</a></li>
                    </div>

                    <div class="headerprojects">
                        <li><a href="./projects.php">Projects</a></li>
                    </div>

                    <div class="headerblog">
                        <li><a href="./blog.php">View Blog</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </header>
</div>

<div class="gridarticle">
    <article>
        <div class="articleaboutme">
            <div class="articlephotoofme">
                <figure>
                    <img src="./images/linkedin profile pic.jpg" alt="">
                </figure>
            </div>

            <div class="articledescribeme">
                <section>
                    <h2>About Me</h2>
                    <br>
                   <p>I am currently a Computer Science student at Queen Mary University of London. 
                    <span>My love for creating digital art and interest in experimenting with technology 
                    motivates me to become a UI designer.</span> Whilst continuing my Computer Science
                    degree, I will expand my knowledge surrounding the latest technologies 
                    such as Figma to understand how to <span>produce applications with thoughtful and accessible 
                    designs for seamless user experiences.</span>
                   </p>
                   <br>
                   <p>Fun fact - I made this website's geometric pattern with Clip Studio Paint!</p>
                </section>
            </div>
        </div>
    </article>
</div>

<div class="gridaside">
    <aside>
        <form method="post" action="login.php" id="loginform">
            <fieldset>
                <legend>Log in to post a blog!</legend>
                <p>
                    <input type="email" name="email" placeholder="Email">
                </p>
                <br>
                <p>
                    <input type="password" name="password" placeholder="Password">
                </p>
                <br>
                <input type="submit" value="Login">
            </fieldset>
        </form>
    </aside>
</div>

<div class="gridfooter">
    <footer>
        <ul>
            <div class="footeremail">
                <li>Contact Me:</li>
            </div>
            <div class="footeremail">
                <li>Email: aafreenz@hotmail.co.uk</li>
            </div>
            <div class="footerlinkedin">
                <li><a href="https://www.linkedin.com/in/aafreen-zainab-kashif-711188267/" target="_blank">My LinkedIn Profile</a></li>
            </div>
            <div>
                <li><a href="https://github.com/AZK-16" target="_blank">My GitHub</a></li>
            </div>
        </ul>
    </footer>
</div>
</div>

</body>
</html>