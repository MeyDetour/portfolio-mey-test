<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240624210030 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE projectt_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE project_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE project (id INT NOT NULL, image_id INT NOT NULL, name TEXT NOT NULL, description TEXT NOT NULL, link TEXT DEFAULT NULL, step1 TEXT DEFAULT NULL, step2 TEXT DEFAULT NULL, step3 TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2FB3D0EE3DA5256D ON project (image_id)');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT FK_2FB3D0EE3DA5256D FOREIGN KEY (image_id) REFERENCES image (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE projectt DROP CONSTRAINT fk_c2f726073da5256d');
        $this->addSql('DROP TABLE projectt');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE project_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE projectt_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE projectt (id INT NOT NULL, image_id INT NOT NULL, name TEXT NOT NULL, description TEXT NOT NULL, link TEXT DEFAULT NULL, step1 TEXT DEFAULT NULL, step2 TEXT DEFAULT NULL, step3 TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uniq_c2f726073da5256d ON projectt (image_id)');
        $this->addSql('ALTER TABLE projectt ADD CONSTRAINT fk_c2f726073da5256d FOREIGN KEY (image_id) REFERENCES image (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE project DROP CONSTRAINT FK_2FB3D0EE3DA5256D');
        $this->addSql('DROP TABLE project');
    }
}
