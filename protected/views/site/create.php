<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Member', 'url'=>array('index')),
	array('label'=>'Manage Member', 'url'=>array('admin')),
);
?>
<?php if (Yii::app()->user->hasFlash('member')): ?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('member');?>
        <a href="." >BACK :)</a>
    </div>
<?php return 0;endif;?>

<h1>Create Member</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>