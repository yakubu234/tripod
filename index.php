<?php include "include/fetcher.php"; $page="Home"; $og_graph = ""; include "include/og_graph.php";include "include/header.php"; include "api.php";
if (!isset($_SESSION['indexData'])) {
	$_SESSION['indexData'] = fetcher();
}
$indexData = $_SESSION['indexData'];
$item = array_shift($indexData);
?>

<div class="overlay-rid" >
	<div class='popup'>
		<div class='cnt223'>
			<p>
				<img src="tripodimage45.jpeg" class="alert-image-s">
				<br/>
				<a class='close'>Close</a>
			</p>
		</div>
	</div>
</div>

<section class="main-default-news-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="single-main-default-news-inner">
					<a href="<?php echo 'news.php?read='.str_replace($search, $replace,rawurldecode($item["heading"])).'&dataID='.$item["id"]; ?>">
						<img src="uploads/<?php echo $item['image']; ?>" alt="image" id="image-height">
					</a>
					<div class="news-content">
						<div class="tag"><?php echo $item['category'] ?> </div>
						<h3>
							<a href="<?php echo 'news.php?read='.str_replace($search, $replace,rawurldecode($item["heading"])).'&dataID='.$item["id"]; ?>"><?php echo  substr($item['heading'], 0, 76); ?> ...</a>
						</h3>
						<span><?php echo date("d F Y h:i:s a",$item['time']); ?></span>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="row" >

					<?php
					foreach ($indexData as $index => $elem) {
						echo '
						<div class="col-sm-6" >
						<div class="single-main-default-news">
						<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">
						<img src="uploads/'.$elem['image'].'" id="image-height-two" alt="image">
						</a>
						<div class="news-content">
						<div class="tag">'.$elem["category"].'</div>
						<h3>
						<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">'.substr($elem["heading"], 0, 36).' ....</a>
						</h3>
						<span>'.date("d F Y ",strtotime($elem['time'])).'</span>
						</div>
						</div>
						</div>
						';
						if ($index >= 3) {break;}
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="default-news-area">
	<div class="container">
		<div class="most-popular-news">
			<div class="section-title">
				<h2>Most popular</h2>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="row">
						<?php 
						$fetch = fetchType('Ogun State'); 
						foreach ($indexData as $index => $elem) {
							echo '
							<div class="col-lg-6">
							<div class="single-most-popular-news">
							<div class="popular-news-image">
							<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">
							<img src="uploads/'.$elem['image'].'" id="heigh-one" alt="image">
							</a>
							</div>
							<div class="popular-news-content">
							<span>'.$elem["location"].'</span>
							<h3>
							<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">'.substr($elem["heading"], 0, 50).' ....</a>
							</h3>
							<p><a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">Patricia</a> / '.date("d F Y ",strtotime($elem['time'])).'</p>
							</div>
							</div>
							</div>
							';
							if ($index >= 1) {break;}
						}
						?>
						
					</div>
				</div>
				<div class="col-lg-4">
					<?php 
					foreach ($indexData as $index => $elem) {
						if ($index <= 1) {continue;}

						echo '
						<div class="most-popular-post">
						<div class="row align-items-center">
						<div class="col-lg-4 col-sm-4">
						<div class="post-image">
						<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">
						<img src="uploads/'.$elem['image'].'" id="height-second" alt="image">
						</a>
						</div>
						</div>
						<div class="col-lg-8 col-sm-8">
						<div class="post-content">
						<span>'.$elem["location"].'</span>
						<h3>
						<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elem["heading"])).'&dataID='.$elem["id"].'">'.substr($elem["heading"], 0, 39).' ....</a>
						</h3>
						<p>'.date("d F Y ",strtotime($elem['time'])).'</p>
						</div>
						</div>
						</div>
						</div>
						';
						if ($index >= 3) {break;}
					}
					?>			

				</div>
			</div>
		</div>
		<div class="politics-news">
			<div class="section-title">
				<h2>Uncategorized</h2>
			</div>
			<div class="row">
				<div class="col-lg-6">

					<?php
					foreach ($indexData as $index => $elemment) {
						if ($index <= 3) {continue;}
						echo '
						<div class="single-politics-news">
						<div class="politics-news-image">
						<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elemment["heading"])).'&dataID='.$elemment["id"].'">
						<img src="uploads/'.$elemment['image'].'" alt="image" id="image-height-i">
						</a>
						</div>
						<div class="politics-news-content">
						<span>'.$elemment["category"].'</span>
						<h3>
						<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elemment["heading"])).'&dataID='.$elemment["id"].'">'.substr($elemment["heading"], 0, 36).' ....</a>
						</h3>
						<p><a href="news.php?read='.str_replace($search, $replace,rawurldecode($elemment["heading"])).'&dataID='.$elemment["id"].'">Jonson Steven</a> /'.date("d F Y ",strtotime($elemment['time'])).'</p>
						</div>
						</div>
						';
						if ($index >= 4) {break;}
					}
					?>

				</div>
				<div class="col-lg-6">
					<div class="row">

						<?php
						foreach ($indexData as $index => $elemm) {
							if ($index <= 4) {continue;}
							echo '
							<div class="col-lg-6 col-md-6">
							<div class="politics-news-post-box">
							<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elemm["heading"])).'&dataID='.$elemm["id"].'">
							<img src="uploads/'.rawurldecode($elemm['image']).'" id="image-height-two" alt="image">
							</a>
							<div class="politics-news-content">
							<div style="display:inline-block;font-size:14px;background-color:#048c0b;color:#fff;padding:2px 10px;font-weight:400;-webkit-transition:.5s;transition:.5s">'.$elemm["category"].'</div>
							<h3>
							<a href="news.php?read='.str_replace($search, $replace,rawurldecode($elemm["heading"])).'&dataID='.$elemm["id"].'">'.substr($elemm["heading"], 0, 36).' ....</a>
							</h3>
							<p>'.date("d F Y ",strtotime($elemm['time'])).'</p>
							</div>
							</div>
							</div>
							';
							if ($index >= 8) {break;}
						}
						?>

					</div>
				</div>
			</div>
		</div>
		<div class="video-news">
			<div class="section-title">
				<h2>Top videos</h2>
			</div>
			<div class="video-slides owl-carousel owl-theme">
				<?php 
				foreach($video_list->items as $item){
					echo '<div class="video-item">
					<div class="video-news-image">
					<a href="https://www.youtube.com/channel/UCjhsjqGwn3d6BPktTvqJAwA/'.$item->id->videoId.'">
					<img src="'.$item->snippet->thumbnails->high->url.'" alt="image">
					</a>
					<a href="https://www.youtube.com/watch?v='.$item->id->videoId.'" class="popup-youtube">
					<i class="bx bx-play-circle"></i>
					</a>
					</div>
					<div class="video-news-content">
					<h3>
					<a href="https://www.youtube.com/channel/UCjhsjqGwn3d6BPktTvqJAwA/'.$item->id->videoId.'">'.$item->snippet->title.'</a>
					</h3>
					<span>'.date("F d Y h:i:s a", strtotime($item->snippet->publishedAt)).'</span>
					</div>
					</div>';
				}

				?>
				
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8">
				<div class="business-news">
					<div class="section-title">
						<h2>Trending Podcast</h2>
					</div>
					<div class="business-news-slides owl-carousel owl-theme">
						<div class="single-business-news">
							<div class="business-news-image">
								<a href="index-3.html#">
									<img src="assets/img/business-news/business-news-2.jpg" alt="image">
								</a>
							</div>
							<div class="business-news-content">
								<span>Business</span>
								<h3>
									<a href="index-3.html#">We have to make a business plan while maintaining mental heatlh during this epidemic</a>
								</h3>
								<p><a href="index-3.html#">Patricia</a> / 28 September, 2021</p>
							</div>
						</div>
						<div class="single-business-news">
							<div class="business-news-image">
								<a href="index-3.html#">
									<img src="assets/img/business-news/business-news-3.jpg" alt="image">
								</a>
							</div>
							<div class="business-news-content">
								<span>News</span>
								<h3>
									<a href="index-3.html#">Many people are established today by doing ecommerce business during the time of Corona</a>
								</h3>
								<p><a href="index-3.html#">Sanford</a> / 28 September, 2021</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			<div class="col-lg-4">
				<aside class="widget-area">
					<section class="widget widget_stay_connected">
						<h3 class="widget-title">Stay connected</h3>
						<ul class="stay-connected-list">
							<li>
								<a href="index-3.html#">
									<i class='bx bxl-facebook'></i>
									120,345 Fans
								</a>
							</li>
							<li>
								<a href="index-3.html#" class="twitter">
									<i class='bx bxl-twitter'></i>
									25,321 Followers
								</a>
							</li>
							<li>
								<a href="index-3.html#" class="linkedin">
									<i class='bx bxl-linkedin'></i>
									7,519 Connect
								</a>
							</li>
							<li>
								<a href="index-3.html#" class="youtube">
									<i class='bx bxl-youtube'></i>
									101,545 Subscribers
								</a>
							</li>
							<li>
								<a href="index-3.html#" class="instagram">
									<i class='bx bxl-instagram'></i>
									10,129 Followers
								</a>
							</li>
							<li>
								<a href="index-3.html#" class="wifi">
									<i class='bx bx-wifi'></i>
									Podcast
								</a>
							</li>
						</ul>
					</section>

					
					<section class="widget widget_newsletter">
						<div class="newsletter-content">
							<p>Subscribe to our newsletter to get the new updates!</p>
						</div>
						<form class="newsletter-form" data-toggle="validator">
							<input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
							<button type="submit">Subscribe</button>
							<div id="validator-newsletter" class="form-result"></div>
						</form>
					</section>
				</aside>
			</div>
		</div>
		
	</div>
</section>

<?php include "include/footer.php"; ?>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/nice-select.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/main.js"></script>
<script type='text/javascript'>
	$(function(){
		// var overlay = $('<div class="overlay-rid"></div>');
		// overlay.show();
		// overlay.appendTo(document.body);
		$('.overlay-rid').show();
		$('.popup').show();
		$('.close').click(function(){
			$('.overlay-rid').hide();
			overlay.appendTo(document.body).remove();
			return false;
		});

		$('.x').click(function(){
			$('.overlay-rid').hide();
			overlay.appendTo(document.body).remove();
			return false;
		});
	});
</script>
</body>
</html>