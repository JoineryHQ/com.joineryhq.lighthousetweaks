<?php

require_once 'lighthousetweaks.civix.php';
// phpcs:disable
use CRM_Lighthousetweaks_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function lighthousetweaks_civicrm_config(&$config) {
  _lighthousetweaks_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function lighthousetweaks_civicrm_install() {
  _lighthousetweaks_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function lighthousetweaks_civicrm_enable() {
  _lighthousetweaks_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function lighthousetweaks_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function lighthousetweaks_civicrm_navigationMenu(&$menu) {
//  _lighthousetweaks_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _lighthousetweaks_civix_navigationMenu($menu);
//}

/**
 * Implements hook_civicrm_buildForm().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_buildForm
 *
 */
function lighthousetweaks_civicrm_buildForm($formName, &$form) {
  if ($formName == 'CRM_Activity_Form_Activity') {
    // Remove "positiveInteger" validation rule; for duration field;
    // it's already a "number" which provides enough validation for float data.
    unset($form->_rules['duration']);
    // Change duration minimum 0, to support values like 0.5.
    if ($form->elementExists('duration')) {
      $element = $form->getElement('duration');
      $element->setAttribute('min', 0);
    }
  }
}
