<?php
setcookie("studentID","",time()-180);

//echo '<script>window.location.href = "login.php"</script>';
header("location: login.php");


?>