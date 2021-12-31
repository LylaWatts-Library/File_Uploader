<?php
$FileName = $_FILES['file']['name'];
$Location = "files/" . $FileName;

if (move_uploaded_file($_FILES['file']['tmp_name'], $Location))
{
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/success.php');
}

else
{
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/failed.php');
}

?>
