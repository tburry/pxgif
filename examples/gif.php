<?php

// This example serves a 1 pixel gif as an image.

require __DIR__.'/../Pxgif.php';

header("Content-type:  image/gif");
header("Expires: Wed, 11 Nov 1998 11:11:11 GMT");
header("Cache-Control: no-cache");
header("Cache-Control: must-revalidate");

if (isset($_GET['code']) && is_numeric($_GET['code'])) {
    echo Pxgif::httpStr($_GET['code']);
} else {
    echo Pxgif::gifStr();
}