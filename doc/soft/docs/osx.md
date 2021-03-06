# Soft - OSX

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## System

### Homebrew

The missing package manager for OS X.

```bash
brew --help
brew install nginx
```

### profile

<i class="fa fa-question fa-1x"></i> Mac OS X 打开终端后不执行`.bash_profile`文件

需要每次打开都执行一次`source ~/.bash_profile`真是麻烦，有别的办法吗？

终端 zsh

临时解决方案：

如果你的默认shell是bash ，那么把

```bash
. ~/.bash_profile
```

追加到 `~/.bashrc` 末尾，bash开启时会自动执行`.bashrc`这个文件

如果是其他的 比如 zsh， 那么追加到 `~/.zshrc` 末尾

其他类推

但：

[SegmentFault leohacker](http://segmentfault.com/q/1010000002413991/a-1020000002414549)：

不可取的。`.profile`文件和`.bashrc`文件的用意就是在不同的时刻触发，profile文件的作用是针对整个账号而言的设置，rc文件是针对一次shell的启动有效。
将你需要每次启动的东西放在 bashrc / zshrc中就可以了。现在一般profile文件中不放什么设置。

### shell

http://vbird.dic.ksu.edu.tw/

如果不清楚某个命令的参数意义，可用 ```man COMMAND``` 查看帮助。

```bash
cat ~/.bash_profile
# 等号两端不能有空格
export PATH=${PATH}:/opt/scala/scala-2.9.2/bin
export PATH=${PATH}:/opt/groovy/bin
export PATH=${PATH}:/System/Library/Frameworks/Python.framework/Versions/2.7/bin
source ~/.bash_profile
```

```bash
alias lm='ls -al' # 命令別名設定 等号两端不能有空格
alias la='ls -a'
alias df='df -h'
alias rm='rm -i'
alias ..='cd ..'
```

```bash
sudo cp /etc/hosts /etc/hosts.bak
sudo wget https://smarthosts.googlecode.com/svn/trunk/hosts -O /etc/hosts.conf
```

```bash
rm -rf groovy-2.0.6
```

```bash
#IP
ifconfig
#Gateway
netstat -rn
#DNS
cat /etc/resolv.conf
#Proxy
export HTTP_PROXY="127.0.0.1:8087"
```

```bash
ln -s -f /usr/local/git/bin/git /usr/bin/git
```

### Group

```bash
sudo dscl . -list /groups GroupMembership
sudo dscl . -append /Groups/groupname GroupMembership username
sudo dscl . -delete /Groups/groupname GroupMembership username
# 查看用户进程
ps -u Christen
```

### 自动输入密码

#### Expect

Expect is a program that "talks" to other interactive programs according to a script.  Following the script, Expect knows
what can be expected from a program and what the correct response should be.  An interpreted language provides branching
and high-level control structures to direct the dialogue.  In addition, the user can take control and interact directly
when desired, afterward  returning  control to the script.

-- [Expect Mac OS X Manual Page](https://developer.apple.com/library/mac/documentation/Darwin/Reference/ManPages/man1/expect.1.html)

```bash
#!/usr/bin/expect -f
set password "fj"
# default 10
set timeout 1

spawn sudo nginx
expect "Please enter your password:"
send "$password\r"
#interact
expect eof
```

Tips: Put ```interact``` at the end of the script, which returns control to the script caller, and allows you to interact with the remote shell.

参考：

* [Linux Expect SSH hangs](http://stackoverflow.com/a/19277901/4766670)
* [send: spawn id exp7 not open](http://stackoverflow.com/a/18812736/4766670)

2015年4月15日，启动成功，不过第一次也出错了：

```bash
$  bash  ./nginx.sh
wrong # args: should be "set varName ?newValue?"
    while executing
"set timeout 10 # default"
    (file "./nginx.sh" line 3)
```

这一行本是这么写的：```set timeout 10 # default```，搜索了下：


>Tcl中的注释符是 '#'，'#' 和直到所在行结尾的所有字符都被Tcl看作注释，Tcl解释器对注释将不作任何处理。不过，要注意的是，'#' 必须出现在Tcl解释器期望命令的第一个字符出现的地方，才被当作注释。如果 '#' 出现在命令的中间，Tcl解释器把它和后面的字符当作命令的参数处理，从而导致错误。


问题解决。

Tcl是一种很通用的脚本语言，它几乎在所有的平台上都可以解释运行，功能强大。是Tool command language的缩写，发音为 "tickle”。

```python
#这个是注释
set foo 0; #这个也是注释
set foo 0 #这个不是注释
```

>Expectk is a mixture of Expect and Tk.  It behaves just like Expect and Tk's wish.  Expect can also be used directly in
C  or  C++  (that  is,without Tcl).

#### sudo -S

Shell 下 ``` man sudo``` ：

The -S (stdin) option causes sudo to read the password from the standard input instead of the terminal device.

```bash
echo "password" | sudo -S python ~/goagent/goagent-3.1.18-27/local/proxy.py
```

### 文件权限

```bash
chmod -R 755 bootstrap-3.2.0/
```

一般的网站用的到也就是777、755、644这三种权限。

其中每个权限都有三位数字组成，第一位表示所有者的权限，第二位表示同组用户权限，第三位表示公共用户权限，r代表读取权限等于4，w代表写入权限等
于2，x代表执行权限等于1。

777的权限就是：rwxrwxrwx 。第一位7等于4+2+1，所以就是rwx，所有者有读取、写入、执行的权限；第二位7也是4+2+1，rwx，同组用户具有读取、写
入、执行权限；第三位7，代表公共用户有读取、写入、执行的权限。

755的权限就是：rwxr-xr-x。第一位7等于4+2+1，所以就是rwx，所有者有读取、写入、执行的权限；第二位5也是4+0+1，r-x，同组用户具有读取、执行
权限；第三位5，代表公共用户有读取、执行的权限。

644的权限就是：rw-r–r–。第一位6等于4+2+0，所以就是rw-，所有者有读取、写入的权限；第二位4也是4+0+0，r–，同组用户具有读取的权限；第三位
4，代表公共用户有读取的权限。

## Application

### Forklift

```bash
+ Tool
    - Touch # sets the modification and access times.  If not exist, created with default permissions.
    - Compare
```

### Oh-My-Zsh

官网：http://ohmyz.sh/ [<i class="fa fa-github fa-1x"></i>](https://github.com/robbyrussell/oh-my-zsh)


[Cheatsheet](https://github.com/robbyrussell/oh-my-zsh/wiki/Cheatsheet)


**使用 Zsh 的九个理由**

1. zsh 兼容 bash
2. zsh 的补全模式更方便
3. zsh 支持命令选项补全
4. zsh 支持命令参数补全
5. zsh 支持更加聪明的目录补全
6. zsh 强大的快速目录切换
7. zsh 支持全局 alias 和后缀名 alias
8. zsh 有着丰富多彩的命令行提示符

[阅读原文](http://blog.jobbole.com/28829/)<sup><i class="fa fa-external-link fa-fw"></i></sup>





