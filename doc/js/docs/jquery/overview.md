# jQuery - Overview

jQuery is a fast and concise JavaScript library created by John Resig in 2006.

jQuery simplifies HTML document traversing, event handling, animating, and Ajax interactions for Rapid Web Development.

## 动态加载

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

## 二级标题

