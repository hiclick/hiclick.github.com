# Flash - Libs

## TweenMax

<i class="fa fa-home fa-2x"></i> http://greensock.com/

https://greensock.com/gsap-as

https://greensock.com/getting-started-as

在外购广告的流量监测中，我使用了 TweenMax 库，没有深入研究，只是添加一些简单的动画效果，看起来像个广告。

```actionscript
import gs.TweenMax;
import gs.easing.*;

TweenMax.to(logo, 1, {x: 20, y: 15, ease:Bounce.easeIn});
TweenMax.to(auto, 1, {x: 640, y: 20, scaleX: 0.6, scaleY: 0.6, onComplete: showAD});
```


<i class="fa fa-github fa-2x"></i> https://github.com/greensock

https://github.com/greensock/GreenSock-AS3/

## Twitter

https://github.com/dborisenko/twitter-actionscript-api/

## as3corelib

The corelib project is an ActionScript 3 Library that contains a number of classes and utilities for working with ActionScript 3. These include classes for MD5 and SHA 1 hashing, Image encoders, and JSON serialization as well as general String, Number and Date APIs.

THIS PROJECT HAS MOVED AND IS NO LONGER BEING MAINTAINED ON GOOGLE CODE

THE NEW PROJECT HOME CAN BE FOUND AT:

https://github.com/mikechambers/as3corelib <sup><i class="fa fa-external-link fa-fw"></i></sup>

最新版本的下载，已不再包含 swc，只能将 Source 文件拷至项目中。

[Google Code](https://code.google.com/p/as3corelib/) 上还能下载到 ```as3corelib-.93.zip Deprecated	May 2010```，包含 swc 和 doc，甚好。

可在这里查看文档：

http://www.chenzixin.com/static/docs/as3corelib/ <sup><i class="fa fa-external-link fa-fw"></i></sup>

这是 Intellij IDEA 13 + Flex + SWC 开发的起步。

[Adding Library SWC's to IntelliJ IDEA 9](http://newtriks.com/2010/01/25/adding-library-swcs-to-intellij-idea-9/)<sup><i class="fa fa-external-link fa-fw"></i></sup>

其实向 Flash 项目中添加 SWC 甚为简单，和普通的 jar 无异，只是我第一次添加 NascomASLib.swc 的时候，心里有些怯场，提示我自动添加模块的
时候，未选中Flash，以至无法在项目中引用。