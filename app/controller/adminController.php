<?php

class adminController extends Controller
{
    public function login()
    {
        $this->view('admin/login');
        $this->view->render();
    }
}