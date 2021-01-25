<?php include "include/fetcher.php"; $page="Home"; 
$og_graph = $_SESSION['news'];
if (empty($og_graph)) {	
	$dat = $_GET['a'];
	$_SESSION['news'] = view($dat);
    if (empty($_SESSION['news'])) {
    	#return to homepage
	header('Location: index.php');
    }	
}
include "include/og_news.php";include "include/header.php";$dat = $_GET['data'];
$whereNot = fetchwhereNotID($id);
?>
<div class="page-title-area">
	<div class="container">
		<div class="page-title-content">
			<h2>News details</h2>
			<ul>
				<li><a href="index.html">Home</a></li>
				<li>News details</li>
			</ul>
		</div>
	</div>
</div>


<section class="news-details-area ptb-50">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="blog-details-desc">
					<div class="article-image">
						<img src="uploads/<?php  echo $img; ?>" style="height:450px;width: 100%;" alt="image">
					</div>
					<div class="article-content">
						<span><a href="news-details-1.html#"><?php echo $actor; ?></a> / <?php echo date("d F Y ",strtotime($date)); ?>/ <a href="">0 Comment</a></span>
						<h3><?php echo $heading; ?></h3>
						
						<?php echo $news; ?>
						
						
							<!-- <blockquote class="wp-block-quote">
								<p>“Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
							</blockquote> -->
						</div>
						<div class="article-footer">
							<div class="article-share">
								<ul class="social">
									<li><span>Share:</span></li>
									<li>
										<a href="news-details-1.html#" target="_blank">
											<i class='bx bxl-facebook'></i>
										</a>
									</li>
									<li>
										<a href="news-details-1.html#" target="_blank">
											<i class='bx bxl-twitter'></i>
										</a>
									</li>
									<li>
										<a href="news-details-1.html#" target="_blank">
											<i class='bx bxl-instagram'></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="post-navigation">
							<div class="navigation-links">
								<div class="nav-previous">
									<a href="news-details-1.html#">
										<i class='bx bx-chevron-left'></i>
										Prev Post
									</a>
								</div>
								<div class="nav-next">
									<a href="news-details-1.html#">
										Next Post
										<i class='bx bx-chevron-right'></i>
									</a>
								</div>
							</div>
						</div>
						<!-- <div class="comments-area">
							<h3 class="comments-title">3 Comments:</h3>
							<ol class="comment-list">
								<li class="comment">
									<div class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img src="assets/img/client/client-1.jpg" class="avatar" alt="image">
												<b class="fn">John Jones</b>
											</div>
											<div class="comment-metadata">
												<a href="index.html">
													<span>April 24, 2021 at 10:59 am</span>
												</a>
											</div>
										</footer>
										<div class="comment-content">
											<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
										</div>
										<div class="reply">
											<a href="news-details-1.html#" class="comment-reply-link">Reply</a>
										</div>
									</div>
									<ol class="children">
										<li class="comment">
											<div class="comment-body">
												<footer class="comment-meta">
													<div class="comment-author vcard">
														<img src="assets/img/client/client-2.jpg" class="avatar" alt="image">
														<b class="fn">Steven Smith</b>
													</div>
													<div class="comment-metadata">
														<a href="index.html">
															<span>April 24, 2021 at 10:59 am</span>
														</a>
													</div>
												</footer>
												<div class="comment-content">
													<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
												</div>
												<div class="reply">
													<a href="news-details-1.html#" class="comment-reply-link">Reply</a>
												</div>
											</div>
										</li>
									</ol>
									<div class="comment-body">
										<footer class="comment-meta">
											<div class="comment-author vcard">
												<img src="assets/img/client/client-3.jpg" class="avatar" alt="image">
												<b class="fn">Sarah Taylor</b>
											</div>
											<div class="comment-metadata">
												<a href="index.html">
													<span>April 24, 2021 at 10:59 am</span>
												</a>
											</div>
										</footer>
										<div class="comment-content">
											<p>Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen.</p>
										</div>
										<div class="reply">
											<a href="news-details-1.html#" class="comment-reply-link">Reply</a>
										</div>
									</div>
								</li>
							</ol>
							<div class="comment-respond">
								<h3 class="comment-reply-title">Leave a Reply</h3>
								<form class="comment-form">
									<p class="comment-notes">
										<span id="email-notes">Your email address will not be published.</span>
										Required fields are marked
									</p>
									<p class="comment-form-author">
										<label>Name</label>
										<input type="text" id="author" placeholder="Your Name*" name="author" required="required">
									</p>
									<p class="comment-form-email">
										<label>Email</label>
										<input type="email" id="email" placeholder="Your Email*" name="email" required="required">
									</p>
									<p class="comment-form-url">
										<label>Website</label>
										<input type="url" id="url" placeholder="Website" name="url">
									</p>
									<p class="comment-form-comment">
										<label>Comment</label>
										<textarea name="comment" id="comment" cols="45" placeholder="Your Comment..." rows="5" maxlength="65525" required="required"></textarea>
									</p>
									<p class="comment-form-cookies-consent">
										<input type="checkbox" value="yes" name="wp-comment-cookies-consent" id="wp-comment-cookies-consent">
										<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
									</p>
									<p class="form-submit">
										<input type="submit" name="submit" id="submit" class="submit" value="Post a comment">
									</p>
								</form>
							</div>
						</div> -->
					</div>
				</div>
				<div class="col-lg-4">
					<aside class="widget-area">
						<div class="widget widget_search">
							<form class="search-form">
								<label>
									<span class="screen-reader-text">Search for:</span>
									<input type="search" class="search-field" placeholder="Search...">
								</label>
								<button type="submit">
									<i class='bx bx-search'></i>
								</button>
							</form>
						</div>
						<section class="widget widget_latest_news_thumb">
							<h3 class="widget-title">Latest news</h3>

							<?php
							foreach($whereNot as $key => $value) {
								echo'
									<article class="item">
										<a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'" class="thumb">
											<img src="uploads/'.$value['image'].'"  >
										</a>
										<div class="info">
											<h4 class="title usmall"><a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'">'.substr($value["heading"], 0, 46).' ....</a></h4>
											<span>'.date("d F Y ",strtotime($value['time'])).'</span>
										</div>
									</article>
								';if ($key >= 3) {break;}
							}
							?>
						
							
						</section>
						<section class="widget widget_instagram">
							<ul>
								<li>
									<div class="box">
										<img src="assets/img/latest-news/latest-news-1.jpg" alt="image">
										<i class="bx bxl-instagram"></i>
										<a href="news-details-1.html#" target="_blank" class="link-btn"></a>
									</div>
								</li>
								<li>
									<div class="box">
										<img src="assets/img/latest-news/latest-news-2.jpg" alt="image">
										<i class="bx bxl-instagram"></i>
										<a href="news-details-1.html#" target="_blank" class="link-btn"></a>
									</div>
								</li>
								<li>
									<div class="box">
										<img src="assets/img/latest-news/latest-news-3.jpg" alt="image">
										<i class="bx bxl-instagram"></i>
										<a href="news-details-1.html#" target="_blank" class="link-btn"></a>
									</div>
								</li>
								<li>
									<div class="box">
										<img src="assets/img/latest-news/latest-news-4.jpg" alt="image">
										<i class="bx bxl-instagram"></i>
										<a href="news-details-1.html#" target="_blank" class="link-btn"></a>
									</div>
								</li>
								<li>
									<div class="box">
										<img src="assets/img/latest-news/latest-news-5.jpg" alt="image">
										<i class="bx bxl-instagram"></i>
										<a href="news-details-1.html#" target="_blank" class="link-btn"></a>
									</div>
								</li>
								<li>
									<div class="box">
										<img src="assets/img/latest-news/latest-news-6.jpg" alt="image">
										<i class="bx bxl-instagram"></i>
										<a href="news-details-1.html#" target="_blank" class="link-btn"></a>
									</div>
								</li>
							</ul>
						</section>
						<section class="widget widget_popular_posts_thumb">
							<h3 class="widget-title">Popular posts</h3>
							
							<?php
							foreach($whereNot as $key => $value) {
								if ($key <= 3) {continue;}
								echo'
									<article class="item">
										<a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'" class="thumb">
											<img src="uploads/'.$value['image'].'"  >
										</a>
										<div class="info">
											<h4 class="title usmall"><a href="news.php?read='.str_replace($search, $replace,rawurldecode($value["heading"])).'&dataID='.$value["id"].'">'.substr($value["heading"], 0, 46).' ....</a></h4>
											<span>'.date("d F Y ",strtotime($value['time'])).'</span>
										</div>
									</article>
								';if ($key >= 7) {break;}
							}
							?>
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
</body>
</html>