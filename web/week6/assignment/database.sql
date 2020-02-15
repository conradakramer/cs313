DROP TABLE answer;
DROP TABLE questions;
DROP TABLE person;



CREATE TABLE person(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL  
);



CREATE TABLE questions(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES person(id),
    question VARCHAR(2000) NOT NULL,
    added VARCHAR(40) NOT NULL
);


CREATE TABLE answer(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES person(id),
    question_id INT NOT NULL REFERENCES questions(id),
    answer VARCHAR(2000) NOT NULL
);




