<?php

namespace common\models\costfit;

use Yii;
use \common\models\costfit\master\ProductImageMaster;

/**
* This is the model class for table "product_image".
*
    * @property string $productImageId
    * @property string $productId
    * @property string $title
    * @property string $description
    * @property string $image
    * @property integer $status
    * @property string $createDateTime
    * @property string $updateDateTime
*/

class ProductImage extends \common\models\costfit\master\ProductImageMaster{
/**
* @inheritdoc
*/
public function rules()
{
return array_merge(parent::rules(), []);
}

/**
* @inheritdoc
*/
public function attributeLabels()
{
return array_merge(parent::attributeLabels(), []);
}
}
