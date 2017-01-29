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
$arr = array();

if ($modx->getPlaceholder('fi.successMessage') == '1') {
  $output = '{ "status": 1 }';
  $arr['status'] = 1;
}
if ($modx->getPlaceholder('fi.validation_error_message') == '1') {
  $output = '{ "status": 2 }';
  $arr['status'] = 1;
}

return json_encode($arr);
return $output;
