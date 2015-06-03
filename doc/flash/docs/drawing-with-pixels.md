# Flash - Drawing with Pixels

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。


## Water Effect

NascomASLib Contributors.

An open source AS3 library that provides a couple of interesting graphic effects such as pixelate and rippler.

[Creation of realistic Flash water ripples with AS3](http://www.emanueleferonato.com/2011/01/19/creation-of-realistic-flash-water-ripples-with-as3/)<sup><i class="fa fa-external-link fa-fw"></i></sup>

[Water ripples revisited (AS3-only version)](http://www.derschmale.com/2008/08/03/water-ripples-revisited-as3-only-version/)<sup><i class="fa fa-external-link fa-fw"></i></sup>

Source Code Download: [Rippler.as](http://christen.cn/doc/flash/docs/attachment/Rippler.as)


这是我起意研究 Flex + SWC 的开始，便至今未找到 NascomASLib 的文档。

Rippler Sample:

```actionscript
/**
 * Created with IntelliJ IDEA.
 * User: Christen
 * Date: 15-4-16
 * Time: 上午11:02
 */
package note {


import be.nascom.flash.graphics.Rippler;

import flash.display.Bitmap;
import flash.display.Sprite;
import flash.display.StageAlign;
import flash.display.StageScaleMode;
import flash.events.MouseEvent;


[SWF(backgroundColor="0x000000", frameRate="30", width="640", height="480")]
public class Ripple extends Sprite {
    // Embed an image (Flex Builder only, use library in Flash Authoring)
    [Embed(source="../../assets/img/Water.png")]
    private var _sourceImage:Class;

    private var _target:Bitmap;
    private var _rippler:Rippler;

    public function Ripple() {
        stage.scaleMode = StageScaleMode.NO_SCALE;
        stage.align = StageAlign.TOP_LEFT;

        // create a Bitmap displayobject and add it to the stage
        _target = new Bitmap(new _sourceImage().bitmapData);
        addChild(_target);

        // create the Rippler instance to affect the Bitmap object
        _rippler = new Rippler(_target, 60, 6);

        // create the event listener for mouse movements
        stage.addEventListener(MouseEvent.MOUSE_MOVE, handleMouseMove);
    }

    // creates a ripple at mouse coordinates on mouse movement
    private function handleMouseMove(event:MouseEvent):void {
        // the ripple point of impact is size 20 and has alpha 1
        _rippler.drawRipple(_target.mouseX, _target.mouseY, 20, 1);
    }
}
}
```

**Another NascomASLib Tool: UploadPostHelper**

<i class="fa fa-pencil"></i> Sample:

将图片与图片名等不同类型数据传到服务器

```actionscript
import be.nascom.flash.net.upload.UploadPostHelper;

var request:URLRequest = new URLRequest(UPLOAD_PAGE);
request.contentType = "multipart/form-data; boundary=" + UploadPostHelper.getBoundary();
request.method = URLRequestMethod.POST;
var variables:URLVariables = new URLVariables();
variables.uid = 1;
variables.filename = fnTxt.text;
variables.wish = alarm_mc.alarm.wishTxt.text;
request.data = UploadPostHelper.getPostData(fnTxt.text, bytes, "pic", variables);
var loader:URLLoader = new URLLoader();
loader.dataFormat = URLLoaderDataFormat.BINARY;
loader.addEventListener(Event.COMPLETE, uploadCompleteHandler);
loader.addEventListener(IOErrorEvent.IO_ERROR, uploadErrorHandler);
loader.load(request);
```

## PNGEncoder2

https://github.com/cameron314/PNGEncoder2

http://www.as3gamegears.com/misc/pngencoder2/

```actionscript
var bmp : BitmapData = ...;     // The bitmap you want to encode

PNGEncoder2.level = CompressionLevel.FAST;  // Optional. Defaults to FAST

var encoder : PNGEncoder2 = PNGEncoder2.encodeAsync(bmp);
encoder.targetFPS = 12;     // Optional. Defaults to 20. Lower FPSs yield faster compression

// Because the encoder is guaranteed to fire the COMPLETE event
// after at least one frame, it's safe to attach the listener after
// starting the encoding (as long as it's done before the next frame)
encoder.addEventListener(Event.COMPLETE, function (e) {
    var png : ByteArray = encoder.png;

    var bmp2 : BitmapData = ...;
    bmp2 = PNGEncoder2.decode(png);    // Decode the data back to a Bitmap
});

// encoder also dispatches ProgressEvent.PROGRESS events if you
// want to be notified of progress
```