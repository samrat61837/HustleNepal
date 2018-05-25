<!DOCTYPE html>
<!--
Template Name: Vallume
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<?php include '../layout/user/header.php';?>
 

<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  <div id="breadcrumb" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Lorem</a></li>
      <li><a href="#">Ipsum</a></li>
      <li><a href="#">Dolor</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      
      <div id="gallery">
        <figure>
          <h1>Gallery</h1>
          <ul class="nospace clear">
             <?php 
               /* $getUploadImg = getUploadedImg($conn);*/
                $limit = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 9;
                $page  = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
                $links = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 5;
                $total = 18;
                $query = "SELECT * FROM tbl_galleryq";


                require_once '../imp/galleryPagination.php';

                $paginator = new Paginator($conn,$query);
                $results = $paginator->getData($limit, $page, $total);

                foreach ($results as $k => $upload) {  
              ?>
            <li class="one_quarter"><a href=""><img <?php echo "src='../images/".$upload['img_name'];?>' alt="" /></a></li>
            <?php } ?>
          </ul>
          <?php echo $paginator -> createLinks($links);
          ?>
      </div>
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
<?php include '../layout/user/footer.php'; ?>
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