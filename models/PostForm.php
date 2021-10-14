<?php
namespace app\models;


use yii\base\Model;

class PostForm extends Model
{

    public $title;
    public $content;
    public $img;
    public $created_at;
    public $keywords;
    public $description;

    public function rules()
    {
        return [
            [['title', 'content', 'created_at','keywords', 'description'], 'required'],
            ['title', 'string', 'length' =>[5,50]],
            [['content'],'string', 'length' => [15, 5000]],
            [['img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            ['created_at', 'string', 'length' => [3, 200]],
            ['keywords', 'string', 'length' => [3, 200]],
            ['description','string', 'length' => [5,500]]

        ];
    }
    public function attributeLabels()
    {
        return [
            'title'=>'Заголовок',
            'content'=>'Текст статьи',
            'img'=>'Главное изображение',
            'created_at'=>'Дата публикации',
            'keywords'=>'Ключвевые слова',
            'description'=>'Описание статьи'
        ];
    }


}

?>