<?php

require_once(__DIR__ . '/../../../config.php');
global $PAGE, $OUTPUT;

$PAGE->set_pagelayout('standard');

$url = new moodle_url("/local/edai/pages/edai.php");
$PAGE->set_url($url);
$PAGE->set_context(context_system::instance());
# $PAGE->set_heading(get_string('pluginname', 'block_extensao'));
require_login();

$data = [
    'exemplo' => 'Exemplo',
];

print $OUTPUT->header();
print $OUTPUT->render_from_template('local_edai/edai', $data);
print $OUTPUT->footer();
