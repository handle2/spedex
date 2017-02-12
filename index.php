<?php

include "public/views/header.phtml";
$url = isset($_GET['_url'])?$_GET['_url']:'/';
switch ($url){
    case '/':
        include "public/views/contents/index.phtml";
        break;
    case '/index':
        include "public/views/contents/index.phtml";
        break;
    case '/bemutatkozas':
        include "public/views/contents/bemutatkozas.phtml";
        break;
    case '/referencia':
        include "public/views/contents/referencia.phtml";
        break;
    case '/kapcsolat':
        include "public/views/contents/kapcsolat.phtml";
        break;
    case '/express_szallitmanyozas':
        include "public/views/contents/express.phtml";
        break;
    case '/gyujto_fuvarozas':
        include "public/views/contents/gyujto.phtml";
        break;
    default:
        include "public/views/contents/404.phtml";
        break;
}

include "public/views/footer.phtml";