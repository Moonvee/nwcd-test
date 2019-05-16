<?php
include 'dynamodb.php'; //链接数据库

$users = json_decode(file_get_contents('userdata.json'), true);

foreach ($users as $user) {
    $id = $user['ID'];
    $username = $user['username'];
    $userpw = $user['userpw'];
    $userip = $user['userip'];
    $picinfo = $user['picinfo'];

    $json = json_encode([
        'ID' => $id,
        'username' => $username,
        'userpw' => $userpw,
        'userip' => $userip,
        'picinfo' => $picinfo
    ]);

    $params = [
        'TableName' => $tableName,
        'Item' => $marshaler->marshalJson($json)
    ];

    try {
        $result = $dynamodb->putItem($params);
        print_r($params);
    } catch (DynamoDbException $e) {
        echo "Unable to add movie:\n";
        echo $e->getMessage() . "\n";
        break;
    }
}
