# Soft - Network

## FTP

文件传输协议（英文：File Transfer Protocol，縮寫：FTP）是用於在網絡上進行文件傳輸的一套標準協議。它属于网络传输协议的应用层。

FTP是一个8位的客户端-服务器协议，能操作任何类型的文件而不需要进一步处理，就像MIME或Unicode一样。但是，FTP有着极高的延时，这意味着，从开始
请求到第一次接收需求数据之间的时间，会非常长；并且不时的必須执行一些冗长的登陆进程。

FTP服务一般运行在20和21两个端口。端口21用于在客户端和服务器之间传输数据流，而端口20用于传输控制流，并且是命令通向FTP服务器的进口。当数据通
过数据流传输时，控制流处于空闲状态。而当控制流空闲很长时间后，客户端的防火墙会将其会话置为超时，这样当大量数据通过防火墙时，会产生一些问题。
此时，虽然文件可以成功的传输，但因为控制会话，会被防火墙断开；传输会产生一些错误。

FTP虽然可以被终端用户直接使用，但是它是设计成被FTP客户端程序所控制。

运行FTP服务的许多站点都开放匿名服务，在这种设置下，用户不需要帐号就可以登录服务器，默认情况下，匿名用户的用户名是：「anonymous」。这个帐号
不需要密码，虽然通常要求输入用户的邮件地址作为认证密码，但这只是一些细节或者此邮件地址根本不被确定，而是依赖于FTP服务器的配置情况。

```java
ftp://<login>:<password>@<ftp-server-address>
```

Mac OS X 内置 FTP工具：

Finder 菜单栏 "前往 - 连接服务器..."（快捷键 <kbd>Cmd</kbd> + <kbd>K</kbd>）

* CuteFTP
* Cyberduck
* FileZilla
* FlashFXP
* LeapFTP
* Serv-U FTP Server
* Wing FTP Server

## Mail Client

* Foxmail
* ThunderBird ㊣

## Remote Control

* PuTTY
* SecureCRT
* SSH
* Telnet
* Dame Ware
* Radmin <sup>[1]</sup> ㊣
* Remote Desktop <sup>[2]</sup>
* TeamViewer ㊣


1\. Radmin (Remote Administrator) is fast and secure remote control and remote access software that enables you to work on a
remote computer as if you were sitting right in front of it and access it from multiple places. Radmin includes full
support for Windows 7 (32-bit and 64-bit), file transfer, multi-user text and voice chat, Windows security, Telnet access,
Multiple Monitors support, and many other useful features.

* Highest Speed of Work
* Highest Security Level
* Hardware remote control with Intel® AMT support
* Full compatibility with Windows 7
* Text and Voice Chat
* Easy to use
* Secure "Drag and Drop" file Transfer with "Delta Copy" feature
* Multiple Connections Support
* Free Technical Support
* Hardware remote control with Intel® AMT support

The new version of Radmin 3.4 (The latest version) supports Intel® AMT (Active Management Technology) and allows to control remote
computer even if it's turned off or you cannot start its operating system. Using Radmin Viewer you can **turn on, restart and shut
down** the remote computer. It also enables the user to view and change the BIOS settings of the remote computer and to boot it from
a local CD or disk image file.

2\. Remote Desktop is disabled by default in Windows 7 or Vista, but it's easy enough to turn it back on.

Important note: Remote desktop is only included in the Professional, Business, or Ultimate versions of Windows.
Home editions do not have remote desktop.


## Spider

**Teleport**

Teleport Pro由美国Tennyson Maxwell公司开发，曾被PC Magazine评为"编辑选择奖"、ZDNet评为五星。它可以完全或部分下载一个网站上的内容，使用
户能够离线浏览；可以在硬盘上创建一个与原网站完全相同的镜象；可以在网站上寻找并下载某一类型的文件；可以探测并记录一个网站的所有网页和文件的清单；
可以从一个中心网站探测每一个与之链接的网站。

**wget**

用法：

```bash
wget [-r -k -p -np] [-x] [-P <DIR>] [-i <FILE>] [<URL>[ ...]]
```

手册：

http://www.gnu.org/software/wget/manual/wget.html

下载 Lua 的手册：

```bash
wget -r -p -k -np http://www.lua.org/manual/5.1/
```

* r 对于链接循环下载
* k 修复下载html文档中的内部绝对链接链接为相对链接，便于阅读
* p 下载一个html页面中显示的所有文件，不单是内部链接
* o 指定log文件为 wget.log
* i 从一个文件中读取链接下载，有些类似 flashget 的下载本页面全部链接的功能，但更强大

注：所有的整下载，都是对静态页面支持比较好，如果是下载动态网站，可能很难完美。