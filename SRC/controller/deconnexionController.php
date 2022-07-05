<?php
session_destroy();
header("location:/?page=login");
ob_end_flush();
?>