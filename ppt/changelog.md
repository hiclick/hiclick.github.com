## Changelog
  
- **0.0.1 : 2015.04.27**    
  今天把 mdpress 拷到 Note 项目，本意是展示汪国真的诗歌，但发现问题：
  * 似乎只能在`mdpress`目录中运行，其它目录会报错
  * `highlight_styles`里的样式，也未引用，删除之后发布页面，可以正常浏览内容
  * 
  ```
  ➜  Grails  mdpress -l
  deckjs
  default
  impress
  obtvse
  ➜  Grails  mdpress code.md 
  /Users/Christen/.rvm/gems/ruby-1.9.3-p392/gems/mdpress-0.0.18/bin/mdpress:90:in `render': private method `render' called for #<RedcarpetCompat:0x007fc5139c3990> (NoMethodError)
	from /Users/Christen/.rvm/gems/ruby-1.9.3-p392/gems/mdpress-0.0.18/bin/mdpress:160:in `<top (required)>'
	from /Users/Christen/.rvm/gems/ruby-1.9.3-p392/bin/mdpress:19:in `load'
	from /Users/Christen/.rvm/gems/ruby-1.9.3-p392/bin/mdpress:19:in `<main>'
	from /Users/Christen/.rvm/gems/ruby-1.9.3-p392/bin/ruby_noexec_wrapper:14:in `eval'
	from /Users/Christen/.rvm/gems/ruby-1.9.3-p392/bin/ruby_noexec_wrapper:14:in `<main>'
  ```
  隐患在何处，不得而知，好在GitHub托管之后，文件和目录不会轻易改变。
