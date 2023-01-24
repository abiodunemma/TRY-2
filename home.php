<?php 
include_once 'db/connect.php';
include_once 'db/function.php';
include_once 'db/session.php';
include_once 'navbar.php';

?>






<!DOCTYPE HTML>
<html>
<head>
  <title>Regrister</title>
  <link rel="stylesheet"  href="css/navbar.css">
  <link rel='stylesheet' type="text/css" href="reset.css">
	<link rel='stylesheet' type="text/css" href="css/t.css">
	<script src='mustache.js'></script>
	<script src='jquery-2.1.1.min.js'></script>
	<script src='twitter-scripts.js'></script>

  
<body>
<?php 
	if($user_id != ''){
		}?>


				
<?php  if($user_id != ''){
       $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?
	   LIMIT  1");
	   $select_profile->execute([$user_id]);
	   if($select_profile->rowCount() > 0){
		$fetch_profile = $select_profile->fetch(PDO:: FETCH_ASSOC);
	   }

}




$select_main = $conn->prepare("SELECT * FROM `main`");
$select_main->execute();
$fetch_main = $select_main->fetch(PDO::FETCH_ASSOC);



?>


<body>



		<section class='content-bar' id='tweets-column'>

			<section class='rounded-header'>
				Tweets
			</section>

			<section id='tweet-stream'>
				<ol id='tweet-list'>
					<li class='tweet-container'>
						
						<span class='tweet-body'>
							<span class='tweet-real-name'><?= $fetch_profile['username']; ?></span>
							<span class='tweet-username'><a href='#'>-@<?= $fetch_main['nickname']; ?></a> -<?= $fetch_main['join_date']; ?></span>
							<div class="ahhh">
								<?= $fetch_main['about'];?>
							</div>
							<div class='tweet-furniture'>
								<ul>
									<li class='expand'><a href='#'>Expand</a></li>
									<li><a href='#'><img src='images/reply.png'>Reply</a></li>
									<li><a href='#'><img src='images/retweet.png'>Retweet</a></li>
									<li><a href='#'><img src='images/favorite.png'>Favourite</a></li>
									<li><a href='#'>... More</a></li>
								</ul>
							</div>
						</span>
					</li>
					<li class='tweet-container'>
						<span><img class='tweet-image' src='images/kerbal.png'></span>
						<span class='tweet-body'>
							<span class='tweet-real-name'>Kerbal Space Program</span>
							<span class='tweet-username'><a href='#'>@KerbalSpaceP - 18m</a></span>
							<div>
								Three months after joining forces with @cursenetwork this is what our awesome players have accomplished. http://i.imgur.com/HTQiCJ1.jpg
							</div>
							<div class='tweet-furniture'>
								<ul>
									<li class='expand'><a href='#'>Expand</a></li>
									<li><a href='#'><img src='images/reply.png'>Reply</a></li>
									<li><a href='#'><img src='images/retweet.png'>Retweet</a></li>
									<li><a href='#'><img src='images/favorite.png'>Favourite</a></li>
									<li><a href='#'>... More</a></li>
								</ul>
							</div>
						</span>
					</li>
					<li class='tweet-container'>
						<span><img class='tweet-image' src='images/brooker.jpeg'></span>
						<span class='tweet-body'>
							<span class='tweet-real-name'>Charlie Brooker</span>
							<span class='tweet-username'><a href='#'>@charltonbrooker - 25m</a></span>
							<div>
								Yep so it's new Touch of Cloth on Sky1 any minute now. So unless the world ends in about ten minutes time you should be okay.
							</div>
							<div class='tweet-furniture'>
								<ul>
									<li class='expand'><a href='#'>Expand</a></li>
									<li><a href='#'><img src='images/reply.png'>Reply</a></li>
									<li><a href='#'><img src='images/retweet.png'>Retweet</a></li>
									<li><a href='#'><img src='images/favorite.png'>Favourite</a></li>
									<li><a href='#'>... More</a></li>
								</ul>
							</div>
						</span>
					</li>
					<li class='tweet-container'>
						<span><img class='tweet-image' src='images/dgs.jpeg'></span>
						<span class='tweet-body'>
							<span class='tweet-real-name'>Darien Graham-Smith</span>
							<span class='tweet-username'><a href='#'>@DarienGS - 45m</a></span>
							<div>
								Derek Nimmo
							</div>
							<div class='tweet-furniture'>
								<ul>
									<li class='expand'><a href='#'>Expand</a></li>
									<li><a href='#'><img src='images/reply.png'>Reply</a></li>
									<li><a href='#'><img src='images/retweet.png'>Retweet</a></li>
									<li><a href='#'><img src='images/favorite.png'>Favourite</a></li>
									<li><a href='#'>... More</a></li>
								</ul>
							</div>
						</span>
				
