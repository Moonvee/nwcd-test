<?php
include 'dynamodb.php'; //链接数据库

$params =[
    'TableName' => $tableName,
];
try {
    $result = $dynamodb->scan($params);
    print_r($result['Items']);
} catch (DynamoDbException $e) {
    echo "Unable to add movie:\n";
    echo $e->getMessage() . "\n";
}