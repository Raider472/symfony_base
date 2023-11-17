<?php
    
    namespace App\Entity;

    use App\Repository\AgencesRepository;
    use Doctrine\ORM\Mapping as ORM;
    
    #[ORM\Entity(repositoryClass: ImageRepository::class)]
    class Image
    {
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $id = null;
     
        #[ORM\Column(length: 255)]
        private ?string $url = null;
     
        #[ORM\Column(length: 255)]
        private ?string $altText = null;

        public function setId($id) {
            $this->id = $id;
        }

        public function getId() {
            return $this->id;
        }

        public function setUrl($url) {
            $this->url = $url;
        }

        public function getUrl() {
            return $this->url;
        }

        public function setAltText($altText) {
            $this->altText = $altText;
        }
    }
?>