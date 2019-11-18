<?php
if (isset($_GET["file"]))
{
    $fileName = basename($_GET["file"]);
    $filePath = 'assets/image/'.$fileName;

    if(!empty($fileName) && file_exists($filePath)){
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Cotent-Disposition: attachment; filename = $fileName");
        header("Content-Type: application/force-download");
        header("Content-Transfert-Encoding: binary");

        readfile($filePath);
        exit;
    }
}
?>