REST API TEST TASK
==================

Test task implement rest api for blog database

INSTALLATION
------------

    rest/config/main.php    - file of configuration
    .htaccess               - rewrite rules

OPERATIONS
----------

    GET /news                           list all news
    POST /news                          create a new country
    GET /news/1                         return the details of the news with id = 1
    PUT /news/1                         update the news with id = 1
    DELETE /news/1                      delete the news with id = 1
    GET /news?page=1                    list of news on page 1
    GET /news?order=title&order=desc    list of news sorted by date in desc order
    GET /news?category=main             list of news from category main
