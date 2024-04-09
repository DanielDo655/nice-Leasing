insert into tbl_hersteller(bezeichnung)
values('Ford');
insert into tbl_hersteller(bezeichnung)
values('Nissan');
insert into tbl_hersteller(bezeichnung)
values('BMW');

insert into tbl_modelle(bezeichnung, hersteller, getriebe, ps, baujahr)
values('Ford Mustang 5.0 Ti-VCT V8 GT Auto', 1, 'automatik', 446, To_date('2024', 'YYYY')); 

insert into tbl_modelle(bezeichnung, hersteller, getriebe, ps, baujahr)
values('Nissan GT-R 3.8L', 2, 'schalter', 570, To_date('2018', 'YYYY')); 

insert into tbl_modelle(bezeichnung, hersteller, getriebe, ps, baujahr)
values('BMW M850i xDrive Coupé', 3, 'automatik, 333, To_date('2022', 'YYYY'));




