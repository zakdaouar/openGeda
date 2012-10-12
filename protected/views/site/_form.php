<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'member-form',
        'enableAjaxValidation' => false,
        'enableClientValidation' => true,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'fname'); ?>
        <?php echo $form->textField($model, 'fname', array('size' => 20, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'fname'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'lname'); ?>
        <?php echo $form->textField($model, 'lname', array('size' => 20, 'maxlength' => 20)); ?>
        <?php echo $form->error($model, 'lname'); ?>
    </div>

    <div class="row">
        <?php
        echo $form->labelEx($model, 'birthday');
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'model' => $model,
            'attribute' => 'birthday',
            'language' => 'fr',
            'options' => array(
                'dateFormat' => 'yy-mm-dd',
                'showAnim' => 'fold', // 'show' (the default), 'slideDown', 'fadeIn', 'fold'
                'showOn' => 'focus', // 'focus', 'button', 'both'
                'changeYear' => true,
                'changeMonth' => true,
                'yearRange' => (CTimestamp::formatDate('Y') - 99) . ':' . (CTimestamp::formatDate('Y') - 17),
            ),
            'htmlOptions' => array(
                'style' => 'width:80px',
            ),
        ));
        ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tel'); ?>
        <?php echo $form->textField($model, 'tel'); ?>
        <?php echo $form->error($model, 'tel'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->