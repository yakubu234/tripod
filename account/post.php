<?php 
include "fetcher.php";
if (isset($_SESSION['stuData'])) {
	$data = json_decode($_SESSION['stuData']);
	$name = $data->fullname;
	$ademail = $data->email;
	$adtype = $data->type;
	$gender = $data->gender;
	$adId = $data->id;
	$status = $data->status;
}else{
	echo "<script> alert('Login First')</script>";
	header('refresh:0;url=../login.php');
}
include "header.php"; 
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/froala_editor.css">
<link rel="stylesheet" href="css/froala_style.css">
<link rel="stylesheet" href="css/plugins/code_view.css">
<link rel="stylesheet" href="css/plugins/image_manager.css">
<link rel="stylesheet" href="css/plugins/image.css">
<link rel="stylesheet" href="css/plugins/table.css">
<link rel="stylesheet" href="css/plugins/video.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
<div class="page-title-area">
	<div class="container">
		<div class="page-title-content">
			<a href="" ><button  class="btn btn-success text-white" >New Post <span class="fa fa-pencil " ></span></button></a>
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li>About us</li>
			</ul>
		</div>
	</div>
</div>


<section class="about-area ptb-50 col-sm-7" style="margin: 0px auto;">
	<div class="container">

		<form method="POST" action="fetcher.php?datas=newPost&<?php echo microtime(); ?>"  enctype = "multipart/form-data">
			<div class="mb-3">
				<label for="exampleFormControlInput11" class="form-label">Heading</label>
				<input type="text" class="form-control" name="heading" id="exampleFormControlInput11" placeholder="Enter Heading" required="">
			</div>
			<div class="mb-3">
				<select class="form-select form-control" name="category" required="" >
					<option selected disabled="">Category</option>
                    <option value="Entertainment">Entertainment</option>
                    <option value="Sports"> Sports</option>
                    <option value="Technology">Technology</option>
                    <option value="Uncategorized">Uncategorized</option>
				</select>
			</div>
			<div class="mb-3">
				<select class="form-select form-control" name="location" required="" >
					<option selected disabled="">Location</option>
					<option value="Ogun State">Ogun State</option>
					<option value="Nigeria">Nigeria</option>
					<option value="Africa">Africa</option>
					<option value="World">World</option>
				</select>
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput11" class="form-label">Reported by</label>
				<input type="text" class="form-control" name="name" id="exampleFormControlInput11" placeholder="full name" value="<?php echo $name; ?>"  required="">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlInput11" class="form-label">Choose Pictre</label>
				<input type="file" class="form-control" name="image" id="exampleFormControlInput11" placeholder="full name"  required="">
			</div>
			
			<input type="hidden" name="fullname" value="<?php echo $name; ?>" >
			<input type="hidden" name="email" value="<?php echo $ademail; ?>" >
			<label class="form-label" > News Details</label>
			<textarea id='edit' name="editor_content" style="margin-top: 30px;" cols="20" placeholder="Type some text">
				
			</textarea>
			<br>
			<div class="col-sm" style="padding-left:10%;" >
				<button type="submit" class="btn btn-success text-white" style="float: right;" >Post News</button>
			</div>
			<br><br>
		</form>
		
	</div>
</section>

<?php include "footer.php"; ?>

<script src="../assets/js/jquery.min.js"></script>

<script src="../assets/js/popper.min.js"></script>

<script src="../assets/js/bootstrap.min.js"></script>

<script src="../assets/js/jquery.meanmenu.js"></script>

<script src="../assets/js/owl.carousel.min.js"></script>

<script src="../assets/js/jquery.magnific-popup.min.js"></script>

<script src="../assets/js/nice-select.min.js"></script>

<script src="../assets/js/jquery.ajaxchimp.min.js"></script>

<script src="../assets/js/form-validator.min.js"></script>

<script src="../assets/js/contact-form-script.js"></script>


<script type="text/javascript" src="../DataTables/datatables.min.js"></script>
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript"
src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>
<script type="text/javascript" src="js/froala_editor.min.js"></script>
<script type="text/javascript" src="js/plugins/align.min.js"></script>
<script type="text/javascript" src="js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="js/plugins/image.min.js"></script>
<script type="text/javascript" src="js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="js/plugins/link.min.js"></script>
<script type="text/javascript" src="js/plugins/lists.min.js"></script>
<script type="text/javascript" src="js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="js/plugins/table.min.js"></script>
<script type="text/javascript" src="js/plugins/video.min.js"></script>
<script type="text/javascript" src="js/plugins/url.min.js"></script>
<script type="text/javascript" src="js/plugins/entities.min.js"></script>

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/main.js"></script>
<script>
	$(document).ready(function() {
		
		$('#example').DataTable();

		var deleteLinks = document.querySelectorAll('.del');

		for (var i = 0; i < deleteLinks.length; i++) {
			deleteLinks[i].addEventListener('click', function(event) {
				event.preventDefault();

				var choice = confirm(this.getAttribute('data-confirm'));

				if (choice) {
					window.location.href = this.getAttribute('href');
				}
			});
		}
	} );
	(function () {
		const editorInstance = new FroalaEditor('#edit', {
			enter: FroalaEditor.ENTER_P,
			placeholderText: 'Enter News Information',
			 zIndex: 10,
			 heightMin: 350
		})
	})()
</script>
</body>
</html>