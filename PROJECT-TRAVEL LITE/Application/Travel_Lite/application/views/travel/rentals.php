<<<<<<< HEAD
<<<<<<< HEAD
<?php
$this->load->helper('url');
?>

=======
>>>>>>> e5a800a1a2967fdbcd31c47c1c12ee6a1e272010
=======

<?php
$this->load->helper('url');
?>
>>>>>>> c17befba3f1569a59ed56f88afc6765dbf3fbd14
<!-- header -->
<div class="banner-1">
<div class="container">
	  <div class="header-1">
				<div class="logo1">
					<a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>assests/images/lite.png" height="0" width="300" class="img-responsive" alt="" /></a>
				</div>
				<div class="head-nav">
						<span class="menu"> </span>
							<ul class="cl-effect-16">
								<li>
									<a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME
									</a>
								</li>
								<li>
									<a href="<?php  echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a>
								</li>
								<li class="active"><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php  echo base_url('index.php/contacts/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
									<div class="clearfix"> </div>
							</ul>
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
<!-- header -->
=======
>>>>>>> e5a800a1a2967fdbcd31c47c1c12ee6a1e272010
<!-- header -->

<!-- transaction -->
<div class="transaction">
<div class="container">
	<div class="hover11 column">
	<center><label>Choose your Vehicle: </label></center>
		<div class="bus">
			<figure><img src="<?php echo base_url(); ?>assests/images/bus.png" style="height:200px; width:400px;"/></figure>

				<form action="<?php echo base_url('index.php/transaction/view');?>">
				<button class="private">Private </button>
				</form>

				<button class="public"> Public </button>
			
		</div>
		<div>
			<figure><img src="<?php echo base_url(); ?>assests/images/van.png" style="height:200px; width: 350px;"/></figure>
		</div><br/>
		  </div>
			<div class="clearfix"> </div>
		</div>
	</div>