# JavaScript - STDLib

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## Object 对象

## Array 对象

整理豆瓣记录的我读过的书：

```javascript
//    增强 String 原生方法： trim, trimLeft, trimRight
function Trim(str, is_global) {
    var result;
    result = str.replace(/(^\s+)|(\s+$)/g, "");
    if (is_global.toLowerCase() == "g")
        result = result.replace(/\s/g, "");
    return result;
}

titles = [];
jQuery("h2").find("a").each(function () {
    titles.push(Trim($(this).text(), "g"));
});
console.log(titles);
```

输出：

```javascript
page01 = ["鸳鸯刀", "越女剑:BeautifulRooms,InspiringStories", "雪山飞狐", "碧血剑", "血海飘香:楚留香传奇", "袁腾飞讲汉末三国（上下）", "蛙", "书剑恩仇录（全二册）", "一口气读完大清史", "白鹿原:20周年精装典藏版", "1911", "武则天", "1901", "李鸿章时代", "左宗棠发迹史(下)"];
page02 = ["左宗棠发迹史（上）", "李鸿章发迹史.下", "李鸿章发迹史（上）", "左手曾国藩右手胡雪岩", "在细雨中呼喊", "曾国藩发迹史（下）", "曾国藩发迹史（上）", "袁腾飞讲成吉思汗:腾飞五千年", "穆斯林的葬礼", "開往中國的慢船", "品三国（下）", "品三国（上）", "1973年的弹子球", "塞北三朝·金", "塞北三朝·西夏"];
page03 = ["塞北三朝·辽", "且听风吟", "西游记", "三国演义", "挪威的森林", "小李飞刀1：多情剑客无情剑（上中下）", "许三观卖血记", "悟空传:修订版", "乡关何处:故乡·故人·故事", "看见", "活着", "麦田里的守望者:纪念版", "两宋风云:袁腾飞讲中国历史", "荆棘鸟", "安娜·卡列尼娜"];
page04 = ["不能承受的生命之轻", "拿破仑传", "行者无疆", "文化苦旅", "千年一叹", "清明上河读宋朝:清明上河读宋朝", "贞观之治", "苏菲的世界", "我是人间惆怅客:听杨雨讲纳兰", "蒙曼说隋（下）:隋炀帝杨广", "蒙曼说隋（上）:隋炀帝杨广", "慢慢来.一切都来得及:心慢下来，行动才能快起来", "梦里花落知多少", "蒙曼说唐:长恨歌", "媾疫"];
page05 = ["ActionScript3设计模式", "jQuery基础教程", "精通CSS:高级Web标准解决方案", "精通JavaScript", "JavaScript高级程序设计", "JavaScriptDOM编程艺术", "JavaScript语言精粹", "jQueryinAction", "蒙曼说唐：武则天", "蒙曼说唐：乱世红颜:太平公主", "茶花女", "时间简史:插图本", "老人与海", "简·爱", "薛家将"];
page06 = ["中国史学入门", "沧浪诗话", "如何自在", "人类群星闪耀的时刻:最具宿命色彩的历史细节", "隶书入门字谱", "沸腾十五年:中国互联网1995-2009", "新浪之道:门户网站新闻频道的运营", "我兔斯基你:兔斯基：眯眼观人生情绪显哲学", "FlashActionScript3.0动画高级教程", "FlashActionScript3.0动画教程", "点石成金:访客至上的网页设计秘笈", "SpringinAction", "Java2核心技术（卷Ⅱ）:高级特性", "JAVA2核心技术卷Ⅰ:基础知识", "Spring2.0技术手册"];
page07 = ["PHP和MySQLWeb开发", "Tomcat与JavaWeb开发技术详解", "西游记（全三册）", "倚天屠龙记(共四册)", "连城诀", "小王子", "jQuery实战", "jQuery基础教程", "张飞流水帐:幽默、爆笑、发人深思的三国故事", "精通Hibernate:Java对象持久化技术详解.", "精通Struts:基于MVC的JavaWeb设计与开发", "Java语言入门", "JDO开发", "FlashActionScript3殿堂之路", "JavaScriptDOM编程艺术（第2版）"];
page08 = ["JSP2.0技术手册", "国史十六讲:修订版", "一分钟经理人", "射雕英雄传:全四册", "绝代双骄（全三册）", "拿破仑传", "中国历史研究法", "写在人生边上", "秦汉魏晋史探微", "东晋门阀政治", "悲惨世界（上中下）", "查泰莱夫人的情人", "儿子与情人", "中国历代政治得失", "人类群星闪耀时"];
page09 = ["我们仨", "唐浩明评点曾国藩家书（上下）", "镜花缘(上下)", "LearningActionScript3.0:ABeginner'sGuide", "ActionScript3.0GameProgrammingUniversity", "GroovyinAction", "ProgrammingGroovy:DynamicProductivityfortheJavaDeveloper", "Groovy入门经典", "傲慢与偏见", "春风沉醉的晚上", "我与地坛", "兄弟（下）", "兄弟（上）", "江山岂是哭来的", "一个陌生女人的来信"];
page10 = ["三国史话", "李鸿章传", "朱元璋传", "红楼梦", "明朝那些事儿（陆）:日暮西山", "明朝那些事儿（肆）:粉饰太平", "明朝那些事儿（叁）:妖孽宫廷", "明朝那些事儿（贰）:万国来朝", "明朝那些事儿（柒）：大结局", "明朝那些事儿（伍）:帝国飘摇", "三国演义（全二册）", "明朝那些事儿（壹）:洪武大帝", "围城", "无奈的追寻:清代文人心理透视", "史记"];
page11 = ["约翰·克利斯朵夫", "百年孤独", "流血的仕途:李斯与秦帝国", "哈姆莱特", "我叫金三顺", "明朝那些事儿", "基督山伯爵（上下册）", "万历十五年", "项羽与刘邦"];

allbooks = [].concat.apply([], [page01, page02, page03, page04, page05, page06, page07, page08, page09, page10, page11]);

```

Google: javascript combine multiple arrays

```javascript
// Javascript test
var a = [1, 2], b = ["x", "y"], c = [true, false];
var d = a.concat(b, c);
```

参考：

* [JavaScript: from the Ground to Closures » Mastering Array](http://javascript.info/tutorial/array)
* [Combining JavaScript Arrays](http://davidwalsh.name/combining-js-arrays)
* [What is the most efficient way to concatenate N arrays in JavaScript?](http://stackoverflow.com/a/5080057)

## 包装对象 和 Boolean对象

## Number 对象

## String 对象

## Math 对象

## Date 对象

## RegExp 对象

## JSON 对象

## ArrayBuffer：类型化数组
