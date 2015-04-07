# -*- coding:utf-8 -*-
__author__ = 'Christen'


noteType = "Python"

toc = ['setuptools','pip','ipython']

# toc.sort()

s = '''

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## 二级标题一

## 二级标题二

## 二级标题三
'''

for fa in toc:
    with open("note/docs/" + fa + ".md", "w") as f:
        f.write("# " + noteType + " - " + fa.capitalize())
        f.write(s)