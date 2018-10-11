<?php
use yii\widgets\DetailView;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-lg-12">
                <?php \yii\widgets\Pjax::begin(['id' => 'comments-list']) ?>
                <?=
                    \yii\widgets\ListView::widget( [
                        'dataProvider' => $comments,
                        'itemView' => '_comment-item',
                    ] );
                ?>
                <?php \yii\widgets\Pjax::end() ?>
                <hr>
                <?php if(!Yii::$app->user->isGuest): ?>

                <?=Yii::$app->controller->renderPartial('_comment-form',[
                        'model'=>$model
                ])?>

                <?php else: ?>
                <p class="text-center">
                    Вам доступь нет для написать комментарий. <br>
                    <?=\yii\helpers\Html::a('Авторизация', ['site/login'])?>
                    или
                    <?=\yii\helpers\Html::a('регистрация', ['site/signup'])?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php
$style = <<<CSS
.thumbnail {
    padding:0px;
}
.panel {
	position:relative;
}
.panel>.panel-heading:after,.panel>.panel-heading:before{
	position:absolute;
	top:11px;left:-16px;
	right:100%;
	width:0;
	height:0;
	display:block;
	content:" ";
	border-color:transparent;
	border-style:solid solid outset;
	pointer-events:none;
}
.panel>.panel-heading:after{
	border-width:7px;
	border-right-color:#f7f7f7;
	margin-top:1px;
	margin-left:2px;
}
.panel>.panel-heading:before{
	border-right-color:#ddd;
	border-width:8px;
}
CSS;

$this->registerCss($style);
?>