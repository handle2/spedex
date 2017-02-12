<?php

$url = isset($_GET['_url'])?$_GET['_url']:'/';
switch ($url){
    case '/':
        include "index.html";
        break;
    case '/index':
        include "index.html";
        break;
    case '/bemutatkozas':
        include "page.html";
        break;
    case '/referencia':
        include "page.html";
        break;
    case '/kapcsolat':
        include "page.html";
        break;
    case '/express_szallitmanyozas':
        include "page.html";
        break;
    case '/gyujto_fuvarozas':
        include "page.html";
        break;
    default:
        include "404.html";
        break;
}
//include "index.html";