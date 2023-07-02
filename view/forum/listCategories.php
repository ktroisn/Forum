<?php

$categories = $result["data"]['categories'];
    
?>

<h1>Nos catégories :</h1>

<?php
foreach($categories as $category ){

    ?>
    <p><?=$category->getName()?></p></a>
    <?php
}


  
