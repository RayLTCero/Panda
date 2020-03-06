CREATE DATABASE panda;

USE panda;

CREATE TABLE users(
    id int not null auto_increment,
    name varchar(255) not null,
    surname varchar(255) not null,
    birthdate date not null,
    gender varchar(6),
    email varchar(255) not null,
    password varchar(255) not null,
    image varchar(255) not null,
    creation_date datetime,
    updated_date datetime,
    CONSTRAINT pk_users PRIMARY KEY(id),
    CONSTRAINT uq_users_email UNIQUE(email)

)ENGINE=InnoDB;

CREATE TABLE posts (
    id int not null auto_increment,
    id_user int not null,
    post_text varchar(255),
    post_image varchar(255),
    creation_date datetime,
    updated_date datetime,
    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_posts_users FOREIGN KEY(id_user) REFERENCES users(id) 
)ENGINE=InnoDB;

CREATE TABLE comments(
    id int not null auto_increment,
    id_post int not null,
    id_user int not null,
    content text not null,
    creation_date datetime,
    updated_date datetime,
    CONSTRAINT pk_comments PRIMARY KEY(id),
    CONSTRAINT fk_comments_posts FOREIGN KEY (id_post) REFERENCES posts(id),
    CONSTRAINT fk_comments_users FOREIGN KEY(id_user) REFERENCES users(id)
)ENGINE=InnoDB;

CREATE TABLE reactions (
    id int not null auto_increment,
    post_id int not null,
    user_id int not null,
    reaction varchar(10),
    CONSTRAINT pk_reactions PRIMARY KEY(id),
    CONSTRAINT fk_reactions_post FOREIGN KEY(post_id) REFERENCES posts(id),
    CONSTRAINT fk_reactions_users FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDB;

CREATE TABLE conversations(
    id int not null auto_increment,
    user_sender int not null,
    user_receptor int not null,
    CONSTRAINT pk_conversations PRIMARY KEY(id),
    CONSTRAINT fk_conversations_user_one FOREIGN KEY(user_sender) REFERENCES users(id),
    CONSTRAINT fk_conversations_user_two FOREIGN KEY(user_receptor) REFERENCES users(id)
)ENGINE=InnoDB;
CREATE TABLE messages (
    id int not null auto_increment,
    user_id int not null,
    conversation_id int not null,
    message text not null,
    creation_date datetime,
    CONSTRAINT pk_messages PRIMARY KEY(id),
    CONSTRAINT fk_messages_users FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_messages_conversations FOREIGN KEY(conversation_id) REFERENCES conversations(id)

)ENGINE=InnoDB;

CREATE TABLE users_conversations(
    user_id int not null,
    conversation_id int not null,
    CONSTRAINT fk_users_conversations_user FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_users_conversations_conversation FOREIGN KEY(conversation_id) REFERENCES conversations(id)
)ENGINE=InnoDB;

CREATE TABLE friends(
    user_sender int not null,
    user_receptor int not null,
    is_accepted boolean not null,
    CONSTRAINT fk_friends_sender FOREIGN KEY(user_sender) REFERENCES users(id),
    CONSTRAINT fk_friends_receptor FOREIGN KEY(user_receptor) REFERENCES users(id)
)ENGINE=InnoDB;