<?php

namespace App;

class FrontendDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $jobTitle;

    public function __construct(string $name, int $age, string $jobTitle)
    {
        $this->name = $name;
        $this->age = $age;
        $this->jobTitle = $jobTitle;
    }
    public function estimateTask($min, $max): int
    {
        return rand($min, $max);
    }
}