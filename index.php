<?php
  use Validation\validate;

  $validate = new Validate();
  $validation = $validate->check($_POST, [
    'name' = [
      'required' => true,
      'min'      => 2,
      'max'      => 20
    ],
    'email' = [
      'required' => true,
      'unique'   => 'users'
      ]  
  ]);
 ?>
