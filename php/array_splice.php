<?php
function pr($param){
	$html;
	$html .= '<pre>' . PHP_EOL;
	// 第二引数をtrueにすると変数に代入できる
	$html .= print_r($param, true) . PHP_EOL;
	$html .= '</pre>' . PHP_EOL;
	echo $html;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html" charset="UTF-8">
		<title>配列の指定箇所の値を削除する</title>
	</head>
	<body>
	<?php
		// 配列セット
		$arr = array('kashii', 'taro', 'jiro', 'saburo');
		pr($arr);

		// 配列の要素を削除する 第二引数：削除開始箇所、　第三引数：削除数
		array_splice($arr, 2, 1);
		echo '<hr>' . PHP_EOL;
		pr($arr);

		// 連想配列でも使える
		$rensouArr =  array('kashii' => 'wataru', 'momo' => 'taro', 'fukuoka' => 'hizo');
		echo '<hr>' . PHP_EOL;
		pr($rensouArr);

		echo '<hr>' . PHP_EOL;
		array_splice($rensouArr, 2, 1);
		pr($rensouArr);
	?>
	</body>
</html>