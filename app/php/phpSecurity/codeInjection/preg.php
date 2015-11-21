<?php
$subject = 'lipsum';
$pattern = '/(.*)/e'; // e runs replacement through eval (deprecated as of php 5.5)
$replacement = 'print(dirname(__FILE__));';
preg_replace($pattern, $replacement, $subject);