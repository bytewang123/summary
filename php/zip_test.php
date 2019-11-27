<?php
require_once('./zip.lib.php');

$filename = $argv[1];
$file_content = file_get_contents("./$filename");
//create the zip
$zip = new zipfile();

////add files to the zip, passing file contents, not actual files
$zip->addFile($file_content, "");

////prepare the proper content type
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=my_archive.zip");
header("Content-Description: Files of an applicant");
//
////get the zip content and send it back to the browser
echo $zip->file();
?>
