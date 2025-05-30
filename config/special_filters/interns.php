<?php

return [
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
    'internship_types' => [
        'column' => 'TYPE_INTERNSHIP',
        'format' => 'distinct_rows',
        'target_table' => 'interns',
    ],
    'join' => [
        'table' => 'internships',
        'local_key' => 'ID_INTERNSHIP',
        'foreign_key' => 'ID_INTERNSHIP',
    ],
    'columns' => [
        'interns.*',
        'internships.TYPE_INTERNSHIP',
        'internships.NAME as INTERNSHIP',
    ],
];
