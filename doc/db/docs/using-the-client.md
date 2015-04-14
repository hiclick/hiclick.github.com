# MySQL - Using the Client


Quora: [What is the best Mac OS X MySQL client](http://www.quora.com/What-is-the-best-Mac-OS-X-MySQL-client)

David Marwick, Analytics Engineer at Twitter

3 votes by Flavien Bessede, Delano J. McFarlane, and Abdallah Dorra


I use MySQL GUI clients mostly for SQL programming, and I often keep SQL in files. My current favorites are:

[DBVisualizer](http://www.dbvis.com/)

Not free but I now use this as my primary client on OS X for both MySQL and Vertica. Very fully-featured app. The use of screen real estate could be more a bit more efficient but otherwise it's very hard to find any fault with it. Supports multiple connections, multiple SQL files. Extremely stable and bug-free. Highly recommended.

[MySQL Workbench](http://www.mysql.com/products/workbench/)

Consistently buggy but I keep it around. It supports multiple open connections, each with multiple SQL editor tabs that easily translate to .sql files. The SQL editor has a parser and recognizes the window contents as a set of statements separated by ";" with syntax errors highlighted.

[Sequel Pro](http://www.sequelpro.com/)

I've been using this a bit and so far so good. It supports multiple open connections, but only one SQL editor per connection. You can open a SQL file into the editor but then it doesn't clearly display what file you have open which is annoying. Otherwise it seems solid.

[Aqua Data Studio](http://www.aquafold.com/aquadatastudio.html)

I started evaluating this very recently and it seems good. However it is not free, and it does seems to have some quirks, for example the sql editor requires you to separate SQL statements with "/", and the file open/save dialog doesn't support the full native OS X file dialog box which makes browsing slow.

Querious, ﻿Navicat, and SQLEditor are also worth a look depending on your needs.

----

* MySQL-Front
* MySQL Workbench
* phpMyAdmin
* Sequel Pro
* SQL Buddy
* SQLyog


## phpMyAdmin

http://www.phpmyadmin.net/home_page/index.php
