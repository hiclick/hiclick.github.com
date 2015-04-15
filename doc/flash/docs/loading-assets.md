# Flash - Loading Assets

## Loading SWFs and Images

## Loading Data

AS3.0 提交数据

```actionscript
var url:String = "http://localhost/test.php";   //执行操作数据库的php文件
var requestData:URLRequest = new URLRequest(url);   //新建URLRequest对象，用来获取flash中textArea的数据
var loader:URLLoader = new URLLoader();   //建立URLLoader对象，用来发送flash中textArea的数据
sub_btn.addEventListener(MouseEvent.CLICK,addData); //为button附事件对象，点击按钮执行addData函数

function addData(e:Event){
       requestData.data = String;   //.data 为URLRequest一个属性分三种大家可以查手册查到
       requestData.method = URLRequestMethod.POST;   //.method 也为 URLLoader的一个属性值
       var urlvariables:URLVariables = new URLVariables(); //建立URLVariables对象，
       urlvariables.name = uname.text; //通过cc参数传递 txtcontent里的数据
       trace(urlvariables.name)
       requestData.data = urlvariables;//讲urlvariables的数据赋值给.data
       loader.load(requestData); //开始发送数据
}
```

## Communicating with Loaded SWFs

## Additional Online Resources

