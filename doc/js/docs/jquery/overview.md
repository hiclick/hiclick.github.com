# jQuery - Overview

jQuery is a fast and concise JavaScript library created by John Resig in 2006.

jQuery simplifies HTML document traversing, event handling, animating, and Ajax interactions for Rapid Web Development.

## 动态加载

目的：利用 jQuery 操作 DOM。

```javascript
(function(doc){
    var js = doc.createElement("script");
    js.src = "http://www1.pconline.com.cn/api/libs/jquery/jquery-1.7.2.min.js";
    var fs = doc.getElementsByTagName('script')[0];
    fs.parentNode.insertBefore(js, fs);
})(document);
```

压缩版本：

[OSChina](http://tool.oschina.net/jscompress)

```javascript
(function(doc){var js=doc.createElement("script");js.src="http://www1.pconline.com.cn/api/libs/jquery/jquery-1.7.2.min.js";var fs=doc.getElementsByTagName("script")[0];fs.parentNode.insertBefore(js,fs)})(document);
```

[Dean Edwards](http://dean.edwards.name/packer/)


```javascript
(function(a){var b=a.createElement("script");b.src="http://www1.pconline.com.cn/api/libs/jquery/jquery-1.7.2.min.js";var c=a.getElementsByTagName('script')[0];c.parentNode.insertBefore(b,c)})(document);
```

[YUI Compressor](http://yui.github.io/yuicompressor/)

改进：

```javascript
// 压缩版:
(function(a){var b=a.createElement("script");b.src="http://www1.pconline.com.cn/api/libs/jquery/jquery-1.7.2.min.js";var c=a.getElementsByTagName('head')[0];c.appendChild(b)})(document);
// 原始版:
(function(doc){
    var js = doc.createElement("script");
    js.src = "http://www1.pconline.com.cn/api/libs/jquery/jquery-1.7.2.min.js";
    var head = doc.getElementsByTagName('head')[0];
    head.appendChild(js);
})(document);
```

发现 Chrome 控制台内置了 $ 方法：

```javascript
> $
> function $(selector, [startNode]) { [Command Line API] }
```