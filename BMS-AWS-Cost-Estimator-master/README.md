# AWS Pricing Calculator
This project was designed to run on a LAMP stack. You may run it with any other configuration with some minor modifications.

## Installation
1. Clone or copy this project to the web directory on your server (ex. /var/www/html)
1. Execute the `assets/sql/setup.sql` script on your MySQL server instance
1. Update the settings in `assets/php/config.php`
  1. Set database username/password
  1. Set the timezone
1. Add an .htaccess file to the directory and customize it to your liking:
```
RewriteRule ^$ https://example.com/subdir/pages/home/index.php [L]

#Prevent viewing of .htaccess file
<Files .htaccess>
        order allow,deny
        deny from all
</Files>

#Prevent directory listings
Options All -Indexes
```

## Notes
* The `assets/php/process.php` file contains all the main functions for the project
* This project is non-path-sensitive; it can be moved to any containing folder so long as the inner structure remains the same * If you would like to run this project in a docker container, https://github.com/fauria/docker-lamp worked well during development

### Credits: Emad Tirmizi, Ashik Patel, Lester Dominguez, Nikhil Kanoor
