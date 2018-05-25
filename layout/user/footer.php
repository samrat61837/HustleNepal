
<?php 
if(isset($_POST['submit'])){
  addUser($conn,$_POST);
}
?>
<!-- Footer Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/03.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row4">
    <footer id="footer" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div class="one_quarter >
        <h6 class="heading">Information Regarding Us</h6>
        <ul class="nospace btmspace-30 linklist contact">
          <li><i class="fa fa-map-marker"></i>
            <address>
            Hadigaon &amp; Ward-5, kathmandu
            </address>
          </li>
          <li><i class="fa fa-phone"></i> +977 9841211522</li>
          <li><i class="fa fa-envelope-o"></i> hustlenepal@gmail.com</li>
        </ul>
        <ul class="faico clear">
          <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
          <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a class="faicon-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
        </ul>
      </div>
       <div class="one_quarter">
        <!-- <h6 class="heading">Augue sociis natoque</h6>
        <ul class="nospace linklist">
          <li><a href="#">Porta lacinia est velit</a></li>
        ,  <li><a href="#">Sollicitudin nisl eu</a></li>
          <li><a href="#">Tincidunt turpis ante</a></li>
          <li><a href="#">Lobortis nisl fusce</a></li>
          <li><a href="#">Purus nisi faucibus et est</a></li>
        </ul> -->
        <span>   </span>
      </div>
      <div class="one_quarter">
       <!--  <h6 class="heading">Penatibus et magnis</h6>
        <ul class="nospace linklist">
          <li><a href="#">Quis blandit dignissim</a></li>
          <li><a href="#">Lacus vestibulum porta</a></li>
          <li><a href="#">Quam nec mollis vulputate</a></li>
          <li><a href="#">Mauris aliquet cursus</a></li>
          <li><a href="#">Nisl duis sed rhoncus</a></li>
        </ul> -->
      </div> 
      <div class="one_third">
        <h6 class="heading">Please Enter Your Credentials</h6>
        <!-- <p class="nospace btmspace-15">Nascetur ridiculus mus elit aliquam erat volutpat proin scelerisque mi viverra.</p> -->
        <form method="post" action="#">
          <fieldset>
            <legend>Newsletter:</legend>
            <input class="btmspace-15" type="text" value="" name="user_name" placeholder="Name">
            <input class="btmspace-15" type="email" value="" name="user_email" placeholder="Email">
            <input class="btmspace-15" type="number" value="" name="user_age" placeholder="Age">
            <button type="submit" name="submit" value="submit">Submit</button>
          </fieldset>
        </form>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">hustlenepal.com</a></p>
      <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Footer Background Image Wrapper -->