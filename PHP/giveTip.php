<?php

function tip($num) {

  $total = $num = $num * 1.2;
  return ceil($total);
}

echo tip(100);