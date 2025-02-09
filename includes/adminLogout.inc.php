<?php
session_start();
unset($_SESSION['adminId']);
header('Location: ../' . $_SESSION["current_page"] . '.php');
exit;