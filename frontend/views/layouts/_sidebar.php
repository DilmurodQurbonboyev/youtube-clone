<?php

use yii\bootstrap4\Nav;

?>


<aside>

    <?php echo Nav::widget(
        [
            'options' => [
                'class' => 'd-flex flex-column nav-pills'
            ],
            'items' =>
                [
                    [
                        'label' => 'Home',
                        'url' => ['/video/index']
                    ],
                    [
                        'label' => 'History',
                        'url' => ['/video/history']
                    ]
                ]
        ]
    )
    ?>

</aside>
