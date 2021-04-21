<?php
class Math
{
    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}

dd(Math::add(1, 2, 3, 4)); #10