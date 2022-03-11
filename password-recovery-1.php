<?php
$title = "Password Recovery";
$pg = "password-recovery";
include('header.php');
?>

<section class="login-wrap">
	<div class="container m-auto">
		<div class="login-inner">
			<div class="row">
				<div class="col-lg-12 col-12 ">
					<div class="right">
						<div class="logo text-center"><img src="images/login-logo.png" alt="" /></div>
						<h1 class="">Password Recovery</h1>
						<form action="password-recovery-2.php">
							<div class="row">
								<div class="col-12 form-group position-relative">
									<label for="">Email Address<span class="text-danger">*</span></label>
									<input type="email" class="form-control" placeholder="Enter Email Address">
									<p class="pl-2 pt-1 text-dark">Please Enter Your Email Address</p>
									<p class="pl-2 pt-1 primary-text d-none">The email address does not exist</p>
								</div>
							</div>
							<div class="row">
								<div class="d-block col-12 text-center mt-1">
									<button type="submit" class="btn btn-primary btn-login">Continue</button>
								</div>
							</div>
							<div class="row">
								<div class="d-block col-12 text-center mt-2">
									<a href="login.php" class="primary-text font-weight-bold">Back To Login</a>
								</div>
							</div>
						</form>						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include('footer.php') ?>