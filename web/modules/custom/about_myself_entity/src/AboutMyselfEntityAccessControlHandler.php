<?php

declare(strict_types=1);

namespace Drupal\about_myself_entity;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Defines the access control handler for the about myself entity entity type.
 *
 * phpcs:disable Drupal.Arrays.Array.LongLineDeclaration
 *
 * @see https://www.drupal.org/project/coder/issues/3185082
 */
final class AboutMyselfEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account): AccessResult {
    if ($account->hasPermission($this->entityType->getAdminPermission())) {
      return AccessResult::allowed()->cachePerPermissions();
    }

    return match($operation) {
      'view' => AccessResult::allowedIfHasPermission($account, 'view about_myself_entity'),
      'update' => AccessResult::allowedIfHasPermission($account, 'edit about_myself_entity'),
      'delete' => AccessResult::allowedIfHasPermission($account, 'delete about_myself_entity'),
      'delete revision' => AccessResult::allowedIfHasPermission($account, 'delete about_myself_entity revision'),
      'view all revisions', 'view revision' => AccessResult::allowedIfHasPermissions($account, ['view about_myself_entity revision', 'view about_myself_entity']),
      'revert' => AccessResult::allowedIfHasPermissions($account, ['revert about_myself_entity revision', 'edit about_myself_entity']),
      default => AccessResult::neutral(),
    };
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL): AccessResult {
    return AccessResult::allowedIfHasPermissions($account, ['create about_myself_entity', 'administer about_myself_entity types'], 'OR');
  }

}
