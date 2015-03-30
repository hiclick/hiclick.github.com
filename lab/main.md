---
layout: page
title: Test Pygments
tagline: 博学而日参省乎己，则知明而行无过矣
---
{% include JB/setup %}


[Pygments](http://pygments.org/languages/)<sup><i class="fa fa-external-link fa-fw"></i></sup> is a generic syntax highlighter suitable for use in code hosting, forums, wikis or other applications that need to prettify source code. 

- a wide range of over 300 languages and other text formats is supported
- special attention is paid to details that increase highlighting quality
- support for new languages and formats are added easily; most languages use a simple regex-based lexing mechanism
- a number of output formats is available, among them HTML, RTF, LaTeX and ANSI sequences
- it is usable as a command-line tool and as a library


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
