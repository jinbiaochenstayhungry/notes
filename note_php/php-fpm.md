cgi解释器是语言无关的，可伸缩架构的cgi开放扩展，主要行为是将cgi解释器
进程保留在内存中，解决cgi解释器反复加载导致性能低下的问题，
fastcgi 通过调度提供良好的性能，伸缩性，fail-over的等特性。


1. web server 如apache module 启动时候加载fastcgi进程管理器。
2. fast cgi初始化，

#php的版本历史

* 5.5.3之前，是一个php补丁包，必须patch到php源代码中，编译安装后才可以使用。
* 相对于spawn-fcgi，php-fpm在cpu和内存控制方面更胜一筹。

#nginx和fpmhttps://zhuanlan.zhihu.com/p/20694204
