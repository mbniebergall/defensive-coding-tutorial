<?php

class Tail
{
    public function move()
    {
        echo 'Moving tail';
    }
}

class Gills
{
    public function extractOxygen()
    {
        echo 'Extracting oxygen';
    }
}

class GoldFish
{
    protected $tail;

    public function swim()
    {
        $this->tail = new Tail;
        $this->tail->move();
    }

    public function breathe()
    {
        $gills = new Gills;
        $gills->extractOxygen();
    }
}
