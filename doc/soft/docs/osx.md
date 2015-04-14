# Soft - OSX

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## System

### 常用Shell

http://vbird.dic.ksu.edu.tw/

```bash
alias lm='ls -al' # 命令別名設定
```

### 用户组维护

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
set timeout 10 # default

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

## User Interface

### Font