<?php

function redirect($path)
{
	return header('location:'.$path);

}


 function redirection($path)
 {
	
 	echo '<script>window.location.href="'.$path.'";</script>';
}


function checkAdminLogin()
{
	if(isset($_SESSION['admin']['name']))
	{
		return true;
	}
	else
	{
		return false;
	}
}


function successMessage($msg)
{
 
 $successMsg = '<div class="alert alert-danger alert-dismissable center">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  '.$msg.'
 </div>';

 return $successMsg;
}


function showMSG()
{
	if(isset($_SESSION['showmsg']))
	{
		echo $_SESSION['showmsg'];
	}
	unset($_SESSION['showmsg']);
}