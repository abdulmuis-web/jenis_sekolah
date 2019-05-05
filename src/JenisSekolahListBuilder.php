<?php

namespace Drupal\jenis_sekolah;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Jenis sekolah entities.
 *
 * @ingroup jenis_sekolah
 */
class JenisSekolahListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Jenis sekolah');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\jenis_sekolah\Entity\JenisSekolah */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.jenis_sekolah.canonical',
      ['jenis_sekolah' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
