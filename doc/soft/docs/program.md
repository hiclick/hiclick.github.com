# Soft - Program

## Cache

### Memcached

Start memcached in Mac:

```bash
$ memcached -d -m 10 -u root -l 127.0.0.1 -p 11211 -c 256 -P /tmp/memcached.pid
```


### Redis

## HTML Editor

* CKeditor
* Cloud9 Editor
* JMEditor
* TinyMCE
* UBBEditor
* UEditor

## Text Editor

ASCII

American Standard Code for Information Interchange

A text editor is a type of program used for editing plain text files.

Text editors are often provided with operating systems and software development packages, and can be used to change configuration files,
documentation files and programming language source code.

Google Trends : Compared [with UltraEdit](https://www.google.com/trends/explore#q=Sublime%20Text%2C%20TextMate%2C%20EmEditor%2C%20EditPlus%2C%20UltraEdit&cmpt=q&tz=)
or [with Vim](https://www.google.com/trends/explore#q=Sublime%20Text%2C%20TextMate%2C%20EmEditor%2C%20EditPlus%2C%20Vim&cmpt=q&tz=)

### Sublime Text

[Sublime Text](http://www.sublimetext.com/2) is a sophisticated text editor for code, markup and prose.You'll love the slick user interface, extraordinary features and amazing performance.

Sublime Text 2 may be downloaded and evaluated for free, however a license must be purchased for continued use. There is
currently no enforced time limit for the evaluation.

Some things users love about Sublime Text:

* Go to Anything (<kbd>⌘</kbd> + <kbd>P</kbd>: @ => symbols, # to => search, : => a line number.)
* Multiple Selections​
* Command Palette
* Distraction Free Mode​
* Split Editing​
* Instant Project Switch
* Plugin API
* Customize Anything​
* Cross Platform​


[Package Control](https://sublime.wbond.net/installation#st2)


Install Package: <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>P</kbd>

* Install Package
* List Packages
* Remove Package
* Upgrade Package

Recommended Package:

* ConvertToUTF8
* Emmet

Java Config:

```javascript
{
	"cmd": ["javac", "$file"],
	"file_regex": "^(...*?):([0-9]*):?([0-9]*)",
	"selector": "source.java",
	"encoding":"GBK",

	"variants":
        [
        {
            "name": "Run",
            "cmd" :  ["java", "$file_base_name"],
            "encoding":"GBK"
        }
	]
}
```

### Vim

[Vim](http://www.vim.org/index.php) is a highly configurable text editor built to enable efficient text editing. It is an improved version of the vi editor
distributed with most UNIX systems. Vim is distributed free as charityware.

Vim is an advanced text editor that seeks to provide the power of the de-facto Unix editor 'Vi', with a more complete feature set.

Vim isn't an editor designed to hold its users' hands. It is a tool, the use of which must be [learned](http://www.study-area.org/tips/vim/index.html).

Vim isn't a word processor. Although it can display text with various forms of highlighting and formatting, it isn't there to provide WYSIWYG editing of typeset documents.

If you find Vim a useful addition to your life please consider helping needy children in Uganda.

### EmEditor

EmEditor是日本的江村软件公司（Emurasoft）所开发的一款在Windows平台上运行的文字编辑程式。EmEditor以运作轻巧、敏捷而又功能强大、丰富著称，得到许多用户的好评。Windows内建的记事本程式由于功能太过单薄，所以有不少EmEditor用户直接以EmEditor取代。

EmEditor的发行最早始于1997年，迄今仍在持续发展中。

对大文件的支持非常好，孙宾测试过，在6G的单个文件中搜索，无压力。

[EmEditor](https://www.emeditor.com/) is a **fast**, **lightweight**, yet **extendable**, **easy-to-use** text editor for **Windows**. Both native 64-bit and 32-bit builds are available!


The text editor supports **powerful macros**, **Unicode**, and **very large files**.

If you need a best free text editor, EmEditor Free might be right for you.

[Feature Set](https://www.emeditor.com/text-editor-features/)

The following plug-ins are installed with EmEditor by default:

* HTMLBar
* Open Documents
* Outline
* Projects
* Search
* Snippets
* WebPreview
* WordComplete
* Word Count

### EditPlus

EditPlus是一款由韩国 Sangil Kim （ES-Computing）出品的小巧但是功能强大的可处理文本、HTML和程序语言的32位编辑器，你甚至可以通过设置用户工具将其作为C，Java，PHP等等语言的一个简单的IDE。

[EditPlus](https://www.editplus.com/) is a text editor, HTML editor, PHP editor, Java editor and **Hex Viewer** for Windows. While it can serve as **a good
Notepad replacement**, it also offers many powerful features for Web page authors and programmers.

Features:

* Syntax highlighting
* ​Internet features (Seamless web browser / FTP / Highlights URL and e-mail addresses)​​
* ​Hex Viewer​​
* ​Code Folding​​
* ​HTML toolbar​​
* ​Document selector​​
* ​User tools​​
* ​Auto completion​​
* ​Cliptext window​​
* ​Document template​​

### UltraEdit

作者国籍：美国

http://www.ultraedit.com/

Features at a glance

* Column / block editing
* Multi-caret editing
* Multi-select
* Syntax highlighting
* Integrated FTP client
* Integrated SSH/telnet
* Editor themes
* Large file editing +4GB
* File / data sorting
* Powerful search
* Supports regex
* CSV data reformatting
* Macros and scripts
* File compare
* Smart templates

### Notepad++

Notepad++是一套自由软体的纯文字编辑器，由台湾人侯今吾基于同是开放源代码的Scintilla文本编辑组件并独力研发。该软体以GPL发布，有完整的中文化
介面及支援多国语言撰写的功能（采用万国码UTF-8技术）。它的功能比Windows中的记事本（Notepad）强大，除了可以用来制作一般的纯文字的说明文件，
也十分适合用作撰写电脑程式的编辑器。

Notepad++ 不仅有语法高亮度显示，也有语法折叠功能，并且支援巨集以及扩充基本功能的外挂模组。 由于在资源消耗方面与微软的记事本大体相当，但功能
更为强大，网络上遂有人发起以Notepad++替换记事本的活动。支持浏览 ```.nfo``` 文件。

[Notepad++](http://notepad-plus-plus.org/) is a **free** source code editor and Notepad replacement that supports several languages.
Running in the MS Windows environment, its use is governed by GPL License.

Based on the powerful editing component **[Scintilla](http://www.scintilla.org/)**, Notepad++ is written in C++ and uses pure Win32 API and STL which
ensures a higher execution speed and smaller program size. By optimizing as many routines as possible without losing
user friendliness, Notepad++ is trying to reduce the world carbon dioxide emissions. When using less CPU power,
the PC can throttle down and reduce power consumption, resulting in a greener environment.


Features:

* Syntax Highlighting and Syntax Folding
* User Defined Syntax Highlighting and Folding: screenshot 1, screenshot 2, screenshot 3 and screenshot 4
* PCRE (Perl Compatible Regular Expression) Search/Replace
* GUI entirely customizable: minimalist, tab with close button, multi-line tab, vertical tab and vertical document list
* Document Map
* Auto-completion: Word completion, Function completion and  Function parameters hint
* Multi-Document (Tab interface)
* Multi-View
* WYSIWYG (Printing)
* Zoom in and zoom out
* Multi-Language environment supported
* Bookmark
* Macro recording and playback
* Launch with different arguments

附：.nfo （也可以写成 .NFO 或 NFO，"info"或是"information"的缩写）是相当普遍的 ASCII 文字档案的副档名，它的内容包含主要档案的相关文字
说明资讯。可以使用文字编辑器或是 NFO 专用的浏览器浏览 NFO 档案的内容。档案的内容还会包含精心制作的 ASCII艺术图案。

从大学时代起，我一直用一款叫做DAMN NFO Viewer的免费软件查看NOF和DIZ文件。

### TextMate

[TextMate](http://macromates.com/) brings Apple's approach to operating systems into the world of text editors. By bridging UNIX underpinnings and GUI,
TextMate cherry-picks the best of both worlds to the benefit of expert scripters and novice users alike.

TextMate本身是支持中文的，不过会出现重叠的情况，需要安装专用字体：TextMate Regular。

* Ability to Search and Replace in a Project
* Auto-Indent for Common Actions Like Pasting Text
* Auto-Pairing of Brackets and Other Characters
* Clipboard History
* Column Selections and Column Typing
* Completion of Words from Current Document
* CSS-like Selectors to Pinpoint the Scope of Actions and Settings
* Declarative Language Grammars for Graceful Mixing and Hacking
* Dynamic Outline for Working With Multiple Files
* Expand Trigger Words to Code Blocks With Tab-able Placeholders
* File Tabs when Working With Projects
* Foldable Code Blocks
* Function Pop-up for Quick Overview and Navigation
* Plug-able Through Your Favorite Scripting Language
* Recordable Macros With No Programming Required
* Regular Expression Search and Replace (grep)
* Run Shell Commands from Within a Document
* Support for Darcs, Perforce, SVK, and Subversion
* Support for More Than 50 Languages
* Switch Between Files in Projects With a Minimum of Key Strokes
* Themable Syntax Highlight Colors
* Visual Bookmarks to Jump Between Places in a File
* Works As External Editor for (s)ftp Programs
* Works Together With Xcode and Can Build Xcode Projects

### TextPro

做编辑的第一天，开始使用这个软件进行文本的排版，最好用的中文文本排版工具。

[中华佛典宝库 软件工具](http://www.fodian.net/tools/)

* 支持主要的中文内码转换
* 支持GBK码繁体与简体相互转换
* 强化的查找/替换功能（正则表达式和自定义替换表）
* 合并文件
* 文件比较
* 批处理
* 文字编辑
* 可调用TTS(Text To Speech)语音库朗读文本


## Integrated Development Environment

### Eclipse

Eclipse is a multi-language software development environment comprising a workspace and an extensible plug-in system.

It is written mostly in Java.

It can be used to develop applications in Java and, by means of various plug-ins, other programming languages including
Ada, C, C++, COBOL, Fortran, Haskell, Perl, PHP, Python, R, Ruby (including Ruby on Rails framework), Scala, Clojure, Groovy, and Scheme.

It can also be used to develop packages for the software Mathematica. Development environments include the Eclipse Java
development tools (JDT) for Java and Scala, Eclipse CDT for C/C++ and Eclipse PDT for PHP, among others.

### JetBrains

IntelliJ IDEA是一种商业化銷售的Java集成开发环境（Integrated Development Environment，IDE）工具软件，由捷克软件公司JetBrains在2001
年1月時推出最初版。

IntelliJ IDEA被认为是当前Java开发效率最快的IDE工具。它整合了开发过程中实用的众多功能，几乎可以不用鼠标可以方便的完成你要做的任何事情，
最大程度的加快开发的速度。简单而又功能强大。与其他的一些繁冗而复杂的IDE工具有鲜明的对比。

PyCharm是一种Python IDE，带有一整套可以帮助用户在使用Python语言开发时提高其效率的工具，比如调试、语法高亮、Project管理、代码跳转、智能
提示、自动完成、单元测试、版本控制。此外，该IDE提供了一些高级功能，以用于支持Django框架下的专业Web开发。

PyCharm由JetBrains打造，VS2010的重构插件Resharper就是出自JetBrains之手。

同时支持Google App Engine，PyCharm支持IronPython。这些功能在先进代码分析程序的支持下，使 PyCharm 成为 Python 专业开发人员和刚起步人
员使用的有力工具。

## Version Control

### CVS

CVS(Concurrent Versions System) is a version control system, an important component of Source Configuration Management (SCM). Using it, you can record the history of sources files, and documents. It fills a similar role to the free software RCS, PRCS, and Aegis packages.

CVS is a production quality system in wide use around the world, including many free software projects.

Significant advantages over RCS: [here](http://www.nongnu.org/cvs/).

Updated: $Date: 2006/12/03 18:54:47

一个古老的版本控制系统，但我最初学习编程的时候，用的正是这个。

早期很多开源或者自由软件项目都使用CVS作为其程序员之间的中心点，以便能够综合各程序员的改进和更改。这些项目包括：Gnome、KDE、GIMP、Wine等。
CVS的使用获GNU通用公共许可证授权。

>In the world of open source software, the Concurrent Version System (CVS) has long been the tool of choice for version
control. And rightly so. CVS itself is free software, and its non-restrictive modus operandi and support for networked
operation – which allow dozens of geographically dispersed programmers to share their work – fits the collaborative nature
of the open-source world very well. CVS and its semi-chaotic development model have become cornerstones of open-source.

— Collins-Sussman, Version Control with Subversion For Subversion 1.1, 2005

* CVS不支持文件的复制和重命名
* 没有原子性提交（Atomic commit）
* CVS只支持文字文件

现已被Git和Subversion取代。

### Git

* [如何高效利用 GitHub](http://www.oschina.net/news/38185/use-github-effective)
* [Git 简易指南简体中文](http://rogerdudler.github.com/git-guide/index.zh.html)
* [Pro Git Book 中文版](https://github.com/progit/progit/tree/master/zh)
* [Learn Git Branching](http://pcottle.github.com/learnGitBranching/)

if you Got:

```bash
git push origin master
Permission denied (publickey).
fatal: The remote end hung up unexpectedly
```

[Generating SSH Keys](https://help.github.com/articles/generating-ssh-keys) may help.

Command

```bash
touch README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin git@github.com:chenzixin/PyKite.git
git push -u origin master
```

GitHub

GitHub是一家公司，位于旧金山，由 Chris Wanstrath, PJ Hyett 与 Tom Preston-Werner 三位开发者在 2008 年 4 月创办。迄今拥有 59 名全职
员工，主要提供基于 git 的版本托管服务。

在此之前，它是由 Tom 与 Chris 在本地程序员聚会中，开始的一个用于托管 git 的项目。正如每个伟大的传奇都开始于一场冒险，Tom 在这篇文章我
如何辞掉微软 30 万年薪邀约，创办 GitHub 中谈到：

>当我老去，回顾一生，我想说，"哇，那是一场冒险"；而不是，"哇，我真的很安稳。"

另一位创始人 Chris 也详细描述了 GitHub 初创的前因后果，他说道：

>Do whatever you want.

于是，在 2008 年 4 月 10 号这一天，GitHub 正式成立。

今天，GitHub 已是：

一个拥有 143 万开发者的社区。其中不乏 Linux 发明者 [Torvalds](https://github.com/torvalds) 这样的顶级黑客，以及 Rails 创始人 [DHH](https://github.com/dhh) 这样的年轻极客。

这个星球上最流行的开源托管服务。目前已托管 431 万 git 项目，不仅越来越多知名开源项目迁入 GitHub，比如 Ruby on Rails、jQuery、Ruby、
Erlang/OTP；近三年流行的开源库往往在 GitHub 首发，例如：[BootStrap](https://github.com/twitter/bootstrap)、[Node.js](https://github.com/joyent/node)、[CoffeScript](https://github.com/jashkenas/coffee-script) 等。

Alexa 全球排名 414 的网站。

完败 Google Code。

[GitHub Pages: Websites for you and your projects](https://pages.github.com/)

### Subversion

Subversion is an open source version control system. Founded in 2000 by CollabNet, Inc., the Subversion project and
software have seen incredible success over the past decade. Subversion has enjoyed and continues to enjoy widespread
adoption in both the open source arena and the corporate world.

**Guide**

1. svn repo-browser
2. create folder
3. check out to local
4. cut.svn to the project home
5. svn update
6. svn add
7. ignore work classes etc.
8. commit all

For HR: http://www.chenzixin.com/static/tutorial/svn/

**Sample**

```bash
# svn checkout PATH (path是服务器上的目录)
svn co https://svn.sinaapp.com/olservice

# svn add FILE
svn add test.php
svn add \*.php

# svn commit -m "LogMessage" [-N] [--no-unlock] PATH (如果选择了保持锁，就使用 --no-unlock 开关)
svn ci -m "add test file for my test" test.php

# svn lock -m "LockMessage" [--force] PATH
svn lock -m "lock test file" test.php
svn unlock PATH

# svn update -r m PATH
svn update -r 200 test.php
svn update test.php
svn up

# svn delete PATH -m "delete test fle" (简写：svn del/remove/rm)
svn delete test.txt

svn log PATH
svn info PATH
svn diff PATH (简写：svn di)
svn diff -r m:n PATH (对版本m和版本n比较差异)
svn help
svn help ci
```

**删除 Subversion 文件**

```powershell
rem Deprecated
for /r . %%a in (.) do @if exist "%%a\.svn" rd /s /q "%%a\.svn"
```

```java
Windows Registry Editor Version 5.00

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\Folder\shell\DeleteSVN]
@="删除SVN配置文件"

[HKEY_LOCAL_MACHINE\SOFTWARE\Classes\Folder\shell\DeleteSVN\command]
@="cmd.exe /c \"TITLE Removing SVN Folders in %1 && COLOR 9A && FOR /r \"%1\" %%f IN (.svn) DO RD /s /q \"%%f\" \""
```

作者：Jon Galloway

```bash
find . -type d -name ".svn"|xargs rm -rf
```



### Mercurial

Powered by Atlassian.

http://mercurial.selenic.com/

Mercurial 是一种轻量级分布式版本控制系统，采用 Python 语言实现，易于学习和使用，扩展性强。相对于传统的版本控制，具有如下优点：

**更轻松的管理**

传统的版本控制系统使用集中式的 repository，一些和 repository相关的管理就只能由管理员一个人进行。由于采用了分布式的模型，Mercurial 中就没有这样的困扰，每个用户管理自己的 repository，管理员只需协调同步这些repository。

**更健壮的系统**

分布式系统比集中式的单服务器系统更健壮，单服务器系统一旦服务器出现问题整个系统就不能运行了，分布式系统通常不会因为一两个节点而受到影响。

**对网络的依赖性更低**

由于同步可以放在任意时刻进行，Mercurial 甚至可以离线进行管理，只需在有网络连接时同步。

Clone a project and push changes

```bash
$ hg clone http://selenic.com/repo/hello
$ cd hello
$ (edit files)
$ hg add (new files)
$ hg commit -m 'My changes'
$ hg push
```

Create a project and commit

```bash
$ hg init (project-directory)
$ cd (project-directory)
$ (add some files)
$ hg add
$ hg commit -m 'Initial commit'
```

## Test

* JUnit
* TestNg
* Dagger
* [JMeter](http://jmeter.apache.org/)
* LoadRunner
* Pylot
* Selenium
* Siege

## Syntax Highlight

* [Ace](https://github.com/ajaxorg/ace)
* [CodeMirror](http://codemirror.net/) ([RunJS](http://runjs.cn/) / [LESS](http://www.ostools.net/less) / [Markdown](http://www.ostools.net/markdown))
* GeSHi
* Google Code Prettify
* [SyntaxHighlighter](http://alexgorbatchev.com/SyntaxHighlighter/)
* [Pygments](http://pygments.org/languages/)
* [Prism](http://prismjs.com/examples.html)

SyntaxHighlighter高亮HTML不需要转义 <i class="fa fa-thumbs-o-up"></i> :

```markup
<!-- Core JS -->
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shCore.js"></script>
<!-- Include Brushes -->
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushXml.js"></script>
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushAS3.js"></script>
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushPython.js"></script>
<script type="text/javascript" src="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/scripts/shBrushSql.js"></script>
<!-- Core CSS -->
<link href="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/styles/shCore.css" rel="stylesheet" type="text/css" />
<!-- Default Theme -->
<link href="http://www1.pconline.com.cn/api/libs/syntaxhighlighter/3_0_83/styles/shThemeDefault.css" rel="stylesheet" type="text/css" />

<!-- Content to Highlight -->
<pre class="brush: js">
    /**
     * SyntaxHighlighter
     */
    function foo()
    {
        if (counter <= 10)
            return;
        // it works!
    }
</pre>

<!-- Run the Highlighter -->
<script type="text/javascript">
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.all()
</script>
```

Pygments 用例：

```markup
{% highlight html %}
<i class="fa fa-cloud"></i>
<i class="fa fa-github fa-2x"></i>
<sup><i class="fa fa-external-link fa-fw"></i></sup>
{% endhighlight %}
```

Prism 用例：

```markup
<link rel="stylesheet" href="/assets/css/prism.css">
<script src="/assets/js/prism.js"></script>

<style type="text/css">
    pre {
        width: 800px;
    }
</style>

<h2>Prism: Highlight Lab</h2>

<hr>

<pre>

<code class="language-python">
    #!/usr/bin/python
    # -*- coding: utf-8 -*-

    from datetime import date
    import os
    import re
    import sys

    u_title = raw_input("Please ENTER the Title:\n")
    p_title = re.sub(r'\s+', '-', u_title.strip())

    # check len
    if len(p_title) < 2:
    # raise Exception('Too Short!')
    sys.exit('Too Short!')

    # post
    rakecmd = "rake post title=" + "'" + p_title + "'"
    os.popen(rakecmd)

    # print
    now = date.today()
    p_date = now.strftime("%Y-%m-%d")

    # info
    print 'File has been Created:\n' './_posts/'+ p_date + '-' + p_title.lower() + '.md'
    print 'Done...'
</code>
</pre>

<pre>
<code class="language-markup">
    &lt;!doctype html>
    &lt;html lang="en">
    &lt;head>
        &lt;meta charset="UTF-8">
        &lt;title>Document&lt;/title>
    &lt;/head>
    &lt;body>
    Sorry this page does not exist =(
    &lt;/body>
    &lt;/html>
</code>
</pre>

<pre>
<code class="language-javascript">
    let ps = document.querySelectorAll('p');

    Array.from(ps).forEach(function (p) {
        console.log(p);
    });
</code>
</pre>

<pre>
<code class="language-actionscript">
    var shad:DropShadowFilter = new DropShadowFilter(2, 45, 0x000000, 25, 3, 3, 2, 2);
    var txt:TextField = new TextField();
</code>
</pre>

<pre>
<code class="language-bash">
    $ source nvm.sh
    $ nvm use 0.12
    $ node --harmony
</code>
</pre>
```

## Knowledge Management

### Miscellaneous

* SeedDMS
* MoinMoin

### Wiki

#### DokuWiki

https://www.dokuwiki.org/dokuwiki/

DokuWiki is a simple to use and highly versatile Open Source wiki software that doesn't require a database. It is loved by users for its clean and readable syntax. The ease of maintenance, backup and integration makes it an administrator's favorite. Built in access controls and authentication connectors make DokuWiki especially useful in the enterprise context and the large number of plugins contributed by its vibrant community allow for a broad range of use cases beyond a traditional wiki.

#### MediaWiki

http://www.mediawiki.org/wiki/MediaWiki

MediaWiki is a free software open source wiki package written in PHP, originally for use on Wikipedia. It is now also used by several other projects of the non-profit Wikimedia Foundation and by many other wikis, including this website, the home of MediaWiki.

#### Confluence

https://www.atlassian.com/software/confluence

Confluence is where you create, organize and discuss work with your team.

Start in Mac:

```bash
cd /opt/confluence-std/bin/ && ./startup.sh
```

启动 Confluence 出错：

```bash
$ cd /opt/confluence-std/bin/ && ./startup.sh
If you encounter issues starting up Confluence Standalone, please see the Installation guide at http://confluence.atlassian.com/display/DOC/Confluence+Installation+Guide
Using CATALINA_BASE:   /opt/confluence-std
Using CATALINA_HOME:   /opt/confluence-std
Using CATALINA_TMPDIR: /opt/confluence-std/temp
Using JRE_HOME:        /System/Library/Frameworks/JavaVM.framework/Versions/CurrentJDK/Home
Using CLASSPATH:       /opt/confluence-std/bin/bootstrap.jar
```
提示信息不明，但无法访问应用。

```bash
$ java -version
java -version
java version "1.7.0_17"
Java(TM) SE Runtime Environment (build 1.7.0_17-b02)
Java HotSpot(TM) 64-Bit Server VM (build 23.7-b01, mixed mode)
$ cd /System/Library/Frameworks/JavaVM.framework/Versions/CurrentJDK/Home/bin
java version "1.6.0_65"
Java(TM) SE Runtime Environment (build 1.6.0_65-b14-462-11M4609)
Java HotSpot(TM) 64-Bit Server VM (build 20.65-b04-462, mixed mode)
```

```bash
$ ./catalina.sh version
Server version: Apache Tomcat/6.0.32
```

catalina 参数：

```bash
run => Start Catalina in the current window
start => Start Catalina in a separate window
stop => Stop Catalina, waiting up to 5 seconds for the process to end
```

用 run 参数启动，发现问题：

```bash
StandardServer.await: create[8000]:
    java.net.BindException: Address already in use
```

原来 [Tomcat](http://tomcat.apache.org/tomcat-6.0-doc/index.html) 启动会占用两个端口：8000 8080

修正端口冲突，问题解决。

### Blog

* Wordpress
* Sablog-X
* Drupal
* Joomla
* Typecho
* Octopress

### Note

* CyberArticle
* EverNote
* YoudaoNote

### Mind Mapping

* EdrawMax
* FreeMind
* Mindjet MindManager
* MindNode
* SmartDraw
* XMind

```java
订 单 号： 1793881
软件名称： 亿图图示专家 简体中文版 3.3
注册姓名： 王斌
产品密钥： 0711-3933-1450-8870-4861
```

### Mockups

* Balsamiq Mockups
* Axure RP Pro
* Pencil (can be installed into your Firefox as an extension)

### Q&A

OSQA

Python + Django

http://www.osqa.net/

OSQA is the free, open source Q&A system you've been waiting for. Your OSQA site is more than just an FAQ page, it is a
full-featured Q&A community. Users earn points and badges for useful participation, and everyone in the community wins.

## Project Management

* JIRA
* Fisheye
* Phabricator(Facebook)
* BugFree
* dotProject

### Gantt

中文为甘特图又叫横道图，它是以图示的方式通过活动列表和时间刻度形象地表示出任何特定项目的活动顺序与持续时间。它是在第一次世界大战时期发明
的，以亨利- L- 甘特先生的名字命名，他制定了一个完整地用条形图表进度的标志系统。由于甘特图形象简单，在简单、短期的项目中，甘特图都得到了最广泛的运用。

亨利- 劳伦斯- 甘特是泰勒创立和推广科学管理制度的亲密的合作者，也是科学管理运动的先驱者之一。甘特非常重视工业中人的因素，因此他也是人际关系理论的先驱者之一。

### Trac

http://trac.edgewall.org/

Trac is an enhanced wiki and issue tracking system for software development projects. Trac uses a minimalistic approach to
web-based software project management. Our mission is to help developers write great software while staying out of the way.
Trac should impose as little as possible on a team's established development process and policies.

Trac 的好处 (by Guitang Yang)

* 对要做的事情有清晰的计划，进行跟踪
* 要做的事情不会漏掉
* 讨论的结果可以更新到这个地方，是产品资料的集中地，也是备忘录，TODO list

安装笔记：

1\. Install python

Python 2.6 or higher needed.

```bash
wget http://www.python.org/ftp/python/2.6.2/Python-2.6.2.tgz
tar zxvf Python-2.6.2.tgz
./configure
make
make install
python -v
```

2\. Install easy install

```bash
wget http://pypi.python.org/packages/2.6/s/setuptools/setuptools-0.6c11-py2.6.egg
sh setuptools-0.6c11-py2.6.egg
```

3\. Install Babel

```bash
export http_proxy="192.168.11.254:8080"
easy_install http://ftp.edgewall.com/pub/babel/Babel-0.9.5.tar.gz
```

4\. Install Genshi

```bash
easy_install http://ftp.edgewall.com/pub/genshi/Genshi-0.6-py2.6.egg
```

5\. Download Trac

```bash
wget http://ftp.edgewall.com/pub/trac/Trac-0.12.1.tar.gz
tar zxvf Trac-0.12.1.tar.gz
```

6\. Localization

```bash
cd trac-××
python setup.py extract_messages
python setup.py update_catalog
python setup.py update_catalog -l zh_CN
python setup.py compile_catalog -f
```

7\. Install Trac

```bash
python setup.py install
```

8\. Init Project

```bash
trac-admin /data/trac/test initenv
```

9\. Test
```bash
tracd -p 8000 /data/trac/test
```

启动脚本:

```bash
export LANG=en_US.UTF-8
#tracd -d --auth="*,/data/trac/passwd/user.digist,pconline" -e /data/trac/projects/ --pidfile=pid
tracd -d --auth=*,/data/trac/digest.txt,trac -e /data/trac/
```
删除进程：

```bash
pkill -9 trac
```

用户授权：

编写一个Python文件 ```trac-digest.py```：

```python
from optparse import OptionParser
# The md5 module is deprecated in Python 2.5
try:
    from hashlib import md5
except ImportError:
    from md5 import md5
realm = 'trac'

# build the options
usage = "usage: %prog [options]"
parser = OptionParser(usage=usage)
parser.add_option("-u", "--username",action="store", dest="username", type = "string",
                  help="the username for whom to generate a password")
parser.add_option("-p", "--password",action="store", dest="password", type = "string",
                  help="the password to use")
parser.add_option("-r", "--realm",action="store", dest="realm", type = "string",
                  help="the realm in which to create the digest")
(options, args) = parser.parse_args()

# check options
if (options.username is None) or (options.password is None):
   parser.error("You must supply both the username and password")
if (options.realm is not None):
   realm = options.realm

# Generate the string to enter into the htdigest file
kd = lambda x: md5(':'.join(x)).hexdigest()
print ':'.join((options.username, realm, kd([options.username, realm, options.password])))
```

```powershell
# 执行以下命令生成密码
python trac-digest.py -u christen -p 123456 >> D:\trac\digest.txt
# 用以下命令启动应用
tracd -p 8001 --auth=ios,D:\trac\digest.txt,trac D:\trac\PConline\ios
```

```powershell
D:\python25\Scripts\trac-admin D:\trac\PConline\ios permission add christen TRAC_ADMIN
```

亦可使用 Apache 认证：```htpasswd```。

热备份的方法：

```bash
$ trac-admin /path/to/projenv hotcopy /path/to/backupdir
```
推荐插件：

* TracWysiwygPlugin
* Pygments

语法高亮：

```java

{{{
#!java
/* Name it "Hello.java"
 * Compile it by running "javac Hello.java"
 * Run it by typing "java Hello"
 */

class Hello {
    public static void main(String args[])
    {
        System.out.println("Hello, world!");
    }
}
}}}
```

### Redmine

http://www.redmine.org/

Redmine is a flexible project management web application. Written using the Ruby on Rails framework, it is cross-platform
and cross-database.