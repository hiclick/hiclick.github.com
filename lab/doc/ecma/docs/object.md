# 对象的扩展

## Object.is()

Object.is()用来比较两个值是否严格相等。它与严格比较运算符（===）的行为基本一致，不同之处只有两个：一是+0不等于-0，二是NaN等于自身。

```javascript

+0 === -0 //true
NaN === NaN // false

Object.is(+0, -0) // false
Object.is(NaN, NaN) // true

```

## Object.assign()

Object.assign()用来将源对象（source）的所有可枚举属性，复制到目标对象（target）。它至少需要两个对象作为参数，第一个参数是目标对象，后面的参数都是源对象。只要有一个参数不是对象，就会抛出TypeError错误。

```javascript

var target = { a: 1 };

var source1 = { b: 2 };
var source2 = { c: 3 };

Object.assign(target, source1, source2);
target // {a:1, b:2, c:3}

```

注意，如果源对象与目标对象有同名属性，则前者会覆盖后者。

```javascript

var target = { a: 1, b: 1 };

var source1 = { b: 2 };
var source2 = { c: 3 };

Object.assign(target, source1, source2);
target // {a:1, b:2, c:3}

```

## __proto__属性，Object.setPrototypeOf()，Object.getPrototypeOf()

**（1）__proto__属性**

__proto__属性，用来读取或设置当前对象的prototype对象。该属性一度被正式写入ES6草案，但后来又被移除。目前，所有浏览器（包括IE11）都部署了这个属性。

```javascript

var obj = {
  __proto__: someOtherObj,
  method: function() { ... }
}

```

有了这个属性，实际上已经不需要通过Object.create()来生成新对象了。

**（2）Object.setPrototypeOf()**

Object.setPrototypeOf方法的作用与__proto__相同，用来设置一个对象的prototype对象。

```javascript

// 格式
Object.setPrototypeOf(object, prototype)

// 用法
var o = Object.setPrototypeOf({}, null);

```

该方法等同于下面的函数。

```javascript

function (obj, proto) {
  obj.__proto__ = proto;
  return obj; 
}

```

**（3）Object.getPrototypeOf()**

与setPrototypeOf()配套的，还有getPrototypeOf()，用于读取一个对象的prototype对象。

```javascript

Object.getPrototypeOf(obj)

```

## 增强的对象写法

ES6允许直接写入变量和函数，作为对象的属性和方法。这样的书写更加简洁。

```javascript

var Person = {

  name: '张三',

  //等同于birth: birth
  birth,

  // 等同于hello: function ()...
  hello() { console.log('我的名字是', this.name); }

};

```

这种写法用于函数的返回值，将会非常方便。

```javascript

function getPoint() {
  var x = 1;
  var y = 10;

  return {x, y};
}

getPoint()
// {x:1, y:10}

```

## 属性名表达式

ES6允许定义对象时，用表达式作为对象的属性名。在写法上，要把表达式放在方括号内。

```javascript

var lastWord = "last word";

var a = {
    "first word": "hello",
    [lastWord]: "world"
};

a["first word"] // "hello"
a[lastWord] // "world"
a["last word"] // "world"

```

上面代码中，对象a的属性名lastWord是一个变量。

下面是一个将字符串的加法表达式作为属性名的例子。

```javascript

var suffix = " word";

var a = {
    ["first" + suffix]: "hello",
    ["last" + suffix]: "world"
};

a["first word"] // "hello"
a["last word"] // "world"

```

## symbols

ES6引入了一种新的原始数据类型symbol。它通过Symbol函数生成。

```javascript

var mySymbol = Symbol('Test');

mySymbol.name 
// Test

typeof mySymbol
// "symbol"

```

上面代码表示，Symbol函数接受一个字符串作为参数，用来指定生成的symbol的名称，可以通过name属性读取。typeof运算符的结果，表明Symbol是一种单独的数据类型。

注意，Symbol函数前不能使用new命令，否则会报错。这是因为生成的symbol是一个原始类型的值，不是对象。

symbol的最大特点，就是每一个symbol都是不相等的，保证产生一个独一无二的值。

```javascript

let red = Symbol();
let green = Symbol();
let blue = Symbol();

function handleColor(color) {
  switch (color) {
    case red:
      ...
    case green:
      ...
    case blue:
      ...
  }
} 

```

上面代码中，red、green、blue三个变量都是Symbol类型，它们的值是不相等的。

由于这种特点，Symbol类型适合作为标识符，用于对象的属性名，保证了属性名之间不会发生冲突。如果一个对象由多个模块构成，不会出现同名的属性。

```javascript

var a = {};
var mySymbol = Symbol();

a[mySymbol] = 'Hello!';

//另一种写法
Object.defineProperty(a, mySymbol, { value: 'Hello!' });

```

上面代码通过点结构和Object.defineProperty两种方法，为对象增加一个属性。

下面的写法为Map结构添加了一个成员，但是该成员永远无法被引用。

```javascript

let a = Map();
a.set(Symbol(), 'Noise');
a.size // 1

```

如果要在对象内部使用symbol属性名，必须采用属性名表达式。

```javascript

let specialMethod = Symbol();

let obj = {
  [specialMethod]: function (arg) {
    ...
  }
};

obj[specialMethod](123);

```

## Proxy

所谓Proxy，可以理解成在目标对象之前，架设一层“拦截”，外界对该对象的访问，都必须先通过这层拦截，可以被过滤和改写。

ES6原生提供Proxy构造函数，用来生成proxy实例对象。

```javascript

var proxy = new Proxy({}, {
    get: function(target, property) {
        return 35;
    }
});

proxy.time // 35
proxy.name // 35
proxy.title // 35

```

上面代码就是Proxy构造函数使用实例，它接受两个参数，第一个所要代理的目标对象（上例是一个空对象），第二个是拦截函数，它有一个get方法，用来拦截对目标对象的访问请求。get方法的两个参数分别是目标对象和所要访问的属性。可以看到，由于拦截函数总是返回35，所以访问任何属性都得到35。

下面是另一个拦截函数的例子。

```javascript

var person = {
    name: "张三"
};

var proxy = new Proxy(person, {
        get: function(target, property) {
            if (property in target) {
                return target[property];
            } else {
                throw new ReferenceError("Property \"" + property + "\" does not exist.");
            }
        }
});

proxy.name // "张三"
proxy.age // 抛出一个错误

```

上面代码表示，如果访问目标对象不存在的属性，会抛出一个错误。如果没有这个拦截函数，访问不存在的属性，只会返回undefined。
