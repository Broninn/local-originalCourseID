<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = [
    'local/originalcourseid:view' => [
        'captype' => 'read',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => [
            'manager' => CAP_ALLOW
        ]
    ]
];
