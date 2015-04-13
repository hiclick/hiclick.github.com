# Java - NetWorking

Oreilly Java Network Programming 4th Edition


## Apache Commons Net

http://commons.apache.org/proper/commons-net/

Supported protocols include:

* FTP/FTPS
* FTP over HTTP (experimental)
* NNTP
* SMTP(S)
* POP3(S)
* IMAP(S)
* Telnet
* TFTP
* Finger
* Whois
* rexec/rcmd/rlogin
* Time (rdate) and Daytime
* Echo
* Discard
* NTP/SNTP

## Accessing FTP sites in a Java program

[Java FTP Tips](http://www.nsftools.com/tips/JavaFtp.htm) and I hava copied the code [here](http://christen.cn/lab/java/networking/2015-04-06-java-ftp.html).

[FTP文件上传与下载](http://blog.csdn.net/zlb824/article/details/7742959)

Q: What Java FTP client library should I use? <sup>[\[1\]](http://stackoverflow.com/a/295269/4766670)</sup>

A: Check out Apache commons-net, which contains FTP utilities. Off the top of my head I'm not sure if it meets all of
your requirements, but it's certainly free!


Q: Has Oracle removed Sun net.ftp classes?<sup>[\[2\]](http://stackoverflow.com/a/3578974/4766670)</sup>

It appears that Oracle has finally removed this unsupported/deprecated feature from Java.

A: Sun provides a FTP client written in Java as part of the standard classes. Unfortunately,
since the sun.net.ftp.\* classes are not part of the java.\* packages, neither the source code
nor a complete API are available.




