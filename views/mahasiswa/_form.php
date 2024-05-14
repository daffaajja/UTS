<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/** @var yii\web\View $this */
/** @var app\models\Mahasiswa $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'progdi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelas')->textInput(['maxlength' => true]) ?>

    <?=
    $form->field($model, 'tgl_masuk')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Masukkan Tanggal'],
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);
?>
    <?= $form->field($model, 'agama')->radioList([
        'islam' => 'islam', 'kristen' => 'kristen', 'hindu' => 'hindu'
    ]);
?>
    <?= $form->field($model, 'ukm')->checkBoxList([
        'wpitv' => 'wpitv', 'kesenian' => 'kesenian', 'olahraga' => 'olahraga'
    ]);
    ?>
    <?= $form->field($model, 'keterangan')->textArea(['rows => 5']); ?>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
