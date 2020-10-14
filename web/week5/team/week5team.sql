
CREATE TABLE scriptures (
    id SERIAL NOT NULL PRIMARY KEY,
    book VARCHAR(50) NOT NULL,
    chapter INT NOT NULL,
    verse INT NOT NULL,
    content TEXT(500),
);
INSERT INTO scriptures(id, book, chapter, verse, content) 
VALUES(1,"John", 1,5,"And the alight shineth in bdarkness; and the darkness ccomprehended it not.");

INSERT INTO scriptures(id, book, chapter, verse, content) 
VALUES(2,"Doctrine and Covenants", 88,49,"The alight shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall bcomprehend even God, being quickened in him and by him.");

INSERT INTO scriptures(id, book, chapter, verse, content) 
VALUES(3,"Doctrine and Covenants", 93,28,"He that keepeth his commandments receiveth truth and light, until he is glorified in truth and dknoweth all things.");

INSERT INTO scriptures(id, book, chapter, verse, content) 
VALUES(4,"Mosiah", 16,9,"And now if Christ had not come into the world, speaking of things to come aas though they had already come, there could have been no redemption.");