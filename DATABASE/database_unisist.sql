/*
 * TAF = Tipologia Attività Formativa*) 
 * Si distinguono in 
 * TAF A = Attività di Base, 
 * TAF B = Caratterizzante, 
 * TAF C = Affine Integrative, 
 * TAF D = Scelta Studente, 
 * TAF E (incompatibile con TAF D, perciò non registrabile TAF E in TAF D). 
 * I CFU* liberi (ovvero TAF D) devono essere almeno 12 e fino ad un massimo di 18. 
 */
/*
 *  CFU = Credito Formativo Universitario: Ad 1 CFU corrispondono 25 ore di impegno complessivo dello studente, 
 * di cui allo studio individuale è riservato una quota pari al 72 % (7 ore di lezione frontale e 18 ore di studio individuale). 
 * Per le attività di didattica assistita e di laboratorio, ad 1 CFU corrisponde una quota di studio individuale che va dal 44 al 52%. 
 * (Regolamento didattico, art. 3 comma 3)
 */

/*
*Settori scientifico-disciplinari
*/


create database medicina;

create table medicina.piano_di_studi(
codice nvarchar(6), -- primary key può individuare sia una attività formativa che una unità didattica
nome nvarchar(100),
CFU int, 
settore nvarchar(50),
n_settore int,
TAF_Ambito nvarchar(300),
ore_lezione int,
ore_laboratorio int, 
ore_tirocinio int,
tipo_insegnamento nvarchar(100), 
semestre int,
descrizione_semestre nvarchar(50),
anno1 int,
anno2 int
);


create table medicina.formativa_didattica (
 formativa nvarchar(6),
 didattica nvarchar(6)
);

create table medicina.utente(
    id int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(30) NOT NULL,
    cognome varchar(30) NOT NULL,
    email varchar(100) NOT NULL,
    `password` varchar(30) NOT NULL
);

-- impostazione dei vincoli primary key

/*
 * ALTER TABLE Persons ADD PRIMARY KEY (ID);
 * ALTER TABLE Persons ADD CONSTRAINT PK_Person PRIMARY KEY (ID,LastName);
 */
alter table medicina.piano_di_studi ADD PRIMARY KEY (codice);
alter table medicina.formativa_didattica ADD CONSTRAINT PK_formativa_didattica PRIMARY KEY (formativa,didattica);

-- impostazione vincoli foreign key
/*
* ALTER TABLE Orders ADD FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);
* ALTER TABLE Orders ADD CONSTRAINT FK_PersonOrder FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);
*/

alter table medicina.formativa_didattica 
ADD FOREIGN KEY (formativa) REFERENCES medicina.piano_di_studi(codice),
ADD FOREIGN KEY (didattica) REFERENCES medicina.piano_di_studi(codice);

select nome ,TAF_Ambito, settore  from medicina.piano_di_studi pds
where TAF_Ambito like 'lingua%';
/*
* funzione substring() mysql. 
* The SUBSTRING() function extracts a substring from a string (starting at any position).
* SUBSTR(string, start, length)
*/
-- estrae i primi 4 caratteri
select substr(TAF_Ambito,1,4)
from medicina.piano_di_studi pds;

-- MySQL POSITION() Function
/*
 * The POSITION() function returns the position of the first occurrence of a substring in a string.
 * If the substring is not found within the original string, this function returns 0.
 * This function performs a case-insensitive search.
 * POSITION(substring IN string)
 */

select distinct substr(TAF_Ambito,1,POSITION("/" IN TAF_Ambito)-1)
from medicina.piano_di_studi pds;

