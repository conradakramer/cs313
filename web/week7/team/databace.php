

CREATE TABLE login (
    id SERIAL PRIMARY KEY NOT NULL,
    username VARCHAR(55) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

