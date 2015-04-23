# Flash - Flex

<i class="fa fa-home fa-2x"></i> 

http://flex.apache.org/index.html

http://flex.apache.org/about-whatis.html

https://cwiki.apache.org/confluence/display/FLEX/Apache+Flex+Wiki

Apache Flex is comprised of a few different components. One component is the compiler which combines MXML (layout) documents 
with ActionScript files to output a SWF application.

You can then either publish the SWF file as a stand-alone application to be presented by the Adobe Flash Player in the browser, 
OR you can compile it with Adobe AIR to make native applications on Windows, Mac OSX, Android, iOS, or BlackBerry platforms.

## Download

<i class="fa fa-download"></i> http://flex.apache.org/download-binaries.html

<i class="fa fa-university"></i> http://mirrors.hust.edu.cn/apache/flex/

**Current Release (4.14.1)**

The Apache Flex team is pleased to offer this release, available as of the 30th of March 2015. This is the latest version 
of the Apache Flex SDK and is designed to be compatible with previous versions of the Apache Flex SDK and Adobe Flex SDK.

Binaries are provided as a convenience for those who do not wish to compile the SDK themselves.

**Binary Dependencies**

* Open Source Media Framework (OSMF)  MPL License

Optional Dependencies

The following dependency is optional, and if available will provide additional features to the Flex Framework:

Embedded Font Support:

* flex-fontkit.jar
* afe.jar
* adt.jar
* rideau.jar

All of the above dependencies can automatically be downloaded via the following ANT command :

```bash
cd <flex.dir>/frameworks
ant thirdparty-downloads
```

**Verify the integrity of the files**

Apache relies on 3rd party mirrors to distribute their software. Because these releases are hosted on servers that are not 
under our control, we strongly recommend that you verify the integrity of the binaries or source code before you install it 
using the PGP or MD5 signatures listed next to the downloads. This involves a few extra steps, but it will verify that you 
are getting a true Apache release.

MD5：

* http://www.fourmilab.ch/md5/
* http://www.pc-tools.net/win32/md5sums/
* http://www.slavasoft.com/fsum/

Docs:

<i class="fa fa-book"></i> http://mirrors.hust.edu.cn/apache/flex/4.14.0/docs/