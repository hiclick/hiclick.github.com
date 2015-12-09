# Python


https://www.python.org/

Whether you're new to programming or an experienced developer, it's easy to learn and use Python.

Python is powerful... and fast; 

plays well with others; 

runs everywhere; 

is friendly & easy to learn; 

is Open.

***

This serves the files relative to the current directory:

```bash
python -m SimpleHTTPServer 8000
```

It also can be used in the following manner in order to set up a very basic web server serving files relative to the current directory.

```python
import SimpleHTTPServer
import SocketServer

PORT = 8000

Handler = SimpleHTTPServer.SimpleHTTPRequestHandler

httpd = SocketServer.TCPServer(("", PORT), Handler)

print "serving at port", PORT
httpd.serve_forever()
```

本文档的参考教材：

* Apress Beginning Python From Novice to Professional 2nd（Primary）
* [O'Reilly Programming Python 4th Edition](http://pclib.github.io/safari/program/programming-python/)
* [O'Reilly Learning Python 5th Edition](http://pclib.github.io/safari/program/learning-python/)
* [O'Reilly Python Cookbook 3rd Edition](http://pclib.github.io/safari/program/python-cookbook/)



### 版权许可

本书采用“保持署名—非商用”创意共享4.0许可证。

只要保持原作者署名和非商用，您可以自由地阅读、分享、修改本书。

详细的法律条文请参见[创意共享](http://creativecommons.org/licenses/by-nc/4.0/)网站。
