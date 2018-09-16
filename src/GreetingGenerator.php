<?php

// src/GreetingGenerator.php
namespace App;
use Psr\Log\LoggerInterface;

class GreetingGenerator
{

    private $logger;

    /**
     * GreetingGenerator constructor.
     * @param $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }


    public function getRandomGreeting()
    {
        $greetings = ['Hey', 'Yo', 'Aloha'];
        $greeting = $greetings[array_rand($greetings)];
        $this->logger->info("Im logging something in the GreetingGenerator class :) ");

        return $greeting;
    }
}

?>