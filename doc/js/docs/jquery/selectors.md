# jQuery - Selectors

子选择器用法一例，获取《[O'Reilly CSS The Definitive Guide](http://pclib.github.io/safari/program/css-the-definitive-guide/Text/TOC.xhtml)》的一级标题，以生成CSS文档目录：


```javascript
jQuery(".sgc-toc-level-2 > a").each(function(){
    console.log(jQuery(this).text().trim());
});
```

