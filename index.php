<?php
    require_once 'includes/functions.php';
    require_once 'includes/header.php';
?>

    <!-- Check if JS is enabled -->
    <noscript>
        <meta HTTP-EQUIV="Refresh" CONTENT="0;URL=noJS.html">
    </noscript>
    <!-- /End JS check -->

	<nav class="navbar navbar-fixed-top navbar-dark">
		<div class="col-xs-12 col-lg-4">
			<a class="navbar-brand" href="#">Logo</a>
			<button class="toggle hidden-lg-up float-xs-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="bar"></span>
				<span class="bar"></span>
			</button>
		</div>
		<div class="collapse navbar-toggleable-md float-xs-left float-lg-right col-xs-12 col-md-8" id="navbarResponsive">
			<ul class="nav navbar-nav float-lg-right">
				<li class="nav-item active">
					<a class="nav-link" href="#home">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About Me</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#projects">Projects</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
			</ul>
		</div> <!-- / .collapse -->
	</nav>

    <section id="home" class="container full-height home">

    </section> <!-- / #home -->

    <section id="about" class="container full-height about">
        <!-- <div class="container"> -->
            <div class="col-md-8">
                <p>Hi, my name is Bas and I'm a front end developer from the south of the Netherlands.</p>

                <p>Development and front end is what I do and love doing. My main languages of choice are PHP, HTML, SCSS and jQuery. I also know my way around Photoshop, Illustrator and Indesign. Development I prefer doing in <a href="https://atom.io/" target="_blank">Atom</a>.</p>

                <p>In my spare time I love to go into the outdoors and hit some trails on my mountainbike. But on a rainy day I prefer the gym.</p>

                <p>Feel free to say hi and leave me a message.</p>
            </div>
        <!-- </div> -->
    </section> <!-- / #about -->

    <section id="projects" class="container full-height projects">
        <h2>My Projects</h2>
        <p>These are some of my project I have worked on. If you have a question about them, leave me a message down below.</p>

    </section> <!-- / #projects -->

    <section id="contact" class="container-fluid relative contact">
        <div class="col-md-6 offset-md-3 col-xl-4 offset-xl-4">
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
                    <label for="message">Message</label><span class="countdown"></span>
                    <textarea class="form-control form-control-success form-control-danger" name="message" id="message" maxlength="300" placeholder="Leave your message here"><?= ($_POST && !empty($_POST['message'])) ? e($_POST['message']) : '' ; ?></textarea>
                </div>

                <!-- <div class="g-recaptcha" data-sitekey="6LeMQhgTAAAAAG1Dl2Is8XzbMjIkMv3SETGfPqRw"></div> -->

                <input type="submit" class="btn btn-outline-success btn-block" value="Send message">
            </form>
        </div>
    </section> <!-- / #contact -->

	<footer>
        <div class="container">
            <div class="col-xs-8 copyright">&copy; <?= date('Y') ?> Bas Hendriks </div>
            <div class="col-xs-4 social"><a href="https://www.linkedin.com/in/bbehendriks" target="_blank" class="block linkedin"></a></div>
        </div>
    </footer>

<?php require_once 'includes/footer.php'; ?>
