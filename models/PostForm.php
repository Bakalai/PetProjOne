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
            ['created_at', 'date', 'format' => 'php:Y-m-d H:i:s'],
            ['keywords', 'string', 'length' => [3, 200]],
            ['description','string', 'length' => [5,500]]

        ];
    }


}

?>