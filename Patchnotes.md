# Patch notes:

### 1.0 Style and basic index page

* The style was added to the `index.php` file. The stylesheet (`style.css`) can be found in the `./css`
* The basic front-end code was writen for the `index.php` file

### 1.1.1 Database hooked up

* `connection.php` was added in the folder `\includes` so it can be included in everything.
* `msgCreate.php` was added to send the data from the form on ìndex.php` to the database.
* There is a label for usernames in the database, this feature is planned for the next patch.
* The user still needs to be able to see the messages that were send. This will be added aswell.

### 1.1.2 Message feed added

* The database is now echoed into the `chatbox` in the `index.php` file
* A loop was created to loop trough every row in the database to echo all messages into the `chatbox` div.