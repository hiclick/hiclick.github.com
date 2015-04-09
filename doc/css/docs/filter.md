# CSS - Filter

This is an experimental technology

Because this technology's specification has not stabilized, check the compatibility table for the proper prefixes to use
in various browsers. Also note that the syntax and behavior of an experimental technology is subject to change in future
versions of browsers as the spec changes.

https://developer.mozilla.org/en-US/docs/Web/CSS/filter


## grayscale

主站色调黑白，用彩色的Logo，甚不协调，于是想到用滤镜将图片转为黑白效果，但过滤之后，图像模糊。

一般资讯类网站，在国难日不妨用CSS处理。

最后我还是用Photoshop的去色效果，实现整站VI统一。


http://demosthenes.info/blog/532/Convert-Images-To-Black-And-White-With-CSS


```css
.docHome img {
    filter: gray; /* IE6-9 */
    filter: grayscale(100%); /* Firefox 35+ */
    -webkit-filter: grayscale(100%); /* Google Chrome, Safari 6+ & Opera 15+ */
}

/* Disable grayscale on hover */
.docHome img:hover {
    filter: none;
    -webkit-filter: grayscale(0%);
}
```

参考：

* [Gray out image with CSS?](http://stackoverflow.com/a/286279/4766670)
* [Convert an image to grayscale in HTML/CSS](http://stackoverflow.com/a/8612047/4766670)

## url

## blur

## brightness

## contrast

## drop-shadow

## hue-rotate

## invert

## opacity

## saturate

## sepia
