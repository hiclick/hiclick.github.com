# Python - re

This module provides regular expression matching operations similar to those found in Perl. Both patterns and strings to be searched can be Unicode strings as well as 8-bit strings.

docs: 2.7.3-docs/library/re.html

## Start

```python
import re
content = "aababbaxz abcabb abbbbabb"
pattern = re.compile("[a|b]*abb")
print pattern.findall(content)
# outputs: ['aababb', 'abb', 'abbbbabb']
```