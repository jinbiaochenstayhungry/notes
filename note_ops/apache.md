#ubuntu下安装

https://blog.csdn.net/lyandgh/article/details/78975784
1. 在ubantu命令行中输入：sudo apt-get update(有些可能不需要这步)
2. 输入：sudo apt-get install apache2，继续输入 y 就行
3. 安装完成后输入：sudo /etc/init.d/apache2 restart，返回结果为[OK]说明启动成功
4. 输入：curl 127.0.0.1，访问apache主页，返回网页中有 it works！说明可以正常访问
5. 另外阿里云80端口默认是关闭的，所以需要在阿里云里实例后面的“更多”点击“安全组配置”，再点击“配置规则”，再点击“添加安全组规则”
6. 最后如图所示，说明80端口已经开放，可以通过公网IP访问Apache服务器根目录下的文件或网页了

7. by jimmy  ,阿里云下安全组配置80端口，0.0.0.0/0 代表所有ip可访问
8. 官网文档 http://httpd.apache.org/download.cgi
---------------------
作者：HouGISer
来源：CSDN
原文：https://blog.csdn.net/lyandgh/article/details/78975784
版权声明：本文为博主原创文章，转载请附上博文链接！


#apache配置

http://120.78.87.196
