
http://www.bewindoweb.com/243.html
主题

例如：


app端订阅

device1_id/add
device1_id/update
device1_id/del


app端发布

app/query
app/bind
app/


设备端集成mqtt发送消息给messge broker




影子服务

灯泡-shadow-app


shadow 发送 $aws/things/myLightBulb/shadow/update/accepted 到iot

shadow 发送/查询 等主题到iot


设备发送状态主题到iot请求更新影子，影子响应设备更新成功



灯泡发布update主题，并监听accepted主题和reject主题显示设备是否离线。

应用发布get主题查询灯泡，


#app更新

- 发送
$aws/things/thingName/shadow/update
{
    "state" : {
        "desired" : {
            "color" : "red",
            "power" : "on"
         }
     }
}

- 策略{
    "Version": "2012-10-17",
    "Statement": [{
        "Effect": "Allow",
        "Action": ["iot:Publish"],
        "Resource": ["arn:aws:iot:region:account:topic/$aws/things/thingName/shadow/update"]
     }]
}

#app更新的响应
 - /update/accepted
 -  /update/rejected


#设备更新
$aws/things/thingName/shadow/update
{
    "state" : {
        "reported" : {
            "color" : "red",
            "power" : "on"
         }
     }
}

- 策略{
    "Version": "2012-10-17",
    "Statement": [{
        "Effect": "Allow",
        "Action": ["iot:Publish"],
        "Resource": ["arn:aws:iot:region:account:topic/$aws/things/thingName/shadow/update"]
     }]
}



#

#设备更新的响应
 - /update/accepted

 - 策略{
    "Version": "2012-10-17",
    "Statement": [
      {
        "Effect": "Allow",
        "Action": ["iot:Subscribe"],
        "Resource": ["arn:aws:iot:region:account:topicfilter/$aws/things/thingName/shadow/update/accepted"]
      },
      {
        "Effect": "Allow",
        "Action": ["iot:Receive"],
        "Resource": ["arn:aws:iot:region:account:topic/$aws/things/thingName/shadow/update/accepted"]
      }
    ]
}




 -  /update/rejected
