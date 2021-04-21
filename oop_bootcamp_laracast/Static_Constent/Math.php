<?php
class Math
{
    public function add(...$nums)
    {
        return array_sum($nums);
    }
}

$math = new Math();
dump($math->add(1, 2, 3)); #6
dd($math->add(1, 2, 3, 4)); #10