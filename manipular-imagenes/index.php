<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomodificada.png';

$thumb = new PHPThumb\GD($foto_original);

// Redimensionar
$thumb->resize(250, 250);

// Recortar
// $thumb->crop(50, 50, 120, 120);
$thumb->cropFromCenter(200, 100);

$thumb->show();
$thumb->save($guardar_en, 'png');