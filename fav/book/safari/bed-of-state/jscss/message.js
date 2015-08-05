<!--
var message="《龙床》 2008.6"
var neonbasecolor="#646178"
var neontextcolor="#211e3e"
var flashspeed=123
var time=4500
var n=0
if (document.all){
document.write('<font color="'+neonbasecolor+'">')
for (m=0;m<message.length;m++)
document.write('<span id="neonlight">'+message.charAt(m)+'</span>')
document.write('</font>')
var tempref=document.all.neonlight
}
else
document.write(message)
function neon(){
if (n==0){
for (m=0;m<message.length;m++)
tempref[m].style.color=neonbasecolor
}
tempref[n].style.color=neontextcolor
if (n<tempref.length-1)
n++
else{
n=0
clearInterval(flashing)
setTimeout("beginneon()",time)
return
}
}
function beginneon(){
if (document.all)
flashing=setInterval("neon()",flashspeed)
}
beginneon()
//-->
