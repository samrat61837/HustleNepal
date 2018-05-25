<!DOCTYPE html>
<!--
Template Name: Vallume
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
 <?php include '../layout/admin/adminheader.php'; 
    $articleId = $_GET['data'];
    $articleInfo=getArticleById($conn,$articleId);

  
     
     
        
 ?>
<?php
 if(isset($_POST['SAVEArticle']))
          {
              upDateArticle($conn,$_POST,$articleId);
          }

  ?>
      
 
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
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
      
        
   
      <div id="comments">
    
        <h2>EIDT PAGE</h2>
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="one_third first">
            <label for="name">Tittle <span>*</span></label>
            <input class="ckeditor" type="text" name="article_t" id="article_t" value="<?php echo $articleInfo['article_title']; ?>" size="22" required>
          </div>
          <div class="one_third first">
            <label for="ART_image">up load</label>
            <input type="file" id="image" value="<?php echo $articleInfo['article_image']; ?>" name="image" />

          </div> 
          <div class="block clear">
            <label for="comment">Article Intro</label>
            <textarea class="ckeditor"name="ArticleIntro" id="ArticleIntro"  cols="15" rows="5">  <?php echo $articleInfo['article_intro']; ?>   </textarea>
          </div>
          <div class="block clear">
            <label for="comment">Article Body</label>
            <textarea class="ckeditor" name="ArticleBody" id="ArticleBody"  cols="15" rows="5">  <?php echo $articleInfo['article_body']; ?>    </textarea>
          </div>
          <div class="block clear">
            <label for="comment">Article Conclusion</label>
            <textarea class="ckeditor" name="ArticleCon" id="ArticleCon"  cols="15" rows="5"> <?php echo $articleInfo['article_conclusion']; ?> </textarea>
          </div>
          <div>
            <input type="submit" name="SAVEArticle" value="Submit Form">
            &nbsp;
            <input type="reset" name="reset" value="Reset Form">
          </div>
        </form>
      </div>
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