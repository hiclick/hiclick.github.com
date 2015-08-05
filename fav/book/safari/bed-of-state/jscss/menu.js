<!--
var refer=true;
function combo() {
if (refer) {
document.all.contents.style.visibility="visible";
refer=false;
}
else {
document.all.contents.style.visibility="hidden";
refer=true;
}
}
document.write("<table frame=hsides rules=none class=tmenu1 border=1 cellspacing=2 cellpadding=1 bordercolorlight=#ffffff bordercolordark=#666666>")
document.write("<tr>")
document.write("<td><img src=image/xing.gif border=0 alt=使用说明☆打开/关闭 onclick='combo()'></td>")
document.write("</tr>")
document.write("</table>")
document.write("<div id='contents' class='menu'>")
document.write("<table class=tmenu2 border=0 cellspacing=0 cellpadding=0 bordercolorlight=#ffffff bordercolordark=#666666>")
document.write("<tr align=center>")
document.write("<td>翻页键：（←）上页，（→）下页，（del）目录<br>资料收集于网上，版权属于原作者，请勿用于商业传播。</td>")
document.write("</tr>")
document.write("</table>")
document.write("</div>")
//-->
