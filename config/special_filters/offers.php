<?php

return [
    'table' => 'needs',
    'columns' => [
        'needs.ID_NEED',
        'needs.REFERENCE',
        'needs.NAME',
        'needs.DESCRIPTION',
        'needs.EMITER',
        'needs.DETAILS',
        'needs.STATUS',
        'needs.VALIDATOR',
        'needs.MOTIVE',
        'needs.PLACES',
        'needs.DATE_POST',
        'needs.DATE_APPROUVAL'
    ],

    'emiters' => [
        'column' => 'EMITER',
        'format' => 'distinct_rows',
    ],

    'roles' => [
        'column' => 'NAME',
        'format' => 'distinct_rows',
    ],
];