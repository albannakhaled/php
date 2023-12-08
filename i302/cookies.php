<?php

    /*

    cookies
        - setcookie(name, value, expire, path, domain, secure, http_only);
            * name
            * value
            * expire
            * path
            * domain
            * secure
            * HTTP_ONLY

        - setcookie("test","xxxxx",time()+60);

        important
            - setcookie() must be called before any output is sent to the browser
            - setcookie() defines a cookie to be sent along with the rest of the HTTP headers
            - setcookie() must appear before the <html> tag
            - setcookie() must appear before the <body> tag
            - setcookie() must appear before the <head> tag
            - setcookie() must appear before the <title> tag
            - setcookie() must appear before the <meta> tag

            do not store sensitive information in cookies
            not everyone allows cookies
            not everything can be stored in cookies 

*/



    setcookie("test","xxxxx",time()+60);
?>  