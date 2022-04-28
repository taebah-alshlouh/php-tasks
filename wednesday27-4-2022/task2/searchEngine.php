<?php
// 2.	make a search engine website that contain URL as input text and button named (GO) if you click on Go will redirect you to the written URL 
$url= $_POST['search'];
header("Location: $url");
?>