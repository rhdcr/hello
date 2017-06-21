<?php
if(!file_exists(dirname(__FILE__).'/data/common.inc.php')){
    header('Location:install/index.php');
    exit();
}