<?php

include "public/views/header.phtml";

$url = isset($_GET['_url'])?$_GET['_url']:'/index';

$filename = "public/views/contents".$url.".phtml";

if(file_exists($filename)){
    include $filename;
}else{
    include "public/views/contents/404.phtml";
}

include "public/views/footer.phtml";