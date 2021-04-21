<?php

class Person
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Business
{
    protected $stuff;

    public function __construct(Stuff $stuff)
    {
        $this->stuff = $stuff;
    }

    public function hire(Person $person)
    {
        // add $person to the stuff collection
        $this->stuff->add($person);
    }

    public function getStuffMembers()
    {
        return $this->stuff->members();
    }
}

class Stuff
{
    protected $members = [];

    public function __construct($members = [])
    {
        $this->members = $members;
    }

    public function add(Person $person)
    {
        $this->members[] = $person;
    }

    public function members()
    {
        return $this->members;
    }
}

#$miajee = new Person("Miajee");
#$stuff = new Stuff([$miajee]);
#$spl = new Business($stuff);
#$spl->hire($miajee);

$miajee = new Person("Miajee");
$stuff = new Stuff([$miajee]); # This is my Business so i don't need to hire
$spl = new Business($stuff);
$spl->hire((new Person("Jon Doe"))); # Hire New Person

var_dump($spl->getStuffMembers());
dd($stuff);


# Business hires a person and when they do the person join the stuff
# A Business Depends On stuff in order to run