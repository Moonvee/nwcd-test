<?PHP

include 'user.php';
include 'dynamodb.php'; //链接数据库
ini_set("display_errors", "On");

$ID = $_POST['ID']; //post获得用户名表单值
$password = $_POST['password']; //post获得用户密码单值

if ($ID && $password) { //如果用户名和密码都不为空

    $eav = $marshaler->marshalJson('
        {
            ":ID": "' . $ID . '"
        }
    ');

    $params = [
        'TableName' => $tableName,
        'KeyConditionExpression' => 'ID = :ID',
        'ExpressionAttributeValues' => $eav
    ];
    print_r($params);
    try {
        $result = $dynamodb->query($params);

        foreach ($result['Items'] as $user) {
            if ($user['userpw'] == md5($password)) {

                setUserInfo($user['ID'],$user['username'],$user['userip']);
                header("refresh:0;url=index.php"); 
                // print_r($user);
                exit;
            }
        }
    } catch (DynamoDbException $e) {
        echo "Unable to get item:\n";
        echo $e->getMessage() . "\n";
    }
} else {
    echo "表单填写不完整";
}
