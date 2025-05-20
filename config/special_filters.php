<?php


return [
    'applicants' => [
        'roles' => [
            'column' => 'ROLE',
            'format' => 'flat_unique', // retourne une liste unique (array simple)
        ],
    ],
    'needs' => [
        'emiters' => [
            'column' => 'EMITER',
            'format' => 'distinct_rows', // retourne une liste d’objets [{EMITER: "..."}]
        ],
        'roles' => [
            'column' => 'NAME',
            'format' => 'distinct_rows', // retourne une liste d’objets [{EMITER: "..."}]
        ],
    ],

    'interns' => [
        'distinct_internships' => [
            'column' => 'NAME',
            'format' => 'distinct_rows',
            'target_table' => 'internships',
        ],
        'internships' => [
            'column' => 'NAME',
            'format' => 'custom_select',
            'target_table' => 'internships',
            'select' => ['ID_INTERNSHIP', 'NAME', 'TYPE_INTERNSHIP'],
        ],
        'diplomas' => [
            'column' => 'SCHOOLING_LEVEL',
            'format' => 'distinct_rows',
            'target_table' => 'interns',
        ],
        'depts' => [
            'column' => 'DEPARTMENT',
            'format' => 'distinct_rows',
            'target_table' => 'interns',
        ],
        'specs' => [
            'column' => 'FACULTY',
            'format' => 'distinct_rows',
            'target_table' => 'interns',
        ],
        'internship_types'  => [
            'column' => 'TYPE_INTERNSHIP',
            'format' => 'distinct_rows',
            'target_table' => 'interns',
        ],
    ],

];
