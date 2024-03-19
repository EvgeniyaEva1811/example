<?php

namespace App;

abstract class Developer
{
    abstract public function estimateTask($min, $max);
}