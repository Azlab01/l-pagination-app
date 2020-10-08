<?php 
namespace App\Service;

class Stats
{
    public static function newOrders() : int
    {
        return rand(5, 100);
    }

    public static function salesAmount() : int
    {
        return rand(100, 100000);
    }

    public static function satisfactions() : int
    {
        return rand(90, 100);
    }
}
