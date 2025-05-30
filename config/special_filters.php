<?php

$subConfigs = ['applicants', 'needs', 'interns','applications','internships','offers'];

return collect($subConfigs)
    ->mapWithKeys(function ($file) {
        return [$file => require __DIR__ . "/special_filters/{$file}.php"];
    })
    ->toArray();