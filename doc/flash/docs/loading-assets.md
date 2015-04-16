# Flash - Loading Assets

## Loading SWFs and Images

## Loading Data

AS3.0 Post

```actionscript
var url:String = "http://localhost/test.php";
var requestData:URLRequest = new URLRequest(url);
var loader:URLLoader = new URLLoader();
sub_btn.addEventListener(MouseEvent.CLICK,addData);

function addData(e:Event){
       requestData.data = String;
       requestData.method = URLRequestMethod.POST;
       var urlvariables:URLVariables = new URLVariables();
       urlvariables.name = uname.text;
       trace(urlvariables.name)
       requestData.data = urlvariables;
       loader.load(requestData);
}
```

## Talking to JavaScript

HTML:

```markup
<script type="text/javascript">
	function sendToJavaScript(value) {
		//alert(value);
		var img = new Image();
		img.src = "http://ivy.pcauto.com.cn/adpuba/click?adid=20007&id=auto.test.pv.&";
	}
</script>

<object id="ExternalInterfaceExample" name="ExternalInterfaceExample" type="application/x-shockwave-flash" data="http://imgad0.pclady.com.cn/ivy/image/benbenq/ads/10007.swf" width="10" height="10">
	<param name="movie" value="http://imgad0.pclady.com.cn/ivy/image/benbenq/ads/10007.swf" />
	<param name="quality" value="high" />
	<param name="allowscriptaccess" value="always" />
	<a href="http://www.adobe.com/go/getflash">
		<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
	</a>
</object>
```
ActionScript Snippet:

```actionscript
import flash.external.ExternalInterface;

if (ExternalInterface.available) {
    ExternalInterface.call("sendToJavaScript", "hello");
}
```

## Communicating with Loaded SWFs

## Additional Online Resources

