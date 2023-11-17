<?php
    namespace App\DataFixtures;
 
    use App\Entity\Oignon;
    use App\Entity\Product;
    use App\Entity\Sauce;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Persistence\ObjectManager;
     
    class OignonFixtures extends Fixture
    {
        private const OIGNON_REFERENCE = 'Oignon';
        
        public function load(ObjectManager $manager)
        {
            $nomsOignons = [
                "Oignon Rouge",
                "Oignon italien",
                "Oignon Normal",
            ];
     
            foreach ($nomsOignons as $key => $nomsOignon) {
                $oignon = new Oignon();
                $oignon->setNom($nomsOignon);
                $manager->persist($oignon);
                $this->addReference(self::OIGNON_REFERENCE . '_' . $key, $oignon);
            }
     
            $manager->flush();
        }
    }
?>