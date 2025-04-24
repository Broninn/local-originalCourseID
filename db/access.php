<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = [
    'local/originalcourseid:view' => [
        'captype' => 'read',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => [
            'teacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        ]
    ]
];
