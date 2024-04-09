drop table tbl_Ausleihen;
drop table tbl_Kunden;
drop table tbl_Fahrzeuge;
drop table tbl_Modelle;
drop table tbl_Hersteller;


create table tbl_Hersteller(
Hersteller_ID number generated always as identity not null,
Bezeichnung varchar2(55),
primary key (Hersteller_ID)
);

create table tbl_Modelle(
Modell_ID number generated always as identity not null,
Bezeichnung varchar2(55),
Hersteller number not null,
Getriebe varchar2(55), /* 1 = schalter 0 = automatik */
Ps number,
baujahr date,
primary key (Modell_ID),
foreign key (Hersteller) references tbl_Hersteller(Hersteller_ID)
);

create table tbl_Fahrzeuge(
Fahrzeug_ID number generated always as identity not null,
Modell number not null,
Fahrbar varchar2(55),
primary key (Fahrzeug_ID),
foreign key (Modell) references tbl_Modelle(Modell_ID)
);

create table tbl_Kunden(
Kunden_ID number generated always as identity not null,
Nachname varchar2(55) not null,
Vorname varchar2(55) not null,
Postleitzahl varchar2(55) not null,
Personalausweis varchar2(55) unique,
Fuehrerschein varchar2(55) unique,
Passwort varchar2(55),
primary key (Kunden_ID)
);

create table tbl_Ausleihen(
Ausleih_ID number generated always as identity not null,
Fahrzeug_ID number not null,
Kunden_ID number not null,
StartDatum date,
EndDatum date,
primary key (Ausleih_ID),
foreign key (Fahrzeug_ID) references tbl_Fahrzeuge(Fahrzeug_ID),
foreign key (Kunden_ID) references tbl_Kunden(Kunden_ID)
);




