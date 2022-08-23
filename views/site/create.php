<?php
use yii\helpers\html;
use yii\widgets\ActiveForm;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<div class="site-index">
 
<h1>Create Your Todo-List</h1>

    <div class="body-content">

    <?php
       $form = ActiveForm::begin()?>
    <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'title');?>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
                <?= $form->field($post, 'description')->textarea(['rows'=> '6']);?>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group">
            <div class="col-lg-6">
<?php $items = ['e-commerce'=>'Homework', 'platform'=>'Exams-prep.', 'CMS'=>'Vacation-planning',];?>
                <?= $form->field($post, 'category')->dropDownList($items, ['prompt'=> 'Tasks']);?>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group">
            <div class="">
                 <div class="" style="padding-top:20px;">
                    <?= Html::submitButton('Create Post', ['class' => 'btn btn-primary']);?>
                 </div>
                    <div class="" style="margin-top:-38px; padding-left:380px;">
                    <a href=<?php echo yii::$app->homeUrl;?> class="btn btn-primary">Go Back</a>
                    </div>
            </div>
        </div>
        </div>
        <?php ActiveForm::end() ?>
    </div>
</div>
