	<!-- fixed-top-->
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
					</li>
					<li class="nav-item"> <a class="navbar-brand" href="dashboard.php"> <img class="brand-logo img-fluid" alt="stack admin logo" src="images/logo.png"> </a> </li>
					<li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
				</ul>
			</div>
			<div class="navbar-container content">
				<div class="collapse navbar-collapse" id="navbar-mobile">
					<ul class="nav navbar-nav mr-auto float-left">
					</ul>
					<ul class="nav navbar-nav float-right">
						<li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-bell"></i> <span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span> </a>
							<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
								
								<li class="dropdown-menu-header">
                                <h6 class="dropdown-header m-0 d-flex justify-content-between align-items-center"> <span class="grey darken-2">Notifications</span> <a href="notifications.php" class="primary-text float-right m-0">View all</a> </h6>
                            </li>
								<li class="scrollable-container media-list ps-container ps-theme-dark" data-ps-id="0554f11c-d50b-4f06-5276-40923f2d849c">
									<a href="javascript:void(0)">
										<div class="media pb-0">
											<div class="media-left align-self-start"><i class="fa fa-bell"></i>
											</div>
											<div class="media-body">
												<p class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean </p>
											</div>
											<small>
												<time class="media-meta primary-text" datetime="2015-06-11T18:29:20+08:00">2 hrs ago </time>
											</small>
										</div>
									</a>
									<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
										<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
									</div>
									<div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
										<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
									</div>
								</li>
								<li class="scrollable-container media-list ps-container ps-theme-dark" data-ps-id="0554f11c-d50b-4f06-5276-40923f2d849c">
									<a href="javascript:void(0)">
										<div class="media pb-0">
											<div class="media-left align-self-start"><i class="fa fa-bell"></i>
											</div>
											<div class="media-body">
												<p class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean </p>
											</div>
											<small>
												<time class="media-meta primary-text" datetime="2015-06-11T18:29:20+08:00">2 hrs ago </time>
											</small>
										</div>
									</a>
									<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
										<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
									</div>
									<div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
										<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
									</div>
								</li>
								<li class="scrollable-container media-list ps-container ps-theme-dark" data-ps-id="0554f11c-d50b-4f06-5276-40923f2d849c">
									<a href="javascript:void(0)">
										<div class="media pb-0">
											<div class="media-left align-self-start"><i class="fa fa-bell"></i>
											</div>
											<div class="media-body">
												<p class="media-heading">Lorem ipsum dolor sit amet, consectetur elit. Aenean </p>
											</div>
											<small>
												<time class="media-meta primary-text" datetime="2015-06-11T18:29:20+08:00">2 hrs ago </time>
											</small>
										</div>
									</a>
									<div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;">
										<div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div>
									</div>
									<div class="ps-scrollbar-y-rail" style="top: 0px; right: 0px;">
										<div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown dropdown-user nav-item">
							<a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
								<span class="avatar avatar-online"> <img src="images/avatar.jpg" alt="avatar"> </span>
								<span class="user-name">Mark Carson</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="profile.php"><i class="fa fa-user"></i>My Profile</a>
								<a class="dropdown-item" data-toggle="modal" data-target=".profile-logout"><i class="fa fa-sign-out-alt"></i>LogOut</a>
							</div>
						</li>
						<li class="nav-item d-none d-md-block">
							<a class="nav-link nav-menu-main menu-toggle hidden-xs is-active" href="#"><i class="ft-menu"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!--menu start here-->
	<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="nav-item <?php if ($pg == "Dashboard") { echo "active";} ?>"><a href="dashboard.php"><i class="fa fa-chart-area"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
				<li class="nav-item <?php if ($pg == "products" || $pg == "categories" || $pg=="attributes") {echo "active open";} else {echo "";} ?>"><a href="products.php"><i class="fa fa-box"></i><span class="menu-title" data-i18n="">Products</span></a>
					<ul class="menu-content" style="">
						<li class="<?php if($pg =="products") {echo "active";}?>"><a class="menu-item" href="products.php">Catalog</a></li>
                        <li class="<?php if($pg =="categories") {echo "active";} ?>"><a class="menu-item" href="categories.php">Categories</a></li>
                    </ul>
			</li>
				<li class="nav-item <?php if ($pg == "orders") { echo "active"; } ?>"><a href="orders.php"><i class="fa">
				<svg xmlns="http://www.w3.org/2000/svg" width="12.938" height="16.318" viewBox="0 0 12.938 16.318">
					<g id="shopping-bag_1_" data-name="shopping-bag (1)" transform="translate(-53.023)">
						<g id="Group_44" data-name="Group 44" transform="translate(53.023 3.219)">
						<g id="Group_43" data-name="Group 43">
							<path id="Path_99" data-name="Path 99" d="M65.954,111.242l-.729-9.182A1.147,1.147,0,0,0,64.086,101H62.647v2.133a.478.478,0,0,1-.956,0V101h-4.4v2.133a.478.478,0,0,1-.956,0V101H54.9a1.147,1.147,0,0,0-1.139,1.054l-.729,9.185a2.657,2.657,0,0,0,2.649,2.86h7.625a2.657,2.657,0,0,0,2.649-2.862Zm-4.308-4.676-2.472,2.472a.478.478,0,0,1-.676,0L57.34,107.88a.478.478,0,0,1,.676-.676l.821.82,2.134-2.134a.478.478,0,1,1,.676.676Z" transform="translate(-53.023 -101.005)" fill="#666"/>
						</g>
						</g>
						<g id="Group_46" data-name="Group 46" transform="translate(56.339)">
						<g id="Group_45" data-name="Group 45">
							<path id="Path_100" data-name="Path 100" d="M160.193,0a3.158,3.158,0,0,0-3.154,3.154v.065h.956V3.154a2.2,2.2,0,1,1,4.4,0v.065h.956V3.154A3.158,3.158,0,0,0,160.193,0Z" transform="translate(-157.039)" fill="#666"/>
						</g>
						</g>
					</g>
				</svg>


				</i><span class="menu-title" data-i18n="">Orders</span></a></li>
				<li class="nav-item <?php if ($pg == "users") { echo "active";} ?>"><a href="users.php"><i class="fa fa-user"></i><span class="menu-title" data-i18n="">Users</span></a></li>
				<li class="nav-item <?php if ($pg == "feedback") { echo "active"; } ?>"><a href="feedback.php"><i class="fa">
					<svg id="feedback_1_" data-name="feedback (1)" xmlns="http://www.w3.org/2000/svg" width="16.478" height="16.478" viewBox="0 0 10.478 10.478">
						<path id="Path_106" data-name="Path 106" d="M138.077,179.879c0,.008,0,.015,0,.023a4.464,4.464,0,0,1-4.6,4.3h-1.306a3.973,3.973,0,0,0,3.762,2.476h3.7a.307.307,0,0,0,.209-.532l-.84-.779a3.542,3.542,0,0,0,.938-2.393A3.644,3.644,0,0,0,138.077,179.879Z" transform="translate(-129.463 -176.198)" fill="#fff"/>
						<path id="Path_107" data-name="Path 107" d="M.1,6.855a.307.307,0,0,0,.209.532h3.7A3.851,3.851,0,0,0,8,3.7,3.867,3.867,0,0,0,4.011,0,3.886,3.886,0,0,0,0,3.7,3.491,3.491,0,0,0,.938,6.077ZM2.169,1.862H5.853a.307.307,0,1,1,0,.614H2.169a.307.307,0,0,1,0-.614Zm0,1.228H5.853a.307.307,0,1,1,0,.614H2.169a.307.307,0,1,1,0-.614Zm0,1.228H5.853a.307.307,0,1,1,0,.614H2.169a.307.307,0,1,1,0-.614Z" fill="#fff"/>
					</svg></i><span class="menu-title" data-i18n="">Feedback</span></a></li>
				<li class="nav-item <?php if ($pg == "taxes") { echo "active"; } ?>"><a href="taxes.php"><i class="fa">
					<svg xmlns="http://www.w3.org/2000/svg" width="16.477" height="16.477" viewBox="0 0 10.477 10.477">
					<g id="tax" transform="translate(-0.002 -0.001)">
						<path id="Path_108" data-name="Path 108" d="M343,11.626h1.785c-.323-.324-1.431-1.431-1.785-1.784Z" transform="translate(-335.981 -9.64)" fill="#fff"/>
						<path id="Path_109" data-name="Path 109" d="M10.172,223.005H.309a.307.307,0,0,0-.307.307v3.356a.307.307,0,0,0,.307.307h9.863a.307.307,0,0,0,.307-.307v-3.356A.307.307,0,0,0,10.172,223.005ZM3.44,224.151H2.928v1.985a.307.307,0,0,1-.614,0v-1.985H1.8a.307.307,0,0,1,0-.614H3.44a.307.307,0,0,1,0,.614Zm2.809,2.272a.307.307,0,0,1-.4-.179l-.11-.292H4.738l-.111.293a.307.307,0,1,1-.574-.217l.858-2.267a.36.36,0,0,1,.669.008l.848,2.259a.307.307,0,0,1-.179.4Zm2.43.02a.307.307,0,0,1-.25-.129l-.569-.8-.569.8a.307.307,0,1,1-.5-.357l.691-.968-.691-.968a.307.307,0,1,1,.5-.357l.569.8.569-.8a.307.307,0,1,1,.5.357l-.691.968.691.968A.307.307,0,0,1,8.679,226.443Z" transform="translate(0 -218.441)" fill="#fff"/>
						<path id="Path_110" data-name="Path 110" d="M73,447.721a.615.615,0,0,0,.614.614h6.262a.615.615,0,0,0,.614-.614v-.716H73Z" transform="translate(-71.506 -437.857)" fill="#fff"/>
						<path id="Path_111" data-name="Path 111" d="M80.492,2.6H78.22a.307.307,0,0,1-.307-.307V0h-4.3A.632.632,0,0,0,73,.635V3.95h7.49Zm-4.4.655H74.619a.307.307,0,0,1,0-.614h1.473a.307.307,0,1,1,0,.614Zm0-1.31H74.619a.307.307,0,0,1,0-.614h1.473a.307.307,0,1,1,0,.614Z" transform="translate(-71.506 0)" fill="#fff"/>
						<path id="Path_112" data-name="Path 112" d="M242.791,302.517h.543l-.271-.72Z" transform="translate(-237.821 -295.62)" fill="#fff"/>
					</g>
					</svg></i><span class="menu-title" data-i18n="">Taxes</span></a></li>
			</ul>
		</div>
	</div>

	<!--menu end here-->

<!-- Active Category Popup -->
<div class="modal fade profile-logout p-0" tabindex="" role="" aria-labelledby="" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="fa fa-question red"></i>
                            <h3>Are you sure you want to logout?
                            </h3>
                            <button type="submit" class="btn btn-secondary mr-1">yes</button>
                            <button type="submit" class="btn btn-primary ml-1" data-dismiss="modal" aria-label="Close">No</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

