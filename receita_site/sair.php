<?php 
	session_start(); 
	session_destroy(); 
	header("Location: http://localhost/receita_site"); 
	exit;
?>