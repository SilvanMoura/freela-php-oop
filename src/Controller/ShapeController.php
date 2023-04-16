<?php

include 'src/Model/FigureX.php';

class ShapeController
{
    public function index(): void
    {
        $x = new FigureX(5);
        $x -> printX();
    }
}

?>