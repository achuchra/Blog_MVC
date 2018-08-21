<?php

class homeController extends Controller
{
    public function index()
    {
        $this->view('home/index');
        $this->view->render();
    }

    public function entries($filter='')
    {
        $this->model('entries');
        switch ($filter){
            case "filter=europe": $this->view('home/entries', ['all' => $this->model->getEurope()]); break;
            case "filter=asia": $this->view('home/entries', ['all' => $this->model->getAsia()]); break;
            case "filter=america": $this->view('home/entries', ['all' => $this->model->getAmerica()]); break;
            default: $this->view('home/entries', ['all' => $this->model->getAll()]); break;
        }
        $this->view->render();
    }
}