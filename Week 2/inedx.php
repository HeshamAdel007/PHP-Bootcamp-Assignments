<?php
//============================= 1
echo (int) (15.2 + 14.7 + (10.5 + 10.5)); // 50
echo '<br>';
echo gettype((int) 15.2 + (int) 14.7 + (int)(10.5 + 10.5)); // Integer
echo '<br>';

//============================= 2
echo gettype(100);
echo '<br>';
echo gettype((int) is_int(100));
echo '<br>';
echo get_debug_type(100); // https://www.php.net/manual/en/function.get-debug-type.php
echo '<br>';

//=============================  3
echo '"Hello "Elzero" \\\\ """ We Love "$$PHP"';
echo '<br>';

//=============================  4
echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '<br>';

//=============================  5
echo nl2br(<<<'Now'
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
Now);
echo '<br>';
//=============================  6

$something = "Programming";
echo <<<"code"
Hello \PHP\
We Love $something
code;
echo '<br>';

//=============================  7
echo boolval("Hello PHP");
echo '<br>';
echo gettype((int)"Hello PHP");
echo '<br>';

//=============================  8
$array = [
    'FrontEnd' => [
        'HTML',
        'CSS',
        'Js' => [
            'Vuejs' => [
                "2"=>'V2',
                "3"=>'V3',
            ],
            'Reactjs',
             'Svelte',
        ]
        ],
   'BackEnd' => [
        'PHP',
        'MySQL',
        'Security'
   ],
  'Git',
  'Github',
  'Testing' => [
      'Unit Testing',
      'End To End',
      'Integration'
    ]
];

echo '<pre>';
print_r ($array);
echo '</pre>';









