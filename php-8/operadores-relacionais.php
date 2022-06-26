<?php

var_dump(2 == 3);      // false
var_dump(100 == 100);  // true
var_dump(50 == '50');  // true
var_dump(50 === '50'); // false

// operadores de comparação com 3 símbolos, comparam valor e tipo de valor
// ===
// !==

var_dump(2 > 3);    // false
var_dump(2 < 3);    // true
var_dump(50 >= 50); // true
var_dump(50 <= 50); // true
var_dump(50 < 50);  // false