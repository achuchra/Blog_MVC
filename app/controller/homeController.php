<?php

class homeController extends Controller
{
    public function index()
    {
        $this->view('home/index');
        $this->view->render();
    }

    public function entries()
    {
        $this->model('entries');
        $this->view('home/entries', ['all'=>$this->model->getAll()]);
        $this->view->render();
    }
}