<?php

class HomeController
{
    public function router($page)
    {
        include('views/home/' . $page . '.php');
    }
}
