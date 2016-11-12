<?php
$this->load->helper('url');
?>
<?php
$this->load->helper('url');
?>
<!-- header -->
<div class="banner-1">
<div class="container">
      <div class="header-1">
                <div class="logo1">
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
        <div>
  </div>

<?php
if (isset($this->session->userdata['logged_in'])) {
    $username = ($this->session->userdata['logged_in']['username']);
    $email = ($this->session->userdata['logged_in']['email']);
} else {
    header("location: login");
}
?>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/loginSignup.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
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