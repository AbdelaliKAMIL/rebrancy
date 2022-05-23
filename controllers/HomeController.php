<?php

class HomeController
{
    public function homepage()
    {
        $brands = Brand::getFew();

        include('views/home/index.php');
    }
}
