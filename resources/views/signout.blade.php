<?php

session_start();

$_SESSION['message'] = "";
$_SESSION['message_mail'] = "";
$_SESSION['message_password'] = "";
$_SESSION['user_name'] = null;
$_SESSION['flag'] = "";
$_SESSION['temp_user_name'] = "";
$_SESSION['temp_email'] = "";
$_SESSION['temp_password'] = "";

session_destroy();

?>
  <script type="text/javascript">
   window.location = "login";
   </script><?php

?>