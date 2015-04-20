# CSS - Less

Less is a CSS pre-processor, meaning that it extends the CSS language, adding features that allow variables, mixins, 
functions and many other techniques that allow you to make CSS that is more maintainable, themable and extendable.

Less runs inside Node, in the browser and inside Rhino. There are also many 3rd party tools that allow you to compile your 
files and watch for changes.

http://lesscss.org/

https://github.com/less/less.js

```less
//这里是一些简单的LESS语法
@width:400px;
@height:300px;
@font_size:12px;

textarea {
	width:@width;
	height:@height;
	font-size:@font_size;
}
```
<i class="fa fa-arrow-circle-o-down"></i>
```css
textarea {
  width: 400px;
  height: 300px;
  font-size: 12px;
}
```