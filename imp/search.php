<?php
// create a new function

function search($text){
include '../imp/call.php';
  
  // let's filter the data that comes in
  $text = htmlspecialchars($text);
 

  // prepare the mysql query to select the users 
 /* $get_name = $conn->prepare("SELECT * FROM u WHERE name LIKE concat('%', :name, '%')");*/
 $stmtSelect = $conn->prepare("SELECT * FROM tbl_user WHERE user_age LIKE concat(:user_age ,'%')");
  // execute the query
  $stmtSelect -> execute(array('user_age' => $text));
  // show the users on the page
    echo'<div class="scrollable">
        <table>
          <thead>
            <tr>
              <th>S.N</th>
              <th>Name</th>
              <th>Age</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
    ';
  while($names = $stmtSelect->fetch(PDO::FETCH_ASSOC)){
    // show each user as a link
    
    echo ' <tr>
              <td>'.$names['user_name'].'</td>
              <td>'.$names['user_email'].'</td>
              <td>'.$names['user_age'].'</td>
              <td>
                <div align="center">
                            <a href="" data-toggle="modal" data-target="#mailModal'.$names['id'].'"><i class="fa fa-envelope" aria-hidden="true"></i>
                            </a>
                            </div>
              </td>
            </tr>';
    
  }
  echo '</tbody>';
}
// call the search function with the data sent from Ajax
search($_GET['txt']);
?>
