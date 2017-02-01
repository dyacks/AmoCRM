<?php

class MainController 
{
    private $amoCRM;
    private $api;
    private $domain = 'new588c78cfa9d38';
    private $email = 'dyachukSerge@gmail.com';

    public function actionIndex()
    {
        $view = new View();
        $view->render('form');
    }

    public function actionSendAmo()
    {
        $this->api = new Handler($this->domain, $this->email);
        $this->amoCRM = new AmoCRM();
        $view = new View();

        $idLead = $this->amoCRM->sendLead($this->api);
       
        if($idLead == null){
            $view->render('error');
        } else {
            $this->amoCRM->sendContact($this->api, $idLead);
            $view->render('success');
        }
    }


}