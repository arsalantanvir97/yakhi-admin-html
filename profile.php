<?php
$title = "My Profile";
$pg = "My Profile";
include('header.php');
include('nav.php');

?>
<div class="app-content content  dashboard">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration" class="my-profile">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded">
                            <div class="card-body p-md-2 p-lg-3 p-xl-4">
                                <div class="page-title">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1>Profile</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="user-block">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-10 col-md-8 col-xl-5 light-primary-bg text-center">
                                            <div class="d-flex justify-content-center mb-3">
                                                <div class="profile-img text-center">
                                                    <img src="images/avatar.png" class="img-fluid ml-0" alt="">
                                                    <div class="primary-text text-center mt-2">
                                                        <a href="edit-profile.php" class="">Edit Profile</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row detail-row d-flex align-items-center justify-content-around px-5">
                                                <div class="col-md-6 col-12 text-left mb-1 lablename">
                                                    <label for="">First Name:</label>
                                                </div>
                                                <div class="col-md-6 col-12 text-left mb-1">Mark</div>
                                                <div class="col-md-6 col-12 text-left mb-1 lablename">
                                                    <label for="">Last Name:</label>
                                                </div>
                                                <div class="col-md-6 col-12 text-left mb-1">Williams</div>
                                                <div class="col-md-6 col-12 text-left mb-1 lablename">
                                                    <label for="">Email Address:</label>
                                                </div>
                                                <div class="col-md-6 col-12 text-left mb-1">test@email.co</div>
                                            </div>
                                            <div class="row detail-row d-flex align-items-center mb-1 pt-2">
                                                <div class="col-12">
                                                    <a href="update-password.php" class="btn btn-primary">Change Password</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>