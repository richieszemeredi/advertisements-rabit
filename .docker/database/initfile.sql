CREATE TABLE `users` (
    id INT,
    name VARCHAR(30),
);

CREATE TABLE `advertisements` (
    id INT,
    title VARCHAR(255),
    userId INT,
);
