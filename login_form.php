<?php
#
if (isset($_POST["login_user_with_product"])) {
	//this is product list array
	$product_list = $_POST["product_id"];
	//here we are converting array into json format because array cannot be store in cookie
	$json_e = json_encode($product_list);
	//here we are creating cookie and name of cookie is product_list
	setcookie("product_list", $json_e, strtotime("+1 day"), "/", "", "", TRUE);
}
?>

<div class="wait overlay">
	<div class="loader"></div>
</div>
<div class="container-fluid">
	<!-- row -->


	<div class="login-marg">
		<!-- Billing Details -->


		<!-- /Billing Details -->


		<form action="login.php" method="POST" id="login" class="login100-form ">
			<div class="billing-details jumbotron">
				<div class="section-title">
					<h2 class="login100-form-title p-b-49">Login Here</h2>
				</div>


				<div class="form-group">
					<label for="email">Email</label>
					<input class="input input-borders" type="email" name="email" placeholder="Email" id="password" required>
				</div>

				<div class="form-group">
					<label for="email">Password</label>
					<input class="input input-borders" type="password" name="password" placeholder="password" id="password" required>
				</div>

				<div class="text-pad">
					<a href="#">
						forget password ?
					</a>

				</div>

				<input class="primary-btn btn-block" type="submit" Value="Login">

				<div class="panel-footer">
					<div class="alert alert-danger">
						<h4 id="e_msg"></h4>
					</div>
				</div>
			</div>

		</form>

		<!-- Shiping Details -->

		<!-- /Shiping Details -->

		<!-- Order notes -->

		<!-- /Order notes -->
	</div>

	<!-- Order Details -->

	<!-- /Order Details -->

	<!-- /row -->
</div>
<script src="js/jquery.min.js"></script>
<!-- <script>
	$(document).ready(function() {
		$("#login").on("submit", function(event) {
			event.preventDefault();
			var form = $(this);
			$(".overlay").show();
			$.ajax({
				url: "login_fail.php",
				method: "POST",
				data: form.serialize(),
				success: function(data) {
					if (data == "false") {
						// $(".alert-danger").text("Please fill in the valid information.");
						// $(".overlay").hide();
						alert("Please fill in the valid information.");
					} else {
						$(this).submit();
					}
				},
				error: function(jqXHR, textStatus, errorThrown) {
					alert('Error: ' + textStatus + ' ' + errorThrown);
				}
			})
		})
	})
</script> -->