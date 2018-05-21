<?php
global $_W, $_GPC;

$input = $_GPC["__input"];
$form = $input['form'];
$schema = $input['schema'];
$formData = $input['formData'];

$ui = $input['ui'];
$ui = $ui ? $ui : array(
    'placeholder' => '',
);

$button = $form['button'];
$mode = $form['mode'];
$mode = $mode ? $mode : 'default';
$layout = $form['layout'] ? $form['layout'] : 'horizontal';
$firstVisual = isset($form['firstVisual']) ? $form['firstVisual'] : 1;
$liveValidate = isset($form['liveValidate']) ? $form['liveValidate'] : 1;
$autocomplete = isset($form['autocomplete']) ? $form['autocomplete'] : 'on';
$data = array();
$data['mode'] = $form['mode'] ? $form['mode'] : 'default';
$data['code'] = $form['code'];
$data['title'] = $form['title'];
$data['action'] = $form['action'];
$data['desc'] = $form['desc'];

$data['ui'] = serialize($ui);
$data['button'] = serialize($button);
$data['formData'] = serialize($formData);
$data['schema'] = serialize($schema);
$data['layout'] = $layout;
$data['create_time'] = time();
$data['firstVisual'] = $firstVisual;
$data['liveValidate'] = $liveValidate;
$data['autocomplete'] = $autocomplete;
$item = pdo_get('runner_open_forms_builder', array('code' => $data['code']));
if (empty($item)) {
    pdo_insert('runner_open_forms_builder', $data);
} else {
    pdo_update('runner_open_forms_builder', $data, array('id' => $item['id']));
}
meepoSuccess('', $data);
