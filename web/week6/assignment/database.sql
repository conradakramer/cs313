DROP TABLE answer;
DROP TABLE question;
DROP TABLE person;



CREATE TABLE person(
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL  
);



CREATE TABLE question(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES person(id),
    question VARCHAR(2000) NOT NULL
);


CREATE TABLE answer(
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES person(id),
    question_id INT NOT NULL REFERENCES question(id),
    answer VARCHAR(2000) NOT NULL
);




