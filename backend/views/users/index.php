<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/15 0015
 * Time: 20:43
 */

$this->title='列表页';

?>


<?= \yii\grid\GridView::widget(
    [
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'id',
                'label' => '序号',
            ],
            [
                'attribute' => 'user_name',
                'label' => '姓名',
                'value' => function($record){
                    if ($record['user_name']==='xin'){
                        return '<span class="ye">'.$record['user_name'].'</span>';
                    }
                    return $record['user_name'];
                },
                'format' => 'raw'
            ],
            [
                'attribute' => 'img',
            ],
            [
                'attribute' => 'telephone',
            ],
            [
                'attribute' => 'create_at',
                'value' => function($value){
                    return strtotime($value['create_at']);
                }
            ]
        ]
    ]
) ?>
<script src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
    $('.ye').parent().css('background','yellow');
</script>

