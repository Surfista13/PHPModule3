<?php

class Form
{
    private string $code;
    private string $codeEntete="";
    private string $codeText="";
    private string $codeSubmit="";
    private string $action;
    private string $methode;

    public function __construct(string $action, string $methode)
    {
        $this->action = $action;
        $this->method = $methode;
        $this->codeinit="<form action=\"$action\" method=\"$methode\"><br/>";
        $this->codeinit.="<fieldset>";
    }

    public function setText(){
        $this->codeText .= "<input type=\"text\" value=\"\"><br/>";
    }
    public function setsubmit()
    {
        $this->codeSubmit.="<input type=\"submit\" value=\"Envoyer\"/><br />";
    }
    public function getForm(){
        echo $this->codeEntete;
        echo $this->codeText;
        echo $this->codeSubmit;
    }

}