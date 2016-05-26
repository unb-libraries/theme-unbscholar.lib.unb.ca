<?php

/**
 * @file
 * Hooks for the unbscholar_lib_unb_ca subtheme.
 */

/**
 * Implements hook_form_alter.
 */
function unbscholar_lib_unb_ca_form_alter(&$form, &$form_state, $form_id) {
  // Reword default description text for Drupal login form username input widget.
  if($form_id == 'user_login') {
    $form['name']['#description'] = t('Enter your UNB Login ID.');
  }
}
