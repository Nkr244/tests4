<?php
return["host"=>"localhost",
    "db"=>"bd_rusakov",
    "login"=>"root",
    "password"=>"",
    "opt"=>[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ]
];