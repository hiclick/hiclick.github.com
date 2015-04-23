# Mootools - Overview

<i class="fa fa-home fa-2x"></i>

http://mootools.net/

https://github.com/mootools/mootools-core

https://github.com/mootools/mootools-more

```markup
<script type="text/javascript" src="http://cdn.bootcss.com/mootools/1.5.1/mootools-core-full-compat.min.js"></script>
<script type="text/javascript" src="http://cdn.bootcss.com/mootools-more/1.5.1/mootools-more-full-compat.js"></script>
```


Learn:

http://mrpaolo.github.io/mootools30days/02.html

http://solutoire.com/2007/09/20/understanding-mootools-selectors-e-and-es/

https://www.packtpub.com/books/content/selecting-dom-elements-using-mootools-12-part-1

https://www.packtpub.com/books/content/selecting-dom-elements-using-mootools-12-part-2

MooTools is a collection of JavaScript utilities designed for the intermediate to advanced JavaScript developer. It allows you
to write powerful and flexible code with its elegant, well documented, and coherent APIs.

MooTools code is extensively documented and easy to read, enabling you to extend the functionality to match your requirements.

## Core

### $ Functions

Tested in Mootools v1.11.

*   `$chk`: Returns true if the passed in value/object exists or is 0, otherwise returns false.
*   `$clear`: Clears a timeout or an Interval.
*   `$defined`: Returns true if the passed in value/object is defined, that means is not null or undefined.
*   `$extend`: Copies all the properties from the second passed object to the first passed Object.
*   `$merge`: Merges a number of objects recursively without referencing them or their sub-objects.
*   `$native`: Will add a .extend method to the objects passed as a parameter, but the property passed in will be copied to the object’s prototype only if non previously existent.
*   `$pick`: Returns the first object if defined, otherwise returns the second.
*   `$random`: Returns a random integer number between the two passed in values.
*   `$time`: Returns the current timestamp.
*   `$type`: Returns the type of object that matches the element passed in.
*   `$A`: Returns a copy of the passed Array.
*   `$each`: Use to iterate through iterables that are not regular arrays, such as builtin getElementsByTagName calls, arguments of a function, or an object.
*   `$H`: Shortcut to create a Hash from an Object.
*   `$RGB`: Shortcut to create a new color, based on red, green, blue values.
*   `$HSV`: Shortcut to create a new color, based on hue, saturation, brightness values.



### MooTools Selectors

```javascript
// get elements by class
$$('.foo'); // or even: document.getElements('.foo');

// selector with different elements
$$('div.foo, div.bar, div.bar a');

// get a single element
document.getElement('div.foo');
```

### Ajax

```javascript
// create a new Class instance
var myRequest = new Request({
    url: 'getMyText.php',
    method: 'get',
    onRequest: function(){
        myElement.set('text', 'loading...');
    },
    onSuccess: function(responseText){
        myElement.set('text', responseText);
    },
    onFailure: function(){
        myElement.set('text', 'Sorry, your request failed :(');
    }
});

// and to send it:
myRequest.send(data);
```

Form

```javascript
myForm.send();
// optionally you can add/change the form properties
myForm.set('send', {url: 'contact.php', method: 'get'});
```

### How to create new DOM elements

```javascript
// the short way
new Element('div#bar.foo');

// using the element constructor
new Element('div', {
    'class': 'foo',
    id: 'bar'
});
```

### Event handlers

```javascript
// attach a click event o a element
myElement.addEvent('click', function(){
    alert('clicked!');
});

// attach several events at a time
myElement.addEvents({
    mouseover: function(){
        alert('mouseover');
    },
    click: function(){
        alert('click');
    }
});

// remove a event
myElement.removeEvent(type, fn);
```

### MooTools Class

```javascript
var Animal = new Class({
    initialize: function(age){
        this.age = age;
    }
});

var Cat = new Class({
    Extends: Animal,
    initialize: function(name, age){
        // calls initalize method of Animal class
        this.parent(age);
        this.name = name;
    }
});

var myCat = new Cat('Micia', 20);
alert(myCat.name); // alerts 'Micia'.
alert(myCat.age); // alerts 20.
```

### Implement Array

```javascript
Array.implement('limitTop', function(top){
    for (var i = 0, l = this.length; i < l; i++){
        if (this[i] > top) this[i] = top;
    }
    return this;
});

[1, 2, 3, 4, 5, 6].limitTop(4); // returns [1, 2, 3, 4, 4, 4]
```

## More

### Request.JSONP

```javascript
var myJSONP = new Request.JSONP({
    url: 'http://goo.gl/cCLshl?format=json',
    callbackKey: 'jsoncallback',
    data: {
        viewType: 'json',
    },
    onRequest: function (url) {
        // a script tag is created with a
        // src attribute equal to url
    },
    onComplete: function (data) {
        // the request was completed
        // and data received the server answer.
        console.log(data); // answer object with data
    }
}).send();
```

### HTML table constructor

```javascript
var myTable = new HtmlTable({
    properties: {
        border: 5,
        cellpadding: 5
    },
    headers: ['fruits', 'colors'],
    rows: [
        ['apple', 'red'],
        ['lemon', 'yellow']
    ]
});

myTable.inject($(document.body));

// and to push more data into it:
myTable.push(['lime', 'green']);
```


## CDN

[Public Resources on SAE](http://lib.sinaapp.com/?path=/mootools)


* [[1.1.1]](http://lib.sinaapp.com/?path=mootools/1.1.1)
* [[1.1.2]](http://lib.sinaapp.com/?path=mootools/1.1.2)
* [[1.2.1]](http://lib.sinaapp.com/?path=mootools/1.2.1)
* [[1.2.2]](http://lib.sinaapp.com/?path=mootools/1.2.2)
* [[1.2.3]](http://lib.sinaapp.com/?path=mootools/1.2.3)
* [[1.2.4]](http://lib.sinaapp.com/?path=mootools/1.2.4)
* [[1.2.5]](http://lib.sinaapp.com/?path=mootools/1.2.5)
* [[1.3.0]](http://lib.sinaapp.com/?path=mootools/1.3.0)
* [[1.3.1]](http://lib.sinaapp.com/?path=mootools/1.3.1)
* [[1.4.5]](http://lib.sinaapp.com/?path=mootools/1.4.5)

[360网站卫士](http://libs.useso.com/js.php?path=mootools)

* [[1.3.2]](http://libs.useso.com/js.php?path=mootools%2F1.3.2)
* [[1.4.5]](http://libs.useso.com/js.php?path=mootools%2F1.4.5)
* [[1.5.0]](http://libs.useso.com/js.php?path=mootools%2F1.5.0)

## Documentation

### Offline

* http://chenzixin.com/static/docs/mootools/v1.2/
* http://chenzixin.com/static/docs/mootools/v1.2.4/


Thanks to:
http://msyk.es/blog/mootools-offline-documentation/

### Online

http://mootools.net/core/docs/1.5.1

http://mootools.net/more/docs/1.5.1

