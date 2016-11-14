<<<<<<< HEAD

=======
<html>
>>>>>>> parent of a9ff68c... Revert "qwe"
<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>
<<<<<<< HEAD

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
=======
<head>
    <title>Membership</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/loginSignup.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/bootstrap.css">

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>


<body>


<div class="container">

    <div class="row">
        <div class ="col-lg-6">
        <img src="http://localhost/Travel_Lite/assests/images/lite.png" class="img-responsive"  height="500" width="500"  />
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-lg-6">  
            <div class="col-lg-12">           
                    <h2>Membership</h2>
                    <p><strong>Username: </strong> <?php echo $username; ?> </p>
                    <p><strong>Email : </strong> <?php echo $email; ?> </p>
                    <br>                     
            </div>            
           
                <div class="col-lg-6">                                
                   <a href="http://localhost/Travel_Lite/index.php" class="btn btn-info btn-lg">
                          <span class="glyphicon "></span> Home
                   </a>
                </div>
                <div class="col-lg-6 ">                                    
                    <a href="logout" class="btn btn-info btn-lg">
                      <span class="glyphicon "></span> Logout
                    </a>
                </div>                
            </div>
    </div>               
</div>      
>>>>>>> parent of a9ff68c... Revert "qwe"
</body>
</html>