<?php
session_start();
// ライブラリ読み込み
require_once "phpqrcode/qrlib.php";
QROptions::$cachefile = '/tmp/';
$contents = $_SESSION['dataToBarcode'] ?? 'sample';
QRcode::png($contents, false, QR_ECLEVEL_M, 6);
