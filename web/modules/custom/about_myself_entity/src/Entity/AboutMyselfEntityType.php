<?php

declare(strict_types=1);

namespace Drupal\about_myself_entity\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;

/**
 * Defines the About Myself Entity type configuration entity.
 *
 * @ConfigEntityType(
 *   id = "about_myself_entity_type",
 *   label = @Translation("About Myself Entity type"),
 *   label_collection = @Translation("About Myself Entity types"),
 *   label_singular = @Translation("about myself entity type"),
 *   label_plural = @Translation("about myself entities types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count about myself entities type",
 *     plural = "@count about myself entities types",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\about_myself_entity\Form\AboutMyselfEntityTypeForm",
 *       "edit" = "Drupal\about_myself_entity\Form\AboutMyselfEntityTypeForm",
 *       "delete" = "Drupal\Core\Entity\EntityDeleteForm",
 *     },
 *     "list_builder" = "Drupal\about_myself_entity\AboutMyselfEntityTypeListBuilder",
 *     "route_provider" = {
 *       "html" = "Drupal\Core\Entity\Routing\AdminHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer about_myself_entity types",
 *   bundle_of = "about_myself_entity",
 *   config_prefix = "about_myself_entity_type",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "add-form" = "/admin/structure/about_myself_entity_types/add",
 *     "edit-form" = "/admin/structure/about_myself_entity_types/manage/{about_myself_entity_type}",
 *     "delete-form" = "/admin/structure/about_myself_entity_types/manage/{about_myself_entity_type}/delete",
 *     "collection" = "/admin/structure/about_myself_entity_types",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *   },
 * )
 */
final class AboutMyselfEntityType extends ConfigEntityBundleBase {

  /**
   * The machine name of this about myself entity type.
   */
  protected string $id;

  /**
   * The human-readable name of the about myself entity type.
   */
  protected string $label;

}
