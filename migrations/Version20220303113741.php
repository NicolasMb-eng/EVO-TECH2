<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303113741 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE response_reclamation DROP FOREIGN KEY FK_6EB97E8B2D6BA2D9');
        $this->addSql('ALTER TABLE response_reclamation ADD CONSTRAINT FK_6EB97E8B2D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categorie_rec CHANGE nom nom VARCHAR(255) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci`, CHANGE description description VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
        $this->addSql('ALTER TABLE reclamation CHANGE titre titre VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`, CHANGE contenu contenu VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_unicode_ci`');
        $this->addSql('ALTER TABLE response_reclamation DROP FOREIGN KEY FK_6EB97E8B2D6BA2D9');
        $this->addSql('ALTER TABLE response_reclamation ADD CONSTRAINT FK_6EB97E8B2D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
    }
}
