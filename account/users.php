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
$fetcher = fetcherAdmin();

?>
<div class="page-title-area">
	<div class="container">
		<div class="page-title-content">
			<button type="button" class="btn btn-success text-white" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Add New User  <span class="fa fa-user" ></span></button>
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
                <th>fullname</th>
                <th>email</th>
                <th>password</th>
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
			<td>".$value['fullname']."</td>
			<td>".$value['email']."</td>
			<td>".$value['password']."</td>
			<td>".$value['time']."</td>
			<td><a href='fetcher.php?datas=Edituser&id=".$value['id']."&".microtime()."'><span class='fa fa-eye text-success' ></span></a></td>
			<td><a href='fetcher.php?datas=DeleteUser&id=".$value['id']."&".microtime()."' class='del' data-confirm='Are you sure to delete this item?'><span class='fa fa-trash text-danger' ></span></a></td>
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