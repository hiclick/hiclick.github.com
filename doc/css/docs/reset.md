# CSS - Reset

HTML标签在浏览器中都有默认的样式，例如p标签有上下边距，strong标签有字体加粗样式等。不同浏览器的默认样式之间存在差别，例如ul默认带有缩进样式，
在IE下，它的缩进是由margin实现的，而在Firefox下却是由padding实现的。开发时浏览器的默认样式可能会给我们带来多浏览器兼容性问题，影响开发效率。
现在很流行的解决方法是一开始就将浏览器的默认样式全部覆盖掉，这就是CSS reset。<sup>[[1]](http://www.solagirl.net/yui-css-reset.html)</sup>

## reset

### YUI CSS Reset

The foundational CSS Reset removes the inconsistent styling of HTML elements provided by browsers. This creates a dependably
flat foundation to build upon. With CSS Reset loaded, write explicit CSS your project needs.

* 白色背景，黑色字体
* margin和padding设为0
* 去掉table的边框
* 去掉列表样式（ol, ul, dl）
* 所有文字字号设为100%
* font-style和font-weight设为normal
* 更好（但不完全）的表格字体继承
* 减小sup和sub对line-height的影响

http://yuilibrary.com/yui/docs/cssreset/

When CSS Reset is included in a page it removes the browser-provided style of HTML elements (by generally setting values to 0).
This example shows what that looks like.

http://yuilibrary.com/yui/docs/cssreset/cssreset-basic-example.html


### meyerweb

The goal of a reset stylesheet is to reduce browser inconsistencies in things like default line heights, margins and font
sizes of headings, and so on.

http://meyerweb.com/eric/tools/css/reset/

http://meyerweb.com/eric/thoughts/2007/04/18/reset-reasoning/

```css
/* http://meyerweb.com/eric/tools/css/reset/
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
```

### 4what

http://www.4what.cn/css/reset.css

```css
@charset "UTF-8";

/*___________________________________4what____________________________________*/

/**
 * reset.css
 *
 * @author 4what
 * @version 2014.12.03
 */

* {
    font-size: 100%;
    font-style: normal;
    margin: 0;
    padding: 0;
}

/* Image */
img {
    border: none;
    vertical-align: middle;
}

/* List */
ol, ul {
    list-style: none;
}

/* Table */
table {
    border-collapse: collapse;
    border-spacing: 0;
}

/* Text */
q:after, q:before {
    content: ""; /* for IE8, Std */
}

/* Outlines and the focus */
:focus {
    outline: none; /* for IE8, Std */
}

/* Clear */
.clear {
    zoom: 1; /* for IE7- */
    /* hasLayout */
}

.clear:after {
    clear: both;
    content: ".";
    display: block;
    font-size: 0;
    height: 0;
    visibility: hidden;
}
```

## normalize

Normalize.css makes browsers render all elements more consistently and in line with modern standards. It precisely targets only the styles that need normalizing.

https://github.com/necolas/normalize.css

http://necolas.github.io/normalize.css/

http://necolas.github.io/normalize.css/2.0.1/test.html

## compare

reset 的目的，是将所有的浏览器的自带样式重置掉，这样更易于保持各浏览器渲染的一致性。

normalize 的理念则是尽量保留浏览器的默认样式，不进行太多的重置。

[Normalize.css 与传统的 CSS Reset 有哪些区别？](http://www.zhihu.com/question/20094066)





