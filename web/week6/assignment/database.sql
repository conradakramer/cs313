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

INSERT INTO person (username, password) VALUES ('testing', 'testing' );
INSERT INTO questions (user_id, question, added) VALUES (1, 'how many days are there in a year?', '2020-02-15');
INSERT INTO answer (user_id, question_id, answer) VALUES (1, 1, 'you dont have to do anything just jump off the bridge');



