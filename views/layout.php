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
 * @var $this     yii\web\View
 * @var $content string
 */

use fighcell\rbac\widgets\Menu;

?>

<?= Menu::widget() ?>

<div style="padding: 10px 0">
    <?= $content ?>
</div>