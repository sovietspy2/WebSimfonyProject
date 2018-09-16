<?php
namespace App\Controller;

use App\GreetingGenerator;
use App\php;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Psr\Log\LoggerInterface;

class DefaultController extends AbstractController
{
    /**
    * @Route("/hello/{name}")
    */
    public function index($name, LoggerInterface $logger, GreetingGenerator $greetings) // autowiring
    {

        $greet = $greetings->getRandomGreeting();
//
//        try {
//            $greet =  implode(" ",$greet);
//        } catch (Excepton $e) {
//            $greet = "HELLO THERE KENOBI";
//        }

        $logger->info("someone is using index function with the value: $name");
        return $this->render('default/index.html.twig', [
            'name' => $name,
            'greetings'=> $greet,
        ]);
    }


    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }

    /**
     * @Route("/api/{name}")
     */
    public function apiExample($name) {
        return $this->json([
            'name' => $name,
            'wow' => 'wow',
        ]);
    }

}

?>
