<?php include "include/fetcher.php"; $page="Home";$dat = $_GET['data'];$og_graph = ""; include "include/og_graph.php";include "include/header.php";

if (!isset($_SESSION['fetchTypeCat'])) {
	
	$_SESSION['fetchTypeCat'] = fetchTypeCat($dat);
}
$fetchTypeCat = $_SESSION['fetchTypeCat'];
if($dat == "Ogun State" ||$dat == "Nigeria" ||$dat == "AFRICA" ||$dat == "World"){
	$ribbon = fetchwhereNotLoc($dat);
}else{
	$ribbon = fetchwhereNot($dat);
}

// $item = array_shift($indexData);
?>
<section class="news-area ptb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php foreach ($fetchTypeCat as $key => $value) {
					echo '
					<div class="single-news-item">
					<div class="row align-items-center">
						<div class="col-lg-4">
							<div class="news-image">
								<a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'">
									<img src="uploads/'.$value['image'].'" style="height:200px;width:100%;" alt="image">
								</a>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="news-content">
								<span>'.$value["location"].'</span>
								<h3>
									<a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'">'.substr($value["heading"], 0, 66).' ....</a>
								</h3>
								<p>'.mb_strimwidth(strip_tags($value["news"]), 0, 135).' ....</p>
								<p><a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'">'.$value["actor"].'</a> / '.date("d F Y ",strtotime($value['time'])).'</p>
							</div>
						</div>
					</div>
				</div>
				';if ($key >= 5) {break;}
				} ?> 
				
				<div class="pagination-area">
					<a href="news.html#" class="prev page-numbers">
						<i class='bx bx-chevron-left'></i>
					</a>
					<a href="news.html#" class="page-numbers">1</a>
					<span class="page-numbers current" aria-current="page">2</span>
					<a href="news.html#" class="page-numbers">3</a>
					<a href="news.html#" class="page-numbers">4</a>
					<a href="news.html#" class="next page-numbers">
						<i class='bx bx-chevron-right'></i>
					</a>
				</div>
			</div>
			<div class="col-lg-4">
				<aside class="widget-area">
					<section class="widget widget_latest_news_thumb">
						<h3 class="widget-title">Latest news</h3>
						<?php foreach ($ribbon as $key => $value) {
							echo '
							<article class="item">
							<a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'" class="thumb">
								<img src="uploads/'.$value['image'].'"  >
							</a>
							<div class="info">
								<h4 class="title usmall"><a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'">'.substr($value["heading"], 0, 46).' ....</a></h4>
								<span>'.date("d F Y ",strtotime($value['time'])).'</span>
							</div>
						</article>
						';if ($key >= 2) {break;}
						} ?>						
					</section>
					<section class="widget widget_featured_reports">
						<h3 class="widget-title">Featured reports</h3>
						<div class="single-featured-reports">
							<div class="featured-reports-image">
								<a href="news.html#">
									<img src="assets/img/featured-reports/featured-reports-1.jpg" alt="image">
								</a>
							</div>
						</div>
					</section>
					<section class="widget widget_stay_connected">
						<h3 class="widget-title">Stay connected</h3>
						<ul class="stay-connected-list">
							<li>
								<a href="news.html#">
									<i class='bx bxl-facebook'></i>
									120,345 Fans
								</a>
							</li>
							<li>
								<a href="news.html#" class="twitter">
									<i class='bx bxl-twitter'></i>
									25,321 Followers
								</a>
							</li>
							<li>
								<a href="news.html#" class="linkedin">
									<i class='bx bxl-linkedin'></i>
									7,519 Connect
								</a>
							</li>
							<li>
								<a href="news.html#" class="youtube">
									<i class='bx bxl-youtube'></i>
									101,545 Subscribers
								</a>
							</li>
							<li>
								<a href="news.html#" class="instagram">
									<i class='bx bxl-instagram'></i>
									10,129 Followers
								</a>
							</li>
							<li>
								<a href="news.html#" class="wifi">
									<i class='bx bx-wifi'></i>
									952 Subscribers
								</a>
							</li>
						</ul>
					</section>
					<section class="widget widget_newsletter">
						<div class="newsletter-content">
							<h3>Subscribe to our newsletter</h3>
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
</body>
</html>