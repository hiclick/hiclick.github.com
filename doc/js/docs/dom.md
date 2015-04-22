# JavaScript - DOM

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。


## click

### Toggle an Element

```markup
<Button id="IDButton" type="button" onclick="myFunction()">
    <img id="thisIMG" src="thisIMG.png">
</Button>

<script>
    function myFunction() {
        var a;
    if (a < 1) {
        document.getElementById("hiddenMenuDiv").style.display = "block";
        a=1;
    }
    else (a >= 1) {
        document.getElementById("hiddenMenuDiv").style.display = "none";
        a=0;
    }
</script>
```

问题代码，可做为面试题目。

Works Well:

```javascript
function myFunction() {
    var element = document.getElementById("hiddenMenuDiv");
    if (element.style.display === "block") {
        element.style.display = "none";
    } else {
        element.style.display = "block";
    }
}
```

A Better One:

```javascript
function myFunction() {
  var hiddenDiv = document.getElementById("hiddenMenuDiv")
  if (hiddenDiv.style.display != "none") {
    hiddenDiv.style.display = "none";
  }
  else {
    hiddenDiv.style.display = "block";
  }
}
```

Maybe Best: <i class="fa fa-jsfiddle"></i> [JSFiddle](https://jsfiddle.net/rpbpkgu5/4/)

```javascript
var myFunction = (function(){
    var isVisible = false; // Change to true if div is visible to start
    return function(){
        var el = document.getElementById("hiddenMenuDiv");
        el.style.display = (isVisible) ? "none" : "block";
        isVisible = !isVisible;
    };
})();
```

<i class="fa fa-stack-overflow"></i> [onclick javascript function needs to “turn on and off” div](http://stackoverflow.com/a/29735551/4766670)





