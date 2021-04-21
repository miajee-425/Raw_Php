<?php

# We can log to a file or we log to database or we can log some kind of saas service

class LogToFile
{
    public function execute($message)
    {
        var_dump("Log the message to a file : $message");
    }
}


//....
class UserController
{
    private $log_to_file;

    public function __construct(LogToFile $log_to_file)
    {
        $this->log_to_file = $log_to_file;
    }

    public function show()
    {
        $user = "Jhon Doe";
        // log this information
        $this->log_to_file->execute($user);
    }
}

((new UserController(new LogToFile()))->show());

# After couple week later if requirement change and LogToDatabase file need add what will do???