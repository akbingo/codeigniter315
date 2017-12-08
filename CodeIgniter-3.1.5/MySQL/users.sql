use idcard;

CREATE TABLE users (
    id INT(1) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(8) NOT NULL UNIQUE,
    email VARCHAR(26) NOT NULL,
    
    passwd VARCHAR(32) NOT NULL,
    UNIQUE(email)
)