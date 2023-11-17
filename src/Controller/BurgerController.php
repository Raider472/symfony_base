<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/burger', name: 'burger')]
class BurgerController extends AbstractController {
    public $titre = "BigBurger";

    public $burgers = [
        ["nom" => "BigMac", "description" => "burger 1", "prix" => 10.99],
        ["nom" => "LittleMac", "description" => "burger 2", "prix" => 4.99],
        ["nom" => "FatMan", "description" => "burger 3", "prix" => 999.99],
        ["nom" => "LittleBoy", "description" => "burger 4", "prix" => 18.99]
    ];

    #[Route('/liste', name: 'burger')]
    public function burgerListe() : Response {
        return $this->render('bigBurger.html.twig', [
            "titre" => $this->titre,
            "burgers" => $this->burgers,
        ]);
    }
    
    #[Route('/liste/{nom}', name: 'leBurger')]
    public function burger(string $nom) {
        foreach($this->burgers as $burger) {
            if($burger["nom"] === $nom) {
                return $this->render('burger.html.twig', [
                    "titre" => "lol",
                    "burgerS" => $burger,
                ]);
            }
        }
    }
}

?>