# Soft - System

## Utility

* NirCmd
* Total Commander
* BeyondCompare

## Compress

* 7Zip
* BetterZip
* WinAce
* WinRAR
* WinZip

<table class="dataintable"><tbody>
<tr>
<th> MethodID </th>
<th> 说明 </th>
</tr>
<tr>
<td> LZMA</td>
<td> 基于 LZ 之上的压缩算法。 </td>
</tr>
<tr>
<td> PPMd</td>
<td> 基于 Dmitry Shkarin 之上的算法 PPMdH 并加以优化。通常能对纯文本提供高压缩比及较快的解压缩速度。 </td>
</tr>
<tr>
<td> BZip2 </td>
<td> 基于 BWT 的标准压缩算法。通常能对纯文本提供较高压缩比及相当不错的解压缩速度。 </td>
</tr>
<tr>
<td> Deflate </td>
<td> ZIP 及 GZip 格式的标准压缩算法。没有很高的压缩比。但是它拥有十分快的压缩及解压缩速度。Deflate 压缩算法只支持 32 KB 字典大小。 </td>
</tr>
<tr>
<td> BCJ </td>
<td> (CALL、JUMP)32 位 x86 可执行文件转换器。 </td>
</tr>
<tr>
<td> BCJ2</td>
<td> (CALL、JUMP、JCC)32 位 x86 可执行文件转换器(第二版)。 </td>
</tr>
<tr>
<td> Copy </td>
<td> 不压缩。 </td>
</tr>
</tbody></table>

## Font

### Typekit

Adobe Typekit is a subscription font service that brings thousands of fonts from foundry partners into one library for quick
browsing, easy use on the web or in applications, and endless typographic inspiration.

[Adobe收购网络字体服务提供商Typekit](http://tech.sina.com.cn/it/2011-10-04/12416140852.shtml)

可惜在国内被墙，打开极慢：

```markup
<script src="http://use.typekit.com/uxj6dew.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
```
Ext JS 的文档中，有引用这个字体库，不得已删除之。

### Google Fonts

https://www.google.com/fonts

```markup
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
```
```css
body {
    font-family: 'Tangerine', serif;
    font-size: 48px;
}
```


## Reader

### Adobe Digital Editions

Official Site: http://www.adobe.com/solutions/ebook/digital-editions.html

* A richer reading experience with EPUB 3 support
* Searching eBooks
* Accessibility
* Better visibility with Full Screen
* Go Multi-lingual
* Bookmarking, Highlights & Notes
* Transfer of eBooks between Devices
* Borrowing eBooks
* File Organization of All eBooks
* Printing
* Multiple File formats

<i class="fa fa-download"></i> Download Digital Edition 4.0.3 [_Macintosh (19.2MB)_](http://download.adobe.com/pub/adobe/digitaleditions/ADE_4.0_Installer.dmg)

<i class="fa fa-download"></i> Download Digital Edition 4.0.3 [_Windows (7.7MB)_](http://download.adobe.com/pub/adobe/digitaleditions/ADE_4.0_Installer.exe)


* Adobe Reader
* Advanced PDF Password Recovery
* Foxit Reader
* ~~Google Reader~~
* Liferea
* PDF-XChange Viewer
* Sumatra PDF

### A-PDF Image to PDF

成功将**2015年-16年2月时代物业合同**八张扫描图片，合并为一份PDF文档。

Output：

* High Quality Output：35.4M
* Small Size (Color)：2.1M

原图：33.7M

合并之前，建议先将图片文件重命名排列好。个别错位的，也可以在软件中调整。

工具：APDFImage2PDF.5.1.6，Windows，收藏于 docs。
