<?php 

namespace app\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $avatar;

    public function rules()
    {
        return [
            [['avatar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->avatar->saveAs( realpath(Yii::$app->basePath) .'/upload/' . $this->avatar->baseName . '.' . $this->avatar->extension);
            return true;
        } else {
            return false;
        }
    }
}