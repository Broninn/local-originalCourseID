<?php
require('../../config.php');

$courseid = required_param('id', PARAM_INT);
require_login($courseid);

$context = context_course::instance($courseid);
require_capability('local/originalcourseid:view', $context);

$PAGE->set_url(new moodle_url('/local/originalcourseid/index.php', ['id' => $courseid]));
$PAGE->set_context($context);
$PAGE->set_title('Original Course ID');
$PAGE->set_heading('Original Course ID');

echo $OUTPUT->header();

$original = $DB->get_field('course', 'originalcourseid', ['id' => $courseid]);

if ($original !== false) {
    $originalurl = new moodle_url('/course/view.php', ['id' => $original]);
    $link = html_writer::link(
        $originalurl,
        "Acessar curso original (ID: $original)",
        ['class' => 'btn btn-outline-primary', 'target' => '_blank', 'rel' => 'noopener']
    );
    echo html_writer::div($link, 'alert alert-info');
} else {
    echo html_writer::div("Campo originalcourseid não encontrado ou vazio.", 'alert alert-warning');
}



echo $OUTPUT->footer();
