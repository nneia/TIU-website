<?php
//connect to the file which connects to the db
	include 'db.php';

	$offset_val = 0;
	$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 3 OFFSET " . $offset_val .";";
	$result = mysqli_query($connection, $sql);
	$result_check = mysqli_num_rows($result);

	$data_array = array();


	if ($result_check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$data_array[] = $row; //Put all row values inside array
		};
	};


	function nextOffset() {
		print_r('as');
	}
	?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>MyTIUBlog</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<? require 'construction/fonts/fonts.php'; ?>
	<? require 'construction/menu/menu.php'; ?>


</head>
<body>

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
			<a class="nav-elem selected-p">Homepage</a>
			<a href="feed.php" class="nav-elem">Feed  - Blog</a>
			<a class="nav-elem">LL Learning</a>
			<a href="files.php" class="nav-elem">Files</a>
		</nav>
	</div>
	

	<div class="header-box">
		<h2 class="header">Latest Posts</h2>
		<a href="" class="link">More</a>
	</div>
	
	<div class="lp-container">
		<div class="lp-controlls">
			<div class="slide-controlls-left" onclick="nextOffset()">
				<svg class="controll-arrow " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
				</svg>
				<div class="slide-shadow"></div>
			</div>
			<div class="slide-controlls-right ">
				<svg class="controll-arrow rotate" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
					<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
				</svg>
				<div class="slide-shadow"></div>
			</div>
		</div>
		<div class="lp-posts" id="lp-container">


			<?foreach ($data_array as $data): ?>
				<div class="post">
					<a href=<? echo "http://mytiuwebsite/post.php?id=" . $data['ID'];?> class="post-link"></a>
					<p class="lp-date"><?echo $data['post_date'];?></p>
					<div class="lp-img-wrap">
						<img class="lp-img" src=<?echo "construction/imgs/" . $data['post_img'];?>>
					</div>
					<div class="lp-info">
						<p class="lp-title"><?echo $data['post_title'];?></p>
						<p class="lp-desc"><?echo $data['post_description'];?></p>
					</div>
				</div>
			<?endforeach;?>
			
			
		</div>
	</div>

	<div class="header-box">
		<h2 class="header">Recent manga & anime experiences</h2>
		<a href="" class="link">More</a>
	</div>

	<div class="reviews-container">
		<div class="latest-reviews">
			<div class="review">
				<img class="rev-img" src="construction/imgs/anime covers/ac.jpg">
				<div class="rev-info">
					<p class="rev-title">Motivation to study in anime shell</p>
					<p class="rev-type">Anime</p>
					<p class="rev-dec">Lorem ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consecteturadipisicing, elit. Unde, quo rerum qui fuga repellendus quidem suscipit voluptas quisquam, ad. Quasi, impedit iusto rem nesciunt hic quidem illum iste ad natus.</p>
					<p class="rev-grade"><span class="grade-val">8</span> / 10</p>
				</div>
			</div>
			<div class="review">
				<img class="rev-img" src="construction/imgs/anime covers/mirainikki.jpg">
				<div class="rev-info">
					<p class="rev-title">Title 2</p>
					<p class="rev-type">Anime</p>
					<p class="rev-dec">Lorem ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consecteturadipisicing, elit. Unde, quo rerum qui fuga repellendus quidem suscipit voluptas quisquam, ad. Quasi, impedit iusto rem nesciunt hic quidem illum iste ad natus.</p>
					<p class="rev-grade"><span class="grade-val">8</span> / 10</p>
				</div>
			</div>
			<div class="review">
				<img class="rev-img" src="construction/imgs/anime covers/naruto.jpg">
				<div class="rev-info">
					<p class="rev-title">Title 3</p>
					<p class="rev-type">Anime</p>
					<p class="rev-dec">Lorem ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consectetur ipsum dolor sit amet consecteturadipisicing, elit. Unde, quo rerum qui fuga repellendus quidem suscipit voluptas quisquam, ad. Quasi, impedit iusto rem nesciunt hic quidem illum iste ad natus.</p>
					<p class="rev-grade"><span class="grade-val">8</span> / 10</p>
				</div>
			</div>
		</div>
		<aside class="review-list"></aside>
	</div>


	<div class="header-box">
		<h2 class="header">Files</h2>
		<a href="" class="link">More</a>
	</div>

	<div class="files-container">
		
	</div>
	

	<div class="footer">
		<img src="construction/imgs/me.PNG" alt="" class="my-img">
		<div class="me-info">
			<p class="me-header">About Me</p>
			<p class="me-text">Bizhan Bazhirov, 19</p>
			<p class="me-text">I like food, JDM cars, Anime, Manga and Military stuff</p>
			<div class="contacts">
				<p class="me-contact">Contact: bazhirov.bb@gmail.com</p>
				<p class="me-contact">TIU DBIf 1st year student(as of 2020)</p>
			</div>
		</div>
	</div>

	<script>
		/*function lpCarousel(){
			let btn_left = document.querySelector('.slide-controlls-left');
			let btn_right = document.querySelector('.slide-controlls-right');
			console.log(btn_left);

			btn_left.addEventListener('click', () => {


				alert("<?$offset_val = "OFFSET 3";?>");

			});

		}
		lpCarousel();*/
	</script>
</body>
</html>
