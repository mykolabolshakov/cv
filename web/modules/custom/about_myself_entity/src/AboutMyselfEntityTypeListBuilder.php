<?php

declare(strict_types=1);

namespace Drupal\about_myself_entity;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of about myself entity type entities.
 *
 * @see \Drupal\about_myself_entity\Entity\AboutMyselfEntityType
 */
final class AboutMyselfEntityTypeListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['label'] = $this->t('Label');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    $row['label'] = $entity->label();
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render(): array {
    $build = parent::render();

    $build['table']['#empty'] = $this->t(
      'No about myself entity types available. <a href=":link">Add about myself entity type</a>.',
      [':link' => Url::fromRoute('entity.about_myself_entity_type.add_form')->toString()],
    );

    return $build;
  }

}
