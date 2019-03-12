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


aws iot 规则


1、补充或者
