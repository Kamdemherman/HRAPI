<?php

return [
    'joins' => [
        [
            'table' => 'offers',
            'local_key' => 'applications.ID_OFFER',
            'foreign_key' => 'offers.ID_OFFER'
        ],
        [
            'table' => 'applicants',
            'local_key' => 'applications.ID_APPLICANT',
            'foreign_key' => 'applicants.ID_APPLICANT'
        ]
    ],
    'columns' => [
        'applications.ID_APPLICATION',
        'applications.ID_OFFER',
        'applications.STATUS',
        'applications.NOTE',
        'applications.APPRECIATION',
        'applications.DATE_START',
        'applications.DATE_END',
        'applications.DATE_POST',
        'applications.ID_APPLICANT',
        'applications.HIRING_NOTE',
        'applications.IS_HIRED',
        'applicants.MATRICULE',
        'offers.REFERENCE'
    ]
];