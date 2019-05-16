<?php
include 'dynamodb.php'; //链接数据库
$key = $marshaler->marshalJson('
    {
        "ID": "02"
    }
');
$params = [
    'TableName' => $tableName,
    'Key' => $key, 
];

try {
    $result = $dynamodb->deleteItem($params);
    print_r($result);
} catch (DynamoDbException $e) {
    echo "Unable to add movie:\n";
    echo $e->getMessage() . "\n";
}
