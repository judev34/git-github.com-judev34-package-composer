<?php

namespace Judev\PackageComposer;

class Inspire 
{
    protected $inspirations = [
        'You can do anything, but not everything.',
        'Perfection is achieved, not when there is nothing more to add, but when there is nothing left to take away.',
        'No one can make you feel inferior without your consent.',
        'It does not matter how slowly you go as long as you do not stop.',
    ];

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayInspirations()
    {
        return $this->name. ' ' .$this->inspirations[rand(0, count($this->inspirations)-1)];
        
    }
}