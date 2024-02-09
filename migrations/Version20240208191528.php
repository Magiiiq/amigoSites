<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240208191528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bureau ADD email VARCHAR(255) NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE annee annee VARCHAR(255) NOT NULL, CHANGE linkedin linkedin VARCHAR(255) NOT NULL, CHANGE pole pole VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bureau DROP email, CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE annee annee VARCHAR(50) NOT NULL, CHANGE pole pole VARCHAR(50) NOT NULL, CHANGE linkedin linkedin VARCHAR(50) NOT NULL, CHANGE image image VARCHAR(50) NOT NULL');
    }
}
