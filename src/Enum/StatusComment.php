<?php
namespace App\Enum;

enum StatusComment: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BANNED = 'banned'; 
}