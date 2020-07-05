<?php
$_POST = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
include $_SERVER['DOCUMENT_ROOT'].'/wp-config.php';
$fields = [
	'input_name' => "Имя: ",
	'input_phone' => "Телефон: ",
	'input_email' => "Почта: ",
	'input_order' => "Заказ: ",
	'textarea_comment' => "Комментарий: ",
];
$types = [
	'call_back' => "Форма обратный звонок\r\n",
	'order' => "Форма заказа\r\n"
];
$message = '';
$subject = '';
$request = $_POST;
foreach ($request as $key => $value){
	if($key !== 'type') {
		$message .= $fields[$key];
		$message .= $value.'\r\n';
	} else {
		$message .= $types[$value];
		$subject = $types[$value];
	}
}
$emails = carbon_get_theme_option( $request['type'] );
$array_emails = explode(',', $emails);
foreach ($array_emails as $item) mail($item, $subject, $message);
$data['result'] = true;
echo json_encode($data);