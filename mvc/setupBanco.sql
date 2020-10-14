create table times ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255), 
    PRIMARY KEY (id)
);

create table jogadores ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255), 
    posicao VARCHAR(255), 
    overall INT, 
    id_time INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_time) REFERENCES time(id)
);