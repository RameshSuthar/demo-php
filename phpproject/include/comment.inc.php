
 <?php
      include_once 'dbh.inc.php'; 
       
  function setComments($conn){
      if(isset($_POST['commentSubmit'])){
          
          $date = $_POST['date'];
          $message = $_POST['message'];
          
          $sql = "INSERT INTO timeliners (name, date, message) VALUES ( '$date', '$message')";
          
          $result = $conn->query($sql);
      }
  }


  