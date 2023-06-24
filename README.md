First, rename database_sample.php to database.php, and replace your mongodb login string to match your setup.

# Database structure

Before we dive in to the database's structure, I want to talk a little bit about this project. This is a simple lightweight PHP project, to show the data I processed (and stored in MongoDB), to a Website Interface.

I translate the content I want, from langA to the destination langB, so the fields in the document seem a little bit wierd, not title and content, it's title_langA_langB and final_html_langA_langB. But that's not important, whatever name it is, it still works :D

MongoDB -> DatabaseName -> CollectionName -> Documents

DatabaseName and CollectionName can be anything, it's your taste, I will not talk much about it.
The important thing here is what is inside document, which fields are required!

document

    *_id* (of course, it's auto generated, you dont need to care about that)

    *categories*: Array (an array of category this post belong to)

    *title_{langA}_{langB}: this is a field contain the title translated from langA to langB, for example *title_en_vi*
    
    *final_html_{langA}_{langB}*: same as above, this contain the html of the post, but is customized for specific need. Think about it as the post_content field of wordpress. It's just a name, nothing special!


# Nginx Config

I use Docker to run php on a container named `php`, it exposes the port 9000. You should check and change the config to match your setup.

Pay attention to places with **yourwebsite.com**, you must replace `yourwebsite.com` with your destination domain.

```
server {
    listen       80;
    listen  [::]:8080;

    server_name  yourwebsite.com www.yourwebsite.com;
    access_log /var/log/nginx/yourwebsite.com.access.log;
    error_log /var/log/nginx/yourwebsite.com.error.log;

    index index.html index.php;
    root   /var/www/yourwebsite.com;

    location ~* \.(ico|css|js|gif|jpe?g|png)(\?[0-9]+)?$ {
        expires max;
        log_not_found off;
    }

    location / {
        index index.html index.php;
        try_files $uri $uri/ /index.php?$args;
    }
    location ~ \.php$ {
        include fastcgi_params;
        fastcgi_pass php:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $document_root/$fastcgi_script_name;
    }
}
```