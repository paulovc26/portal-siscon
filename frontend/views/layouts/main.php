<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);
$this->registerCssFile('@web/css/custom.css');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= 'Gestão' ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <header>
        <?php
            NavBar::begin([
                  'brandLabel' => 'BraTech',
                  'brandUrl' => Yii::$app->homeUrl,
                  'options' => [
                        'class' => 'navbar navbar-expand-md navbar-dark navbar-custom fixed-top',
                        'style' => 'background-color: #27225b!important'
                  ],
            ]);
            $menuItems = [
                  ['label' => 'Inicio', 'url' => ['/']],
                  ['label' => 'Contratos', 'url' => ['/tb-contrato-cliente/index']],
                  ['label' => 'Opções', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                  $menuItems[] = ['label' => 'Cadastro', 'url' => ['/site/signup']];
            }

            echo Nav::widget([
                  'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
                  'items' => $menuItems,
            ]);
            if (Yii::$app->user->isGuest) {
                  echo Html::tag(
                        'div',
                        Html::a(
                              Html::button(
                                    'Login',

                                    [
                                          'class' => 'btn btn-primary',
                                          'type' => 'button'
                                    ]
                              ),
                              ['/site/login'],
                        ),
                        [
                              'class' => ['d-flex']
                        ]
                  );
            } else {
                  echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
                        . Html::submitButton(
                              'Logout (' . Yii::$app->user->identity->username . ')',
                              ['class' => 'btn btn-link logout text-decoration-none']
                        )
                        . Html::endForm();
            }
            NavBar::end();
            ?>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                  ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>

    <footer class="footer mt-auto py-3 text-muted">
        <div class="container">
            <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
            <p class="float-end"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();