<?php require_once('include/connection.php'); ?>

<?php


  $query = "UPDATE user SET first_name = 'lasantha' WHERE id=6";

  $result_set =mysqli_query($connection,$query);

  if( $result_set){

    echo mysqli_affected_rows($connection) . "records updated";
  }

  else{

    echo "failed";
  }

?>

<html>

<head>
      <title> update query </title>
</head>

<body>
      
</body>

</html>

<?php mysqli_close($connection); ?>