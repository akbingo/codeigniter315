USe idcard;

CREATE TABLE news (
    id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(128) NOT NULL,
    slug varchar(128) NOT NULL,
    text text NOT NULL,
    author varchar(8) NOT NULL,
    KEY slug (slug)
);