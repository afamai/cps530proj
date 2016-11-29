<?php
$active = array('class="active"',"","","","","");
$content = <<<EOF
<h2>Introduction</h2>
	<h4> Fun Facts </h4>


		<ul>
			<li><q>A PHP framework for Web Artisans</q></li>
			<li> Laravel is 5 years old!  </li>

			<li> Taylor Otwell (the creator) created Laravel to
			provide advanced alternative to the CodeIgniter framework </li>
			<div>
			<img src="../images/gG1ixpEQ.jpg" alt="Taylor" style="width:386px;height:auto
			">
			</div>
			<li>It makes Web Development quick and easy</li>


		</ul>

		<h4> Popularity </h4>
		<ul>
			<li>The MOST POPULAR and most used framework </li>
			<img src="../images/popularity.png" alt="Popularity Graph" style="width:700px;height:500px;">
			<li>Many hosting companies such as
			<a href="http://builtwithlaravel.com/">Built with Laravel</a> provide Laravel support and offer hosting
			solutions for its applications for users like you!</li>


		</ul>

		<h4> Technological Bases </h4>
		<ul>
			<li> It has <strong> Laravel Homestead</strong>, Laravel’s development environment</li>
			<li> It is a packaged Vagrant box that provides a development environment without
			you having to download additional components (for example, a web server) </li>
			<li>Homestead includes Software such as Ubuntu, MySQL, Git, PHP and more!</li>
			<li> It is powered by Vagrant, an
			open-source software for managing Virtual Machines </li>



		</ul>

		<h4>Strengths </h4>
		<ul>
			<li>Uses powerful Blade Template Engine </li>
			<li> Templates are user-friendly and can build efficient web applications. It includes widgets
			with CSS and JS codes.</li>
			<li> Blade templates use <strong> .blade.php </strong> extension </li>
			<img src="../images/Laravel_drupal_blade-views-3.png" alt="Blade template" style="width:641px;height:auto">

			<li>It uses a Model View Controller (MVC) that takes care of development aspects of any application built.
			This allows the Laravel developer to write good, clean code! </li>
			<img src="../images/315196-635618397880493050_338x600_thumb.jpg" alt="MVC" style="width:599px;height:auto">

			<li>Laravel comes with built-in tools that have functions like authentication, routing, caching and more!</li>



		</ul>


		<h4> Weaknesses </h4>
		<ul>
			<li>Laravel’s core files are within the Laravel namespace and not
			all the files in core use a namespace slash (\) in front of
			another core file which makes extending some of your classes a bit tricky</li>
			<li>Due to its reverse routing, routing can be complex </li>
			<li>Can be quite complicated for beginners,
			especially due to its installation process</li>



		</ul>


		<h4> Developers that mostly use it </h4>
		<ul>
			<li>Experienced web developers – experienced with PHP development</li>
			<li>Not recommended for beginners  </li>
			<li>Solo web developers or a development team can use it </li>



		</ul>


		<h4>What kind of websites use it? </h4>
		<ul>
			<li> An example of a site made using this PHP framework is the <a href = "https://oneplus.net/ca_en"> OnePlus </a>site </li>
			<li> Larasocial </li>
			<img src="../images/Larasocial.png" alt="Larasocial" style="width:689px;height:350px">
			<li> Neighbourhood Lender</li>
			<img src="../images/neighborhoodlender.jpeg" alt="Neighbourhood Lender"style="width:320px;height:auto">



		</ul>

		<br>
		<br>
EOF;

include '../layouts/default.php';
?>
