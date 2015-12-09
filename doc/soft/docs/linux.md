# Soft - Linux

基于[Linux](http://zh.wikipedia.org/wiki/Linux)的操作系统是一種自由和開放源碼的類UNIX操作系統，其定义组件是Linux内核。Linux内核由Linus Torvalds在1991年10月5日首次发布。
基于Linux的操作系统通常简称为Linux操作系统。

术语Linux指的只是操作系统内核本身，但一般采用Linux内核来表达该意思。Linux则常用来指一个完整的Linux发行版，包括GUI组件和许多其他实用
工具，其中许多组件与工具由GNU计划提供。另外，像Google的Android同样使用Linux内核，但包含的组件与大部分桌面Linux发行版不相同。

## Red Hat

2010年8月，我从广州拿到四台下架的宝德刀片机，作为北京学习Linux的资源，并测试服务器。到2015年11月，只有 192.168.98.198 硕果仅存。

Mac 控制台可以直接远程登录 Linux：

```bash
ssh username@192.168.98.198
password: *******
```
### 查看Linux系统版本

```bash
$ uname -a

Darwin ChentekiMacBook-Pro.local 14.4.0 Darwin Kernel Version 14.4.0: Thu May 28 11:35:04 PDT 2015; root:xnu-2782.30.5~1/RELEASE_X86_64 x86_64

Linux localhost.localdomain 2.6.18-164.el5PAE #1 SMP Tue Aug 18 15:59:11 EDT 2009 i686 i686 i386 GNU/Linux

# 以下适用于 Red Hat Linux

$ cat /proc/version

Linux version 2.6.18-164.el5PAE (mockbuild@x86-002.build.bos.redhat.com) (gcc version 4.1.2 20080704 (Red Hat 4.1.2-46)) #1 SMP Tue Aug 18 15:59:11 EDT 2009

$ lsb_release -a

LSB Version:	:core-3.1-ia32:core-3.1-noarch:graphics-3.1-ia32:graphics-3.1-noarch
Distributor ID:	RedHatEnterpriseServer
Description:	Red Hat Enterprise Linux Server release 5.4 (Tikanga)
Release:	5.4
Codename:	Tikanga
```

### Linux 查看网络

```bash
$ ifconfig
Link encap:Ethernet  HWaddr 00:07:E9:3F:89:AB  
inet addr:192.168.98.198  Bcast:192.168.99.255  Mask:255.255.254.0
inet6 addr: fe80::207:e9ff:fe3f:89ab/64 Scope:Link
UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
RX packets:341391783 errors:0 dropped:0 overruns:0 frame:0
TX packets:488136 errors:0 dropped:0 overruns:0 carrier:0
collisions:0 txqueuelen:100 
RX bytes:2235016013 (2.0 GiB)  TX bytes:41371713 (39.4 MiB)
Base address:0x1440 Memory:fe860000-fe880000

$ more /etc/sysconfig/network-scripts/ifcfg-eth0
# Intel Corporation 82540EM Gigabit Ethernet Controller
DEVICE=eth0
BOOTPROTO=static
HWADDR=00:07:E9:3F:89:AB
ONBOOT=yes
IPADDR=192.168.98.198
NETMASK=255.255.254.0

$ ip route show
192.168.98.0/23 dev eth0  proto kernel  scope link  src 192.168.98.198 
169.254.0.0/16 dev eth0  scope link 
default via 192.168.99.254 dev eth0 

# 或者

$ netstat -r
Kernel IP routing table
Destination     Gateway         Genmask         Flags   MSS Window  irtt Iface
192.168.98.0    *               255.255.254.0   U         0 0          0 eth0
169.254.0.0     *               255.255.0.0     U         0 0          0 eth0
default         192.168.99.254  0.0.0.0         UG        0 0          0 eth0

$ cat /etc/resolv.conf
search install.pc.local
nameserver 59.108.118.3
```




## CentOS

## Fedora

## Ubuntu
