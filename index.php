<?php
session_start();

function e($string) {
    return htmlentities($string, ENT_QUOTES, 'UTF-8', false);
}

$errors = [];

if (isset($_POST)) {
    // Check if name is set
    if (empty($_POST['name'])) {
        $errors['name'] = 'Please fill in your name';
    }

    // Check if email is set
    if (empty($_POST['email'])) {
        $errors['email'] = 'Please fill in your email';
    } else {
        // Check if email is valid
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Please enter a valid email address';
        }
    }

    // Check if a message is set
    if (empty($_POST['message'])) {
        $errors['message'] = 'Please enter a message to send';
    }

    if (!empty($errors)) {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            echo json_encode($errors);
            exit;
        }

        $errors_php = $errors;
    } else {

    }
}

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
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="css/min/main.css" media="screen" title="no title">

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

    <!-- Google reCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
  <body>

    <section class="container-fluid full-height relative home">
        <div class="container">
            <h2 class="v-center hide quote">"The main goal is not to complicate the already difficult life of the consumer." <span class="italic">- Raymond Loewy</span></h2>
        </div>
    </section>

    <section class="container-fluid relative full-height about">
        <div class="container">
            <div class="col-md-8">
                <p>Hi, my name is Bas and I'm a front end developer from the south of the Netherlands.</p>

                <p>Development and front end is what I do and love doing. My main languages of choice are PHP, HTML, SCSS and jQuery. I also know my way around Photoshop, Illustrator and Indesign. Development I prefer doing in <a href="https://atom.io/" target="_blank">Atom</a>.</p>

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

    <section class="container-fluid relative contact">
        <div class="container">
            <h3>Say hi</h3>
            <p>
                Feel free to leave me a message, just to say hi or to get in touch.
            </p>
            <form class="contact-form" method="post">
                <?php if (!empty($errors_php)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h3>Warning!</h3>
                        <ul>
                        <?php foreach ($errors as $errorname => $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-danger" name="name" id="name" placeholder="What's your name?" autocomplete="off" value="<?= ($_POST && !empty($_POST['name'])) ? e($_POST['name']) : '' ; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control form-control-danger" name="email" id="email" placeholder="What's your email?" autocomplete="off" value="<?= ($_POST && !empty($_POST['email'])) ? e($_POST['email']) : '' ; ?>">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control form-control-danger" name="message" id="message" placeholder="Leave your message here"><?= ($_POST && !empty($_POST['message'])) ? e($_POST['message']) : '' ; ?></textarea>
                </div>

                <div class="g-recaptcha" data-sitekey="6LeMQhgTAAAAAG1Dl2Is8XzbMjIkMv3SETGfPqRw"></div>

                <input type="submit" class="btn btn-success" value="Send message">

            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="col-sm-6 copyright">&copy; <?= date('Y') ?> Bas Hendriks </div>
            <div class="col-sm-6"></div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
    <!-- Custom Javascript -->
    <script src="js/min/main.js" charset="utf-8"></script>
  </body>
</html>
