<?php
//connect to the file which connects to the db
	include 'db.php';


	$id = $_GET['id'];//get id from the URL

	$sql = "SELECT * FROM posts WHERE id = '$id'";
	$result = mysqli_query($connection, $sql);
	$result_check = mysqli_num_rows($result);


	if ($result_check > 0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$title = $row['post_title'];
			$desc = $row['post_description'];
			$content = $row['post_content'];
			$img = $row['post_img'];
			$date = $row['post_date'];
			$category = $row['category'];

		};
	};


	$category = ucwords($category);//Uppercase every word of a category
	?>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>Title</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="post-desing.css">
	<? require 'construction/fonts/fonts.php'; ?>
	<? require 'construction/menu/menu.php'; ?>
</head>
<body>


	<div class="post-container">
		<div class="back" onclick="linkBack()">
			<svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
				<path stroke-width="17" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M89.9 9.6L36.5 62.9 91 117.4"></path>
			</svg>
			<p class="close-text">Back</p>
		</div>
		<div class="post-info-box">
			
		

			<div class="post-info">
				<p class="title"><?echo $title?></p>
				<div class="p-info-bar">
					<p class="date"><?echo $date;?></p>
					<p class="category"><?echo $category?></p>
				</div>
				<p class="post-dec"><?echo $desc?></p>
			</div>
			<div class="background-img-box">
				<img src=<?echo "construction/imgs/" . $img;?> alt="" class="p-background">
			</div>
		</div>
		<div class="post-content-blank">
			<? echo $content?>
		</div>
	</div>

</body>
</html>