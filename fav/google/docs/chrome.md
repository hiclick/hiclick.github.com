# Google - Chrome


15 Must-Know Chrome DevTools Tips and Tricks


当 DevTools 被打开的时候，按 Ctrl + P（command + P），就能快速搜寻和打开你项目的文件。

在页面已经加载的文件中搜寻一个特定的字符串，快捷键是 Ctrl + Shift + F (command + option + F)，支持正则表达式。

在Sources标签中打开一个文件之后，按 Ctrl + O (command  + O)，输入 ```: 和 行数```，可跳转到文件中的任意一行。


DevTools控制台支持一些变量和函数来选择DOM元素：

$()–document.querySelector()

$$()–document.querySelectorAll()

$0-$4–依次返回五个最近你在元素面板选择过的DOM元素的历史记录，$0是最新的记录，以此类推。

http://getfirebug.com/wiki/index.php/Command_Line_API

http://getfirebug.com/wiki/index.php/Console_API

http://www.cnblogs.com/Wayou/p/chrome-console-tips-and-tricks.html

http://blog.icodeu.com/?p=537


当编辑一个文件的时候，你可以按住Ctrl（command），在你要编辑的地方点击鼠标，可以设置多个插入符，这样可以一次在多个地方编辑。按 option 多列编辑。

Network 已经支持 Preserve Log。

Network Timeline Console 都支持 Filter。

内建美化代码，可以返回一段最小化且格式易读的代码。Pretty Print 的按钮在 Sources 标签的左下角。

Emulation： Device, Screen, User Agent, Sensors

当在Sources标签下编辑文件时，按下Ctrl + D (command + D)，当前选中的单词的下一个匹配也会被选中，有利于你同时对它们进行编辑。


Workspaces










