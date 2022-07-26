<?php

/**
 * @var $model \common\models\Video
 */

use yii\helpers\StringHelper;
use yii\helpers\Url;

?>
<div class="media">
    <a href="<?php echo Url::to(['/video/update', 'id' => $model->video_id]) ?>">
    <div class="embed-responsive embed-responsive-16by9 mr-3" style="width: 120px">
        <video class="embed-responsive-item" src="<?php echo $model->getVideoLink() ?>"
               poster="<?php echo $model->getThumbnailLink() ?>"></video>
    </div>
    </a>
    <div class="media-body">
        <h5 class="mt-0"><?php echo $model->title ?></h5>
        <p><?php StringHelper::truncateWords($model->description, 10) ?></p>
    </div>
</div>