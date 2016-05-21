<?php
session_start();
$article=$_POST['article']; 
$_SESSION['article']=$article;
?>