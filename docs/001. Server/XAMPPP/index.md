# XAMPP

## Change htdocs folder location

Change DocumentRoot in `apache\conf\httpd.conf` file.

```
DocumentRoot "C:/__localhost/htdocs"
<Directory "C:/__localhost/htdocs">
```

## Include Custom httpd-vhosts.conf file

Add line following line to include in `apache\conf\httpd.conf` file.

```
Include C:/__localhost/httpd-vhosts.conf
```

## PHP Configurations

`php/php.ini` lines to change

```
max_execution_time = 600
max_input_time = 600
memory_limit = 1024M
post_max_size = 1024M
upload_max_filesize = 1024M
```

## MySQL Configurations

`mysql/bin/my.ini` lines to change

```
max_allowed_packet = 1024M
```

## phpMyAdmin Configurations

Change in `phpmyadmin\config.inc.php`

```
$cfg['ExecTimeLimit'] = 0;
```