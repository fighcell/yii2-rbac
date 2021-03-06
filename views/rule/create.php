<?php

/*
 * This file is part of the fighcell project.
 *
 * (c) fighcell project <http://github.com/fighcell>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

/**
 * @var $model \fighcell\rbac\models\Rule
 * @var $this  \yii\web\View
 */

$this->title = Yii::t('rbac', 'Create rule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>

<?php $this->beginContent('@fighcell/rbac/views/layout.php') ?>

<?= $this->render('_form', [
    'model' => $model,
]) ?>

<?php $this->endContent() ?>
