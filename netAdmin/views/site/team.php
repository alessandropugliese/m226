<?php

$formatter = \Yii::$app->formatter;

echo '<table>';

echo '<tr>';
echo '<td>';
echo '<ID>';
echo '</td>';
echo '<td>';
echo '</td>';
echo '</tr>';



/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Team';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-team">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2> Hier wird unser Team vorgestellt </h2>
    <p>
        
    </p>

    <code><?= __FILE__ ?></code>
</div>
