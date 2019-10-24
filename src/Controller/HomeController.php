<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {
    /**
     * @Route("/hello/{prenom}/age/{age}", name="hello")
     * @Route("/hello")
     * @Route("/hello/{prenom}")
     * Montre la page qui dit bonjour
     */
    public function hello($prenom = "anonyme", $age = 0){
        return new Response('Bonjour '.$prenom. " vous avez ". $age ." ans.");
    }

    /**
     * @Route("/", name="homepage")
     */
    public function home(){
        $prenoms = ["Ben" => 31,"Fanny" => 12,"Jerem" => 4];

        return $this->render(
            'home.html.twig',
            [ 'title' => "Bonjour à tous",
            'age' => 15,
            'tableau' => $prenoms]
        );
    }
}