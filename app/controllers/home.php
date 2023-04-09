<?php

class Home extends Controller
{
    public function index()
    {
        $User = $this->model('User');//calling the class

        $this->view('home/index', [

        ]);
    }

    public function about()
    {
        $this->view('about/index', [

        ]);
    }

    public function contact()
    {
        $this->view('contact/index', [

        ]);
    }

    
}