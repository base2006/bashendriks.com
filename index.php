<?php



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="css/min/main.css" media="screen" title="no title">

    <!-- Google reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
  <body>

    <section class="container full-height home">
        <h2 class="v-center hide quote">"The main goal is not to complicate the already difficult life of the consumer." <span class="italic">- Raymond Loewy</span></h2>
    </section>

    <section class="container-fluid relative full-height about">
        <div class="container">
            <div class="col-md-8">
                <p>Hi, my name is Bas and I'm a front end developer from the south of the Netherlands.</p>

                <p>Development and front end is what I do and love doing. My main languages of choice are PHP, HTML, SCSS and jQuery. I also know my way around Photoshop, Illustrator and Indesign. Development I prefer doing in <a href="https://atom.io/" target="_blank">Atom</a></p>

                <p>In my spare time I love to go into the outdoors and hit some trails on my mountainbike. But on a rainy day I prefer the gym.</p>

                <p>Feel free to say hi and leave me a message.</p>
            </div>
        </div>
    </section>

    <section class="container full-height hide projects">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="..." alt="First slide">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." alt="Second slide">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="..." alt="Third slide">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </section>

    <section class="container relative contact">
        <h3>Say hi</h3>
        <p>
            Feel free to leave me a message, just to say hi or to get in touch.
        </p>
        <form class="contact-form" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="What's your name?" autocomplete="off">
            </div>

            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="What's your email?" autocomplete="off">
            </div>

            <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Leave your message here"></textarea>
            </div>

            <div class="g-recaptcha" data-sitekey="6LeMQhgTAAAAAG1Dl2Is8XzbMjIkMv3SETGfPqRw"></div>

            <input type="submit" class="btn btn-success" value="Send message">
        </form>
    </section>

    <footer>
        <div class="col-sm-6 copyright">&copy; <?= date('Y') ?> Bas Hendriks </div>
        <div class="col-sm-6"></div>
    </footer>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <!-- Custom Javascript -->
    <script src="js/min/main.js" charset="utf-8"></script>
  </body>
</html>
