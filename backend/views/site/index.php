<?php

/** @var yii\web\View $this
 * @var $latestVideo \common\models\Video
 * @var $numberOfView  integer
 * @var $numberOfSubscribers integer
 * @var $subscribers \common\models\Subscriber[]
 */

use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index d-flex">
    <div class="card m-2" style="width: 18rem;">
        <?php if ($latestVideo): ?>
            <div class="embed-responsive embed-responsive-16by9">
                <video class="embed-responsive-item" src="<?php echo $latestVideo->getVideoLink() ?>"
                       poster="<?php echo $latestVideo->getThumbnailLink() ?>">
                </video>
            </div>
            <div class="card-body">
                <h6 class="card-title">
                    <?php echo $latestVideo->title ?>
                </h6>
                <p class="card-text">
                    Likes: <?php echo $latestVideo->getLikes()->count() ?> <br>
                    Views: <?php echo $latestVideo->getViews()->count() ?>
                </p>
                <a class="btn btn-primary" href="<?php echo Url::to(
                    [
                        '/video/update',
                        'id' => $latestVideo->video_id
                    ]
                ) ?>">Edit</a>
            </div>
        <?php else: ?>
            <div class="card-body">
                You do not have uploaded videos yet
            </div>
        <?php endif; ?>

    </div>
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">
                Total Views
            </h6>
            <p class="card-text" style="font-size: 48px"><?php echo $numberOfView ?></p>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">
                Total Subscribers
            </h6>
            <p class="card-text" style="font-size: 48px"><?php echo $numberOfSubscribers ?></p>
        </div>
    </div>
    <div class="card m-2" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-title">
                Latest Subscribers
            </h6>
            <?php foreach ($subscribers as $subscriber): ?>
                <div>
                    <?php echo $subscriber->user->username ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
