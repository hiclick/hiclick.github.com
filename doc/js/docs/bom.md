# JavaScript - BOM

* 浏览器的JavaScript引擎
* 定时器
* window对象
* History对象
* Ajax
* window.postMessage方法
* Web Storage：浏览器端数据储存机制
* IndexedDB：浏览器端数据库
* Web Notification API
* Performance API
* 移动设备API

## 定时器

**setTimeout**

Syntax:

```javascript
var timerId = setTimeout(func|code, delay)
```

Sample:

```javascript
function f(){
  console.log(2);
}

setTimeout(f,1000);
```

```javascript
setTimeout(function() {
  myFunc("one", "two", "three");
}, 1000);
```

**setInterval**

Sample:

```javascript
<input type="button" onclick="clearInterval(timer)" value="stop">

<script>
  var i = 1;
  var timer = setInterval(function() {
    console.log(2);
  }, 1000);
</script>
```

```javascript
function f(){
    for (var i=0;i<arguments.length;i++){
        console.log(arguments[i]);
    }
}

setInterval(f, 1000, "Hello World");
```

