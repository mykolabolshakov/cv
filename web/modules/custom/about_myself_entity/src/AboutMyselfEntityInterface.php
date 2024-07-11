<?php

declare(strict_types=1);

namespace Drupal\about_myself_entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining an about myself entity entity type.
 */
interface AboutMyselfEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
