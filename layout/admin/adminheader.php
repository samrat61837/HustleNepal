

<?php
    session_start();
    include '../imp/call.php';
      if(!checkAdminLogin())
   {
      redirect('../adminpages/login.php');
      $_SESSION['showmsg'] = successMessage("Invalid Name or Password");

    }
?>

<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Hustle Nepal</title>
<meta charset="utf-8">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="apple-touch-icon" sizes="76x76" href="../imgaes/demo/apple-icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="../layout/styles/Popup.css" rel="stylesheet" type="text/css" media="all">
<script src="../ckeditor_4.9.2_full/ckeditor/ckeditor.js" > </script>
</head>
<body id="top">
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="adindex.php"><i><img src='../images/demo/hustle.png'></i></a></li>
        <li><a id='gotodown' href="#footer">About</a></li>
        <li><a id='gotodown' href="#footer">Contact</a></li>
        <!-- <li><a href="login.php">Login</a></li>  -->
       <!--  <li><a onclick="document.getElementById('modal-wrapper').style.display='block'">Register</a></li>  -->
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fa fa-phone"></i> +977-9841211522</li>
        <li><i class="fa fa-envelope-o"></i>hustlnepal@gmail.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>





 <div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="#"><b>Hustle Nepal</b></a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
<!--         <li><a class="drop" href="#">Menu</a>
          <ul>
            <li><a href="adgallery.php">Gallery</a></li>
            <li><a href="view.php">View User</a></li>
            <li><a href="uploadArticle.php">Add Article</a></li>
            <li><a href="upload.php">Upload Photo</a></li>
          </ul>
        </li> -->
        <li><a class="drop" href="#">Menu</a>
          <ul>
            <li><a href="view.php">View User</a></li>
            <li><a class="drop" href="#">Gallery</a>
              <ul>
                <li><a href="upload.php">Upload Photo</a></li>
                <li><a href="adgallery.php">View Gallery</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">Articles</a>
              <ul>
                <li><a href="uploadArticle.php">Upload Article</a></li>
                <li><a href="adArticleList.php">View Article</a></li>
                <li><a href="manageArticle.php">Manage Article</a></li>
              </ul>
            </li>
          </ul>
          <li><a class="drop" href="#"><i class="fal fa-sign-out"></i></a>
              <ul>
                  <li><a href="adminLogout.php">logout</a></li>
              </ul>
          </li>
        </li>
      </ul>
    </nav>
  </header>
</div> 

<!-- <button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
Open Popup</button> -->
<!-- <div class="wrapper row3">
<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="POST" id="addUserInfo">
        
    <div class="imgcontainer">
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
      <img src="../images/demo/1.png" alt="Avatar" class="avatar">
      <h1>Your Credentials</h1>
    </div>

    <div class="container">
              <input type="text" placeholder="Enter Your Name" name="user_name" id="user_name" required>
              <span style="color:red;" id="fname-error"></span>
              <input type="email" placeholder="Enter Email" name="user_email" id="user_email" required>  
              <input type="number" placeholder="Enter Age" name="user_age" id="user_age" required>       
              <button type="submit" name="submit" value="Submit">Submit</button>
       <input type="checkbox" style="margin:13px 15px;"> Remember me      
      <a href="#" style="text-decoration:uppercase; float:right; margin-right:17px; margin-top:13px;">Forgot Password ?</a> 
    </div>
    
  </form>
  
</div>
</div> -->

<script type="text/javascript">
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//Form validation
 // $('#addUserInfo').submit(function(){
 //      var filter = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
 //      var number= /[0-9 -()+]+$/;
 //      var alpha= /^[a-zA-Z!-”$%&’()*\+,\/;\[\\\]\/\s^_.`{|}~]+$/;

 //      var user_name=$('#user_name').val();
 //      var user_email=$('#user_email').val();
 //      var user_age=$('#user_age').val();


 //        if(!alpha.test(user_name))
 //          {
 //            $("#user_name").css({"border": "1px solid red"});
 //            $('#user_name').focus();
 //            $('#name-error').html('Plese Enter Name');
 //            setTimeout(function() {
 //               $('#user_name').css({"border": "1px solid #ddd"});
 //               $('#name-error').html('');
 //           }, 5000);
 //                return false;
 //          }


 //        if(!filter.test(user_email))
 //          {
 //            $("#user_email").css({"border": "1px solid red"});
 //            $('#user_email').focus();
 //            $('#email-error').html('Plese Enter Email Name');
 //            setTimeout(function() {
 //               $('#user_email').css({"border": "1px solid #ddd"});
 //               $('#email-error').html('');
 //           }, 5000);
 //                return false;
 //          }


 //        if(!number.test(user_age))
 //        {
 //          $("#user_age").css({"border": "1px solid red"});
 //            $('#user_age').focus();
 //            $('#age-error').html('Plese Enter age');
 //            setTimeout(function() {
 //               $('#user_age').css({"border": "1px solid #ddd"});
 //               $('#age-error').html('');
 //           }, 5000);
 //                return false;
 //        }

 //        else
 //        {
 //            $('#addUserInfo').submit();        
 //        }
 //   });     
</script>

