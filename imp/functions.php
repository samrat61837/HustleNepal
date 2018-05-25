<?php
	function addUser($conn,$data){
		$stmtInsert = $conn -> prepare("INSERT into tbl_user( user_email, user_name,  user_age)
										VALUES(:user_email, :user_name, :user_age)");
			$stmtInsert-> bindparam('user_email', $data['user_email']);
			$stmtInsert-> bindparam('user_name', $data['user_name']);
			$stmtInsert-> bindparam('user_age', $data['user_age']);
			if($stmtInsert->execute())
			{
				return true;
			}
				return false;
	}


	function retrieve($conn){
		$stmtSelect = $conn -> prepare("SELECT * FROM tbl_user");
		$stmtSelect -> execute();
		$stmtSelect -> setFetchMode(PDO::FETCH_ASSOC);
		return $stmtSelect->fetchAll();
		
	}

	function loginCheck($conn,$data){

	    $admin_name = $data['admin_name'];
	    	// print_r($admin_name);
	    	// exit();
	    $admin_password = $data['admin_password'];
	    // print_r($admin_password);
	    // exit();
	    $stmtSelect = $conn->prepare("SELECT * FROM tbl_admin WHERE admin_name=:admin_name 
	                            AND admin_password=:admin_password ");
	    $stmtSelect->bindParam('admin_name',$admin_name);
	    $stmtSelect->bindParam('admin_password',$admin_password);
	    if($stmtSelect->execute())
	    {
			if($stmtSelect->rowCount()>0){
				$stmtSelect->setFetchMode(PDO::FETCH_ASSOC);
		 		return $stmtSelect->fetch();
				//print_r($adminInfo['id']); 	  
				//   exit();
            }
        }  
    }



	function uploadPost($conn,$data,$path)
{


                               // Count total files
                     $countfiles = count($_FILES['image']['name']);
                   //  echo $countfiles;
                     

                     // Looping all files
                     for($i=0;$i<$countfiles;$i++){

                          $name ='';
                        $filename = $_FILES['image']['name'][$i];  
                     
                         $images = md5(rand(0000001,9999999));
                     //print_r($temp);
                    
                    
                      // Upload file
                    
                      move_uploaded_file($_FILES['image']['tmp_name'][$i],'../images/'.$images.time().$filename);
                      $store = $images.time().$filename;

                      $stmtInsert = $conn->prepare("INSERT INTO tbl_galleryq (up_text,img_name) VALUES (:up_text,:img_name)");

     $stmtInsert->bindParam('up_text', $data['up_text']);
     $stmtInsert->bindParam('img_name', $store);

     $stmtInsert->execute();
     

                     
                     }
                    
}

    


	function uploadArticle($conn,$data,$path)
	{    
	          //For Image
	          $image_name=$_FILES['image']['name'];
	          $src=$_FILES['image']['tmp_name'];
	          // print_r($_FILES);
	         
	          $newname=time();
	          $temp=explode(".", $image_name);
	          $new_name=$newname.".".$temp[1];
	          $db_image_name=$new_name;
	          $target_dir="../".$path;      
	          move_uploaded_file($src, $target_dir.$db_image_name);

	     

	     $stmtInsert = $conn->prepare("INSERT INTO tbl_article (article_title,article_image,article_intro,article_body,article_conclusion) 
	          VALUES (:article_t,:article_im,:article_i,:article_b,:article_c)");

	     $stmtInsert->bindParam('article_t', $data['article_t']);
	     $stmtInsert->bindParam('article_im', $db_image_name);
	     $stmtInsert->bindParam('article_i', $data['ArticleIntro']);
	     $stmtInsert->bindParam('article_b', $data['ArticleBody']);
	     $stmtInsert->bindParam('article_c', $data['ArticleCon']);
	     

	     if($stmtInsert->execute())
	     {
	          return true;
	     }
	     return false;
	}    



	function editArticlePost($conn,$data,$path)
	{    
	          //For Image
	          $image_name=$_FILES['image']['name'];
	          $src=$_FILES['image']['tmp_name'];
	          print_r($_FILES);
	                 
	         
	          $newname=time();
	          $temp=explode(".", $image_name);
	          $new_name=$newname.".".$temp[1];
	          $db_image_name=$new_name;
	          $target_dir="../".$path;      
	          move_uploaded_file($src, $target_dir.$db_image_name);

	     

	     $stmtInsert = $conn->prepare("INSERT INTO tbl_article (article_title,article_image,article_intro,article_body,article_conclusion) 
	          VALUES (:article_t,:article_im,:article_i,:article_b,:article_c)");
	     $stmt_update = $conn->prepare("UPDATE  tbl_user SET  article_title=:article_t,article_image=:article_im,article_intro=:article_i,article_body=:article_b,article_conclusion=:article_c WHERE user_id=:user_id");

	     $stmt_update->bindParam('article_t', $data['article_t']);
	     $stmt_update->bindParam('article_im', $db_image_name);
	     $stmt_update->bindParam('article_i', $data['ArticleIntro']);
	     $stmt_update->bindParam('article_b', $data['ArticleBody']);
	     $stmt_update->bindParam('article_c', $data['ArticleCon']);
	     

	     if($stmt_update->execute())
	     {
	          return true;
	     }
	     return false;
	}    


	function getArticlePostData($conn){
	          $stmtSelect = $conn->prepare("SELECT * FROM tbl_article");
	          $stmtSelect->execute();
	          $stmtSelect-> setFetchMode(PDO::FETCH_ASSOC);
	          return $stmtSelect->fetchAll();

     }



     function getUploadedImg($conn){
	          $stmtSelect = $conn->prepare("SELECT * FROM tbl_galleryq");
	          $stmtSelect->execute();
	          $stmtSelect-> setFetchMode(PDO::FETCH_ASSOC);
	          return $stmtSelect->fetchAll();

     }


     function getArticleById($conn,$id)
     {
     	 $stmtSelect = $conn->prepare("SELECT * FROM tbl_article WHERE id = :id");
     	 $stmtSelect -> bindparam('id',$id);
	     $stmtSelect->execute();
	     $stmtSelect-> setFetchMode(PDO::FETCH_ASSOC);
	     return $stmtSelect->fetch();
     }



     function upDateArticle($conn,$data,$articleId)
	{    
          $stmt_photo = $conn->prepare("SELECT * FROM tbl_article WHERE id=:id"); 
          $stmt_photo->bindParam(':id', $articleId);
          $stmt_photo->execute();
          $photo=$stmt_photo->fetch();
                                                       

	     if(!empty($_FILES['image']['name']))
	     {
	                              //For Image
	                              $image_name=$_FILES['image']['name'];
	                              $src=$_FILES['image']['tmp_name'];
	                              $newname=time();
	                              $temp=explode(".", $image_name);
	                              $new_name=$newname.".".$temp[1];
	                              $db_image_name=$new_name;

	                              $target_dir="../Articleimages/";
	                              $file="Articleimages";
	                              if(!is_dir('images/'.$file))
	                                    {
	                                        
	                                   //echo ("$file is a directory");
	                                   //echo '<img src="../images/1469265298.jpg"/>';
	                                    mkdir("images/$file", 0755); 
	                                    }
	                              move_uploaded_file($src, $target_dir.$db_image_name);
	     }
	     else
	     {
	      echo $photo['article_image'];;    
	     $db_image_name = $photo['article_image'];  
	     }

	     

	     $stmt_update = $conn->prepare("UPDATE  tbl_article SET  article_title=:article_t,article_image=:article_im,article_intro=:article_i,article_body=:article_b,article_conclusion=:article_c WHERE id=:id");

	     $stmt_update->bindParam('article_t', $data['article_t']);
	     $stmt_update->bindParam('article_im', $db_image_name);
	     $stmt_update->bindParam('article_i', $data['ArticleIntro']);
	     $stmt_update->bindParam('article_b', $data['ArticleBody']);
	     $stmt_update->bindParam('article_c', $data['ArticleCon']);
	     $stmt_update->bindParam('id', $articleId);
	     

	     if($stmt_update->execute())
	     {
	          echo '<script> window.location.href = "managearticle.php"</script>';
	          return true;
	     }
	     return false;
}    




function deleteArticleById($conn,$id)
{
     $stmtDelete = $conn->prepare("DELETE FROM tbl_article WHERE id=:id");
     $stmtDelete->bindParam(':id',$id);
     if($stmtDelete->execute())
          {
               return true;
          }
          return false;

}