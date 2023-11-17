<?php
    namespace App\DataFixtures;
 
    use App\Entity\Pain;
    use App\Entity\Product;
    use App\Entity\Sauce;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Persistence\ObjectManager;
     
    class PainFixtures extends Fixture
    {
        private const PAIN_REFERENCE = 'Pain';
        
        public function load(ObjectManager $manager)
        {
            $nomsPains = [
                "blanc",
                "italien",
                "baguette",
            ];
     
            foreach ($nomsPains as $key => $nomsPain) {
                $pain = new Pain();
                $pain->setNom($nomsPain);
                $manager->persist($pain);
                $this->addReference(self::PAIN_REFERENCE . '_' . $key, $pain);
            }
     
            $manager->flush();
        }
    }
?>