create or replace NONEDITIONABLE procedure proc_NeuerKunde(p_nachname varchar2, p_vorname varchar2, p_plz varchar2, p_perso varchar2, p_fuehrer varchar2, p_passwort varchar2)
as
begin

insert into tbl_Kunden(nachname, vorname, postleitzahl, personalausweis, fuehrerschein, passwort)
values(p_nachname, p_vorname, p_plz, p_perso, p_fuehrer, p_passwort);

end proc_NeuerKunde; 

select * from kunden;

insert into Kunden(nachname, vorname, postleitzahl, personalausweis, fuehrerschein, passwort)
values('Öäsdö', 'ömanääää', '123123', '123132', '2312312', '1231');

insert into kunden
values('Öäsdsö', 'ömanäädää', '1231223', '1233132', '2312312', '1231');

