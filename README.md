# Restaurant ranking site for Bercy Village Paris 75012
![Screenshot 2023-06-26 at 21 05 20](https://github.com/nbayat/LeProjet98/assets/78981747/9d49d04a-a6a7-4307-a52a-93b9e4b5674a)


This repository contains the code for a PHP website designed to review and rank restaurants in Bercy Village, Paris.

The tech stack includes PHP, MySQL, JavaScript, and HTML.

Both authentication and database management are handled locally in PHP. I have taken all necessary precautions to prevent SQL injection and XSS attacks.

Please note that while the restaurants are real, the comments and ratings in the database may not be accurate.


## Instructions

```console
~$ brew install php
```

You also need to download and install mysql from oracle's website.

```console
~$ mysql -u root -p
```

```console
~$ php -S localhost:9000
```

```console
~$ mysql> SET PASSWORD FOR 'root'@'localhost' = 'leprojetNima';
```

```console
~$ mysql> CREATE DATABASE leProjet;
```

```console
~$ mysql> source ./init_mysql/init.sql;
```

then you can run any pages in view folder in src, start with landingPage.php :

http://localhost:9000/src/views/landingpage.php

