<?php
require_once $_SERVER['DOCUMENT_ROOT'] ."/classes/autoload.php";
$slides = Slider::getAll();
foreach ($slides as $slide):
    ?>
    <div class="card" data-image-key-<?=$slide->id?> style="width: 18rem;">
        <img src="<?=$slide->src?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=preg_replace('/^\.\.\/uploads\//', '',$slide->src)?></h5>
            <button data-btn-remove-<?=$slide->id?> onclick="removeItem(<?=$slide->id?>)" class="btn btn-orange d-flex justify-content-center align-items-center">
                <span data-btn-remove-content-<?=$slide->id?>><i class="fa-solid fa-trash"></i> Удалить</span>
                <span data-spinner-<?=$slide->id?> style="display: none">
                    <div class="loader"></div>
                </span>
            </button>
            <div data-error-message-<?=$slide->id?> style="display: none;" class="alert alert-danger mt-4" role="alert">
                Произошла ошибка при попытке удалить файл!
            </div>
        </div>
    </div>
<?php endforeach;?>