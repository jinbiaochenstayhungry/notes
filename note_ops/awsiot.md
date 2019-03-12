aws iot
https://aws.amazon.com/cn/iot/

iot core
https://aws.amazon.com/cn/iot-core/features/

设备网关
aws的入口，自动扩展。

消息代理：

具有高吞吐量的pub/sub消息代理，能够将消息传输进出iot设备和应用程序，具有低延迟，
有灵活的主题结构，一对一和一对多广播模式，全托管

设备管理

将设备的制造商，制造年份，设备名称，类型，证书，访问策略批量添加到iot注册表。

设备组织，管理这些组的访问策略，进行固件更新，规定设备如何通讯。
组建层次结构，分组，按组管理访问策略。

规则引擎。

设备管理


“Parameters”:{
“ThingName”:{
“Type”:”String”},
“Location”:{
“Type”:”String”,
“Default”:”SHENZHEN”
}，
“SeralNumber”
：{
“Type”:”String”}
,
“CSR”:{
“Type”:”String”
}


}

Resource{
“Type”:”AWS::IoT::Thing”
{
“ThingsNmae”,
“AttributePayLoad”L
“ThingsTypeName”,
“thingsGroup”
},

csr/id/ca





}


iot button

1、注册
两种方式

a、使用app注册
b、使用控制台
creating thing
resource
police


证书：

根 CA 证书可能会过期和/或被吊销，但发生这种情况的可能性不大。如果发生这种情况，您必须将新的根 CA 证书复制到您的设备上


没有下载根证书的影响，以及点击下载跳转到服务器验身份验证的简介。



2、配置
3、设置action


aws 策略
  策略确定经过身份验证的身份可以执行的操作。经过身份验证的身份由设备，才能进行iot操作。
  aws iot策略
# aws iot 操作分为两组
## 创建和更新证书、事物、规则等管理任务
## 数据api接口，向iot发送和接收数据

#数据类型api和策略类型
1. 双向身份认证mqtt，身份类型x509证书，策略类型 aws iot 策略。
2. 基于websocket的mqtt，支持cognito，iam或者联合身份， 用于aws iot身份的aws cognito策略，用于其他身份的iam策略。
3. 基于服务器身份认证的http ，身份和策略同上。
4. 基于双向身份的http  ，x.509证书，aws iot策略。

# 控制层面 以上第3种。

#iot 策略
- json文档，与iam策略遵循相同约定，支持命名策略，因此，许多身份都可以参考相同策略文档。
- iot订阅一组策略操作，描述来可以授予或者剧情其访问权限都操作和资源。例如：
  1. iot:Connet代表链接到AWS IoT到消息代理到权限。
  2. iot:Subscribe 代表订阅MQTT主题或者主题筛选条件的权限。
  3. iot:GetThingShowdow代表获取设备影子的权限
  4. 更多  https://docs.aws.amazon.com/zh_cn/iot/latest/developerguide/policy-actions.html
  5.

- 操作资源
   1. arn格式：  arn:aws:iot:region:aws account id:resource type/resource ThingName
   2. iot:DeleteThingShadow   arn:aws:iot:us-east-1:123456789012:thing/thingOne
   3. iot:Connect  

   4.anr 类型

- 基本策略变量
  1. 客户端id iot:ClientId? 获取方式？
  2. aws:SourceIp:连接到AWS Iot消息代理到客户端到IP地址。
  3.







aws iot 规则


- 补充或者或者筛选从设备接收到到数据。
- 写入数据到dynamodb
- 保存文件到s3
- sns发送推送
- 数据发送到sqs队列
- lambda函数提取数据。
- 使用amazon kinesis处理设备消息。
- 发送数据到elsasticsearch servie。
- 捕获clound watch指标，更改cloud watch 警报。
- 发送mqtt消息到maching leanring
- 向salesforce iot输入流发送消息
- 只想step function状态机
- 将消息数据发送到iot events 输入。




aws iot 规则教程


- 规则由SQL SELECT语句 +  主题筛选条件 + 规则操作组成。
- 设备发送消息到mqtt主题。

设置选择语句

SELECT <Attribute> FROM <Topic Filter> WHERE <Condition>. 例如：SELECT temperature FROM 'iot/topic' WHERE temperature > 50。

https://docs.aws.amazon.com/zh_cn/iot/latest/developerguide/iot-sql-reference.html


- 设置动作



消息代理
- AWS IoT 不支持跨 AWS 账户和区域发送和接收消息
