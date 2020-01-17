<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$autoload['packages'] = array();
$autoload['libraries'] = array('database','session','upload');
$autoload['drivers'] = array('cache');
$autoload['helper'] = array('url','form','email','captcha');
$autoload['config'] = array();
$autoload['language'] = array();
$autoload['model'] = array('Model_login','Model_data', 'Model_keamanan');
