# CSS - List

The CSS list properties allow you to:

* Set different list item markers for ordered lists
* Set different list item markers for unordered lists
* Set an image as the list item marker

[W3schools](http://www.w3schools.com/css/css_list.asp)<sup><i class="fa fa-external-link fa-fw"></i></sup>

[Maxdesign Listutorial](http://css.maxdesign.com.au/listutorial/)<sup><i class="fa fa-external-link fa-fw"></i></sup>


## list-style

[Mozilla Developer Network list-style](https://developer.mozilla.org/en-US/docs/Web/CSS/list-style)<sup><i class="fa fa-external-link fa-fw"></i></sup>


## list-style-image

## list-style-position


## list-style-type

[W3school](http://www.w3school.com.cn/cssref/pr_list-style-type.asp)<sup><i class="fa fa-external-link fa-fw"></i></sup>

```css
ul.circle {list-style-type:circle}
ul.square {list-style-type:square}
ol.upper-roman {list-style-type:upper-roman}
ol.lower-alpha {list-style-type:upper-alpha}
```

### CSS 2.0

<table class="dataintable">
<tbody><tr>
<th>值</th>
<th>描述</th>
</tr>

<tr>
<td>none</td>
<td>无标记。</td>
</tr>

<tr>
<td>disc</td>
<td>默认。标记是实心圆。</td>

</tr><tr>
<td>circle</td>
<td>标记是空心圆。</td>
</tr>

<tr>
<td>square</td>
<td>标记是实心方块。</td>

</tr><tr>
<td>decimal</td>
<td>标记是数字。</td>
</tr>

<tr>
<td>decimal-leading-zero</td>
<td>0开头的数字标记。(01, 02, 03, 等。)</td>

</tr><tr>
<td>lower-roman</td>
<td>小写罗马数字(i, ii, iii, iv, v, 等。)</td>
</tr>

<tr>
<td>upper-roman</td>
<td>大写罗马数字(I, II, III, IV, V, 等。)</td>

</tr><tr>
<td>lower-alpha</td>
<td>小写英文字母The marker is lower-alpha (a, b, c, d, e, 等。)</td>
</tr>

<tr>
<td>upper-alpha</td>
<td>大写英文字母The marker is upper-alpha (A, B, C, D, E, 等。)</td>

</tr><tr>
<td>lower-greek</td>
<td>小写希腊字母(alpha, beta, gamma, 等。)</td>
</tr>

<tr>
<td>lower-latin</td>
<td>小写拉丁字母(a, b, c, d, e, 等。)</td>

</tr><tr>
<td>upper-latin</td>
<td>大写拉丁字母(A, B, C, D, E, 等。)</td>
</tr>

<tr>
<td>hebrew</td>
<td>传统的希伯来编号方式</td>
</tr>

<tr>
<td>armenian</td>
<td>传统的亚美尼亚编号方式</td>
</tr>

<tr>
<td>georgian</td>
<td>传统的乔治亚编号方式(an, ban, gan, 等。)</td>
</tr>

<tr>
<td>cjk-ideographic</td>
<td>简单的表意数字</td>
</tr>

<tr>
<td>hiragana</td>
<td>标记是：a, i, u, e, o, ka, ki, 等。（日文片假名）</td>
</tr>

<tr>
<td>katakana</td>
<td>标记是：A, I, U, E, O, KA, KI, 等。（日文片假名）</td>
</tr>

<tr>
<td>hiragana-iroha</td>
<td>标记是：i, ro, ha, ni, ho, he, to, 等。（日文片假名）</td>
</tr>

<tr>
<td>katakana-iroha</td>
<td>标记是：I, RO, HA, NI, HO, HE, TO, 等。（日文片假名）</td>
</tr>
</tbody></table>

### CSS2.1

值：

* disc
* circle
* square
* decimal
* decimal-leading-zero
* lower-roman
* upper-roman
* lower-greek
* lower-latin
* upper-latin
* armenian
* georgian
* none
* inherit

注：Internet Explorer 8 以下不支持以下属性值：

* decimal-leading-zero
* lower-greek
* lower-latin
* upper-latin
* armenian
* georgian
* inherit

