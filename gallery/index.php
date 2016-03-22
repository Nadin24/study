<?php

  $dir = "upload"; // Путь к директории, в которой лежат изображения
  $files = scandir($dir); // Получаем список файлов из этой директории

?>
<?php for ($i = 0; $i < 11; $i++) { ?>
    <img src="<?=$dir."/".$files[$i]?>" alt="" />
    <?php
    if (($i + 1) % 4 == 0) { ?><br /><?php }
    ?>
<?php }  ;?>



<link rel="stylesheet" href="style.css">


