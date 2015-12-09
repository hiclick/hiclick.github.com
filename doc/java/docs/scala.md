# Scala - Overview

Scala 势头很好，风光远盛 Groovy。

<i class="fa fa-download"></i> http://www.scala-lang.org/download/ <sup><i class="fa fa-external-link fa-fw"></i></sup>

<i class="fa fa-plug"></i> http://plugins.jetbrains.com/plugin/1347?pr=idea <sup><i class="fa fa-external-link fa-fw"></i></sup>

## 源起

Scala是“scalable language”，也就是“可扩展”语言是意思。Scala是一种静态类型语言，它融合了函数式编程和面向对象编程和的思想，前者让它可以很方便快速地构建可用程序，后者则让其
具有构建大型可扩展系统的能力，而两者的融合体现在：在Scala中函数是一种特殊的对象，而Scala的对象也支持很多函数式编程特性，例如Pattern Matching。

关于Scala语言的来源，语言的发明人Ecole Polytechnique Fédérale de Lausanne (EPFL)的教授 Martin Odersky，在一次专访中有如下描述：

“1988/1989年我在Zurich，我喜欢上了函数式编程...Phil Wadler 告诉我有一门新的语言Java就要诞生。我们决定把函数式编程的一些东西移植到Java中去，这个尝试诞生了Pizza
语言，它具有泛型，高阶函数和模式匹配等功能，证明了jvm能够支持函数式编程的特性。后来Sun找到我们说对我们实现的泛型有兴趣，于是我们就参与到Java泛型模块的开发中，最终在Java5中发布。”

“在Pizza和Java泛型项目中我经常感到沮丧，Java语言有很多限制让我不能按照自己的想法来做一些事...我决定开始设计一些在Java中不太可能实现的东西，当然我又想能够利用现有的Java类库和工
具。”

“我决定虽然我要设计一个跟Java不太一样的语言，但是它必须能够嵌入到JVM以及Java现有的库...最初我们开发了一个叫Funnel的基于join calculus的语言，但是它太过于纯粹以至于无法
实际应用...我们决定从头再来，并将语言设计在介于Funnel和Java之间，它必须更具有实用性，但是同时比Java所能做的更高级。在2003年我们发布了这个语言，这就是Scala。”

## 版本

### Scala 2.8.2

scala-2.8.2.final-devel-docs.tar

scala-2.8.2.final-sources.tar

scala-2.8.2.final.tar

### Scala 2.9.2

scala-sources-2.9.2.tar

scala-2.9.2.tar

旧版的完整资源包，官网已经关闭直接下载，档案存在：

百度云 <i class="fa fa-cloud"></i> ```soft``` 账号：```软件 > Mac > Program > scala```。

### Scala 2.11.6

scala-2.11.6.tgz

安装包有 msi 版本。

```bash
~  scala
Welcome to Scala version 2.11.6 (Java HotSpot(TM) 64-Bit Server VM, Java 1.7.0_17).
Type in expressions to have them evaluated.
Type :help for more information.

scala> val name = "Christen"
name: String = Christen

scala> name.<Tab>
+                     contains           isInstanceOf         split
asInstanceOf          contentEquals      lastIndexOf          startsWith
charAt                endsWith           length               subSequence
codePointAt           equalsIgnoreCase   matches              substring
codePointBefore       getBytes           offsetByCodePoints   toCharArray
codePointCount        getChars           regionMatches        toLowerCase
compareTo             indexOf            replace              toString
compareToIgnoreCase   intern             replaceAll           toUpperCase
concat                isEmpty            replaceFirst         trim

scala> name.
```

```bash
~  ipython
Python 2.7.5 (default, Mar  9 2014, 22:15:05)
Type "copyright", "credits" or "license" for more information.

IPython 0.13.1 -- An enhanced Interactive Python.
?         -> Introduction and overview of IPython's features.
%quickref -> Quick reference.
help      -> Python's own help system.
object?   -> Details about 'object', use 'object??' for extra details.

In [1]: name = 'Christen'

In [2]: name.<Tab>
name.capitalize  name.isalnum     name.lstrip      name.splitlines
name.center      name.isalpha     name.partition   name.startswith
name.count       name.isdigit     name.replace     name.strip
name.decode      name.islower     name.rfind       name.swapcase
name.encode      name.isspace     name.rindex      name.title
name.endswith    name.istitle     name.rjust       name.translate
name.expandtabs  name.isupper     name.rpartition  name.upper
name.find        name.join        name.rsplit      name.zfill
name.format      name.ljust       name.rstrip
name.index       name.lower       name.split
In [2]: name.
```

```scala
object Hello extends App {

  val name = "Christen"

  println(name.toUpperCase)
  println(name.toLowerCase)
}
```

```scala
object Hello {

  val name = "Christen"

  def main(args: Array[String]) {
    println(name.toUpperCase)
    println(name.toLowerCase)

  }
}
```

## 框架

### Play

[Play 2.3.8](https://www.playframework.com/) <sup><i class="fa fa-external-link fa-fw"></i></sup>

including Activator 1.3.2

1MB - Windows, Mac and Linux - JDK6+

Offline Distribution (408M)

```java
$  play  play
       _            _
 _ __ | | __ _ _  _| |
| '_ \| |/ _' | || |_|
|  __/|_|\____|\__ (_)
|_|            |__/

play! 2.0.4, http://www.playframework.org
```