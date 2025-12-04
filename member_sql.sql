CREATE TABLE member (
    irum VARCHAR(20) NOT NULL,
    id VARCHAR(13) NOT NULL PRIMARY KEY,
    nickname VARCHAR(10) NOT NULL,
    email VARCHAR(30) NOT NULL,
    pwd VARCHAR(15) NOT NULL,
    regdate DATE NOT NULL
);