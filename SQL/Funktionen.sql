create or replace function func_PasswortCheck(p_name varchar2, p_passwort varchar2)
Return varchar2
as
v_passwort varchar2(55);
v_ergebnis varchar2(55);
Begin
select passwort into v_passwort from tbl_Kunden where Nachname = p_name;

if p_passwort = v_passwort
then v_ergebnis := 'korrekt';
else v_ergebnis := 'falsch';
end if;

return v_ergebnis;

End func_PasswortCheck;
/
