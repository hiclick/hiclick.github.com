# Soft - Windows

## 注册表

regedit.exe 是Windows系统的注册表编辑器，是Registry Editor的缩写。

### 完全删除微盘

Q: 计算机下的 我的微盘 为什么删不掉？

A: 因为压根就不是一个真实存在的文件夹。要想完全删除，需要先到“我的文档”里删除“我的微盘”文件夹，然后在注册表里搜索“我的微盘”，在

```java
HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\MyComputer\NameSpace
```

下，找到后删除即可。

此外，微盘卸载其实并不完全，重启电脑后要清理

```java
C:\Users\Username\AppData\Roaming\VDiskSyn
```

目录。

## 程序 功能

### Telnet

Windows 7 / 8 默认关闭了 Telnet 的功能，打开方法：

```java
Control Panel\All Control Panel Items\Programs and Features
```

左侧菜单：`Turn Windows features on or off`，打开 Telnet 即可，分 Sever 和 Client。
 
添加成功之后，通过 cmd.exe 或者 powershell.exe 都可以使用。但遭遇一个意外：

在 4what 的机器上，通过 运行 <i class="fa fa-arrow-circle-right"></i> cmd.exe 使用 Telnet 没问题，但通过 Total Commander 工具栏 <i class="fa fa-arrow-circle-right"></i> cmd.exe，仍提示：

>‘telnet' 不是内部或外部命令，也不是可运行的程序或批处理文件。

## 批处理

批处理文件，在DOS和Windows系统中，.bat 文件是可执行文件，由一系列命令构成，其中可以包含对其他程序的调用。这个文件的每一行都是一条DOS命令。

### 清除Windows快捷方式小箭头

删除Windows7快捷方式小箭头

```java
cmd /k reg delete "HKEY_CLASSES_ROOT\lnkfile" /v IsShortcut /f & taskkill /f /im explorer.exe & start explorer.exe
```

删除Windows8快捷方式小箭头

```java
reg add "HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\Shell Icons" /v 29 /d "%systemroot%\system32\imageres.dll,197" /t reg_sz /f
taskkill /f /im explorer.exe
attrib -s -r -h "%userprofile%\AppData\Local\iconcache.db"
del "%userprofile%\AppData\Local\iconcache.db" /f /q
start explorer
pause
```

恢复Windows8快捷方式小箭头

```java
reg delete "HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows\CurrentVersion\Explorer\Shell Icons" /v 29 /f
taskkill /f /im explorer.exe
attrib -s -r -h "%userprofile%\AppData\Local\iconcache.db"
del "%userprofile%\AppData\Local\iconcache.db" /f /q
start explorer
pause
```