<html>
<head>
<title>Process Uploaded File</title>
</head>
<body>
<?php

move_uploaded_file ($_FILES['uploadFile'] ['eminem.jpeg'],
       "./upload/{$_FILES['uploadFile'] ['eminem.jpeg']}")

?>
</body>
</html>