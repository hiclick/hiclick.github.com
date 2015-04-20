# Python - re

This module provides regular expression matching operations similar to those found in Perl. Both patterns and strings to be searched can be Unicode strings as well as 8-bit strings.

docs: 2.7.3-docs/library/re.html

[正则表达](http://zh.wikipedia.org/wiki/%E6%AD%A3%E5%88%99%E8%A1%A8%E8%BE%BE%E5%BC%8F)的理念是由数学家Stephen Kleene在1950年首次提出来的，开始时主要用于UNIX下文本编辑器ed和过滤器grep中。1968年开始广泛应用于文本
编辑器中的模式匹配和编译器中的词法分析。1980年，一些复杂的正则表达语句开始出现在Perl中，使用了由[Henry Spencer](https://en.wikipedia.org/wiki/Henry_Spencer)实现的正则表达解析器。
而Henry Spencer后来写了更高效的正则解析器Tcl，Tcl混合使用了NFA（非确定有限自动机）/DFA（确定有限自动机）来实现正则表达语法。

>TextPro正则表达式的搜索引掣是在Henry Spencer的源代码的基础上，经过大量的增改，尤其是增强了对中文的支持。

主要部分：

1. \[a-z] 表示所有小写字母，\[0-9] 表示所有数字，\[amk] 表示a、m或k
1. \+ 表示字符重复1或者多次，\* 表示字符重复0或者多次。在使用\+或者\*时，正则表达式遵从 ```maximal munch``` 的原则，也就是说它匹配能够匹配到的最大字符串
1. a|z 表示匹配字符'a'或者'z'
1. ? 表示字符出现0次或者1次
1. \\ 是正则表达式中的escape符号，\* 表示的就是'*'这个字符，而不是它在正则表达式中的功能
1. . 表示出了换行符之外的任何字符，而^表示出了紧接它的字符以外的任何字符
1. ^ 匹配字符串的开始，$ 匹配字符串的结尾

Python:

1. \w 匹配单词字符，即[a-zA-Z0-9\_]，\W 则恰好相反，匹配[^a-zA-Z0-9\_]
1. \s 匹配单个的空白字符：space, newline(\n), return(\r), tab(\t), form(\f)，即[ \n\r\t\f\v]，\S 相反
1. \d 匹配数字[0-9]，\D 恰好相反，匹配[^0-9]

Python中常用到的正则表达式函数主要有 ```re.search```, ```re.match```, ```re.findall```, ```re.sub```, ```re.split```。

## Start

```python
import re
content = "aababbaxz abcabb abbbbabb"
pattern = re.compile("[a|b]*abb")
print pattern.findall(content)
# outputs: ['aababb', 'abb', 'abbbbabb']
```