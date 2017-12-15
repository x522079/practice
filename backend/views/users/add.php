<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/7 0007
 * Time: 22:16
 */

$this->title = 'add page';
?>

<div>
    <?php
    $form = \yii\bootstrap\ActiveForm::begin([
        'id' => 'user',
        'enableClientValidation' => true,
    ]);
    ?>
    <?= $form->field($model,'user_name')->textInput() ?>
    <?= $form->field($model,'img')->fileInput(['format'=>'image'])->label('头像') ?>
    <img id="preview" src="<?= $model->img?:'https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1513182786281&di=b3de5cfecc5c54c1ab242561280e21e0&imgtype=0&src=http%3A%2F%2Fh.hiphotos.baidu.com%2Fimage%2Fpic%2Fitem%2F9e3df8dcd100baa1c279de714e10b912c9fc2ea6.jpg' ?>" style="width: 300px;height: auto">
    <?= $form->field($model,'telephone')->textInput() ?>
    <?= $form->field($model,'create_at')->textInput(['type'=>'hidden','value'=>date('Y-m-d H:i:s')]) ?>
</div>
<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">
$('#tuser-img').change(function () {
    var file=document.getElementById('img');
    var src=window.URL.createObjectURL(file);
    alert(file);
//    $('#preview').src(src);
});
</script>
