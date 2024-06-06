<?php
session_start();
session_unset();
session_destroy();
header('location: login.php');
exit; // Ensure no further code is executed

