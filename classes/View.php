<?php

class View {
    
    public function __construct() 
	{
    }

    public function render($template){
        ob_start();
        require __DIR__ . '/../views/' . $template . '.php';
        $content = ob_get_contents();
        ob_end_clean();
        echo $content;
    }

}