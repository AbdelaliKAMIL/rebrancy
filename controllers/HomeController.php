<?php

class HomeController
{
    public function index($page)
    {
        include('views/home/' . $page . '.php');
    }
}
