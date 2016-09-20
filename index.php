<?php
    require_once 'includes/functions.php';
    require_once 'includes/header.php';
?>

    <!-- Check if JS is enabled -->
    <noscript>
        <meta HTTP-EQUIV="Refresh" CONTENT="0;URL=noJS.html">
    </noscript>
    <!-- End JS check -->

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

    <section class="container full-height projects">
        <h2>My Projects</h2>
        <p>These are some of my project I have worked on. If you have a question about them, leave me a message down below.</p>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="http://lorempixel.com/640/400" alt="First slide">
                    <div class="carousel-caption">
                        <h3>test</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://lorempixel.com/640/400" alt="Second slide">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="http://lorempixel.com/640/400" alt="Third slide">
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
            <h2>Say hi</h2>
            <p>Feel free to leave me a message, just to say hi or to get in touch.</p>
            <form class="contact-form" action="validate.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control form-control-success form-control-danger" name="name" id="name" placeholder="What's your name?" autocomplete="off" value="<?= ($_POST && !empty($_POST['name'])) ? e($_POST['name']) : '' ; ?>">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control form-control-success form-control-danger" name="email" id="email" placeholder="What's your email?" autocomplete="off" value="<?= ($_POST && !empty($_POST['email'])) ? e($_POST['email']) : '' ; ?>">
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control form-control-success form-control-danger" name="message" id="message" placeholder="Leave your message here"><?= ($_POST && !empty($_POST['message'])) ? e($_POST['message']) : '' ; ?></textarea>
                </div>

                <!-- <div class="g-recaptcha" data-sitekey="6LeMQhgTAAAAAG1Dl2Is8XzbMjIkMv3SETGfPqRw"></div> -->

                <input type="submit" class="btn btn-outline-success btn-block" value="Send message">

            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="col-xs-8 copyright">&copy; <?= date('Y') ?> Bas Hendriks </div>
            <div class="col-xs-4 social"><a href="https://www.linkedin.com/in/bbehendriks" target="_blank" class="block linkedin"></a></div>
        </div>
    </footer>

<?php require_once 'includes/footer.php'; ?>
