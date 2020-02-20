CREATE DATABASE db_mutua;

use db_mutua;

create table Pessoa
(
    PessoaID int identity
        constraint Pessoa_pk
            primary key nonclustered,
    CreatedAt datetime2,
    UpdatedAt datetime2
)
go

create table PessoaFisica
(
    PessoaFisicaID int identity
        constraint PessoaFisica_pk
            primary key nonclustered,
    Nome           varchar(1)  not null,
    Cpf            varchar(11) not null,
    Rg             varchar(1),
    CreatedAt      datetime2,
    UpdatedAt      datetime2,
    PessoaID       int         not null
        constraint PessoaFisica_Pessoa_PessoaID_fk
            references Pessoa
)
go

create unique index PessoaFisica_Cpf_uindex
    on PessoaFisica (Cpf)
go

create table Endereco
(
    EnderecoID          int identity
        constraint Endereco_pk
            primary key nonclustered,
    LogradouroDescricao varchar(500),
    Numero              int,
    Cep                 varchar(8) not null,
    Cidade              varchar(1) not null,
    Bairro              varchar(1) not null,
    Estado              varchar(2) not null,
    PessoaID            int        not null
        constraint Endereco_Pessoa_PessoaID_fk
            references Pessoa
)
go

create table TipoTelefone
(
    TipoTelefoneID int        not null
        constraint TipoTelefone_pk
            primary key nonclustered,
    Nome           varchar(1) not null
)
go

create table Telefone
(
    TelefoneId   int identity
        constraint Telefone_pk
            primary key nonclustered,
    Ddd          varchar(3) not null,
    Numero       varchar(1) not null,
    TipoTelefone int        not null
        constraint Telefone_TipoTelefone_TipoTelefoneID_fk
            references TipoTelefone,
    PessoaID     int        not null
        constraint Telefone_Pessoa_PessoaID_fk
            references Pessoa
)
go

create table Associado
(
    AssociadoID int identity
        constraint Associado_pk
            primary key nonclustered,
    Matricula varchar(5),
    PessoaFisicaID int not null
        constraint Associado_PessoaFisica_PessoaFisicaID_fk
            references PessoaFisica
)
go