<?php

$modx->runSnippet('FormIt', array(
  'hooks' => 'FormItSaveForm',
  'formName' => 'Contact Form',
  'validate' => 'name:required,email:email:required',
  'validationErrorMessage' => '1',
  'successMessage' => '1',

));

$arr = array();
$arr['errors'] = array();

if ($modx->getPlaceholder('fi.successMessage') == '1') {
  $arr['status'] = 1;
}
if ($modx->getPlaceholder('fi.validation_error_message') == '1') {
  $arr['status'] = 2;
}
if ($modx->getPlaceholder('fi.error.name') !== '') {
  $arr['errors']['name'] = 1;
}
if ($modx->getPlaceholder('fi.error.email') !== '') {
  $arr['errors']['email'] = 1;
}

return json_encode($arr);
