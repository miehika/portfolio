<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miehika Sahu | Graphic Designer</title>
    <link rel="icon" href="media/favicon.webp" type="image/x-icon">


    <link rel="stylesheet" href="mincss/home.min.css">
    <link rel="stylesheet" href="mincss/headerFooter.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YMSC5NYGQ5"></script>


</head>

<body>
    <header>
        <div class="navbar__scroll" id="hidden">
            <div class="header__container" id="header__container">
                <div class="left__menu">

                    <a href="home"><img class="logo__image" src="media/logo.webp" alt=""></a>
                    <a style="text-decoration: none;" href="home">
                        <h1 class="logo__name">MIEHIKA SAHU</h1>
                    </a>
                </div>
                <div class="menu__container">
                    <img id="menu__open__cta" src="media/menu.png" width="50px" style="margin-right: 7.5vw;margin-top: 5px;" alt="">
                </div>
                <nav id="right__menu">
                    <img id="menu__close__cta" src="media/close.png" alt="">


                    <ul>
                        <li><a id="right__menu__link" href="#work">Work</a></li>
                        <li><a id="right__menu__link" href="about">About</a></li>
                        <li><a id="right__menu__link" href="#footer">Contact Us</a></li>
                        <li id="copyright">&copy; 2021, Powered by<br> <a href="https://hbdesigns.in">HB DESIGNS</a></li>
                        <li><a target="_blank" href="https://www.behance.net/miehika_s"><img id="menu__socials" src="media/behance.webp" alt=""></a><a target="_blank" href="https://www.instagram.com/miehikasahu/"><img id="menu__socials" src="media/instagram.webp" alt=""></a><a target="_blank" href="https://www.linkedin.com/in/miehikasahu/"><img id="menu__socials" src="media/linkedin.webp" alt=""></a></li>
                    </ul>

                </nav>

            </div>
        </div>



    </header>
    <div class="container" style="height:350px;background-color: #ffc20c;display: flex;flex-direction:column;justify-content:center;padding-top:15vw;padding-bottom:10vw;font-family:'Montserrat', sans-serif;">


        <?php
        error_reporting(0);
        $email = $_POST["email__id"];
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo ('<img src="media/error.svg" alt="" style="height:10vw"><h2 style="font-size:3vw;margin-left:auto;margin-right:auto;"> Invalid Email Address, Retry!</h2><h4 style="font-size:2.5vw;margin-left:auto;margin-right:auto;color:#464646;">Please feel free to mail us at <a style="color:#1e1e1e;" href="mailto:hello@miehikasahu.com">hello@miehikasahu.com</a></h4>');
        } else {
            $myfile = fopen("mail.html", "r") or die("Unable to open file!");
            $messagecontent = fread($myfile, filesize("mail.html"));
            fclose($myfile);

            // Multiple recipients
            $to = $email; // note the comma

            // Subject
            $subject = 'Thanks for reaching out! - Miehika Sahu';

            // Message
            $message = $messagecontent;
            // To send HTML mail, the Content-type header must be set
            $headers[] = 'MIME-Version: 1.0';
            $headers[] = 'Content-type: text/html; charset=iso-8859-1';

            // Additional headers
            $headers[] = 'FROM: Miehika Sahu <hello@miehikasahu.com> ';
            $headers[] = 'Bcc:hello@miehikasahu.com , sahumiehika@gmail.com ';
            $headers[] = 'Reply-To:hello@miehikasahu.com';
            // Mail it

            if (@mail($to, $subject, $message, implode("\r\n", $headers))) {
                echo ('<img src="media/mailsent.svg" alt="" style="height:20vw"><h2 style="font-size:3vw;margin-left:auto;margin-right:auto;"> Message delivered!</h2><h4 style="font-size:2.5vw;margin-left:auto;margin-right:auto;color:#464646;">We will get back to you soon.</h4>');
            } else {
                echo ('<img src="media/error.svg" alt="" style="height:10vw"><h2 style="font-size:3vw;margin-left:auto;margin-right:auto;"> Unfortunately, Your message was unable to deliver.</h2><h4 style="font-size:2.5vw;margin-left:auto;margin-right:auto;color:#464646;">Please feel free to mail us at <a style="color:#1e1e1e;" href="mailto:hello@miehikasahu.com">hello@miehikasahu.com</a></h4>');
            }
        }
        ?>
        <a href="home" style="background-color: #1a1a1a;padding: 1vw 2vw;font-size: 1.8vw;color: #fffefe;text-decoration: none;margin-left:auto;margin-right:auto;margin-bottom:10px;border-radius: 100px;">RETURN TO HOME</a>
    </div>
    <footer id="footer">
        <div class="footer__container">

            <div class="contact__form__container">
                <h3>Get in touch!</h3>
                <form class="contact__form" action="contact" method="POST">
                    <label for="email__id">Email Id</label>
                    <input type="text" name="email__id" id="email__id">
                    <input type="submit" value="Send!">

                </form>
            </div>

            <div class="social__container">
                <div>
                    <p class="copyright__container">&copy;2021, Powered by <br><a href="https://hbdesigns.in">HB DESIGNS</a></p>

                </div>
                <div>
                    <br><br>
                    <a target="_blank" href="https://www.behance.net/miehika_s"><img src="media/behance.webp" alt=""></a>
                    <a target="_blank" href="https://www.instagram.com/miehikasahu/"><img src="media/instagram.webp" alt=""></a>
                    <a target="_blank" href="https://www.linkedin.com/in/miehikasahu/"><img src="media/linkedin.webp" alt=""></a>
                </div>

            </div>
    </footer>

    <script>
        openBtn = document.getElementById("menu__open__cta");
        closeBtn = document.getElementById("menu__close__cta");
        nav = document.getElementById("right__menu");
        openBtn.addEventListener('click', () => {
            nav.style.display = "block";
        })
        closeBtn.addEventListener('click', () => {
            nav.style.display = "none";
        })
    </script>

</body>

</html>