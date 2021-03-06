BanManager-WebUI
================

![](http://up.frd.mn/jaCRp.png)

Git repo initialized with existing WebUI project for BanManager by [confuser](https://github.com/confuser/Ban-Management). The main purpose of this repository is to to fix the WebUI for the latest major database restructure from version 4 to version 5.

Feel free to contribute if you have any suggestions or ideas.

### Usage

##### Preperation

1. Clone this repository into your Nginx/Apache document root:  
  `git clone https://github.com/yeahwhat-mc/BanManager-WebUI.git /var/www/banmanager`
1. Make sure cache is writeable:  
  `cd /var/www/banmanager`  
  `chmod 777 cache/`  
1. Rename settingsRename.php to settings.php:  
  `cp settingsRename.php settings.php`
1. Make sure settings file is writeable:  
  `chmod 777 settings.php`
1. Open and adjust the settings and make sure you're entered `$settings['password']`.

##### Installation

1. Open http://yourdomain.com/where-you-installed/index.php?action=admin
1. You will then be asked for a password, type in the one you set earlier.
1. You will now see the admin area.
1. Click on the "Add Server" button.
1. A dialogue box will appear with a form.
1. Fill out all the form details.
1. The dialogue box will disappear upon success, once that happens, refresh the page.
1. You should now see the server you just added in the table.
1. If you have any other servers, add them.
1. Once you have finished adding servers, please CHMOD settings.php back to 644 (If in future you need to add more, you must make it writeable again by CHMOD to 777).
1. Please be aware, the mysql settings you entered are stored in settings.php in plain text, nobody else can read it unless they are able to download the file via FTP (or SSH etc) or you have an exploit in another script on your server.
1. All done! If you have some bans, test it. Click "Home", in the search box type % and hit search. It will list all players that are currently banned or have been banned.

### Adjustments so far

* Convert all `.php` files to UTF-8 and add proper EOF
* Support version 5 and up
* Widgets more customizable in settings 
* Configurable caching times 
* Add debug option to output any SQL query
* Fix "Statistics"
* CSS adjustments
* Option to enable/disable PHP errors
* Default timezone in settings for `date()` functions
* Replaced `mysql_` functions with `mysqli_` ones

### Todo / Improvements

* Improve IP search
* Check if admin functions still work (low prio, not in use on our server)
* Grunt/Gulp to compile assets/libs
* Keep up MySQL connection
* Prepared Statements (`mysqli`)

### Demo

You can find a working demo over here: http://bans.yeahwh.at

### Version

1.1
