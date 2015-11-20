# HTML5 - Table


参考：[Tutorial Spoint HTML Tables](http://www.tutorialspoint.com/html/html_tables.htm)


http://www.tutorialspoint.com/xhtml

## 概念

The HTML tables allow web authors to arrange data ***like text, images, links, other tables, etc.*** into **rows** and **columns** of cells.

The HTML tables are created using the `<table>` tag in which the `<tr>` tag is used to create table **rows** and `<td>` tag is used to create data **cells**.

There are two attribiutes called **cellpadding** and **cellspacing** which you will use to adjust the white space in your table cells. The cellspacing attribute defines the width of the border, while cellpadding represents the distance between cell borders and the content within a cell.

You will use **colspan** attribute if you want to merge two or more columns into a single column. Similar way you will use **rowspan** if you want to merge two or more rows.


## 代码

### 一个完整的示例

```markup
<html>
<head>
<style type="text/css">
thead {color:green}
tbody {color:blue;height:50px}
tfoot {color:red}
</style>
</head>
<body>

<table border="1">
  <thead>
    <tr>
      <th>Month</th>
      <th>Savings</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
</table>

</body>
</html>
```

### 合并单元格

```markup
<html>
<body>

<table width="100%" border="1">
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td colspan="2">January</td>
  </tr>
  <tr>
    <td colspan="2">February</td>
  </tr>
</table>

</body>
</html>
```

## 应用

### 删除指定列

4what 编写的方法：

```javascript
function _hide(title) {
    var
        tbl = $("table.stripe_tb:eq(0)"),
        th = tbl.find("th:contains(" + title + ")"),
        index = th.index();

    th.hide();

    tbl.find("tbody tr").each(function() {
        $(this).find("td").eq(index).hide();
    });
}
```

改为自执行，并能删除应对的`tfoot`：

```javascript
(function(title) {
    var
        tbl = $("table.stripe_tb:eq(0)"),
        th = tbl.find("th:contains(" + title + ")"),
        index = th.index();
    th.hide();
    tbl.find('tfoot th').eq(index).hide();

    tbl.find("tbody tr").each(function() {
        $(this).find("td").eq(index).hide();
    });
})("点击次数");
```

参考：

```javascript
(function(a){
	console.log(a);   // firebug输出123，使用（）运算符
})(123);
```

JS标识符混淆[压缩](http://tool.oschina.net/jscompress)：

```javascript
tfoot(function(d){var c=$("table.stripe_tb:eq(0)"),b=c.find("th:contains("+d+")"),a=b.index();b.hide();c.find("tfoot th").eq(a).hide();c.find("tbody tr").each(function(){$(this).find("td").eq(a).hide()})})("点击次数");
```

**JS立即执行函数写法理解**

来自[DenGo](http://dengo.org/archives/1004)

`(function(){…})()`和`(function(){…}())`是两种 JavaScript 立即执行函数的常见写法。

```javascript
(function(a){
    console.log(a);   //firebug输出123,使用（）运算符
})(123);
 
(function(a){
    console.log(a);   //firebug输出1234，使用（）运算符
}(1234));
 
!function(a){
    console.log(a);   //firebug输出12345,使用！运算符
}(12345);
 
+function(a){
    console.log(a);   //firebug输出123456,使用+运算符
}(123456);
 
-function(a){
    console.log(a);   //firebug输出1234567,使用-运算符
}(1234567);
 
var fn=function(a){
    console.log(a);   //firebug输出12345678，使用=运算符
}(12345678)
```

要在函数体后面加括号就能立即调用，则这个函数必须是函数表达式（匿名函数属于函数表达式），不能是函数声明。

在function前面加！、+、 -甚至是逗号等，到都可以起到函数定义后立即执行的效果，而（）、！、+、-、=等运算符，都将函数声明转换成函数表达式，消除了 JavaScript 引擎识别函数表达式和函数声明的歧义，告诉 JavaScript 引擎这是一个函数表达式，不是函数声明，可以在后面加括号，并立即执行函数的代码。

加括号是最安全的做法，因为！、+、-等运算符还会和函数的返回值进行运算，有时造成不必要的麻烦。


