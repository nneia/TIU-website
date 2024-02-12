<?php
//connect to the file which connects to the db
	include 'db.php';

	$offset_val = 0;
	$sql = "SELECT * FROM posts ORDER BY id DESC LIMIT 8;";
	$result = mysqli_query($connection, $sql);
	$result_check = mysqli_num_rows($result);

	$data_array = array();


	if ($result_check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$data_array[] = $row; //Put all row values inside array
		};
	};

	?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>Feed</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="feed-design.css">
	<? require 'construction/fonts/fonts.php'; ?>
	<? require 'construction/menu/menu.php'; ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123726393-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-123726393-2');
	</script>

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
			<a href="index.php" class="nav-elem">Homepage</a>
			<a class="nav-elem selected-p">Feed  - Blog</a>
			<a class="nav-elem">LL Learning</a>
			<a class="nav-elem">Files</a>
		</nav>
	</div>


	<div class="content-container">
		<div class="content-1">
			<h1 class="header">Latest Blog Posts</h1>
			<?foreach ($data_array as $data): ?>
			<div class="posts-box">
				<div class="post">
					<!--Transfer id to the url-->
					<a href=<? echo "http://mytiuwebsite/post.php?id=" . $data['ID'];?>  class="post-link"></a>
					<div class="post-background-box">
						<img src=<?echo "construction/imgs/" . $data['post_img'];?> alt="" class="post-background">
					</div>
					<div class="post-info">
						<div class="info-bar">
							<p class="post-date"><?echo $data['post_date'];?></p>
							<p class="post-category"><?echo ucwords($data['category']);?></p>
						</div>
						<p class="title"><?echo $data['post_title'];?></p>
						<p class="desc"><?echo $data['post_description'];?></p>
					</div>
				</div>
			</div>
			<?endforeach;?>
		</div>
		<aside class="content-2">
			<div class="controlls-wrap">
				<div class="sort-time">
					<p class="time sort-selected">Recent</p>
					<p class="time">Oldest</p>
				</div>
				<div class="categories">
					<p class="subheader">Categories</p>
					<div class="category-box">
						<div class="categ">WebDEV</div>
						<div class="categ">Anime & Manga</div>
						<div class="categ">Assignment</div>
					</div>
				</div>
				<div class="list">
					<p class="subheader">All Posts</p>
					
					<div class="lists-box">
						<?foreach ($data_array as $data): ?>
						<div class="list-val">
							<a href=<? echo "http://mytiuwebsite/post.php?id=" . $data['ID'];?> class="post-link"></a>
							<p class="val-title"><?echo $data['post_title'];?></p>
							<p class="post-num">23</p>
						</div>
						<?endforeach;?>
					</div>
					
				</div>
			</div>
		</aside>
	</div>


	<!--<div class="background-shadow"></div>
	-->
</body>
</html>