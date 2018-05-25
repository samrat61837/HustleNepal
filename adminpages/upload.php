<!DOCTYPE html>
<!--
Template Name: Vallume
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
 <?php include '../layout/admin/adminheader.php'; ?>
  <?php 
      if(isset($_POST['savebtn']))



              {
            /* $path='../images/';  
             echo $b=$_FILES['image']['name'];
             echo $a=$_FILES['image']['size'];
             echo $a;
             echo'<br>';*/   
          /*$image_name=$_FILES['image']['name'];
          $src=$_FILES['image']['tmp_name'];
          
          echo $image_name.'here<br>'; 
          echo $a=$_FILES['image']['error'];
          
          echo $src.'here<br>';

          */    
              /*if(array_key_exists('image', $_FILES)){
                      if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
                         echo 'upload was successful';
                      } else {
                         die("Upload failed with error code " . $_FILES['image']['error']);
                      }
                  }
              *//* $message = 'Error uploading file';
          switch( $_FILES['image']['error'] ) {
            case UPLOAD_ERR_OK:
                $message = false;;
                break;
            case UPLOAD_ERR_INI_SIZE:
            $message .= ' - file too large (limit of ini size bytes).';
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message .= ' - file too large (limit of '.get_max_upload().' bytes).';
                break;
            case UPLOAD_ERR_PARTIAL:
                $message .= ' - file upload was not completed.';
                break;
            case UPLOAD_ERR_NO_FILE:
                $message .= ' - zero-length file uploaded.';
                break;
            default:
                $message .= ' - internal error #'.$_FILES['image']['error'];
                break;
        }
        if( !$message ) {
            if( !is_uploaded_file($_FILES['image']['tmp_name']) ) {
                $message = 'Error uploading file - unknown error.';
            } else {
                // Let's see if we can move the file...
                $dest .= '../images/'.$this_file;
                if( !move_uploaded_file($_FILES['image']['tmp_name'], $dest) ) { // No error supporession so we can see the underlying error.
                    $message = 'Error uploading file - could not save upload (this will probably be a permissions problem in '.$dest.')';
                } else {
                    $message = 'File uploaded okay.';
                }
            }
        }
        echo $message;
*/
     
        
          /*if(!is_dir($path))
               mkdir($path,'777');
                 
         
          $newname=time();
          $temp=explode(".", $image_name);
          $new_name=$newname.".".$temp[1];
          $db_image_name=$new_name;
          $target_dir=$path;      
          move_uploaded_file($src, $target_dir.$db_image_name);
          
           
          */
              uploadPost($conn,$_POST,'../images/');
              redirection('adgallery.php');

              
              }
          ?>
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      
      <div id="comments">
        
        <h2>Upload Photo</h2>
       
        <form action="#" method="post" enctype="multipart/form-data" >
         <!--  <div class="one_third first">
            <label for="name">Name <span>*</span></label>
            <input type="text" name="name" id="name" value="" size="22" required>
          </div>
          <div class="one_third">
            <label for="email">Mail <span>*</span></label>
            <input type="email" name="email" id="email" value="" size="22" required>
          </div>
          --><!--  <div class="one_third">
            <label for="url">Website</label>
            <input type="url" name="url" id="url" value="" size="22">
          </div>
          --> <div class="one_third">
            <label for="comment">up load</label>
           <input type="file" id="image" name="image[]" multiple="multiple" />

          </div>
          
          <div class="block clear">
            <label for="comment">Your Comment</label>
            <textarea class="ckeditor" name="up_text" id="comment" cols="25" rows="10"></textarea>
          </div>
          
          <div>
            <input type="submit" name="savebtn" value="Submit Form">
            <!-- &nbsp;
            <input type="reset" name="reset" value="Reset Form"> -->
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