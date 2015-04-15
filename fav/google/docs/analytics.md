# Google - Analytics

Google is an American multinational corporation specializing in Internet-related services and products. These include
online advertising technologies, search, cloud computing, and software. Most of its profits are derived from AdWords,
 an online advertising service that places advertising near the list of search results.

Google was founded by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University.

## Event Tracking

```javascript
on_sent_ok: "ga('send', 'event', 'Form', 'sent', 'Service Request', 100);"
```

The parameters in brackets can be customised:

* 'send' and 'event' have to stay as is, don't change them;
* Form is Category name
* Sent is Action
* Service Request is Label
* 100 is value (should be number)

[The Complete Google Analytics Event Tracking Guide Plus 10 Amazing Examples](http://www.koozai.com/blog/analytics/the-complete-google-analytics-event-tracking-guide-plus-10-amazing-examples/)

Kiehl's Hack

```markup
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-56708056-14', 'auto');
    ga('send', 'pageview');
</script>

<script>
    var random = Math.floor(Math.random() * 100);
    if (random < 45) {
        ga('send', 'event', 'landing', 'landing', 'homepage');
    }
</script>
```

Q：为何是 ```//www.google-analytics.com/analytics.js```，没有 ```http:```？

A：如果指定 ```http```，在 ```https``` 应用中，无法加载 GA。Google speed libraries 中的大部分框架，都有 ```https``` 版本。

