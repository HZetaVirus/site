<?php

namespace app\class;

use stdClass;

abstract class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new stdClass();
    }
    
    public function render($view, $layout='layout'){
        $this->view->page = $view;
        $files = "../app/views/".$layout.".php";

        if(file_exists($files)){
            require "../app/views/".$layout.".php";
        }
        else{
            $this->content();
        }
    }

    public function content(){
        $class = get_class($this);

        $class = str_replace("app\\controllers\\", '', $class);
        $class = ucfirst(str_replace("controllers", '', $class));

        require "../app/views/".$class."/".$this->view->page.".php";
    }
}