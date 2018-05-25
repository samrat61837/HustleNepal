<!DOCTYPE html>
<!--
Template Name: Vallume
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
 <?php include '../layout/admin/adminheader.php'; ?>


<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
       <?php 
            //$getArticlePost = getArticlePostData($conn); 
                $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 3;
                $page  = ( !empty( $_GET['page'] ) ) ? $_GET['page'] : 1;
                $links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 3;
                $total = 8;
                $query = "SELECT * FROM tbl_article";


                require_once '../imp/galleryPagination.php';

                $paginator = new Paginator($conn,$query);
                $results = $paginator->getData($limit, $page, $total);       
                   
                    foreach ($results as $key => $upload):

                      /*$images = array($upload['img_name']);*/
                    
                     
                  ?>               
       <h2><p><?php echo $upload['article_title']; ?></p></h2>
       <li class='one_quarter'> <a href=''><img <?php echo"src='../Articleimages/".$upload['article_image']; ?> '  alt="" height="250" width="250"/></a></li> 
            <pre>         </pre><p><?php echo $upload['article_intro']; ?></p>
      
            <pre>
              <a href='editArticle.php?data=<?php echo $upload['id']; ?>'>Edit</a>
              <a href='deleteArticle.php?data=<?php echo $upload['id']; ?>'>Delete</a>
             </pre>  
                     <?php endforeach; ?>
                     <?php echo $paginator -> createLinks($links);?>
                    
      
      
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Footer Background Image Wrapper -->
 <?php include '../layout/admin/adminfooter.php'; ?>
<!-- End Footer Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>