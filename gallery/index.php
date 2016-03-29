<?php
define("COLS", 5);
if (!empty($_FILES)) {
    @mkdir("upload", 0777);
    copy($_FILES['photo']['tmp_name'], "upload/" . basename($_FILES['photo']['name']));
}
include "index.html";
$way = "./upload";
chdir($way);
function FilesDirectory (){
    $files = scandir(getcwd());
    unset($files[0]);
    unset($files[1]);
    foreach ($files as $key => $name) {
        $image = getimagesize($name);
        if (is_dir($name) or empty($image)){
            unset($files[$key]);
        }
    }
    sort($files);
    return $files;
}
$photoList = FilesDirectory();
echo "<table border='2px'>";
$result = [];
foreach ($photoList as $key => $name) {
    $row = ceil($key / COLS);
    $result[$row][] = $name;
}
foreach ($result as $value) {
    echo "<td>";
    foreach ($value as $item) {
        echo "<tr><img width='250' height='250' src='upload/$item'> </tr>";
    }
    echo "</td>";
}
echo "</table>";