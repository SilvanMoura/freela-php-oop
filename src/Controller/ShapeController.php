<?php

include 'src/Model/FigureCross.php';
include 'src/Model/FigureX.php';

class ShapeController
{
    public function index(): void
    {
        $cross = new FigureCross(5);
        $cross -> printCross();
        
        $x = new FigureX(5);
        $x -> printX();
    }
}

?>