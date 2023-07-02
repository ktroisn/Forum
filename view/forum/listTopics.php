<?php

$topics = $result["data"]['topics'];
    
?>

<h1>liste topics</h1>

<?php
foreach($topics as $topic ){

    ?>
    <a href="index.php?ctrl=forum&action=detailTopic&id=<?=$topic->getId()?>"><p><?=$topic->getTitle()?></p></a>
    <?php
}


  
