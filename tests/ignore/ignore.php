<?php

// prettier-ignore
define("FOO",    "something");

// prettier-ignore
$var1   =   1;

/* prettier-ignore */
$var2   =   1;

// prettier-ignore
$var3 = array(
    1, 2, 3,
    4, 5, 6,
    7, 8, 9
);

/**
 * big doc comment
 * prettier-ignore
 * other stuff
 */
function Foo ($veryLongVeryLongVeryLongVeryLongVeryLongVeryLongVeryLong) { return [
  "the ugliest" =>
              "array",
        "in" => function($all) { return "history"; },
    "of" => [
                "php"
                       ]
];}


// prettier-ignore-start
$info =    "prettier-ignore-start and -end is currently not supported"  ;
// prettier-ignore-end

class ExampleClass {
    // prettier-ignore
    const SOME_CONST    = 1;
    const ANOTHER_CONST = 2;

    // prettier-ignore
    const CONST_ARRAY = [
        'test'        => 0,
        'another_key' => 1
    ];
}
