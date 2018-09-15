<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
    * @Route("/hello/{name}")
    */
    public function index($name)
    {
        return $this->render('default/index.html.twig', [
            'name' => $name,
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
    public function api($name) {
        return $this->json([
            'name' => $name,
            'wow' => 'wow',
        ]);
    }

}

?>
