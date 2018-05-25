<!DOCTYPE html>
<!--
Template Name: Vallume
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
 <?php 
  include '../layout/admin/adminheader.php'; 
  $articleId = $_GET['data'];
  $articleInfo = getArticleById($conn,$articleId);
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- <div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul>
  </div>
</div> -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      

                     
                    
         
      <h2><p><?php echo $articleInfo['article_title']; ?></p></h2>
       <li class='one_quarter ' > <a href=''><img <?php echo"src='../Articleimages/".$articleInfo['article_image']; ?> '  alt="" height="250" width="250"   /></a></li> 
                    
      
      
      <p><?php echo $articleInfo['article_intro']; ?></p>
      <p><?php echo $articleInfo['article_body']; ?></p>
      <p><?php echo $articleInfo['article_conclusion']; ?></p>
      
            <pre>
        

            
               <a href='adArticleList.php'>Back Page</a>
            </pre> 
                     

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