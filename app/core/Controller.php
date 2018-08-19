<?php

class Controller
{
    protected $view;
    protected $model;

    public function view($view_name, $data=[])
    {
        $this->view=new View($view_name, $data);
        return $this->view;
    }

    public function model($model_name, $model_data=[])
    {
        if(file_exists(MODEL.$model_name.'.php'))
        {
            require MODEL.$model_name.'.php';
            $this->model=new $model_name;
        }
    }
}