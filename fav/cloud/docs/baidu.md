# Cloud - 百度

## 百度云盘

### 技巧

列目录：

```javascript
jQuery("span .name-text").each(function(){
    console.log(jQuery(this).text().trim());
});
```
 
效果：

```java
野哭·弘光列传 李洁非明史书系 - 李洁非著.epub
龙床·明六帝纪 李洁非明史书系 - 李洁非著.epub
龙床·明六帝纪 李洁非明史书系 - 李洁非著.azw3
黑洞·弘光纪事 李洁非明史书系 - 李洁非著.mobi
黑洞·弘光纪事 李洁非明史书系 - 李洁非著.epub
新建文件夹(2)
```

暂不明为何有**新建文件夹(2)**。

更新：

2015年12月10日前后，百度云改版，根据屏幕的可视范围，自动增删Grid元素，没那到容易一次性取到全部文件了，69个英文读物，全部列出，大概需要10次滚屏。

```javascript
jQuery("a.filename").each(function(){console.log(jQuery(this).text())});
```


