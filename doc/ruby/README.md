# Ruby

**浣溪沙·当时只道是寻常**

清·纳兰性德

谁念西风独自凉，萧萧黄叶闭疏窗，沉思往事立残阳。

被酒莫惊春睡重，赌书消得泼茶香，当时只道是寻常。

**Ruby**

Ruby is...

A dynamic, open source programming language with a focus on simplicity and productivity. It has an elegant syntax that
is natural to read and easy to write.

```ruby
# Ruby knows what you
# mean, even if you
# want to do math on
# an entire Array
cities = %w[ London
              Oslo
              Paris
              Amsterdam
              Berlin ]

visited = %w[Berlin Oslo]

puts 'I still need ' +
         'to visit the ' +
         'following cities:',
     cities - visited
```

**Development Kit**

The [DevKit](https://github.com/oneclick/rubyinstaller/wiki/Development-Kit) is a toolkit that makes it easy to build and use native C/C++ extensions such as RDiscount and RedCloth for
Ruby on Windows.

Simply download, double-click, choose an installation directory, run the Ruby install helper script, possibly tweak
a ```config.yml``` file for your system specifics, and you’re ready to start using native Ruby extensions.

Download it, run it to extract it somewhere (**PERMANENT**). Then cd to it, run ```ruby dk.rb init``` and ```ruby dk.rb install``` to
bind it to ruby installations in your path.

### 版权许可

本书采用“保持署名—非商用”创意共享4.0许可证。

只要保持原作者署名和非商用，您可以自由地阅读、分享、修改本书。

详细的法律条文请参见[创意共享](http://creativecommons.org/licenses/by-nc/4.0/)网站。
