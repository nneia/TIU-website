
<!DOCTYPE html>
<html lang="en">
<head>
	<title>MyTIUBlog</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="files-design.css">
	<? require 'construction/fonts/fonts.php'; ?>
	<? require 'construction/menu/menu.php'; ?>


</head>
<body id="body">
	<div class="background-container">
		<img src="construction/imgs/background.jpg" alt="" class="background-img">
		<div class="background-info">
			<h1 class="bi-header"> Irasshaimase Jeffsan!</h1>
			<p class="bi-desc"> 
				Here I will post my IT Literacy course activities, my experiences and opinions about anime & manga, as well as 
				share my programming daily struggles.
			</p>
		</div>
	</div>
	


	<? require 'construction/menu/menu.php'; ?>
	<div class="menu-container">
		<nav class="menu-nav">
			<a href="index.php" class="nav-elem ">Homepage</a>
			<a href="feed.php" class="nav-elem">Feed  - Blog</a>
			<a class="nav-elem">LL Learning</a>
			<a href="files.php" class="nav-elem selected-p">Files</a>
		</nav>
	</div>


	<h1 class="header">Files</h1>

	<p class="subheader">Posters</p>
	<div class="content">
		<div class="content-wrap">
			<div class="poster" id="p1">
				<img src="construction/imgs/files/poster1.svg" alt="" class="poster-img">
			</div>
			<div class="poster" id="p2">
				<img src="construction/imgs/files/poster2.svg" alt="" class="poster-img">
			</div>
			<div class="poster" id="p3">
				<img src="construction/imgs/files/poster3.svg" alt="" class="poster-img">
			</div>
		</div>
		<button class="content-add">+ Add File</button>
	</div>




	
	<div class="modal-container" id="modal-container">
		
	</div>
	<script src="js/files.js"></script>

	<script id="poster-1" type="text/x-handlebars-template">
		<div class="poster-container">
			<img src="construction/imgs/files/piano.svg" alt="" class="piano-icon">
			<div class="poster-text">
				<p class="p-t">Piano Music</p>
				<p class="p-sb">Live Music Concert</p>
			</div>
			<div class="sqares-box">
				<div class="sqare-1">
					<p class="s1-sb">Participants:</p>
					<p class="s1-t">
						Leif Ove Andsnes<br>
						Martha Argerich<br>
						Claudio Arrau<br>
						Vladimir Ashkenazy
					</p>
				</div>
				<div class="sqare-2">
					<p class="p-date">April 12</p>
					<p class="p-loc">LasVegas, NV</p>
				</div>
			</div>
		</div>
	</script>
	<script id="poster-2" type="text/x-handlebars-template">
		<div class="poster-container p2">
			<div class="background-1">
				<div class="background-2">
					<p class="p2-header">Cage the elephant</p>
					<img src="construction/imgs/files/sax.svg" alt="" class="sax-icon">
					<div class="p2-loc-box">
						<p class="p2-loc">California, CA</p>
						<p class="p2-date">April 12</p>
					</div>
					<p class="p2-participants">
						Leif Ove Andsnes<br>
						Martha Argerich<br>
						Claudio Arrau<br>
						Vladimir Ashkenazy
					</p>
				</div>
			</div>
		</div>
	</script>
	<script id="poster-3" type="text/x-handlebars-template">
		<div class="poster-container">
			<div class="line-1">
				<div class="l1-box1">
					<img src="construction/imgs/files/drums.svg" class="drums-icon">
				</div>
				<div class="l1-box2">
					<p class="l1-header">Concert Tonight</p>
				</div>
			</div>
			<div class="line-2">
				<div class="l2-box1">
					<p class="l2-p-header">Participants:</p>
					<p class="l2-participants">
						Leif Ove Andsnes<br>
						Martha Argerich<br>
						Claudio Arrau<br>
						Vladimir Ashkenazy
					</p>
				</div>
				<div class="l2-box2">
					<p class="p3-loc">Park Street 34</p>
					<p class="p3-date">April 12</p>
				</div>
			</div>
			<div class="line-3">
				<div class="rectangle-line-1"></div>
				<div class="rectangle-line-2"></div>
				<div class="rectangle-line-3"></div>
				<div class="rectangle-line-4"></div>
				<div class="rectangle-line-5"></div>
				<div class="rectangle-line-6"></div>
				<div class="rectangle-line-7"></div>
				<div class="rectangle-line-8"></div>
				<div class="rectangle-line-9"></div>
				<div class="rectangle-line-10"></div>
			</div>
		</div>
	</script>

