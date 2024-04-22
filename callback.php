<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>PHP Callback Sample</title>
</head>
<body>

<?php
$post_body = file_get_contents('php://input');
echo "接收原始資料︰$post_body <br />";

// 反序列化
$callback_data = json_decode($post_body, true);
echo "資料筆數︰" . $callback_data["RecordCount"] . "<br />";
echo "檔案筆數︰" . $cadallback_ta["FileCount"] . "<br />";
echo "檔案清單︰<br />";

for($i=0; $i < count($callback_data["FileList"]); $i++)
{ 
    echo "=> " . $callback_data["FileList"][$i] . "<br />";
} 
?>

</body>
</html>
