<?php
    namespace App\Entity;

    use App\Repository\AgencesRepository;
    use Doctrine\ORM\Mapping as ORM;

    #[ORM\Entity(repositoryClass: BurgerRepository::class)]
    class Burger
    {
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $id = null;
     
        #[ORM\Column(length: 255)]
        private ?string $nom = null;

        #[ORM\OneToOne(cascade: ['persist', 'remove'])]
        private ?Pain $pain = null;

        #[ORM\ManyToOne(cascade: ['persist', 'remove'])]
        private ?Oignon $oignon = null;

        #[ORM\ManyToOne(cascade: ['persist', 'remove'])]
        private ?Sauce $sauce = null;

        #[ORM\OneToOne(cascade: ['persist', 'remove'])]
        private ?Image $image = null;

        #[ORM\OneToOne(cascade: ['persist', 'remove'])]
        private ?Commentaire $commentaire = null;

    }
?>