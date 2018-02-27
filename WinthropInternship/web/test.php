<?php

use chriskacerguis\Randomstring\Randomstring;

$random = new Randomstring();

/*
Generate a random string of 8 charecters, using alpha numerics.
Result = string(8) "ab86d144"
*/
$str = $random->generate(8);

/*
Generate a random string of 15 charecters, using alpha numerics and special charecters
Result = string(15) "vT-`h9tG1Mt.Sj&"
*/
$str = $random->generate(15, true);

/*
Generate a random string of 13 charecters using alpha numerics, and wrap result with strtoupper()
Result = string(13) "LVFUK0X01HVD0"
*/
$str = $random->generate(13, false, 'strtoupper');