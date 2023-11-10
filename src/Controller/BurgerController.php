<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/burger', name: 'burger')]
class BurgerController extends AbstractController {
    public $titre = "BigBurger";

    #[Route('/liste', name: 'burger')]
    public function burgerListe() : Response {
        return $this->render('bigBurger.html.twig', [
            "titre" => $this->titre,
        ]);
    }
    
}

?>