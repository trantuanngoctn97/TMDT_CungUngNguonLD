<?php
if (isset($_SESSION['usernameJK'])) {
	if (isset($_SESSION['usernameEmployer'])) {
	    unset($_SESSION["usernameEmployer"]);
	  }
 	$usernameJK = $_SESSION['usernameJK'];
}


if (isset($_SESSION['usernameEmployer'])) {
	if (isset($_SESSION['usernameJK'])) {
	    unset($_SESSION["usernameJK"]);
	  }
	$usernameEmployer = $_SESSION['usernameEmployer'];
}

 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Cung ứng nguồn lao động</title>
		<!-- Bootstrap core CSS -->
		<link rel="stylesheet" type="text/css" href="./public/vendor/bootstrap/css/bootstrap.min.css">
		<!-- Custom fonts for this template -->
		<link href="./public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
		<!-- Custom styles for this template -->
		<link href="./public/css/clean-blog.min.css" rel="stylesheet">
		<style type="text/css">
			.btn-search {
			  background: #424242;
			  border-radius: 0;
			  color: #fff;
			  border-width: 1px;
			  border-style: solid;
			  border-color: #1c1c1c;
			}
			.btn-search:link, .btn-search:visited {
			  color: #fff;
			}
			.btn-search:active, .btn-search:hover {
			  background: #1c1c1c;
			  color: #fff;
			}
			.input-group-btn{
				float: right;
			}

		</style>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
			<div class="container">
				<a class="navbar-brand" href="index.php">Trang chủ</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				Menu
				<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<!-- <li class="nav-item">
							<a class="nav-link" href="index.php">Trang chủ</a>
						</li> -->
						<li class="nav-item">
							<a class="nav-link" href="<?= isset($usernameEmployer) ? 'employerPost.php' : 'employerRegister.php' ?>" <?= isset($usernameJK) ? 'data-toggle="modal" data-target="#jobseekerRegister" href="javascript:void(0)"' : '' ?>>Nhà tuyển dụng</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= isset($usernameEmployer) ? 'data-toggle="modal" data-target="#jobseekerRegister" href="javascript:void(0)"' : 'href="jobseekerRegister.php"' ?>>Người tìm việc</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">Thông tin</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Liên hệ</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= isset($usernameEmployer) ? 'data-toggle="modal" data-target="#employerLogout"' : '' ?> href="javascript:void(0)" style="font-family: tahoma;"> 
								<?= isset($usernameEmployer) ? 'Logout, '.$usernameEmployer : '' ?>					
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" <?= isset($usernameJK) ? 'data-toggle="modal" data-target="#employerLogout"' : '' ?> href="javascript:void(0)" style="font-family: tahoma;"> <?= isset($usernameJK) ? 'Logout, '.$usernameJK : '' ?>					
							</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

	<!-- Logout Modal-->
    <div class="modal fade" id="employerLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn đã sẵn sàng kết thúc phiên làm việc hiện tại của mình dưới tên tài khoản .</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
            <a class="btn btn-primary" href="employerLogout.php">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>

    	<!-- Logout Modal-->
<!--     <div class="modal fade" id="jobseekerLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bạn muốn đăng xuất?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Chọn "Đăng xuất" bên dưới nếu bạn đã sẵn sàng kết thúc phiên làm việc hiện tại của mình dưới tên tài khoản .</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
            <a class="btn btn-primary" href="jobseekerLogout.php">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div> -->

    <!-- Logout Modal-->
    <div class="modal fade" id="jobseekerRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bạn muốn rời đi?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Bạn phải đăng xuất khỏi tài khoản  để thực hiện hành động này</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
            <a class="btn btn-primary" href="employerLogout.php">Đăng xuất</a>
          </div>
        </div>
      </div>
    </div>