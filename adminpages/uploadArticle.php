<!DOCTYPE html>
<!--
Template Name: Vallume
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
 <?php include '../layout/admin/adminheader.php'; ?>
 <?php $userInfo = retrieve($conn); 
     
        
 ?>
<?php
 if(isset($_POST['SAVEArticle']))
          {
              uploadArticle($conn,$_POST,'Articleimages/');
              redirection('adArticleList.php');
          }

  ?>
      
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(document).ready(function(e){
  $("#search").keyup(function(){
    $("#result").show();
    var text = $(this).val();
   if(text != '')
                  {

     $.ajax({
      type: 'GET',
      url: 'search.php',
      data: 'txt=' + text,
      success: function(data){
        $("#result").html(data);
      }
    });
  
      }
            else
            {
              
                $('#result').html('');

             
                    /*$.ajax({
                    url:"fetch.php",
                    method:"POST",
                    data:{search:txt},
                    dataType:"text",
                    success:function(data)
                      {
                        $('#result').html(data);
                      }
            });*/
                  }

  })
});
</script>
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
      </div>
     
      <div id="comments">
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="one_third first">
            <label for="name">Title <span>*</span></label>
            <input class="ckeditor" type="text" name="article_t" id="article_t" value="" size="22" required>
          </div>
          <div class="one_third first">
            <label for="ART_image">Upload</label>
            <input type="file" id="image" name="image" />

          </div>
          <div class="block clear">
            <label for="comment">Article Intro</label>
            <textarea class="ckeditor" name="ArticleIntro" id="ArticleIntro" cols="15" rows="5"></textarea>
          </div>
          <div class="block clear">
            <label for="comment">Article Body</label>
            <textarea class="ckeditor" name="ArticleBody" id="ArticleBody" cols="15" rows="5"></textarea>
          </div>
          <div class="block clear">
            <label for="comment">Article Conclusion</label>
            <textarea class="ckeditor" name="ArticleCon" id="ArticleCon" cols="15" rows="5"></textarea>
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