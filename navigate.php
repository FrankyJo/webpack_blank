<body>
	<!-- Класс 'navigate-fix-top' нужен для переключения меню с фиксированого позиционирования на абсолютное на странице form.php -->
	<!-- Класс 'none-get-btn' прячет кнопку Get Started на странице form.php -->
	<header class="header <?php if(basename($_SERVER['SCRIPT_NAME']) == 'form.php') { echo 'navigate-fix-top'; } ?>"> 
		<div class="top-info">
			<div class="wrapper">
				<div class="col-left"><span>WARNING:</span> Late repayment can cause you serious money problems. For help, go to <a href="https://www.moneyadviceservice.org.uk" target="_blank">moneyadviceservice.org.uk</a></div>
				<div class="col-right">{site_name} is a broker, not a lender, and does not make credit decisions. We may receive a commission from the lender.</div>
			</div>
		</div>
		<div class="top-nav">
			<div class="wrapper">
				<a class="logo" href="/"><img src="./img/logo.svg" alt="Logo"></a>

				<!-- desktop menu -->
				<nav class="menu">
					<ul>
						<li class="hidden-desktop"><a href="./form.php" class="get-btn">Get Started</a></li>
						<li><a <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php') { echo 'class="active" '; } ?> href="/">Home</a></li>
						<li><a <?php if(basename($_SERVER['SCRIPT_NAME']) == 'how-it-works.php') { echo 'class="active" '; } ?> href="./how-it-works.php">How it works</a></li>
						<li><a <?php if(basename($_SERVER['SCRIPT_NAME']) == 'faq.php') { echo 'class="active" '; } ?> href="./faq.php">Help Centre</a></li>
						<li><a class="omUKopt_out">Opt Out</a></li>
						<li <?php if(basename($_SERVER['SCRIPT_NAME']) == 'form.php') { echo 'class="none-get-btn"'; } ?>><a href="./form.php" class="get-btn">Get Started</a></li>
					</ul>
				</nav>

				<!-- humburger button -->
				<div class="hum">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>