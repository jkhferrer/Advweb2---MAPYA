<html>
<?php
if (isset($this->session->userdata['logged_in'])) {

    header("location: http://localhost/login/index.php/user_authentication/user_login_process");
}
?>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/loginSignup.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/Travel_Lite/assests/css/bootstrap.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<?php
if (isset($message_display)) {
    echo "<div class='message'>";
    echo $message_display;
    echo "</div>";
}
?>
<style>
 #main {    display: block;
            margin: auto;  
            width: 0%;}
 #logo {
    float:left;
    clear:both;
 }   
 #color{
    color: black;
    border-radius:0;
 } 

   
   </style>
<div id="logo">
<<<<<<< HEAD
   <img src="http://localhost/Travel_Lite/assests/images/lite.png"  alt="" height="500" width="500"  />
    <!--
    <a href="<?php $this->load->helper('url'); echo base_url('index.php');?>">
    //-->
=======
    <a href="<?php $this->load->helper('url'); echo base_url('index.php');?>"><img src="http://localhost/Travel_Lite/assests/images/lite.png"  alt="" height="500" width="500"  />
>>>>>>> 514ca1e6f7ce9fa3b5db3b334a31d9c943e5cef9
</div>

<div id="main">
    <div id="login">
        <h2>Login Form</h2>
        <hr/>
        <?php
            $this->load->helper('form');
            echo form_open('index.php/user_authentication/user_login_process');
        ?>
        <?php
        echo "<div class='error_msg'>";
        if (isset($error_message)) {
            echo $error_message;
        }
        echo validation_errors();
        echo "</div>";
        ?>
        <label>UserName :</label>
        <input type="text" name="username" id="name" placeholder="username"/><br /><br />
        <label>Password :</label>
        <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
        <input type="submit" value=" Login " name="submit"/><br />

        <h5>Don't have an account? <a href="http://localhost/Travel_Lite/index.php/user_authentication/new_user_registration" style="color:blue;">Sign up</a></h5>
        <?php echo form_close(); ?>
        <a href="http://localhost/Travel_Lite/index.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-home"></span> Home
        </a>
       
    </div>
</div>

 
</body>
</html>