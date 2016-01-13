<?php

// 1.ファイルを開く fopen()
$fileName = "sales.csv";

if (!$fp = fopen($fileName, "r"))
{
  echo "ファイルを開けませんでした";
  exit;
}

// 2.ファイルからデータを読み込む fread()
// $content = fread($fp, filesize($fileName));
// var_dump($content);

$contents = file($fileName);

foreach ($contents as $content)
{
  // var_dump($c) . '<br>';
  // echo $c[0];
  // $sum += $c[1];
  // echo $s . '<br>';
  $c = explode(',', $content);
}

$member = count($contents) - 1;
// var_dump($sample);

echo '社員数:' . $member . '<br>';
echo '売上合計:' . $total . '<br>';
echo '売上平均:' . $average ;

// 3.ファイルを閉じる fclose()
fclose($fp);


// // 1.ファイルを開く fopen()
// $fileName = "test.csv";
// $data =
// "社員名,売上
// Kashiwagi,1000
// Hidaka,500
// Ohira,300";

// // 返り値であるファイルポインターリソースを$fpに格納
// $fp = fopen($fileName, "a"); // a:追記 w:上書き r:読み取り

// // 2.ファイルにデータを書き込む fwrite()
// if (fwrite($fp, $data) === false)// 書き込めなかった場合
// {
//   echo "書き込みができませんでした";
//   exit;
// }
// echo "書き込みが成功しました";

// // 3.ファイルを閉じる fclose()
// fclose($fp);
