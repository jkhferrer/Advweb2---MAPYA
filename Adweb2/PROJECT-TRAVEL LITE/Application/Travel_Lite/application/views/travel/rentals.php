
<?php


?>
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
								<li><a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
								<li class="active"><a href="<?php $this->load->helper('url'); echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
								<li><a href="<?php $this->load->helper('url'); echo base_url('index.php/contacts/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
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
<!-- header -->

<!-- transaction -->
<div class="transaction">
<div class="container">
	<div class="hover11 column">
	<center><label>Choose your Vehicle: </label></center>
		<div class="bus">
			<figure><img src="<?php echo base_url(); ?>assests/images/bus.png" style="height:200px; width: 400px;"/></figure>
				<input class="private" type="button" value="Private"/> 
				<input class="public" type="button" value="Public"/> 
		</div>
		<div>
			<figure><img src="<?php echo base_url(); ?>assests/images/van.png" style="height:200px; width: 350px;"/></figure>
		</div><br/>
		  <input type="submit" value="Submit"><br/><br/>
		  </div>

	<div class="location">	
	<center><label>Choose your Destination: </label></center>
		<form action="###">
		<label>From: </label>
			  <select name="from">
				    <option value="placeholder" disabled selected>Departing From</option>
				    <option value="manila">Manila</option>
				    <option value="lucena">Lucena</option>
				    <option value="ilocos">Ilocos</option>
				    <option value="pampanga">Pampanga</option>
			  </select> &nbsp;

			  <label>To: </label>  
			  	<select name="to">
				  	<option value="placeholder" disabled selected >Arriving At</option>
				    <option value="manila" >Manila</option>
				    <option value="lucena" >Lucena</option>
				    <option value="ilocos">Ilocos</option>
				    <option value="pampanga">Pampanga</option>
			  </select><br>

			  <label>Time: </label>
			  	<select name="time">
				  	<option value="placeholder" disabled selected >Time</option>
				    <option value="8AM" >8:00AM</option>
				    <option value="1030AM" >10:30AM</option>
				    <option value="1PM">1:00PM</option>
				    <option value="3PM">3:00PM</option>
			  </select><br>

			  <label>Ticket Type: </label>
			  	<select name="ticket">
				  	<option value="placeholder" disabled selected >Ticket Type</option>
				    <option value="oneway" >One Way</option>
				    <option value="roundtrip" >Round Trip</option>
			  </select>
			  <br>
			  <input type="submit" value="Back"> &nbsp;
			  <input type="submit" value="Submit">
			</form>
			</div><br>

			<div class="payment">
			<form>
				 <label>Payment: </label>
			  	<select name="Payment">
				  	<option value="placeholder" disabled selected >Payment Type</option>
				    <option value="cash" >Cash</option>
				    <option value="creditCard" >Credit Card</option>
			  </select><br>
			   <input type="submit" value="Confirm">
			</form>


		</div>
			<div class="clearfix"> </div>
		</div>
	</div>