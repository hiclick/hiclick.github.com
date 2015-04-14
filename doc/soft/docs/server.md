# Soft - Server

## Apache

The [Apache](http://httpd.apache.org/) HTTP Server Project is an effort to develop and maintain an open-source HTTP server for modern operating systems including UNIX and Windows NT. The goal of this project is to provide a secure, efficient and extensible server that provides HTTP services in sync with the current HTTP standards.

Apache httpd was launched in 1995, has been the most popular web server on the Internet since April 1996, and celebrates its 20th birthday as a project this February.

### Win Wamp

WampServer is a Windows web development environment. It allows you to create web applications with Apache2, PHP and a MySQL database. Alongside, PhpMyAdmin allows you to manage easily your database.

Alias Config

```apacheconf
# c:\wamp-2.1\bin\apache\Apache2.2.17\conf\httpd.conf
# c:\wamp-2.1\bin\apache\Apache2.2.17\conf\original\httpd.conf
Include "c:/Wamp2.1/alias/*"
```

e.g. phpMyAdmin

注：e. g. 是拉丁文 "exempli gratia" 的缩写，意思是“举个例子，比如”，等同于 "for example"。

```apacheconf
Alias /phpmyadmin "c:/wamp-2.1/apps/phpmyadmin3.3.9/"

<Directory "c:/wamp-2.1/apps/phpmyadmin3.3.9/">
    Options Indexes FollowSymLinks MultiViews
    AllowOverride all
    Order Deny,Allow
    Deny from all
    Allow from 127.0.0.1
</Directory>
```

### Mac Apache

**使用手记**

启动/停止命令

```bash
sudo apachectl start
sudo apachectl stop
sudo apachectl restart
```

配置PHP

```bash
sudo mate /etc/apache2/httpd.conf
```

```apacheconf
#LoadModule php5_module libexec/apache2/libphp5.so
```

```bash
sudo cp /etc/php.ini.default /etc/php.ini
sudo mate /etc/php.ini
```

通过下面两项来调整PHP提交文件的最大值，如phpMyAdmin中导入数据的最大值：

```ini
upload_max_filesize = 20M
post_max_size = 8M
```

DokuWiki Conf

```apacheconf
<!--/etc/apache2/other/wiki.conf-->
<Directory /Library/WebServer/Documents/wiki>
    order deny,allow
    allow from all
</Directory>

<LocationMatch "/wiki/(data|conf|bin|inc)/">
    order allow,deny
    deny from all
    satisfy all
</LocationMatch>
```

**配置Jekyll 本地环境**

1.&nbsp;建立软链接

```bash
sudo ln -s "/Users/Christen/Documents/app/git/hiclick.github.com/" /Library/WebServer/Documents/git
```

2.&nbsp;添加虚拟目录

```bash
subl /etc/apache2/httpd.conf
```

```apacheconf
# Virtual hosts
Include /private/etc/apache2/extra/httpd-vhosts.conf
```

```bash
sudo subl /etc/apache2/extra/httpd-vhosts.conf
```

```apacheconf
<VirtualHost *:80>
    DocumentRoot "/Users/Christen/Documents/app/git/hiclick.github.com/"
    ServerName git.chenzixin.com
    ErrorLog "/private/var/log/apache2/chenzixin-error_log"
    CustomLog "/private/var/log/apache2/chenzixin-access_log" common
    <Directory />
        Options Indexes FollowSymLinks MultiViews
        AllowOverride None
        Order deny,allow
        Allow from all
     </Directory>
</VirtualHost>
```

Both Error:

```wiki
Forbidden

You don't have permission to access /doc on this server.
```

但同样的方法，配置 AS3.0 API 文档，却成功了：

http://as.chenzixin.com/

猜测还是文件权限的问题，但一时没有思路。

拷贝 Wrox Professional Java for Web Applications 至以下文件夹，

/Library/WebServer/Documents/java/jfw，提示无权访问，修改权限：


```bash
sudo chmod -R 644 jfw
```
故障依旧；

```bash
sudo chmod -R 755 jfw
```
问题解决：

<table class="dataintable"><tbody>
<tr>
<th>Name	</th>
<th>Read	</th>
<th>Write	</th>
<th>Execute</th>
</tr>
<tr>
<td>Owner	</td>
<td>√		</td>
<td>√		</td>
<td>√</td>
</tr>
<tr>
<td>Group	</td>
<td>√		</td>
<td>×		</td>
<td>√</td>
</tr>
<tr>
<td>Others	</td>
<td>√		</td>
<td>×		</td>
<td>√</td>
</tr>
</tbody></table>

## nginx

http://nginx.org/en/docs/

nginx \[engine x] is an HTTP and reverse proxy server, as well as a mail proxy server, written by Igor Sysoev. For a long time, it has been running on many heavily loaded Russian sites.

### Windows

http://nginx.org/en/docs/windows.html

Version of nginx for Windows uses the native Win32 API.

Run nginx and see nginx processes:

```powershell
start nginx
C:\nginx-1.7.12>tasklist /fi "imagename eq nginx.exe"
```

Paths in a configuration file must be specified in **UNIX-style using forward slashes**:

```powershell
access_log   logs/site.log;
root         C:/web/html;
```
Commands:

```powershell
nginx -s stop	fast shutdown
nginx -s quit	graceful shutdown
nginx -s reload	changing configuration, starting new worker processes with a new configuration, graceful shutdown of old worker processes
nginx -s reopen	re-opening log files
```
### Mac

× 尝试在 nginx 中配置 DOC：

```bash
subl /usr/local/etc/nginx/nginx.conf

```

```java
location / {
    root /Users/Christen/Documents/app/git/hiclick.github.com/;
    autoindex  on;
}
```

```bash
sudo nginx -s stop
sudo nginx
sudo nginx -s reload
```

还是无权限：

```wiki
403 Forbidden

nginx/1.2.6
```

√ 解决方法：

```wiki
#user  nobody;
user  Christen admin;
```

```bash
chown -R Christen:admin /Users/Christen/Documents/app/git/hiclick.github.com/
```

可正常访问，具体的细节还没有完全明白。

参考：[Nginx is throwing an 403 Forbidden on Static Files](http://stackoverflow.com/a/20198148/4766670)

## Resin

Resin是CAUCHO公司（http://www.caucho.com/）的产品，是一个非常流行的支持 Servlets 和 JSP 的引擎，速度非常快。

Resin本身包含了一个支持HTTP/1.1的WEB服务器。虽然它可以显示动态内容，但是它显示静态内容的能力也非常强，速度直逼Apache。
许多站点都是使用该WEB服务器构建的。

1. WatchDog 的端口，默认6600
2. Server 监控端口，默认6800
3. HTTP 端口，默认8080

### Mac

Start memcached:

```bash
$ memcached -d -m 10 -u root -l 127.0.0.1 -p 11211 -c 256 -P /tmp/memcached.pid
```

Start in Mac:

httpd-bbs6.sh

```bash
/opt/resin/bin/httpd.sh -conf /Users/Christen/Documents/app/java/bbs6/resin-bbs6.xml

```
```bash
$ ~/Documents/app/java/bbs6/httpd-bbs6.sh
```

resin-bbs6.xml

```markup
<resin xmlns="http://caucho.com/ns/resin" xmlns:resin="http://caucho.com/ns/resin/core">

    <log name="" level="info" path="stdout:"/>

    <cluster id="">
        <server id="">
            <http port="3000"/>
        </server>

        <resin:import path="${resin.home}/conf/app-default.xml"/>

        <!--><resin:import path="${resin.home}/conf/r-route.conf.xml"/>-->

        <web-app-default>
            <servlet servlet-name="directory" servlet-class="com.caucho.servlets.DirectoryServlet">
                <init enable="true"/>
            </servlet>
        </web-app-default>

        <host id="" root-directory=".">

            <!-- passport
            <database jndi-name="jdbc/common2DataSource">
                <driver type="oracle.jdbc.driver.OracleDriver">
                    <url>jdbc:oracle:thin:@192.168.74.5:1521:test745</url>
                    <user>common_app</user>
                    <password>common_app</password>
                </driver>
            </database>  -->

            <!--
            <database jndi-name="jdbc/game111011DataSource">
                    <driver type="com.mysql.jdbc.Driver">
                        <url>jdbc:mysql://localhost/play?characterEncoding=GBK</url>
                        <user>root</user>
                        <password>waaigh</password>
                    </driver>
            </database>-->

            <database jndi-name="jdbc/bbs6">
                <driver user="root" password="fj" url="jdbc:mysql://127.0.0.1/bbs6" type="com.mysql.jdbc.Driver"/>
            </database>

            <web-app id="/docs" root-directory="${resin.root}/webapps/resin-doc"/>

            <!-- pcauto.com.cn -->
            <web-app id="/bbs" document-directory="/Users/Christen/Documents/app/java/bbs6/web" lazy-init="false"/>
            <web-app id="/play" document-directory="/Users/Christen/Documents/app/java/play/web" lazy-init="false"/>
            <!-- pconline.com.cn -->
            <!-- legacy -->
            <!-- temp -->
        </host>
    </cluster>

</resin>
```

### Win

```powershell
e:\webdev\app-server\resin-pro-4.0.28\resin.exe start -conf e:\webdev\workspace\2012\pinkey\my-conf.xml
```

start参数会以守护模式启动Resin，不合适开发调试，但是做为普通J2EE&HTTP Server，非常不错。

## Tomcat

## Jetty

## Glassfish