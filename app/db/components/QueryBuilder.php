<?php

namespace app\db\components;
Class QueryBuilder
{
    public $pdo;

    public function __construct(){
        $config = require_once __DIR__ . "/../../../config.php";
    }
}