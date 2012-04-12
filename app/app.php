<?php
function __autoload($class_name) {
    include 'includes/'.$class_name.'.php';
}

