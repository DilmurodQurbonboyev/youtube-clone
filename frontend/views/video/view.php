<?php
/**
 * @var $model \common\models\Video
 */
?>


<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item" src="<?php echo $model->getVideoLink() ?>"
                   poster="<?php echo $model->getThumbnailLink() ?>" controls>
            </video>
        </div>
        <h6 class="mt-2"><?php echo $model->title ?></h6>
        <p>123views . <?php echo Yii::$app->formatter->asDate($model->created_at) ?></p>
    </div>
    <div class="col-sm-4"></div>
</div>