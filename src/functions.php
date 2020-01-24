<?php 
function createSvgElement($name,$add_class=null){
    ob_start();
    ?>
    <div class="svg-container <?= $name ?> <?= $add_class ?>">
        <?php include('svg/'.$name.'.svg'); ?>
    </div>
    <?php
    return ob_get_clean();
}
function createMultipleSvgElements($how_many,$name){
    ob_start();
    for($i=1;$i<=$how_many;$i++){
        echo createSvgElement($name,$name.'-'.$i);
    }
    return ob_get_clean();
}
?>