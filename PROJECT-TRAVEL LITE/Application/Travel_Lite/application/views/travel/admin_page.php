
<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>

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
                                <li><a href="<?php echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a></li>
                                <li><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
                                <li class="active"><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
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
<div id="profile">
    <?php
    echo "Hello <b id='welcome'><i>" . $username . "</i> !</b>";
    echo "<br/>";
    echo "<br/>";
    echo "Welcome to Admin Page";
    echo "<br/>";
    echo "<br/>";
    echo "Your Username is " . $username;
    echo "<br/>";
    echo "Your Email is " . $email;
    echo "<br/>";
    ?>
    <b id="logout"><a href="logout">Logout</a></b>
</div>
<br/>
</body>
</html>