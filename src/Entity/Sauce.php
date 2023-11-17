<?php
    namespace App\Entity;

    use App\Repository\AgencesRepository;
    use Doctrine\ORM\Mapping as ORM;

    #[ORM\Entity(repositoryClass: SauceRepository::class)]
    class Sauce
    {
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $id = null;
    
        #[ORM\Column(length: 255)]
        private ?string $nom = null;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getNom() {
            return $this->nom;
        }
    }
?>