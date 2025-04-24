<?php
defined('MOODLE_INTERNAL') || die();

function local_originalcourseid_extend_navigation_course($navigation, $course, $context)
{
    if (has_capability('local/originalcourseid:view', $context)) {
        $url = new moodle_url('/local/originalcourseid/index.php', ['id' => $course->id]);
        $navigation->add(get_string('view', 'local_originalcourseid'), $url, navigation_node::TYPE_SETTING, null, null, new pix_icon('i/info', ''));
    }
}
