<?php
namespace app\components;



use yii\base\Widget;

class HelloWidget extends Widget
{
    public $message;

    public function init()
    {
        parent::init();

        if ($this->message === null) {
            $this->message = 'ёпта';
        }

        ob_start();

    }

    public function run()
    {
        $content  = ob_get_clean();
        $content = strip_tags($content);

        return $this->render('hello', [
            'message' => $this->message,
            'content' => $content
        ]);
    }
}