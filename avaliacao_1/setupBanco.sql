create table categorias ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255), 
    PRIMARY KEY (id)
);

create table links ( 
    id INT NOT NULL AUTO_INCREMENT, 
    link VARCHAR(255), 
    titulo VARCHAR(255), 
    descricao VARCHAR(255), 
    palavras_chaves VARCHAR(255), 
    imagem VARCHAR(255),
    id_categoria INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);