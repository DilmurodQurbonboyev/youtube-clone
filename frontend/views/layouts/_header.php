<?php


use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

NavBar::begin(
    [
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-lg navbar-light bg-light shadow-sm',
        ],
    ]
);

if (Yii::$app->user->isGuest) {
    $menuItems[] = [
        'label' => 'Signup',
        'url' => [
            '/site/signup'
        ]
    ];
    $menuItems[] = [
        'label' => 'Login',
        'url' => [
            '/site/login'
        ]
    ];
} else {
    $menuItems[] = '<li>'
        . Html::beginForm(
            [
                '/site/logout'
            ], 'post', [
                'class' => 'form-inline'
            ]
        )
        . Html::submitButton(
            'Logout (' . Yii::$app->user->identity->username . ')',
            [
                'class' => 'btn btn-link logout'
            ]
        )
        . Html::endForm()
        . '</li>';
}
echo Nav::widget(
    [
        'options' => [
            'class' => 'navbar-nav'
        ],
        'items' => $menuItems,
    ]
);
NavBar::end();
