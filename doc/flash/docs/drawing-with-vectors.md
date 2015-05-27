# Flash - Drawing with Vectors

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## Drawing shapes

```actionscript
// ActionScript 3.0
var movieClip:MovieClip = new MovieClip();
movieClip.graphics.beginFill(0xFF0000);
movieClip.graphics.drawRect(0, 0, 100, 80);
movieClip.graphics.endFill();
movieClip.x = 10;
movieClip.y = 10;
addChild(movieClip);
```

```actionscript
// ActionScript 2.0
createEmptyMovieClip("movieClip", 0);
movieClip.beginFill(0xFF0000);
movieClip.moveTo(0, 0);
movieClip.lineTo(100, 0);
movieClip.lineTo(100, 80);
movieClip.lineTo(0, 80);
movieClip.endFill();
movieClip._x = 10;
movieClip._y = 10;
```
