<?php
namespace App\Enum;

enum MediaType: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case BANNED = 'banned'; 
}