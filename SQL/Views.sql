create or replace view view_Fahrzeuge
as select h.bezeichnung as hersteller, m.bezeichnung as modell, m.getriebe, m.ps, f.fahrbar as status
from tbl_fahrzeuge f, tbl_hersteller h, tbl_modelle m
where f.modell = m.modell_id 
AND m.hersteller = h.hersteller_id;
commit;



