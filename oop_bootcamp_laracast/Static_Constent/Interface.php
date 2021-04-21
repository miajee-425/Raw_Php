<?php

# Imagine that you need to specify a class can cast data to Json
interface CastToJson
{
    public function toJson();
}

class User implements CastToJson
{
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}

class Collection implements CastToJson
{
    public function toJson()
    {
        // TODO: Implement toJson() method.
    }
}