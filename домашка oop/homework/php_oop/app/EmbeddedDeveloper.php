<?php

namespace App;

class EmbeddedDeveloper extends Developer
{
    public string $name;
    public int $age;
    public string $jobTitle;

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function setJobTitle(string $jobTitle): void
    {
        $this->jobTitle = $jobTitle;
    }
    public function estimateTask($min, $max): int
    {
        return rand($min, $max);
    }
}