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

Additional Resources:

API  

* [Java SE 8 Documentation](http://www.oracle.com/technetwork/java/javase/documentation/jdk8-doc-downloads-2133158.html) 
* [Java SE 7 Documentation](http://www.oracle.com/technetwork/java/javase/documentation/java-se-7-doc-download-435117.html) 

Installation Instructions:

* [Java 8 Installation Instructions](http://docs.oracle.com/javase/8/docs/technotes/guides/install/install_overview.html)
* [Java 7 Installation Instructions](http://www.oracle.com/technetwork/java/javase/javase7-install-docs-439822.html)

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

Google: java path classpath oracle

** Oracle **

You can run Java applications just fine without setting the PATH environment variable. Or, you can optionally set it as a convenience.

Set the PATH environment variable if you want to be able to conveniently run the executables (javac.exe, java.exe, javadoc.exe, and so on) from any directory without having to type the full path of the command. If you do not set the PATH variable, you need to specify the full path to the executable every time you run it, such as:

```powershell
C:\Java\jdk1.7.0\bin\javac MyClass.java
```

The PATH environment variable is a series of directories separated by semicolons (;). Microsoft Windows looks for programs in the PATH directories in order, from left to right. You should have only one bin directory for the JDK in the path at a time (those following the first are ignored), so if one is already present, you can update that particular entry.

The following is an example of a PATH environment variable:

```powershell
C:\Java\jdk1.7.0\bin;C:\Windows\System32\;C:\Windows\;C:\Windows\System32\Wbem
```

It is useful to set the PATH environment variable permanently so it will persist after rebooting. To make a permanent change to the PATH variable, use the System icon in the Control Panel. <sup>[1]</sup>


** Stack Overflow **

A path is just a folder location. The path is where your OS will look for programs by default. If java, javac, javap, etc, etc, are in your path then you can just type their names without the entire folder location.

Your classpath is similar. It is a set of folders that contain .class files describing classes(hence the name) and .jar files, which are basically files that contain .class files. All code that you're running is either out of the classpath, generated, or out of the java libaries(also part of the classpath, techncically).

With each run of a java program you can specify a classpath by parameters passed to the java executable. It also grabs classes out of "extension folders,", special folders Java keeps around to act as a system classpath, and finally, the "bootstrap classes", which are a set of important classes almost any Java program needs to run. <sup>[2]</sup>

注：

1. [PATH and CLASSPATH](https://docs.oracle.com/javase/tutorial/essential/environment/paths.html)
2. [What are Java Classpath and Path?](http://stackoverflow.com/a/17409751)

官方参考：

* [Setting the class path](http://docs.oracle.com/javase/7/docs/technotes/tools/windows/classpath.html) Java 7 Docs
* [Setting the Class Path](https://docs.oracle.com/javase/8/docs/technotes/tools/windows/classpath.html) Java 8 Docs

### Windows

**临时环境变量**

适用于将程序打包给非开发人员使用，以下演示临时设置环境变量，运行 Intellij IDEA 的注册机：

```powershell
SET PATH=C:\www\jre6\bin
java -jar IdeaKeyGenerator.jar
```

**固定环境变量**

在系统属性中设置：

```powershell
JAVA_HOME: D:/Program Files/Java/jdk1.6.0_10
PATH: %JAVA_HOME%/bin;%JAVA_HOME%/jre/bin;
CLASSPATH: .;%JAVA_HOME%/lib/dt.jar;%JAVA_HOME%/lib/tools.jar;
```

说明：

1. JAVA_HOME指明JDK安装路径
2. PATH使得系统可以在任何路径下识别java命令
3. 为Java加载类(class or lib)路径，只有类在CLASSPATH中，java命令才能识别

验证：

1. cmd -> java -version
2. cmd -> java
3. cmd -> javac 

```java
public class HelloWorld{
    public static void main(String[] args) {
        System.out.println("Hello World!");
    }
}
```

执行：

```powershell
>javac HelloWorld.java
```
生成 HelloWorld.class

```powershell
>java HelloWorld
```
切记不是 HelloWorld.class

输出： HelloWorld!

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