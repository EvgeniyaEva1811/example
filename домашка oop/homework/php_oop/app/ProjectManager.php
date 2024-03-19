<?php

namespace App;

class ProjectManager implements ManagerInterface
{
    public const TIME_COSTS = 2;
    public function estimateTask1(int $hour): int
    {
        return $hour * self::TIME_COSTS;
    }
}