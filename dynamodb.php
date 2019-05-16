<?php

require 'vendor/autoload.php';
date_default_timezone_set('UTC');

use Aws\DynamoDb\Exception\DynamoDbException;
use Aws\DynamoDb\Marshaler;
use Aws\DynamoDb\DynamoDbClient;
use Aws\Credentials\CredentialProvider;

$credentials = CredentialProvider::ini('default', '/Users/moonvee/.aws/credentials');

$sdk = new Aws\Sdk([
    'region'   => 'cn-north-1',
    'version'  => 'latest',
    'credentials' => $credentials
]);

$dynamodb = $sdk->createDynamoDb();
$marshaler = new Marshaler();

$tableName = 'hire2018-gengmengwei2596850426';

