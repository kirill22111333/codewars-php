<?php 

function twice_as_old($d, $s) {
  return $s*2 < $d ? $d - $s*2 : $s*2 - $d;
}