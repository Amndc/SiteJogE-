create database bd_jogo;
use bd_jogo;

create table tb_usuario
(
tb_usuario_id integer not null primary key auto_increment,
tb_usuario_nome_c varchar(200) not null,
tb_usuario_idade int not null,
tb_usuario_email varchar(40) not null,
tb_usuario_senha varchar(20) not null,
tb_usuario_ra int not null,
tb_usuario_imagem varchar(30)
);


create table tb_jogador
(
tb_jogador_id integer not null primary key auto_increment,
tb_jogador_nivel_exp varchar(20), 
tb_jogador_pontuação varchar(20)
);

create table tb_fases
(
tb_fases_id integer not null primary key auto_increment,
tb_fases_nome varchar(20) not null,
tb_fases_vida varchar(20) not null,
tb_fases_pontuacao_max varchar(20),
tb_fases_qtd_itens varchar(20),
tb_fases_desc varchar(100) not null
);


create table tb_perfil
(
tb_perfil_id integer not null primary key auto_increment,
tb_perfil_personagem varchar(20) not null, 
tb_perfil_qtd_premios varchar(20),
tb_usuario_id integer not null
);

create table tb_estado
(
tb_estado_id integer not null primary key auto_increment,
tb_fases_id integer not null,
tb_perfil_id integer not null,
tb_jogador_id integer not null
);


alter table tb_perfil
add constraint perfil_fk_usuario_pk
foreign key(tb_usuario_id)
references tb_usuario(tb_usuario_id);

alter table tb_estado
add constraint estado_fk_fases_pk
foreign key(tb_fases_id)
references tb_fases(tb_fases_id);

alter table tb_estado
add constraint estado_fk_perfil_pk
foreign key(tb_perfil_id)
references tb_perfil(tb_perfil_id);

alter table tb_estado
add constraint estado_fk_jogador_pk
foreign key(tb_jogador_id)
references tb_jogador(tb_jogador_id);




DELIMITER $$
create trigger tg_verifica_email before insert on tb_usuario
for each row
begin 
	if exists (select tb_usuario_id from tb_usuario where tb_usuario_email = new.tb_usuario_email) then 
		SIGNAL sqlstate '45001' set message_text = "Usuário já cadastrado!";
	end if;
end $$
DELIMITER ;


DELIMITER $$
create trigger tg_verifica_ra before insert on tb_usuario
for each row
begin 
	if exists (select tb_usuario_id from tb_usuario where tb_usuario_ra = new.tb_usuario_ra) then 
		SIGNAL sqlstate '45001' set message_text = "Usuário já cadastrado!";
	end if;
end $$
DELIMITER ;