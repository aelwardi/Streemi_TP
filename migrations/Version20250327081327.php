<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250327081327 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT fk_9474526c9d86650f');
        $this->addSql('DROP INDEX idx_9474526c9d86650f');
        $this->addSql('ALTER TABLE comment RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_9474526CA76ED395 ON comment (user_id)');
        $this->addSql('ALTER TABLE playlist DROP CONSTRAINT fk_d782112d9d86650f');
        $this->addSql('DROP INDEX idx_d782112d9d86650f');
        $this->addSql('ALTER TABLE playlist RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE playlist ADD CONSTRAINT FK_D782112DA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_D782112DA76ED395 ON playlist (user_id)');
        $this->addSql('ALTER TABLE playlist_subscription DROP CONSTRAINT fk_832940c9d86650f');
        $this->addSql('DROP INDEX idx_832940c9d86650f');
        $this->addSql('ALTER TABLE playlist_subscription RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE playlist_subscription ADD CONSTRAINT FK_832940CA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_832940CA76ED395 ON playlist_subscription (user_id)');
        $this->addSql('ALTER TABLE subscription_history DROP CONSTRAINT fk_54af90d09d86650f');
        $this->addSql('DROP INDEX idx_54af90d09d86650f');
        $this->addSql('ALTER TABLE subscription_history RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE subscription_history ADD CONSTRAINT FK_54AF90D0A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_54AF90D0A76ED395 ON subscription_history (user_id)');
        $this->addSql('ALTER TABLE watch_history DROP CONSTRAINT fk_de44efd89d86650f');
        $this->addSql('DROP INDEX idx_de44efd89d86650f');
        $this->addSql('ALTER TABLE watch_history RENAME COLUMN user_id_id TO user_id');
        $this->addSql('ALTER TABLE watch_history ADD CONSTRAINT FK_DE44EFD8A76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_DE44EFD8A76ED395 ON watch_history (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE subscription_history DROP CONSTRAINT FK_54AF90D0A76ED395');
        $this->addSql('DROP INDEX IDX_54AF90D0A76ED395');
        $this->addSql('ALTER TABLE subscription_history RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE subscription_history ADD CONSTRAINT fk_54af90d09d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_54af90d09d86650f ON subscription_history (user_id_id)');
        $this->addSql('ALTER TABLE playlist DROP CONSTRAINT FK_D782112DA76ED395');
        $this->addSql('DROP INDEX IDX_D782112DA76ED395');
        $this->addSql('ALTER TABLE playlist RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE playlist ADD CONSTRAINT fk_d782112d9d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_d782112d9d86650f ON playlist (user_id_id)');
        $this->addSql('ALTER TABLE comment DROP CONSTRAINT FK_9474526CA76ED395');
        $this->addSql('DROP INDEX IDX_9474526CA76ED395');
        $this->addSql('ALTER TABLE comment RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_9474526c9d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_9474526c9d86650f ON comment (user_id_id)');
        $this->addSql('ALTER TABLE watch_history DROP CONSTRAINT FK_DE44EFD8A76ED395');
        $this->addSql('DROP INDEX IDX_DE44EFD8A76ED395');
        $this->addSql('ALTER TABLE watch_history RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE watch_history ADD CONSTRAINT fk_de44efd89d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_de44efd89d86650f ON watch_history (user_id_id)');
        $this->addSql('ALTER TABLE playlist_subscription DROP CONSTRAINT FK_832940CA76ED395');
        $this->addSql('DROP INDEX IDX_832940CA76ED395');
        $this->addSql('ALTER TABLE playlist_subscription RENAME COLUMN user_id TO user_id_id');
        $this->addSql('ALTER TABLE playlist_subscription ADD CONSTRAINT fk_832940c9d86650f FOREIGN KEY (user_id_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_832940c9d86650f ON playlist_subscription (user_id_id)');
    }
}
