<?php
    date_default_timezone_set('Asia/Kolkata');
    include_once 'include/dbh.inc.php'; 
    include 'include/comment.inc.php'; 
?> 
  <html>
   <head>
       <title></title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link rel="stylesheet" type="text/css" href="style2.css">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
       <meta name="google-signin-client_id" content="266201199417-qbpg65d1j5ho0k1g9h8j7kttj0t4v40n.apps.googleusercontent.com">
       <script src="https://apis.google.com/js/platform.js" async defer></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script type="text/javascript" src="script.js"></script>
   </head>
   <body>
        <div class="main-box">
            <div class="box">
                <h2>Create post</h2>
    <?php
           echo
            "<form action='".setComments($conn)."' method='post' >
                
                
                <p id='name' class='got-name'></p>
                <img src='img/plush-design-studio-483666-unsplash.jpg' id='pic' class='img-circle' width='100' height='100'>
                
                
                <textarea class='text-in' name='message' type='text' placeholder='write something here..'></textarea><br>
                
                
                
                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                
                <button type='submit' name='commentSubmit' class='btn2'>POST</button>
                
                <p class='note'><strong>NOTE:</strong> You Have to Sign-in with Google in order to View all the post created by others. </p>
                
                <div class='g-signin2' data-onsuccess='onSignIn'></div>
                
                <button id='sign-out' onclick='signOut()' class='btn1'>sign out</button>
            </form>";
    ?>
            </div>   
       </div>
            
           
      
<?php           
      getComments($conn);    
      function getComments($conn){
      $sql = "SELECT * FROM timeliners";
      $result = $conn->query($sql);
      while($row = $result->fetch_assoc())
      {
             
         echo   "<div class='timeline'>
                <ul>
                    <li>
                        <div class='content'>
                            <h3>
                                '".$row['name']."'
                            </h3>
                            <P>
                                '".$row['message']."'
                            </P>
                        </div>
                        <div class='time'>
                            <h4>
                                '".$row['date']."'
                            </h4>
                        </div>
                    </li>                
                    <div style='clear: both;'></div>
                </ul>
            </div>";
      }
      }
?>
       
   </body>
</html>
