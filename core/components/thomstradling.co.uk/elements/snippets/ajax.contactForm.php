<?php

// [[!FormIt?
//   &hooks=`FormItSaveForm`
//   &formName=`Contact Form`
//   &validate=`name:required,email:email:required`
// ]]

$modx->runSnippet('FormIt', array(
  'hooks' => 'FormItSaveForm',
  'formName' => 'Contact Form',
  'validate' => 'name:required,email:email:required',
  'validationErrorMessage' => '1',
  'successMessage' => '1',

));

$output = '';

if ($modx->getPlaceholder('fi.successMessage') == '1') {
  $output = '{ status: 1 }';
}
if ($modx->getPlaceholder('fi.validation_error_message') == '1') {
  $output = '{ status: 2 }';
}
return $output;
