<?php
include ('includes\connection.php');
$MsgCont = $_POST['UserMSG'];
  if (!$MsgCont == ''){
  $sql = "INSERT INTO chat (MsgCont)
  VALUES ('$MsgCont')";
  }

if ($conn->query($sql) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header('Location: index.php#last');
?>
