<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Entry</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/blog.css">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Playfair:ital,opsz,wght@0,5..1200,300..900;1,5..1200,300..900&display=swap" rel="stylesheet">

    <script src="./js/clear.js"></script>
    <script src="./js/post.js"></script>
</head>
<body>

<!-- <script src="../azkashif-phase2/addEntry.js"></script> -->



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

                        <div class="headeraddentry">
                            <li><a href="./addEntry.php">Add Entry</a></li>
                        </div>
                        </ul>
                    </nav>
                </div>
            </header>
        </div>

        <div class="gridarticle">
            <article>
                <div class="addblog">
                    <form method="post" action="addPost.php">
                        <fieldset>
                            <legend>Add Blog</legend>
                            <p>
                                <input type="text" name="title" placeholder="Title" id="mytitle">
                            </p>
                            <br>
                            <p>
                                <textarea id="mytext" name="blogpost" placeholder="Enter your text here..."></textarea>                       
                            <br>

                            <input type="submit" value="Post" id="POSTBTN">
                            <input type="submit" value="Clear" id="CLEARBTN">
                            
                        </fieldset>
                    </form> 
                </div>
            </article>
        </div>

        <div class="gridaside">
            <aside>
                <form method="post" action="logout.php" id="loginform">
                    <fieldset>
                        <legend>Welcome, Aafreen</legend>
                        
                        <input type="submit" value="Logout">
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