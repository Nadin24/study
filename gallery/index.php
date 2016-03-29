<?php


$dir = "upload";
$files = scandir($dir);
$files = excess($files);

?>

<?php for ($i = 0; $i < 11; $i++) { ?>
    <img src="<?=$dir."/".$files[$i]?>" alt="" />
    <?php
    if (($i + 1) % 4 == 0) { ?><br /><?php }
    ?>
<?php }  ;?>






<link rel="stylesheet" href="style.css">