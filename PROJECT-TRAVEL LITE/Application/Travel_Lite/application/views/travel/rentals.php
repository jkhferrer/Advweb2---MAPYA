<<<<<<< HEAD
<<<<<<< HEAD
<?php
$this->load->helper('url');
?>

=======
>>>>>>> parent of a9ff68c... Revert "qwe"
<!-- header -->
<div class="banner-1">
<div class="container">
	  <div class="header-1">
				<div class="logo1">
<<<<<<< HEAD
					<a href="/index.html"><img src="<?php echo base_url(); ?>assests/images/lite.png" height="0" width="300" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">
					<span class="menu"> </span>
						<ul class="cl-effect-16">
							<li><a href="<?php echo base_url('index.php/index/view');?>" data-hover="HOME">HOME</a></li>
								<li class="active"><a href="<?php echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
								<li><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php echo base_url('index.php/contact/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
												
								<?php

								if (isset($this->session->userdata['logged_in']))
								{

								?>

								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/admin_page/view');?>" data-hover="PROFILE">PROFILE</a></li>

								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/user_authentication/logout');?>" data-hover="LOGOUT">LOGOUT</a></li>

								
				                <?php
				                }
				                else
				                {
				                ?>
				                <li><a href="<?php $this->load->helper('url'); echo base_url('index.php/user_authentication/user_login_process');?>" data-hover="LOG IN">LOG IN</a></li>

				                <?php
				                }
				                ?>
								
					<a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>assests/images/lite.png" height="0" width="300" class="img-responsive" alt="" /></a>
=======
					<a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>assests/images/lite.png" height="0" width="300" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-16">
								<li><a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
								<li class="active"><a href="<?php $this->load->helper('url'); echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/contact/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
									<div class="clearfix"> </div>
							</ul>
>>>>>>> parent of a9ff68c... Revert "qwe"
				</div>
						<div class="clearfix"> </div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
			</div>
			</div>
  </div>
<<<<<<< HEAD
<<<<<<< HEAD
<!-- header -->
=======
=======
>>>>>>> parent of a9ff68c... Revert "qwe"
<!-- header -->
<div class="404">
<div class="container">
			<!--start-plans-404page---->
			<div class="error-page">
				<p>Under Construction! :(</p>
				<h3>404</h3>
				<a href="<?php echo base_url('index.php');?>" class="btn  btn-1c">Go home</a>
			</div>
			<!--End-plans-404page---->
			<div class="clearfix"> </div>
		</div>
<<<<<<< HEAD
	</div>
>>>>>>> a5d6da321f2693c9a3bc273f98c8fc8ebd03c4b9
=======
	</div>
>>>>>>> parent of a9ff68c... Revert "qwe"
