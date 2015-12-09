# Groovy - Overview

http://www.groovy-lang.org/index.html

https://grails.org/index.html

## Groovy

现在有完整的本地文档，之前已有一些基础，依据文档即可编码。代码都托管在 Github 上了。

Groovy Version: 2.4.0 JVM: 1.7.0_17 Vendor: Oracle Corporation OS: Mac OS X

## Grails

Grails 最新版本（2015/04/15）

```bash
$ grails -version
| Grails Version: 3.0.1
| Groovy Version: 2.4.3
| JVM Version: 1.7.0_17
```

Grails 安装包，不依赖 Groovy。

```bash
$ bin  grails -help

Usage (optionals marked with *):'
grails [environment]* [target] [arguments]*'

| Examples:
$ grails dev run-app
$ grails create-app books

| Available Commands (type grails help 'command-name' for more info):
| Command Name                          Command Description
--------------------------------------------------------------------------------------
create-app                              Creates an application
create-plugin                           Creates a plugin
help                                    Prints help information for a specific command
list-profiles                           Lists the available profiles

| Detailed usage with help [command]
```