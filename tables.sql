CREATE TABLE user_login (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username varchar(255) NOT NULL UNIQUE,
    psswrd varchar(100) NOT NULL,
    admin tinyint(1) DEFAULT '0' NOT NULL,
    name varchar(255) NOT NULL
 );

CREATE TABLE blog_posts (
    postID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    postOwnerID int(11) NOT NULL,
    postTitle varchar(255) NOT NULL,
    postDate date NOT NULL DEFAULT CURRENT_TIMESTAMP,
    postContent text NOT NULL,
    public tinyint(1) DEFAULT '1' NOT NULL,
    edited tinyint(1) DEFAULT '0' NOT NULL
 );
