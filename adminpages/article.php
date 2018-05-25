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
      <!-- ################################################################################################ -->
      <div id="comments">
        
        <h2>Write A Comment</h2>
       
          <form action="#" method="post" enctype="multipart/form-data" >
      
                <div class="container">
                   <br />
                   <div class="one_third">
                      <label for="comment">Search</label>
                       
                      <input type="number" name="search_text" id="search" placeholder="Search by User age" class="form-control" />
                    </div>
          
                   <br />
                   <div id="result"></div>
                  </div> 
              </form>
          </div>
      </div>
        
      <h1>Table(s)</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Age</th>
              <th>Action</th>
            </tr>
          </thead>

            <?php 
                $sn = 1;
                foreach ($userInfo as $k => $v) {
                      $user_name = $v['user_name'];
                      $user_age = $v['user_age'];
                  
                ?>
          <tbody>
            <tr>
              <td><?php echo $sn; $sn++; ?></td>
              <td><?php echo $user_name;?></td>
              <td><?php echo $user_age;?></td>
              <td>
                <div align="center">
                            <a href="" data-toggle="modal" data-target="#mailModal<?php echo $v['user_id'] ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            </div>
              </td>
            </tr>
          </tbody>
          <?php } ?>
        </table>


      </div>
      <div id="comments">
    
        <h2>Write A Comment</h2>
        <form action="#" method="post" enctype="multipart/form-data">
          <div class="one_third first">
            <label for="name">Tittle <span>*</span></label>
            <input type="text" name="article_t" id="article_t" value="" size="22" required>
          </div>
          <div class="one_third first">
            <label for="ART_image">up load</label>
            <input type="file" id="image" name="image" />

          </div>
          <div class="block clear">
            <label for="comment">Article Intro</label>
            <textarea name="ArticleIntro" id="ArticleIntro" cols="15" rows="5"></textarea>
          </div>
          <div class="block clear">
            <label for="comment">Article Body</label>
            <textarea name="ArticleBody" id="ArticleBody" cols="15" rows="5"></textarea>
          </div>
          <div class="block clear">
            <label for="comment">Article Conclusion</label>
            <textarea name="ArticleCon" id="ArticleCon" cols="15" rows="5"></textarea>
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
 <?php include '../layout/footer.php'; ?>
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