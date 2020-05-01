<?php
  namespace Validation;
  include 'DB.php';
  use Database\DB;

  class Validate {
    private $_errors = [],
            $_passed = false,
            $_db = null;

    public function __construct() {
      $this->_db = DB::getInstance(); // Connect your database here
    }

    public function check($source, $items = []) {
      if(!empty($items)) {
        
      }
    }
  }
?>
