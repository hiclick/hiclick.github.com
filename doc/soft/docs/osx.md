# Soft - OSX

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## System

用户组维护：

```bash
sudo dscl . -list /groups GroupMembership
sudo dscl . -append /Groups/groupname GroupMembership username
sudo dscl . -delete /Groups/groupname GroupMembership username
# 查看用户进程
ps -u Christen
```

## User Interface

### Font
