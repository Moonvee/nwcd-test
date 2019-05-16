<?php
ini_set("display_errors", "On");

include 'dynamodb.php';

$ID = 1234 ;
$password = 1234;


$eav = $marshaler->marshalJson( '
    {
        ":ID": "'.$ID.'"
    }
');

$params = [
    'TableName' => $tableName,
    'ProjectionExpression' => 'ID , userpw',
    'KeyConditionExpression' => 'ID = :ID',
    'ExpressionAttributeValues'=> $eav
];
try {
    $result = $dynamodb->query($params);

    echo "Query succeeded.\n";
    print_r($result['Items'][0]['userpw']);
    foreach ($result['Items'] as $user) {
        echo $marshaler->unmarshalValue($user['ID']);    
    }

} catch (DynamoDbException $e) {
    echo "Unable to query:\n";
    echo $e->getMessage() . "\n";
}
