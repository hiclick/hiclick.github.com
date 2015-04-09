# Flash - ActionScript 2.0

吾善度材，视栋宇之制，高深圆方短长之宜，吾指使而群工役焉。舍我，众莫能就一宇。故食于官府，吾受禄三倍；作于私家，吾收其宜大半焉。

## 二级标题一

```actionscript
this._lockroot=true;
_root.miaozhen_caid="2004235";
_root.miaozhen_spid="6sYjP";
_root.miaozhen_ext="&dx=0";
_root.miaozhen_domain="g.cn.miaozhen.com";
if (! _root.mz_obj) {
	_root.mz_obj=new Object  ;
}
if (! _root.mz_obj.spl) {
	_root.mz_obj.spl=new Array  ;
}
var mz_spl=_root.mz_obj.spl;
for (i=0; i < mz_spl.length; i++) {
	if (mz_spl[i] == _root.miaozhen_spid) {
		mz_f=1;
		break;
	}
}
if (! mz_f) {
	import flash.external.*;
	mz_spl.push(_root.miaozhen_spid);
	var mz_a=System.security;
	mz_a.allowDomain("js.miaozhen.com");
	mz_a.allowInsecureDomain("js.miaozhen.com");
	var mz_c=_root.createEmptyMovieClip(_root.miaozhen_spid,_root.getNextHighestDepth());
	mz_c.loadMovie("http://js.miaozhen.com/c.swf");
}
```

## 二级标题二

## 二级标题三
