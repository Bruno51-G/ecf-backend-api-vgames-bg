<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260217110151 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo ADD publisher_name_id INT NULL');
        $this->addSql('ALTER TABLE gizmondo ADD CONSTRAINT FK_97A931B3FDB7C9DD FOREIGN KEY (publisher_name_id) REFERENCES publisher (id)');
        $this->addSql('CREATE INDEX IDX_97A931B3FDB7C9DD ON gizmondo (publisher_name_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo DROP FOREIGN KEY FK_97A931B3FDB7C9DD');
        $this->addSql('DROP INDEX IDX_97A931B3FDB7C9DD ON gizmondo');
        $this->addSql('ALTER TABLE gizmondo DROP publisher_name_id');
    }
}
