<?php 
session_start();
function generaPassword($len) {

$pool = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{};:,.<>/?";
  $pwd = "";
  for ($i = 0; $i < $len; $i++) {
  $idx = random_int(0, strlen($pool)-1); 
  $pwd .= $pool[$idx];
  }

  return $pwd;
}
?>