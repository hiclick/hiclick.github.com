# Scala - Overview

Scala 势头很好，风光远盛 Groovy。

http://www.scala-lang.org/download/

## 2.8.2

scala-2.8.2.final-devel-docs.tar

scala-2.8.2.final-sources.tar

scala-2.8.2.final.tar

## 2.9.2

scala-sources-2.9.2.tar

scala-2.9.2.tar

## 2.11.6

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

