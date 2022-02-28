<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="./js/script.js"></script>
	<title>Junior web test</title>
</head>
<body>
																													<!-- LEFT SIDE -->
	<div class="leftSide">
	<header class="header">
		<div class="container">
			<div class="navigation">
				<a href="#"><img src="./img/Union.png" alt="PineappleLogo"></a>
				<a class="textLogo" href="#"><img src="./img/pineapple..png" alt="PineappleTextLogo"></a>
				<nav class="navigationLinks">
					<a href="#">About</a>
					<a href="#">How it works</a>
					<a href="#">Contact</a>
				</nav>
		</div>
		</div>
	</header>
	<div class="main">
		<div class="content">
			<div class="container">
				<div id="article">
					Subscribe to newsletter
				</div>
				<div class="text">
                    Subscribe to our newsletter and get 10% discount on pineapple glasses.
				</div>
				<div class="InputField">
					<form name="form" action="index.php" method="POST" onsubmit="return emptyEmail();">
                        <label>
                            <input class="email" type="text" name="emailInput" placeholder="Type your email address here..." >
                        </label>
                    </form>
				</div>
                <div id="error"> <!-- SHOW js ERROR --></div>
				<div class="checkbox">
						<input id="checkButton" type="checkbox" name="termsCheck" value="1" ><label for="checkButton"></label>
					<div class="terms">I agree to <a href="#" tabindex="1">terms of service</a></div>
				</div>
				<hr>
				<div class="footer">
					<div class="facebookIcon"><a href="#"></a></div>
					<div class="instagramIcon"><a href="#"></a></div>
					<div class="twitterIcon"><a href="#"></a></div>
					<div class="youtubeIcon"><a href="#"></a></div>
				</div>
			</div>
		</div>
	</div>
</div>

	<div class="rightSide">
	</div>
</body>
</html>