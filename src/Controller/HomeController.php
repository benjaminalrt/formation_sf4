<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

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