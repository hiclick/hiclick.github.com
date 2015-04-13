# Soft - OSX

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## System

### 用户组维护

```bash
sudo dscl . -list /groups GroupMembership
sudo dscl . -append /Groups/groupname GroupMembership username
sudo dscl . -delete /Groups/groupname GroupMembership username
# 查看用户进程
ps -u Christen
```

### 自动输入密码

第一行的方法，可用来启动 GoAgent，但是启动 nginx 无效，还是提示密码密码，今天参考[Stack Overflow](http://stackoverflow.com/a/19277901/4766670)
找到可行的方法：

和 ``` man sudo``` 有些冲突：

The -S (stdin) option causes sudo to read the password from the standard input instead of the terminal device.

```bash
# echo "password" | sudo -S nginx
sudo nginx
expect "Please enter your password:"
send "password/r"
interact
```

Tips: Put ```interact``` at the end of the script, which returns control to the script caller, and allows you to interact with the remote shell.

这行命令OK：

```bash
echo "password" | sudo -S python ~/goagent/goagent-3.1.18-27/local/proxy.py
```

## User Interface

### Font
