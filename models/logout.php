<html>
<head></head>
<body>
<?php
session_start();
unset($_SESSION['usuario']);
header("Location: http:/easylearning.com.br/");
?>
</body>
</html>