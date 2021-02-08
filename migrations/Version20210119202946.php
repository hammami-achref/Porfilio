<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210119202946 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cursusacademique ADD n_iveau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cursusacademique ADD CONSTRAINT FK_639A26D0F8D9000B FOREIGN KEY (n_iveau_id) REFERENCES niveau (id)');
        $this->addSql('CREATE INDEX IDX_639A26D0F8D9000B ON cursusacademique (n_iveau_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cursusacademique DROP FOREIGN KEY FK_639A26D0F8D9000B');
        $this->addSql('DROP INDEX IDX_639A26D0F8D9000B ON cursusacademique');
        $this->addSql('ALTER TABLE cursusacademique DROP n_iveau_id');
    }
}
