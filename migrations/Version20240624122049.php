<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240624122049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE technology ADD image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE technology ADD CONSTRAINT FK_F463524D3DA5256D FOREIGN KEY (image_id) REFERENCES image (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F463524D3DA5256D ON technology (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE technology DROP CONSTRAINT FK_F463524D3DA5256D');
        $this->addSql('DROP INDEX UNIQ_F463524D3DA5256D');
        $this->addSql('ALTER TABLE technology DROP image_id');
    }
}
