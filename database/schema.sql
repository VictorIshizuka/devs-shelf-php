CREATE TABLE books (
id integer primary key,
title varchar(255) not null,
description text,
author varchar(255) not null,
year_release integer,
n_pages integer,id_user integer,
FOREIGN KEY (id_user) REFERENCES users(id)
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
