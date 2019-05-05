<?php

namespace Drupal\jenis_sekolah\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Jenis sekolah entities.
 */
class JenisSekolahViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.

    return $data;
  }

}
