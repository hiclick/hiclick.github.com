# CSS - Font

## 编程字体

编程字体选择标准：

1. Crisp clear characters. 
2. Extended characterset. 
3. Good use of whitespace. 
4. 'l', '1' and 'i' are easily distinguished 
5. '0', 'o' and 'O' are easily distinguished 
6. forward quotes from back quotes are easily distinguished -prefer mirrored appearance 
7. Clear punctuation characters, especially braces, parenthesis and brackets

等宽字体（Monospaced Font）是指字符宽度相同的电脑字体。与此相对，字符宽度不尽相同的电脑字体称为比例字体。

等宽字体适合编程，比例字体可以提高单词的可读性。

```css
.mono {
	font-family: Monaco, Courier, Monospace;
}
```

Windows 下推荐使用：

* Yahei Consolas Hybrid
* Monaco

OSC 推荐的10个优秀的编程用等宽字体：

1. Source Code Pro
2. Anonymous Pro
3. DejaVu Sans Mono
4. Envy Code R
5. Droid Sans Mono
6. Pragmata Pro
7. Terminus
8. Proggy Small
9. Liberation Mono
10. Ubuntu Mono

### Linux英文字体

* DejaVu Sans Mono
* Monospace
* Nimbus Mono L
* Luxi Mono

### Macintosh英文字体

* Courier
* Monaco

### Windows英文字体

* Fixedsys
* Consolas
* Courier
* Courier New
* Terminal

## 微软雅黑

自从Windows Vista发布起，一款全新的中英文字体：微软雅黑体，就已经很引人注目了！据说，微软为了打造微软雅黑字体，做每个字的成本几乎达到100美元，这似乎已经是有史以来最昂贵的一套中文字体了。

微软这样描述雅黑：“启用微软雅黑 ，将令中文显示得更加清晰、明亮。”

雅黑带来了什么？

1. 单独设计的粗体。以往宋体的粗体都是通过内嵌点阵或者字体引擎渲染的，效果不是很好。粗体的单独设计意味着另外设计一套字体，所有的时间成本和人力成本翻倍，造价也会翻倍，但是显示效果也会非常好。再考虑到繁体中文和日文韩文都如此处理，微软这次真的下了血本了。

2. 品质优异的斜体。在Windows 上第一次看到如此清晰的中文斜体，真的有点令人感动。虽然是 14px ，但宋体的斜体已经显得支离破碎了。

3. 更清晰的小号字显示。在以往， 12px 是宋体能显示的极限。比这小的字号会因为没有内嵌点阵而变得模糊。而从微软雅黑的字范来看， 11px 的显示非常优秀，10px 的字基本可以辨认，9px 以下，对于汉字的正常显示，已经是不可能的任务了，平常也不会作为正常的屏幕使用字号，但这个极限字号的测试是一个有参考价值的项目。我们可以看到，雅黑在这种情况下仍然还有大约一半左右的字符可以识别出来。

4. 对于最常用的字号， 如12px和14px ，雅黑的显示非常清晰优美，中英文搭配和谐。同时，和宋体相比，雅黑的字形不是正方形的，而是稍显扁宽，字间距小，使默认的行间距更为明晰，同时使雅黑的字心更为饱满，在同样的字号下，单字面积就显得更大，更容易识别，阅读起来也更舒服。

Consolas雅黑混合字体是什么？

Consolas是一种专门为编程人员设计的字体,这一字体的特性是所有字母、数字与符号均能非常容易辨认！而且所有字符都具有相同的宽度，让编程人员看着更舒服，当然在打个人和商业信函的时候，用这个字体也是不错的选择，这一字体还专门为ClearType做了优化，可以让它更舒适地展示在屏幕上。

Consolas字体原本是微软为 Visual Studio 2005和2008用户提供的，原版只是单独的英文字体，不含中文。因此在中文环境下显示会是“宋体”+Consolas 的组合。

RobertLee制作的 Consolas+雅黑混合版，解决了这个问题，强烈推荐所有与代码有沟通的朋友使用此字体！

另有中国科技大学infinte制作的：MSYHMONO，微软雅黑等宽，英文不是Consolas，也很不错：

http://home.ustc.edu.cn/~infinte/MSYHMONO.7z 
