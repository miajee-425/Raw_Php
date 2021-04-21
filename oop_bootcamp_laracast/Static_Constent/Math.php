<?php
class Math{
    public function add()
    {
        return array_sum(func_get_args());
    }
}

$math = new Math();
dd($math->add(1,2,3)); #6
dd($math->add(1,2,3,4)); #10