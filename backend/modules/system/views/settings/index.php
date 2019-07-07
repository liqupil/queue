<?php
/**
 * @author V Tikhomirov <vladimir.tikhomirov@kviku.ru>
 */

use common\components\keyStorage\FormWidget;

/**
 * @var $model \common\components\keyStorage\FormModel
 */

$this->title = Yii::t('backend', 'Application settings');

?>

<?php echo FormWidget::widget([
    'model' => $model,
    'formClass' => '\yii\bootstrap\ActiveForm',
    'submitText' => Yii::t('backend', 'Save'),
    'submitOptions' => ['class' => 'btn btn-primary'],
]) ?>
