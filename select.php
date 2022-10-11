<html>
<body>
<?php
    $visit=$_GET['language'];
    if (empty($_COOKIE["lang"])) {
        setcookie("lang", $visit, time() + 360000);
    }
    if (isset($_COOKIE["lang"])) {
        setcookie("lang", $visit, time() + 360000);
    }
?>
</body>
</html>