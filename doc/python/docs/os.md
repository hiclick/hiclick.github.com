# Python - os

This module provides a portable way of using operating system dependent functionality. If you just want to read or write a file see open(), if you want to manipulate paths, see the os.path module, and if you want to read all the lines in all the files on the command line see the fileinput module. For creating temporary files and directories see the tempfile module, and for high-level file and directory handling see the shutil module.

docs: 2.7.3-docs/library/os.html

## Delete expired file

```python
#!/usr/bin/python
# encoding: utf-8
# Copyright (c) Wangbin <wangbin@pconline.com.cn>

import os
import time


def main():
    # print os.path.basename(__file__)
    for fn in os.listdir(os.curdir):
        fp = os.path.join(os.curdir, fn)
        if not os.path.isfile(fp):
            continue
        if fn.startswith('.'):
            continue
        if fn == os.path.basename(__file__):
            continue
        ctime = int((time.time() - os.stat(fp).st_ctime) * 1.0 / (60 * 60 * 24))
        if ctime > 15:
            os.remove(fp)
            print 'deleted:', fn, ctime


if __name__ == "__main__":
    main()
```
