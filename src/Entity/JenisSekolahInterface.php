<?php

namespace Drupal\jenis_sekolah\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Jenis sekolah entities.
 *
 * @ingroup jenis_sekolah
 */
interface JenisSekolahInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Jenis sekolah name.
   *
   * @return string
   *   Name of the Jenis sekolah.
   */
  public function getName();

  /**
   * Sets the Jenis sekolah name.
   *
   * @param string $name
   *   The Jenis sekolah name.
   *
   * @return \Drupal\jenis_sekolah\Entity\JenisSekolahInterface
   *   The called Jenis sekolah entity.
   */
  public function setName($name);

  /**
   * Gets the Jenis sekolah creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Jenis sekolah.
   */
  public function getCreatedTime();

  /**
   * Sets the Jenis sekolah creation timestamp.
   *
   * @param int $timestamp
   *   The Jenis sekolah creation timestamp.
   *
   * @return \Drupal\jenis_sekolah\Entity\JenisSekolahInterface
   *   The called Jenis sekolah entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Jenis sekolah published status indicator.
   *
   * Unpublished Jenis sekolah are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Jenis sekolah is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Jenis sekolah.
   *
   * @param bool $published
   *   TRUE to set this Jenis sekolah to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\jenis_sekolah\Entity\JenisSekolahInterface
   *   The called Jenis sekolah entity.
   */
  public function setPublished($published);

}
