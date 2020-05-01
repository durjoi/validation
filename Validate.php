<?php
  namespace Validation;

  use Database\DB;

  class Validate {
    private $_errors = [],
            $_passed = false,
            $_db = null;

    public function __construct() {
      $this->_db = DB::getInstance();
    }
  }
?>
