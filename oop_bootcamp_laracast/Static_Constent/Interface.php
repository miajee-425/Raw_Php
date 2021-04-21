<?php

interface Repository
{
    public function save();
}

class MongoRepository implements Repository
{

    public function save()
    {
        // TODO: Implement toJson() method.
    }
}

class FileRepository implements Repository
{

    public function save()
    {
        // TODO: Implement toJson() method.
    }
}