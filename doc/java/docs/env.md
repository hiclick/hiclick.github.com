# Java 环境

Your First Cup! 

## 程序安装

### Windows

直接到[官方](http://www.oracle.com/technetwork/java/javase/archive-139210.html)下载 exe 文件安装，目前我司使用的Java版本为：

[Java SE 6](http://www.oracle.com/technetwork/java/javase/downloads/java-archive-downloads-javase6-419409.html)

Java 下载首页：[Java SE Downloads](http://www.oracle.com/technetwork/java/javase/downloads/index.html)

在这里下可以下载其它Oracle产品：

* MySQL
* Oracle Database
* SQL Developer
* NetBeans
* Glassfish
* Derby

对开发人员，建议将安装好的 Java 目录，打包为 zip 文件，以后重装，解压，配置环境变量即可。

### Linux

1. 下载JDK

下载地址：[Oracle](http://www.oracle.com/technetwork/java/javase/downloads/java-archive-downloads-javase6-419409.html#jdk-6u45-oth-JPR)

2. 安装. 复制到目标路径

```bash
cp /home/christen/dl/jdk-6u6-linux-i586.bin /opt/java/
cd /opt/java
chmod a+x jdk-6u6-linux-i586.bin
./jdk-6u6-linux-i586.bin
```

### Mac

Mac内置Java，可满足日常的应用需求，但开发者还是需要自己安装合适的版本。

Java 7/8 针对Mac发布了dmg包：

[Mac OS X x64	185.86 MB  	jdk-7u75-macosx-x64.dmg](http://www.oracle.com/technetwork/java/javase/downloads/jdk7-downloads-1880260.html)

[Mac OS X x64	209.17 MB  	  jdk-8u31-macosx-x64.dmg](http://www.oracle.com/technetwork/java/javase/downloads/java-archive-javase8-2177648.html)

Java 6，需要从 Apple 下载，如果以下页面失效，Google 之：

[JavaForOSX2014-001.dmg](https://support.apple.com/kb/dl1572?locale=en_US)

## 环境变量

### Windows

**设置临时环境变量**

适用于将程序打包给非开发人员使用，以下演示临时设置环境变量，运行 Intellij IDEA 的注册机：

```powershell
SET PATH=C:\www\jre6\bin
java -jar IdeaKeyGenerator.jar
```

### Linux

推荐方法：

```bash
cd /etc
cd profile.d
vi java.sh
```

```bash
export JAVA_HOME=/opt/java/jdk1.6.0_06
export CLASSPATH=.:$JAVA_HOME/jre/lib:$JAVA_HOME/lib/tools.jar
export PATH=$JAVA_HOME/bin:$PATH
```
系统：Red Hat Enterprise Linux Advanced Server 5.0

### Mac

暂未实操，待后补。