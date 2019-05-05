<?php

namespace Drupal\jenis_sekolah;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Jenis sekolah entity.
 *
 * @see \Drupal\jenis_sekolah\Entity\JenisSekolah.
 */
class JenisSekolahAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\jenis_sekolah\Entity\JenisSekolahInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished jenis sekolah entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published jenis sekolah entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit jenis sekolah entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete jenis sekolah entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add jenis sekolah entities');
  }

}
