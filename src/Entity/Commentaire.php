<?php
    namespace App\Entity;

    use App\Repository\AgencesRepository;
    use Doctrine\ORM\Mapping as ORM;

    #[ORM\Entity(repositoryClass: CommentaireRepository::class)]
    class Commentaire {
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]

        private ?int $id = null;

        #[ORM\Column(length: 255)]
        private ?string $comm = null;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId(): ?int {
            return $this->id;
        }

        public function setComm($comm) {
            $this->comm = $comm;
        }

        public function getComm(): ?string {
            return $this->comm;
        }
    }
?>