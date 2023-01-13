<!-- Initial Nav -->
	<nav class="navbar my-nav navbar-expand-lg">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#" class="site-logo" aria-label="homepage">
        <img src="img/logo/logo.png" alt="logo">
      </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-uppercase">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="#">home</a>
	        </li>
	        <li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" data-target="dropdown_target" href="#">product</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_target">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="dropdown-item"><strong>electronic</strong></a>
								<ul class="submenu dropdown-menu">
        								<li> <a class="dropdown-item text-dark" href="#"> television</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> refrigerator</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> washing machine</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> air conditioners</a></li>
        							</ul>
							</li>
							<!-- <div class="dropdown-divider"></div> -->
							<li class="nav-item">
								<a class="dropdown-item"><strong>fashion &amp; beauty</strong></a>
								<ul class="submenu dropdown-menu">
        								<li> <a class="dropdown-item text-dark" href="#"> accessories</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> bags</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> clothings</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> shoes</a></li>
        							</ul>
							</li>
							<!-- <div class="dropdown-divider"></div> -->
							<li class="nav-item">
								<a class="dropdown-item"><strong>camera &amp; photo</strong></a>
								<ul class="submenu dropdown-menu">
        								<li> <a class="dropdown-item text-dark" href="#"> DSLR</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Camera Phone</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Action Camera</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> Digital Camera</a></li>
        							</ul>
							</li>
							<li class="nav-item">
								<a class="dropdown-item"><strong>smartphone &amp; table</strong></a>
								<ul class="submenu dropdown-menu">
        								<li> <a class="dropdown-item text-dark" href="#"> apple</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> samsung</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> lg</a></li>
										<li> <a class="dropdown-item text-dark" href="#"> sony</a></li>
        							</ul>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" data-target="dropdown_target" href="#">pages</a>
					<ul class="submenu dropdown-menu">
        				<li> <a class="dropdown-item text-dark" href="about.php"> about us</a></li>
						<li> <a class="dropdown-item text-dark" href="#"> privacy policy</a></li>
						<li> <a class="dropdown-item text-dark" href="#"> terms &amp; conditions</a></li>
        			</ul>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#">blog</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#">faq</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link" href="#">contact</a>
				</li>
	      </ul>
	    </div>
	  </div>

	  <!-- MY ACCOUNT -->
	  <div class="account">
		<button onclick="myFunction()" class="dropbtn"><i class="far fa-user"></i></button>
		<div id="myDropdown" class="dropdown-content">
		  <a href="#">Sign in</a>
		  <a href="#">Join</a>
		</div>
	  </div>

	

	  <!-- ./MY ACCOUNT -->
			<div class="cart">
				<a type="button" class="btn btn-floating btn-sm" href="#" style="text-decoration: none; cursor: pointer;" title="View Cart">
					<i class="fas fa-shopping-cart"></i>
				</a>
			</div>
	</nav>
<!-- /.Initial Nav -->

<!-- Final Nav -->
	<nav class="navscroll navbar-default fixed-top" style="background-color: rgb(255 255 227);">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#" class="site-logo" aria-label="homepage">
	        <img src="img/logo/logo.png" alt="logo">
	     </a>
	  </div>
	  <!-- <div class="account" style="position: absolute; float:right;right:100px;top:20px">
		<button onclick="myFunction()" class="dropbtn"><i class="far fa-user"></i></button>
		<div id="myDropdown" class="dropdown-content">
		  <a href="#">Sign in</a>
		  <a href="#">Join</a>
		</div>
	  </div> -->
	  <div class="header-cart-1" style="">
         <a href="#" class="cart has-cart-data text-danger" id="cart-1" title="View Cart">
             <div class="cart-icon">
             	<i class="fas fa-shopping-cart"></i>
             </div>
         </a>
      </div>
	</nav>
<!-- /.Final Nav -->