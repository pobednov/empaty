<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<? if (count($model)): ?>
    <? foreach ($model as $item):?>
        <div class="well">
        <h3><?=$item->title;?></h3>
            <p><?=$item['description'];?></p>
        </div>
    <? endforeach;?>
<? endif;?>
