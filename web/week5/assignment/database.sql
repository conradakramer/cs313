



CREATE TABLE public.user{
    id SERIAL NOT NULL PRIMARY KEY,
    username VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL  
};




CREATE TABLE public.question{
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.user(id),
    question VARCHAR(2000) NOT NULL
};



#this is for the posted reponses to the questions
CREATE TABLE public.answer{
    id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.user(id),
    question_id INT NOT NULL REFERENCES public.question(id),
    answer VARCHAR(2000) NOT NULL
};




