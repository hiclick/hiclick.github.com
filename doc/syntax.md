---
layout: page
title: Test Pygments
tagline: 博学而日参省乎己，则知明而行无过矣
---
{% include JB/setup %}

[Pygments](http://pygments.org/languages/)<sup><span class="fa fa-external-link fa-fw"></span></sup> is a generic syntax highlighter suitable for use in code hosting, forums, wikis or other applications that need to prettify source code. 


----

Test HTML:

{% highlight html %}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    Sorry this page does not exist =(
</body>
</html>
{% endhighlight %}


Test JavaScript: 

{% highlight javascript %}
/**
* SyntaxHighlighter
*/
function foo()
{
if (counter <= 100)
    return;
// it works!
}
{% endhighlight %}

Test Java:

{% highlight java %}
public class HelloWorld {
    public static void main(String args[]) {
      System.out.println("Hello World!");
    }
}
{% endhighlight %}
