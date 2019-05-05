<?php

/**
 * @file
 * Contains jenis_sekolah.page.inc.
 *
 * Page callback for Jenis sekolah entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Jenis sekolah templates.
 *
 * Default template: jenis_sekolah.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_jenis_sekolah(array &$variables) {
  // Fetch JenisSekolah Entity Object.
  $jenis_sekolah = $variables['elements']['#jenis_sekolah'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
