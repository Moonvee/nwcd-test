
# 测试操作记录-test log
My code zip Link:
[private cloud link](http://file.gmwabc.cn/index.php?user/publicLink&fid=0c50T3Rtolsw7kMBGbLfMsV4OMn1vk_ZsZ3IAOfFpKJ_MUw_qsjcaXJc0w5uQ_y85wp2f2OOjygfY-WOuTn5QMNk6PJRVq1_LgOncrO7ajAWk6V_Jpw_Anfnmyula6Ba-w&file_name=/nwcd_test.zip)

## install PHP
Turn on EPEL repo, enter:

```
sudo yum -y install epel-release
```
Turn on Remi repo i.e.remi-php72:

```
sudo yum-config-manager --enable remi-php72
```
Refresh repository:

```
sudo yum update
```
Install php version 7.2, run:

```
sudo yum install php
```
Delete php
```
rpm -qa |grep php
rpm -e --allmatches --nodeps
php -v
```


ssh链接服务器
```
ssh -i keypair.pem ec2-user@52.81.81.13
```
update files
```
scp -i keypair.pem composer-setup.php.zip ec2-user@52.81.81.13:/home/ec2-user/composer-setup.php.zip
```

## Local test

```
aws dynamodb list-tables --endpoint-url http://localhost:8000
```

AWS SDK for PHP：从实例配置文件元数据服务器检索凭据时出错


```Error retrieving credentials from the instance profile metadata server```

```
https://stackoverflow.com/questions/30627029/aws-php-sdk-credentials-error-s
```
要在计算机上启动 DynamoDB，请打开命令提示符窗口，导航到您提取 DynamoDBLocal.jar 的目录，并键入以下命令：

```
cd Downloads/dynamodb_local_latest
java -Djava.library.path=./DynamoDBLocal_lib -jar DynamoDBLocal.jar -sharedDb
```

DynamoDB 将处理传入请求，直到您将其停止为止。要停止 DynamoDB，请在命令提示符处按 Ctrl+C。

默认情况下，DynamoDB 使用端口 8000。如果端口 8000 不可用，此命令将引发异常。有关 DynamoDB 运行时选项的完整列表（包括 -port），请键入此命令：

```
java -Djava.library.path=./DynamoDBLocal_lib -jar DynamoDBLocal.jar -help
```

您必须先配置凭证以为您的应用程序启用授权，然后才能以编程方式或通过 AWS Command Line Interface (AWS CLI) 访问 DynamoDB。可下载的 DynamoDB 需要具有任何凭证才能工作。例如：

AWS Access Key ID: "fakeMyKeyId"
AWS Secret Access Key: "fakeSecretAccessKey"
您可以使用 AWS CLI 的 aws configure 命令设置凭证。有关更多信息，请参阅使用 CLI。

## Use credentials to web server

```
$credentials = CredentialProvider::ini('default', '/Users/moonvee/.aws/credentials');
```

