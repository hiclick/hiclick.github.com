# XHTML

[W3school HTML 参考手册](http://www.w3school.com.cn/tags/index.asp)

XHTML 于2000年的1月26日成为 W3C 标准。

## What is XHTML

* XHTML 指可扩展超文本标签语言（EXtensible HyperText Markup Language）。
* XHTML 的目标是取代 HTML。
* XHTML 与 HTML 4.01 几乎是相同的。
* XHTML 是更严格更纯净的 HTML 版本。
* XHTML 是作为一种 XML 应用被重新定义的 HTML。
* XHTML 是一个 W3C 标准。

## VS HTML

* XHTML 元素必须被正确地嵌套。
* XHTML 元素必须被关闭。
* 标签名必须用小写字母。
* XHTML 文档必须拥有根元素。

## Miscellaneous

### How can I make a redirect page?

** Using Meta **

```markup
<meta http-equiv="refresh" content="5;URL='http://google.com/'">
```

Use of meta refresh is discouraged by the W3C, since unexpected refresh can disorient users. Meta refresh also impairs
the web browser's "back" button in some browsers (including Internet Explorer 6 and before), although most modern browsers
compensate for this (Mozilla Firefox, Opera, Internet Explorer 7).

** Using JavaScript **

```javascript
// similar behavior as an HTTP redirect
window.location.replace("http://stackoverflow.com");

// similar behavior as clicking on a link
window.location.href = "http://stackoverflow.com";

//jQuery
$(window).attr("location","http://www.google.com");
$(location).attr("href","http://www.google.com");
$(location).prop('href',"http://www.google.com");

window.location.assign("http://www.mozilla.org");

```

