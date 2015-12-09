# JavaScript - Grammar

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## Global Functions

Functions which are called globally rather than on an object—directly return their results to the caller.

<table class="dataintable">
  <tbody><tr>
    <th style="width:35%">函数</th>
    <th>描述</th>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_decodeURI.asp">decodeURI()</a></td>
    <td>解码某个编码的 URI。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_decodeURIComponent.asp">decodeURIComponent()</a></td>
    <td>解码一个编码的 URI 组件。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_encodeuri.asp">encodeURI()</a></td>
    <td>把字符串编码为 URI。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_encodeURIComponent.asp">encodeURIComponent()</a></td>
    <td>把字符串编码为 URI 组件。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_escape.asp">escape()</a></td>
    <td>对字符串进行编码，返回已编码的 string 的副本。其中某些字符被替换成了十六进制的转义序列，可以在所有的计算机上读取该字符串。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_eval.asp">eval()</a></td>
    <td>计算 JavaScript 字符串，并把它作为脚本代码来执行。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_getClass.asp">getClass()</a></td>
    <td>返回一个 JavaObject 的 JavaClass。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_isFinite.asp">isFinite()</a></td>
    <td>检查某个值是否为有穷大的数。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_isNaN.asp">isNaN()</a></td>
    <td>检查某个值是否是数字。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_number.asp">Number()</a></td>
    <td>把对象的值转换为数字。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_parseFloat.asp">parseFloat()</a></td>
    <td>解析一个字符串并返回一个浮点数。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_parseInt.asp">parseInt()</a></td>
    <td>解析一个字符串并返回一个整数。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_string.asp">String()</a></td>
    <td>把对象的值转换为字符串。</td>
  </tr>
  <tr>
    <td><a href="http://www.w3school.com.cn/jsref/jsref_unescape.asp">unescape()</a></td>
    <td>对由 escape() 编码的字符串进行解码。</td>
  </tr>
</tbody></table>

### escape

<i class="fa fa-stack-overflow"></i> [Best practice: escape or encodeURI / encodeURIComponent](http://stackoverflow.com/a/747700/4766670)

Don't use it, as it has been deprecated since ECMAScript v3.

### encodeURI

测试：

```javascript
var test1="http://www.w3school.com.cn/My first/"

document.write(encodeURI(test1)+ "<br />")
document.write(decodeURI(test1))
```

输出：

```java
http://www.w3school.com.cn/My%20first/
http://www.w3school.com.cn/My first/
```

<i class="fa fa-stack-overflow"></i> [What is the difference between decodeURIComponent and decodeURI?](http://stackoverflow.com/questions/747641/what-is-the-difference-between-decodeuricomponent-and-decodeuri)

```bash
js> s = "http://www.example.com/string with + and ? and & and spaces";
http://www.example.com/string with + and ? and & and spaces
js> encodeURI(s)
http://www.example.com/string%20with%20+%20and%20?%20and%20&%20and%20spaces
js> encodeURIComponent(s)
http%3A%2F%2Fwww.example.com%2Fstring%20with%20%2B%20and%20%3F%20and%20%26%20and%20spaces
```

[URL Decoder/Encoder](http://meyerweb.com/eric/tools/dencoder/)<sup><i class="fa fa-external-link fa-fw"></i></sup>

## HTML Encode

<i class="fa fa-stack-overflow"></i> [HTML-encoding in JavaScript/jQuery](http://stackoverflow.com/a/1219983/4766670)

#### use jQuery

```javascript
function htmlEncode(value){
    //create a in-memory div, set it's inner text(which jQuery automatically encodes)
    //then grab the encoded contents back out.  The div never exists on the page.
    return $('<div/>').text(value).html();
}

function htmlDecode(value){
    return $('<div/>').html(value).text();
}

console.log(htmlEncode("<h3>test</h3>"));
console.log(htmlDecode("&lt;h3&gt;test&lt;/h3&gt;"));
```

#### escape templatetag in Django

```javascript
function htmlEscape(str) {
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');
}
```

#### String prototype

```javascript
String.prototype.htmlEncode = function () {
    return String(this)
        .replace(/&/g, '&amp;')
        .replace(/"/g, '&quot;')
        .replace(/'/g, '&#39;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;');

}

var aString = '<script>alert("I hack your site")</script>';
console.log(aString.htmlEncode());
```

#### Underscore

```javascript
_.escape("<h3>test</h3>")
"&lt;h3&gt;test&lt;&#x2F;h3&gt;"

_.unescape("&lt;h3&gt;test&lt;/h3&gt;")
"<h3>test</h3>"
```

* [OpinionatedGeek HTML Encoder](http://www.opinionatedgeek.com/dotnet/tools/htmlencode/encode.aspx)
* [OpinionatedGeek HTML Decoder](http://www.opinionatedgeek.com/dotnet/tools/htmlencode/Decode.aspx)

[Convert Ascii Text to HTML Character Entities](http://www.textfixer.com/html/html-character-encoding.php)<sup><i class="fa fa-external-link fa-fw"></i></sup>

[HTML-encode a string](http://www.string-functions.com/htmlencode.aspx)<sup><i class="fa fa-external-link fa-fw"></i></sup> （provide MANY string functions）

[HTML Entities Encoder / Decoder](http://www.web2generators.com/html-based-tools/online-html-entities-encoder-and-decoder)<sup><i class="fa fa-external-link fa-fw"></i></sup>

[Web Tool Hub HTML Encoder Decoder](http://www.webtoolhub.com/tn561387-html-encoder-decoder.aspx)<sup><i class="fa fa-external-link fa-fw"></i></sup> （provide MANY string functions）

也可用 Sublime Text 或者  Intellij IDEA 替换，然后选择高亮工具。

不过用 SyntaxHighlighter 高亮代码，不用完全转义，我之前测试的时候，只转义`左括号`，今天发现官方的例子，亦是如此。

<i class="fa fa-stack-overflow"></i> [Difference between Url Encode and HTML encode](http://stackoverflow.com/a/1812486/4766670)

