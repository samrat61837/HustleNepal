
<?php include '../layout/admin/adminheader.php'; 
    $articleId = $_GET['data'];
    $articleInfo=deleteArticleById($conn,$articleId);
       if($nudel = deleteArticleById($conn,$articleId))
       {
          $_SESSION['showmsg'] = successMessage(" Article has been Deleted Successfully !!! ");
          redirection('manageArticle.php');
       } 
       else{
       	echo 'lalalal';
       }
  
     
     
        
 ?>