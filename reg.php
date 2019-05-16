<?php
$userid = $_POST['reguserid']; //post获得用户名表单值
$password = $_POST['regpassword']; //post获得用户密码单值
$password2 = $_POST['regpassword2']; //post获得用户密码单值

if ($password != $password2) {
    echo '<script>alert("no1+'.$password .'+'. $password2 .'")</script>';
}

include 'dynamodb.php'; //链接数据库

$item = $marshaler->marshalJson('
    {
        "userid": ' . $userid . ',
        "password": "' . md5($password) . '"
    }
');

$params = [
    'TableName' => 'User',
    'Item' => $item,
];

try {    
    
    echo '<script>alert("'. $params. $item .'")</script>';

    $result = $dynamodb->putItem($params);
    echo 'Created table.  Status: ' .
    $result['TableDescription']['TableStatus'] . "\n";
} catch (DynamoDbException $e) {
    echo '<script>alert("no")</script>';

    echo "Unable to create table:\n";
    echo $e->getMessage() . "\n";
}
