<?php
require_once $_SERVER['DOCUMENT_ROOT'] ."/classes/autoload.php";
$slides = Slider::getAll();
?>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <?php foreach ($slides as $key=>$slide):?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?=$key?>" <?php if($key === 0) { echo 'class="active" aria-current="true"';}?> aria-label="Slide 1"></button>
        <?php endforeach;?>
    </div>
    <div class="carousel-inner border-radius-25">
        <?php foreach ($slides as $key=>$slide):?>
            <div class="carousel-item <?= $key===0?"active":""?>">
                <img src="<?=$slide->src?>" class="d-block w-100" alt="...">
            </div>
        <?php endforeach;?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>