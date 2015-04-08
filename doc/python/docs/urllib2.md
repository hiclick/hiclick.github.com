# Python - urllib2

The urllib2 module defines functions and classes which help in opening URLs (mostly HTTP) in a complex world — basic and digest authentication, redirections, cookies and more.

docs: 2.7.3-docs/library/urllib2.html

## Check proxy

```text
陕西省西安市	1.85.4.209
河北省唐山市	222.222.194.100
浙江省绍兴市	123.157.137.123
浙江省丽水市	60.12.119.194
浙江省宁波市	60.12.193.45
```

```python
#codeing:utf-8
__author__ = 'bingalsky'

import re
import urllib2

check_url = 'http://imgad0.3conline.com/ivy/image/20129/18/13479307086930.htm'#HelloWorld!

proxies = open('proxies.txt', 'r')
proxies_checked = open('proxies_checked.txt', 'w')
for line in proxies.readlines():
    line = line.strip()
    if len(line) < 1:
        continue
    m = re.match(r'^.+\s+([\w.]+)\s*$', line)
    #print m
    if m is None:
        continue
    proxy = m.group(1)
    #print proxy
    request = urllib2.Request(check_url)
    request.set_proxy('%s:8090' % proxy, 'http')
    try:
        resault = urllib2.urlopen(request, timeout=10).read()
        if 'HelloWorld!' in resault:
            proxies_checked.write(line)
            proxies_checked.write('\n')
            print proxy, 'ok'
    except Exception, e:
        print proxy, 'error', e
proxies.close()
proxies_checked.close()
```
