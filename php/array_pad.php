<?php
 function pr($param){
 	$html;
 	$html .= '<pre>' . PHP_EOL;
 	// @link http://ichiba-blog.blogspot.jp/2010/11/php_22.html 第二引数をtrueにすると変数に代入できる
 	$html .= print_r($param, true) . PHP_EOL;
 	$html .= '</pre>' . PHP_EOL;
 	echo $html;
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>配列を拡張して値を埋める</title>
	</head>
	<body>
	<?php
		// 配列にデータをセットする
		$array = array(10,0,20);
		pr($array);
		// 横線を入れる
		echo '<hr>' . PHP_EOL;

		// 配列の要素を追加する
		$array2 = array_pad($array, 10, 'kashii');
		pr($array2);
	?>
	</body>
</html>

