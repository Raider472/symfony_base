<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231117153036 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE burger (id INT AUTO_INCREMENT NOT NULL, pain_id INT DEFAULT NULL, oignon_id INT DEFAULT NULL, sauce_id INT DEFAULT NULL, image_id INT DEFAULT NULL, commentaire_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EFE35A0D64775A84 (pain_id), INDEX IDX_EFE35A0D8F038184 (oignon_id), INDEX IDX_EFE35A0D7AB984B7 (sauce_id), UNIQUE INDEX UNIQ_EFE35A0D3DA5256D (image_id), UNIQUE INDEX UNIQ_EFE35A0DBA9CD190 (commentaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, comm VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oignon (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pain (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D64775A84 FOREIGN KEY (pain_id) REFERENCES pain (id)');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D8F038184 FOREIGN KEY (oignon_id) REFERENCES oignon (id)');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D7AB984B7 FOREIGN KEY (sauce_id) REFERENCES sauce (id)');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0D3DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('ALTER TABLE burger ADD CONSTRAINT FK_EFE35A0DBA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D64775A84');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D8F038184');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D7AB984B7');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0D3DA5256D');
        $this->addSql('ALTER TABLE burger DROP FOREIGN KEY FK_EFE35A0DBA9CD190');
        $this->addSql('DROP TABLE burger');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE oignon');
        $this->addSql('DROP TABLE pain');
    }
}
