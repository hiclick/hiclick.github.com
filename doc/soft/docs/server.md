# Soft - Server

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## Wamp

### Windows Wamp

### Mac Apache

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

## Resin

## Tomcat

## nginx

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
