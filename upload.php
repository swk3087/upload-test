<?php
$source = $_FILES['profile']['tmp_name']; 
$dest="./".basename($_FILES['profile']['name']); 
move_uploaded_file($source, $dest);
?>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <img src="<?php =$_FILES['profile']['name']?>" alt="" />
  </body>
</html>
