<?php
    require_once 'includes/functions.php';
    require_once 'includes/header.php';
?>

    <!-- Check if JS is enabled -->
    <noscript>
        <meta HTTP-EQUIV="Refresh" CONTENT="0;URL=noJS.html">
    </noscript>
    <!-- /End JS check -->



    <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left menu" id="cbp-spmenu-s1">
        <ul>
            <li><a href="#home" class="nav-btn nav-home">home</a></li>
            <li><a href="#about" class="nav-btn nav-about">about me</a></li>
            <li><a href="#projects" class="nav-btn nav-projects">projects</a></li>
            <li><a href="#contact" class="nav-btn nav-contact">contact</a></li>
        </ul>
    </nav>

    <div class="buttonset">
        <button id="showLeft" class="nav-toggle">
			<span class="bar"></span>
			<span class="bar"></span>
		</button>
    </div>

    <section id="home" class="home">
		<header class="welcome">
			<h2 class="italic">Where design and development meet</h2>
		</header>
    </section>

    <section id="about" class="container about">
		<div class="row">
			<div class="col-xs-12">
				<h2 class="italic section-title">Who am I?</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-md-8">
				<p>Hi, my name is Bas and I'm a front end developer from the south of the Netherlands.</p>

				<p>Development and front end is what I love doing. My main languages of choice are PHP, HTML, SCSS and jQuery. I also know my way around Photoshop, Illustrator and Indesign. Development I prefer doing in <a href="https://atom.io/" target="_blank">Atom</a>.</p>

				<p>In my spare time I love to go into the outdoors and hit some trails on my mountainbike. But on a rainy day I prefer the gym.</p>

				<p>Feel free to say hi and leave me a message.</p>
			</div>
			<div class="col-xs-8 offset-xs-2 col-md-4 offset-md-0 face">
				<img src="img/face.jpg" alt="Photo of me" class="box-shadow">
			</div>
		</div>
    </section>

    <section id="projects" class="container-fluid projects">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="italic section-title">What I've been doing</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-6 col-md-4 project project-1">
					<img src="http://placehold.it/350" alt="Project 1" class="box-shadow">
				</div>
				<div class="col-xs-6 col-md-4 project project-2">
					<img src="http://placehold.it/350" alt="Project 2" class="box-shadow">
				</div>
				<div class="col-xs-6 col-md-4 project project-3">
					<img src="http://placehold.it/350" alt="Project 3" class="box-shadow">
				</div>
				<div class="col-xs-6 col-md-4 project project-4">
					<img src="http://placehold.it/350" alt="Project 4" class="box-shadow">
				</div>
				<div class="col-xs-6 col-md-4 project project-5">
					<img src="http://placehold.it/350" alt="Project 5" class="box-shadow">
				</div>
				<div class="col-xs-6 col-md-4 project project-6">
					<img src="http://placehold.it/350" alt="Project 6" class="box-shadow">
				</div>
			</div>
		</div>
    </section>

    <section id="contact" class="container relative contact">
        <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
            <h2 class="italic section-title">Say hi</h2>
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
    </section>


    <footer>
        <div class="container">
            <div class="col-xs-8 copyright">&copy; <?= date('Y') ?> Bas Hendriks </div>
            <div class="col-xs-4 social"><a href="https://www.linkedin.com/in/bbehendriks" target="_blank" class="block linkedin"></a></div>
        </div>
    </footer>

<?php require_once 'includes/footer.php'; ?>
