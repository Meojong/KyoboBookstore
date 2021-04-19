<?php
session_start();
error_reporting(E_ALL);

ini_set("display_errors", 1);
?>
<script type="text/javascript">
	function search(){
		var src = document.getElementById('search').value;
		location.href="product.php?search="+src;
	}

</script>
<header class="header1">
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="wrap_header">
				<!-- Logo -->
				<a class="logo" href="index.php"><img alt="IMG-LOGO" src="images/aladin-logo.gif"></a>
				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="product.php?cat1=도서&cat2=소설&cat3=한국소설"><b>도서목록</b></a>
								<ul class="sub_menu">
									<li><a href="product.php?cat1=도서&cat2=소설&cat3=한국소설">한국소설</a></li>
									<li><a href="product.php?cat1=도서&cat2=소설&cat3=중국소설">중국소설</a></li>
									<li><a href="product.php?cat1=도서&cat2=소설&cat3=일본소설">일본소설</a></li>
									<li><a href="product.php?cat1=도서&cat2=소설&cat3=영미소설">영미소설</a></li>
								</ul>
							</li>
							<li style="list-style: none"><span class="linedivide2"></span></li>
							<li>
								<a href="product.php?cat1=외국도서&cat2=영미도서&cat3=문학"><b>출판사목록</b></a>
								<ul class="sub_menu">
									<li><a href="product.php?cat1=도서&cat2=경제/경영&cat3=경영이론&publisher=청람">청람</a></li>
									<li><a href="product.php?cat1=도서&cat2=경제/경영&cat3=경영이론&publisher=창비">창비</a></li>
									<li><a href="product.php?cat1=도서&cat2=경제/경영&cat3=경영이론&publisher=자음과모음">자음과모음</a></li>
									<li><a href="product.php?cat1=도서&cat2=경제/경영&cat3=경영이론&publisher=문학동네">문학동네</a></li>
									<li><a href="product.php?cat1=도서&cat2=경제/경영&cat3=경영이론&publisher=디앤씨미디어">디앤씨미디어</a></li>
									<!-- <li><a href="product.php?cat1=외국도서&cat2=일본도서&cat3=엔터테인먼트">일본도서</a></li> -->
								</ul>
							</li>
							<li style="list-style: none"><span class="linedivide2"></span>
							</li>
							<li>
								<a href="about.php"><b>About</b></a>
							</li>
						</ul>
					</nav>
				</div>
				<!-- Header Icon -->
				<div class="header-icons">
					<!-- Search -->
					<div class="header-wrapicon2">
						<img alt="ICON" class="header-icon1 js-show-header-dropdown" src="images/icons/icon-header-00.png">
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem" style="margin:0px">
								<li class="header-cart-item">
									<div class="pos-relative bo11 of-hidden">
										<input id="search" class="s-text7 p-l-23 p-r-50" name="search-product" placeholder="Search" style="width:85%; height: 32px;" type="text">
										 <button onclick="search();" class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4" style="background-color:white;">
											 <i aria-hidden="true" class="fs-13 fa fa-search"></i>
										 </button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<span class="linedivide1"></span>
					<?php if (isset($_SESSION['id'])){
						if ($_SESSION['id']=='admin') {
							echo '
				 <div class="login_">
					<a class="login_">
						<img alt="ICON" class="header-icon1" src="images/icons/icon-header-01.png">
					</a>
					<ul class="sub_menu_1">

							<li><a href="logout.php">로그아웃</a></li>
							<li><a href="order_list.php">구매내역 보기</a></li>
							<li><a href="admin.php">관리자 페이지</a></li>
							</ul></div>';
						}else {
							echo '
				 <div class="login_">
					<a class="login_">
						<img alt="ICON" class="header-icon1" src="images/icons/icon-header-01.png">
					</a>
					<ul class="sub_menu_1">

							<li><a href="logout.php">로그아웃</a></li>
							<li><a href="order_list.php">구매내역 보기</a></li>
							</ul></div>';
						}

					}else {echo '
					    <div class="login_">
					    <a href="login.html" class="login_">
					    <img alt="ICON" class="header-icon1" src="images/icons/icon-header-01.png">
					    </a></div>';
					}?>


					  <span class="linedivide1"></span>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a class="logo-mobile" href="index.php"><img alt="IMG-LOGO" src="images/logo.png"></a>
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">

					<div class="header-wrapicon2">
						<img alt="ICON" class="header-icon1 js-show-header-dropdown" src="images/icons/icon-header-00.png">
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem" style="margin:0px">
								<li class="header-cart-item">
									<div class="pos-relative bo11 of-hidden">
										<input class="s-text7 p-l-23 p-r-50" name="search-product" placeholder="Search" style="width:85%; height: 32px;" type="text">
										<button onclick="search(); class="flex-c-m size5 ab-r-m color1 color0-hov trans-0-4" style="background-color:white;">
											<i aria-hidden="true" class="fs-13 fa fa-search"></i>
										</button>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<span class="linedivide1"></span>
					<?php if (isset($_SESSION['id'])){
					     echo '
					<a href="logout.php">';}else{
					echo '<a href="login.html">';
					     }?>
						<img alt="ICON" class="header-icon1" src="images/icons/icon-header-01.png">
					</a>
					<span class="linedivide1"></span>
				</div>
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box"><span class="hamburger-inner"></span></span>
				</div>
			</div>
		</div>
		<!-- Menu Mobile -->
		<div class="wrap-side-menu">
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-menu-mobile">
						<a href="product.php?cat1=도서&cat2=소설&cat3=한국소설">도서</a>
					</li>
					<li class="item-menu-mobile">
						<a href="product.php?cat1=외국도서&cat2=영미도서&cat3=문학">외국도서</a>
					</li>
					<li class="item-menu-mobile">
						<a href="about.php">About</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
