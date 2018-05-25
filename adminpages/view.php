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
      url: '../imp/search.php',
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
      
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png');">
  
</div>

  <main class="hoc container clear"> 
    <!-- main body -->
     
    <div class="content"> 
      <div id="comments">
       
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
        
      <h1>User List</h1>
      <div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Email</th>
              <th>Age</th>
              <th>Action</th>
            </tr>
          </thead>

            <?php 
                $sn = 1;
                foreach ($userInfo as $k => $v) {
                      $user_name = $v['user_name'];
                      $user_email = $v['user_email'];
                      $user_age = $v['user_age'];
                      

                  
                ?>
          <tbody>
            <tr>
              <td><?php echo $sn; $sn++; ?></td>
              <td><?php echo $user_email;?></td>
              <td><?php echo $user_name;?></td>
              <td><?php echo $user_age;?></td>
              
              <td>
                <div align="center">
                  <a href="upload.php" data-toggle="modal" data-target="#mailModal<?php echo $v['user_id'] ?>"><i class="fa fa-envelope" aria-hidden="true"></i>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
          <form name=""  method="POST" action="mailer.php">
                  <div class="modal fade" id="mail<?php echo $v['user_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Your Message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body" >
                      <div class="form-group">
                        <label class="col-sm-3  control-label no-padding-right" for="form-field-1">Email </label>
                        <div class="col-sm-9">
                          <input type="text" name="email" id="form-field-1" readonly placeholder="Username" value="<?php echo $user_email; ?>" class="col-xs-10 col-sm-5">

                        </div>
                      </div>

                      <input type="hidden" name="returnback" value="ABpositive">

                      <div >
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Message Here</label>
                        <div class="col-sm-7">
                          <textarea class="form-control" name="msg" placeholder="Your Message Here..."></textarea>
                        </div>
                      </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" name="prabin" class="btn btn-primary">Send</button>

                        </div>
                      </div>
                    </div>
                  </div>
              </form> 
          <?php } ?>
        </table>


      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- Footer Background Image Wrapper -->
  <?php include '../layout/admin/adminfooter.php'; ?>
<!-- End Footer Background Image Wrapper -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>