<?php

declare(strict_types=1);

namespace Drupal\test_module;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a test_entity entity type.
 */
interface TestEntityInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
