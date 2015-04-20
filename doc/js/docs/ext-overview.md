# ExtJS - Overview

## 概述

ExtJs最开始基于YUI技术，由开发人员 JackSlocum开发，通过参考JavaSwing等机制来组织可视化组件，无论从UI界面上CSS样式的应用，到数据解析上的
异常处理， 都可算是一款不可多得的JavaScript客户端技术的精品。

* 2007: ExtJS 2.0
* 2009: ExtJS 3.0
* 2011: ExtJS 4.0
* 2014: ExtJS 5.0

## 下载

注：不一定长期有效

* http://dev.sencha.com/deploy/ext-2.3.0.zip
* http://cdn.sencha.com/ext/gpl/ext-3.4.1.1-gpl.zip
* http://cdn.sencha.com/ext/gpl/ext-4.2.1-gpl.zip
* http://cdn.sencha.com/ext/gpl/ext-5.1.0-gpl.zip

其它的经典版本，可从[上海交通大学](http://www.sjtu.edu.cn)[FTP镜像](ftp://ftp.sjtu.edu.cn/pub/.mirror6/ftp.freebsd.org/ports/distfiles/)中下载：

Thanks to The File Search Engine: [http://www.filewatcher.com/](http://www.filewatcher.com/_/?q=ext-3.1.0.zip).

<table class="dataintable"><tbody>
<tr>
<td>ext-3.1.0.zip</td>
<td>Dec 17  2009</td>
<td>   9345k</td>
</tr>
<tr>
<td>ext-3.1.1.zip</td>
<td>Feb 08  2010</td>
<td>  10691k</td>
</tr>
<tr>
<td>ext-3.2.1.zip</td>
<td>Apr 27  2010</td>
<td>  11369k</td>
</tr>
<tr>
<td>ext-3.3.0.zip</td>
<td>Oct 12  2010</td>
<td>  14141k</td>
</tr>
<tr>
<td>ext-3.3.1.zip</td>
<td>Dec 01  2010</td>
<td>  14158k</td>
</tr>
<tr>
<td>ext-4.0.0-gpl.zip</td>
<td>May 16  2011</td>
<td> 22495k</td>
</tr>
<tr>
<td>ext-4.0.1-gpl.zip</td>
<td>May 29  2011</td>
<td> 30224k</td>
</tr>
<tr>
<td>ext-4.0.2a-gpl.zip </td>
<td> Jun 29  2011 </td>
<td> 33843k</td>
</tr>
<tr>
<td>ext-4.0.7-gpl.zip</td>
<td> Nov 10  2011 </td>
<td> 40689k</td>
</tr>
<tr>
<td>ext-4.1.0-gpl.zip</td>
<td> Jun 27  2012 </td>
<td> 46912k</td>
</tr>
<tr>
<td>ext-4.1.1-gpl.zip</td>
<td> Jul 31  2012 </td>
<td> 47011k</td>
</tr>
<tr>
<td>ext-4.2.1-gpl.zip</td>
<td> May 22  2013 </td>
<td> 69299k</td>
</tr>
<tr>
<td>ext-4.2.2-gpl.zip</td>
<td> Oct 01  2013 </td>
<td> 70579k</td>
</tr>
</tbody></table>

## Ext JS 5.0

Sencha Ext JS is the leading standard for business-grade web application development. With over 100 examples, 1000 APIs,
hundreds of components, a full documentation suite and built in themes, Ext JS provides the tools necessary to build
robust desktop applications.

Ext JS 5.1 is a pure JavaScript application framework that works everywhere from IE8 to the latest Chrome. It enables you
to create the best cross-platform applications using nothing but a browser, and has a phenomenal API.

[Licensing, Maintenance, and Support FAQs](http://www.sencha.com/support/faqs/)

官方推荐使用 Sencha Cmd，但并不适合我们的开发模式。

* [Sencha Cmd Documentation for Sencha Ext JS](http://docs.sencha.com/cmd/5.x/intro_to_cmd.html)
* [Sencha Cmd Documentation for Sencha Touch](http://docs.sencha.com/touch/#!/guide/command)
* [Getting started with Ext JS 5](http://docs.sencha.com/extjs/5.1/getting_started/getting_started.html)

不过官方也提供了传统应用的教程：

It’s very easy to get started with Ext JS 5!Once downloaded, unzip the file and move the resulting folder somewhere you can reference from localhost.

Now we’ll need to create an index.html file that references the JavaScript and CSS files from our SDK as shown below:

```markup
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Ext JS!</title>
        <link rel="stylesheet" type="text/css" href="/{SDKLocation}/build/packages/ext-theme-neptune/build/resources/ext-theme-neptune-all.css">
        <script type="text/javascript" src="/{SDKLocation}/build/ext-all.js"></script>
        <script type="text/javascript" src="/{SDKLocation}/build/packages/ext-theme-neptune/build/ext-theme-neptune.js"></script>

        <script type ="text/javascript" src="app.js"></script>
    </head>
    <body></body>
</html>
```



<i class="fa fa-stack-overflow"></i> [Include EXTJS 5 library in web application](http://stackoverflow.com/a/28051326/4766670)



