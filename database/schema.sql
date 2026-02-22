CREATE TABLE books (
id integer primary key,
title varchar(255) not null,
description text,
author varchar(255) not null,
image varchar(255)
year_release integer,
n_pages integer,
id_user integer,
FOREIGN KEY (id_user) REFERENCES users(id)
);

CREATE TABLE users (
id integer primary key,
name varchar(255) not null,
email varchar(255) not null,
password varchar(255) not null
);

CREATE TABLE evaluation (
id integer primary key,
id_user integer,
id_book integer,
comment text,
grade integer,
FOREIGN KEY (id_user) REFERENCES users(id)
FOREIGN KEY (id_book) REFERENCES books(id)
);

INSERT INTO books( 
title,
description,
author,
year_release,
n_pages,
id_user
)
VALUES(
'Introdução à Programação',
'Este livro introduz os conceitos básicos de programação de maneira clara e objetiva, ideal para iniciantes.',
'Carlos Oliveira',
2023,
280,
null
);

INSERT INTO users (
name, email, password) VALUES ('Usuario Teste', 'teste@gmail.com', '12345678');