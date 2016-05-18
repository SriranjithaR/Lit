
      
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
  

    $user = $_POST['user'];
    $comment = $_POST['comment'];

    $insert_sql = "INSERT INTO comments_table(user,comments) VALUES('$user','$comment')";
               
  
      
    if(mysqli_query( $conn,$insert_sql)){
        $response = $comment;
    }
    else {
        $response = "Error: " . $insert_sql . "<br>" . mysqli_error($conn);
    }
    
    $allcomments = array();

    $sql = "select * from comments_table";
    $result =  mysqli_query($conn, $sql) or die("Error in Selectig " . mysqli_error($conn));    

    while($row = mysqli_fetch_assoc($result)){
        $allcomments[] = $row;
    }
     

    /*var_dump($allcomments);

    */
    echo json_encode($allcomments);
    
    mysqli_close($conn);
      
?>