<?php


# We can log to a file or we log to database or we can log some kind of saas service
interface Logger
{
    public function execute($message);
}

class LogToFile implements Logger
{
    public function execute($message)
    {
        var_dump("Log the message to a file : $message");
    }
}

class LogToDatabase implements Logger
{
    public function execute($message)
    {
        var_dump("Log the message to a database : $message");
    }
}

//....
class UserController
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function show()
    {
        $user = "Jhon Doe";
        // log this information
        $this->logger->execute($user);
    }
}

dd((new UserController(new LogToDatabase()))->show()); # UserController class will not be changed again