<!--
function Time(){
if (!document.layers&&!document.all)
return
var todayDate = new Date();
var date = todayDate.getDate();
var month = todayDate.getMonth() +1;
var year = todayDate.getYear();
var day;
var myclock;
var Timer=new Date()
var hours=Timer.getHours()
var minutes=Timer.getMinutes()
var seconds=Timer.getSeconds()
var noon="AM" 
if (todayDate.getDay() == 0) day = "星期日"
if (todayDate.getDay() == 1) day = "星期一"
if (todayDate.getDay() == 2) day = "星期二"
if (todayDate.getDay() == 3) day = "星期三"
if (todayDate.getDay() == 4) day = "星期四"
if (todayDate.getDay() == 5) day = "星期五"
if (todayDate.getDay() == 6) day = "星期六"
if (hours>12){
noon="PM"
hours=hours-12
}
if (hours==0)
hours=12
if (minutes<=9)
minutes="0"+minutes
if (seconds<=9)
seconds="0"+seconds
myclock=year+"年"+month+"月"+date+"日"+" "+day+" "+hours+":"+minutes+":"+seconds+" "+noon
if (document.layers){
document.layers.position.document.write(myclock)
document.layers.position.document.close()
}
else if (document.all)
position.innerHTML=myclock
setTimeout("Time()",1000)
}
document.write("<div id='position' class='time'>")
document.write("</div>")
//-->
