<?php

namespace App\Enums;

enum Skill: string
{
    case Beginner = 'beginner';
    case Intermediate = 'intermediate';
    case Advanced = 'advanced';
    case Expert = 'expert';
    case Master = 'master';
}
