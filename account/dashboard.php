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

$fetcher = fetcher();

?>
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


<section class="about-area ptb-50">
	<div class="container">
		<table id="example" class="display" style="width:100%">
			<thead>
				<tr>
					<th>heading</th>
					<th>category</th>
					<th>location</th>
					<th>actor</th>
					<th>time</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($fetcher as $key => $value) {
					echo "
					<tr> 
					<td>".$value['heading']."</td>
					<td>".$value['category']."</td>
					<td>".$value['location']."</td>
					<td>".$value['actor']."</td>
					<td>".$value['time']."</td>
					<td><a href='fetcher.php?datas=Edit&id=".$value['id']."&".microtime()."'><span class='fa fa-eye text-success' ></span></a></td>
					<td><a href='fetcher.php?datas=Delete&id=".$value['id']."&".microtime()."' class='del' data-confirm='Are you sure to delete this item?'><span class='fa fa-trash text-danger' ></span></a></td>
					</tr>";
				}
				?>


			</tbody>
		</table>
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

<script src="../assets/js/wow.min.js"></script>

<script src="../assets/js/main.js"></script>
<script>
	$(document).ready(function() {
		var eventFired = function ( type ) {
			var n = $('#demo_ixanfo')[0];
			n.innerHTML += '<div>'+type+' event - '+new Date().getTime()+'</div>';
			n.scrollTop = n.scrollHeight;      
		}

		$('#example').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );

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

</script>
</body>
</html>