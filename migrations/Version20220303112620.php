<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303112620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE response_reclamation (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6EB97E8B2D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE response_reclamation ADD CONSTRAINT FK_6EB97E8B2D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE response_reclamation');
        $this->addSql('ALTER TABLE categorie_rec CHANGE nom nom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE description description VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE titre titre VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, CHANGE contenu contenu VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
    }
}
