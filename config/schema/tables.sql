USE millionaire_db;

CREATE TABLE IF NOT EXISTS questions (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(400) NOT NULL,
    answers VARCHAR(400) NOT NULL,
    right_answer INT NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(60) NOT NULL,
    email VARCHAR(60) NOT NULL,
    password VARCHAR(100) NOT NULL,
    role SET('user','admin') NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE IF NOT EXISTS games (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY user_key (user_id) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS game_questions (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    game_id INT NOT NULL,
    question_id INT NOT NULL,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY game_key (game_id) REFERENCES games(id) ON DELETE CASCADE,
    FOREIGN KEY question_key (question_id) REFERENCES questions(id) ON DELETE RESTRICT
);
