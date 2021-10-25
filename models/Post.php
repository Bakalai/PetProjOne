<?php
namespace app\models;

use yii\db\ActiveRecord;


class Post extends ActiveRecord
{

    public static function tablename(){
        return '{{%postform}}';
    }
//    public $title;
//    public $content;
//    public $img;
//    public $created_at;
//    public $keywords;
//    public $description;

    public function rules()
    {
        return [
            [['title', 'content','keywords', 'description'], 'required'],
            ['title', 'string'],
            [['content'],'string'],
            [['img'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
            ['keywords', 'string'],
            ['description','string']

        ];
    }
    public function attributeLabels()
    {
        return [
            'title'=>'Заголовок',
            'content'=>'Текст статьи',
            'img'=>'Главное изображение',
            'keywords'=>'Ключвевые слова',
            'description'=>'Описание статьи'
        ];
    }


}

?>