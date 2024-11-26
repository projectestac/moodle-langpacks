<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'backup', language 'sv', version '4.4'.
 *
 * @package     backup
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asyncbackupcomplete'] = 'Säkerhetskopieringen har slutförts';
$string['asyncbackupcompletebutton'] = 'Fortsätt';
$string['asyncbackupcompletedetail'] = 'Säkerhetskopieringen slutfördes.<br/>Du kan nå säkerhetskopian på <a href="{$a}">sidan för återställning.</a>';
$string['asyncbackuperror'] = 'Säkerhetskopieringen misslyckades';
$string['asyncbackuperrordetail'] = 'Säkerhetskopieringen har misslyckats. Kontakta systemadministratören.';
$string['asyncbackuppending'] = 'Väntande säkerhetskopiering';
$string['asyncbackupprocessing'] = 'Säkerhetskopiering pågår';
$string['asyncbadexecution'] = 'Felaktig backupcontrollerkörning. Den är {$a} men den borde vara 2.';
$string['asynccheckprogress'] = 'Du kan kontrollera förloppet när som helst på <a href="{$a}">sidan för återställning.</a>';
$string['asyncemailenable'] = 'Aktivera notiser';
$string['asyncemailenabledetail'] = 'Om aktiverat kommer användare få ett meddelande då en asynkron säkerhetskopiering eller återställning slutförts.';
$string['asyncgeneralsettings'] = 'Asynkron säkerhetskopiering/återställning';
$string['asyncmessagebody'] = 'Meddelande';
$string['asyncmessagebodydefault'] = 'Din {operation} (ID: {backupid}) lyckades. <br/><br/>Du kan nå den här: <a href="{link}">{link}</a>.';
$string['asyncmessagebodydetail'] = 'Meddelande som ska skickas när en asynkron säkerhetskopiering eller återställning slutförts.';
$string['asyncmessagesubject'] = 'Ämne';
$string['asyncmessagesubjectdefault'] = 'Moodle {operation} lyckades.';
$string['asyncmessagesubjectdetail'] = 'Ämne';
$string['asyncnowait'] = 'Du behöver inte vänta här eftersom processen kommer att fortsätta i bakgrunden.';
$string['asyncprocesspending'] = 'Väntande process';
$string['asyncrestorecomplete'] = 'Återställningsprocessen är slutförd';
$string['asyncrestorecompletebutton'] = 'Fortsätt';
$string['asyncrestorecompletedetail'] = 'Återställningen lyckades. Om du klickar på Fortsätt kommer du att flyttas vidare till <a href="{$a}">kursen med det återställda objektet.</a>';
$string['asyncrestoreerror'] = 'Återställningen misslyckades';
$string['asyncrestoreerrordetail'] = 'Återställningen har misslyckats. Kontakta systemadministratören.';
$string['asyncrestoreinprogress'] = 'Återställning pågår';
$string['asyncrestoreinprogress_help'] = 'Pågående asynkrona kursåterställningar visas här.';
$string['asyncrestorepending'] = 'Väntande återställning';
$string['asyncrestoreprocessing'] = 'Återställning pågår';
$string['asyncreturn'] = 'Tillbaka till kurs';
$string['autoactivedescription'] = 'Välj om det skall göras automatisk säkerhetskopiering eller inte. Om manuell säkerhetskopiering väljs kommer automatisk säkerhetskopiering endast vara möjlig via CLI-skript för automatiserad säkerhetskopiering. Säkerhetskopiering kan då göras manuellt via kommandoraden, eller via <em>cron</em>.';
$string['autoactivedisabled'] = 'Inaktiverad';
$string['autoactiveenabled'] = 'Aktiverad';
$string['autoactivemanual'] = 'Manuell';
$string['automatedbackupschedule'] = 'Schema';
$string['automatedbackupschedulehelp'] = 'Välj vilka dagar i veckan som automatiska säkerhetskopieringar ska göras.';
$string['automatedbackupsinactive'] = 'Webbplatsens administratör har inte aktiverat automatisk säkerhetskopiering.';
$string['automatedbackupstatus'] = 'Status - automatisk säkerhetskopiering';
$string['automateddeletedays'] = 'Ta bort säkerhetskopior äldre än';
$string['automatedmaxkept'] = 'Maximalt antal säkerhetskopior att behålla';
$string['automatedmaxkepthelp'] = 'Specificerar det maximala antalet senaste säkerhetskopieringar som ska behållas för varje kurs. Äldre säkerhetskopior kommer automatiskt tas bort.';
$string['automatedminkept'] = 'Minsta antal säkerhetskopior att behålla';
$string['automatedminkepthelp'] = 'Om säkerhetskopior äldre än ett angivet antal dagar tas bort kan detta medföra att inaktiva kurser efter en tid inte har några säkerhetskopior. För att förhindra detta bör ett minsta antal säkerhetskopior att behålla anges.';
$string['automatedsettings'] = 'Inställningar för automatisk säkerhetskopiering';
$string['automatedsetup'] = 'Inställningar för automatisk säkerhetskopiering';
$string['automatedstorage'] = 'Plats för automatiska säkerhetskopior';
$string['automatedstoragehelp'] = 'Välj vilken plats som automatiska säkerhetskopior ska lagras på.';
$string['backupactivity'] = 'Säkerhetskopiera aktivitet: {$a}';
$string['backupautoactivitiesdescription'] = 'Anger standardinställningen för inkludering av aktiviteter i en säkerhetskopiering. Denna inställning måste vara aktiverad för att papperskorgen ska fungera.';
$string['backupcourse'] = 'Säkerhetskopiera kurs: {$a}';
$string['backupcoursedetails'] = 'Kursdetaljer';
$string['backupcoursesection'] = 'Sektion: {$a}';
$string['backupcoursesections'] = 'Kurssektioner';
$string['backupdate'] = 'Datum för säkerhetskopiering';
$string['backupdetails'] = 'Detaljer för säkerhetskopia';
$string['backupdetailsnonstandardinfo'] = 'Den valda filen är inte en vanlig Moodle säkerhetskopia. Återställningsprocessen kommer att försöka konvertera filen till standardformat och därefter återställa den.';
$string['backupformat'] = 'Format';
$string['backupformatimscc1'] = 'IMS Common Cartridge 1.0';
$string['backupformatimscc11'] = 'IMS Common Cartridge 1.1';
$string['backupformatmoodle1'] = 'Moodle 1';
$string['backupformatmoodle2'] = 'Moodle 2';
$string['backupformatunknown'] = 'Okänt format';
$string['backuplog'] = 'Teknisk information och varningar';
$string['backupmode'] = 'Läge';
$string['backupmode10'] = 'Allmänt';
$string['backupmode20'] = 'Importera';
$string['backupmode30'] = 'Hubb';
$string['backupmode40'] = 'Samma webbplats';
$string['backupmode50'] = 'Automatiserad';
$string['backupmode60'] = 'Konverterad';
$string['backupmode70'] = 'Asynkron';
$string['backupsection'] = 'Säkerhetskopiera kurssektion: {$a}';
$string['backupsettings'] = 'Inställningar för säkerhetskopiering';
$string['backupsitedetails'] = 'Webbplatsdetaljer';
$string['backupstage16action'] = 'Fortsätt';
$string['backupstage1action'] = 'Nästa';
$string['backupstage2action'] = 'Nästa';
$string['backupstage4action'] = 'Utför säkerhetskopiering';
$string['backupstage8action'] = 'Fortsätt';
$string['backuptype'] = 'Typ';
$string['backuptypeactivity'] = 'Aktivitet';
$string['backuptypecourse'] = 'Kurs';
$string['backuptypesection'] = 'Sektion';
$string['backupversion'] = 'Version';
$string['cannotfindassignablerole'] = 'Rollen {$a} i säkerhetskopian kan inte kopplas till någon av de roller du har rätt att tilldela.';
$string['choosefilefromactivitybackup'] = 'Plats för säkerhetskopierade aktiviteter';
$string['choosefilefromactivitybackup_help'] = 'Säkerhetskopior av aktiviteter som gjorts med standardinställningarna lagras här.';
$string['choosefilefromautomatedbackup'] = 'Automatiska säkerhetskopieringar';
$string['choosefilefromautomatedbackup_help'] = 'Innehåller automatiskt genererade säkerhetskopior.';
$string['choosefilefromcoursebackup'] = 'Plats för säkerhetskopierade kurser';
$string['choosefilefromcoursebackup_help'] = 'Säkerhetskopior av kurser som gjorts med standardinställningarna lagras här.';
$string['choosefilefromuserbackup'] = 'Plats för användares privata säkerhetskopior';
$string['choosefilefromuserbackup_help'] = 'Säkerhetskopior som innehåller avidentifierad användarinformation lagras här.';
$string['config_keep_groups_and_groupings'] = 'Som standard, behåll nuvarande grupper och gruppindelningar.';
$string['config_keep_roles_and_enrolments'] = 'Som standard, behåll nuvarande roller och registreringar.';
$string['config_overwrite_conf'] = 'Tillåter att användaren skriver över nuvarande kursinställningar';
$string['config_overwrite_course_fullname'] = 'Som standard skriv över kursens fullständiga namn med det från backup-filen. Detta kräver att "Skriv över kurskonfiguration" är ikryssad och att aktuell användare har behörighet att ändra kursens fullständiga namn (moodle/course:changefullname)';
$string['config_overwrite_course_shortname'] = 'Som standard skriv över kursens kortnamn med det från backup-filen. Detta kräver att "Skriv över kurskonfiguration" är ikryssad och att aktuell användare har behörighet att ändra kursens kortnamn (moodle/course:changeshortname)';
$string['config_overwrite_course_startdate'] = 'Som standard skriv över kursens startdatum med det från backup-filen. Detta kräver att "Skriv över kurskonfiguration" är ikryssad och att aktuell användare har behörighet att ändra kursens startdatum vid återställningar (moodle/restore:rolldates)';
$string['configgeneralactivities'] = 'Anger standardinställningen för att inkludera aktiviteter i en säkerhetskopia.';
$string['configgeneralanonymize'] = 'Om aktiverat anonymiseras som standard all användarinformation vid säkerhetskopieringen.';
$string['configgeneralbadges'] = 'Anger standardinställningen för om märken ska inkluderas vid en säkerhetskopiering.';
$string['configgeneralblocks'] = 'Anger grundinställningen för hur block ska inkluderas vid en säkerhetskopiering.';
$string['configgeneralcalendarevents'] = 'Anger standardinställningarna för hur kalenderhändelser ska inkluderas vid en säkerhetskopiering.';
$string['configgeneralcomments'] = 'Anger standardinställningarna för hur kommentarer ska inkluderas vid en säkerhetskopiering.';
$string['configgeneralcompetencies'] = 'Anger standardinställningen för att inkludera kompetenser i en säkerhetskopia.';
$string['configgeneralcontentbankcontent'] = 'Anger standardinställningen för att inkludera innehållet i innehållsbanken i en säkerhetskopia.';
$string['configgeneralfiles'] = 'Anger standardinställningen för hur filer ska inkluderas vid en säkerhetskopiering. <strong>OBS!</strong> Om du inaktiverar denna inställning kommer enbart referenser till filer inkluderas i säkerhetskopian. Detta är inget problem om säkerhetskopian återställs på samma webbplats och filerna inte tagits bort enligt inställningarna under <em>Städa upp bland skräpfiler</em> (<code>filescleanupperiod</code>).';
$string['configgeneralfilters'] = 'Anger standardinställningen för att inkludera filter i en säkerhetskopia.';
$string['configgeneralgroups'] = 'Anger standardinställningen för att inkludera grupper och gruppindelningar i en säkerhetskopia.';
$string['configgeneralhistories'] = 'Anger standardinställningen för att inkludera användarhistorik i en säkerhetskopia.';
$string['configgenerallogs'] = 'Om aktiverats inkluderas som standard loggar i säkerhetskopior.';
$string['configgeneralpermissions'] = 'Om detta är aktiverat importeras rollbehörigheterna. Detta kan åsidosätta befintliga behörigheter för registrerade användare.';
$string['configgeneralquestionbank'] = 'Om aktiverat kommer som standard frågebanken ingå i säkerhetskopior. <strong>OBS!</strong> Om du inaktiverar den här inställningen inaktiveras säkerhetskopieringen av aktiviteter som använder frågebanken, som t.ex. aktiviteten <em>Kunskapstest</em>.';
$string['configgeneralroleassignments'] = 'Om valet aktiverats kommer rolltilldelning att säkerhetskopieras.';
$string['configgeneralusers'] = 'Anger grundinställningen för om du vill inkludera användare i säkerhetskopior.';
$string['configgeneraluserscompletion'] = 'Anger standardinställningen för att inkludera användares slutförandeinformation i en säkerhetskopia.';
$string['configlegacyfiles'] = 'Anger standardinställningen för att inkludera kursfiler i äldre format i en säkerhetskopia. Äldre format är kursfiler skapade av Moodle 2.0 eller tidigare.';
$string['configloglifetime'] = 'Detta anger hur lång tid du vill behålla logginformation för säkerhetskopiering. Loggar som är äldre än angiven ålder tas automatiskt bort. Rekommendationen är att hålla detta värde lågt eftersom logginformationen kan vara omfattande.';
$string['configrestoreactivities'] = 'Ställer in standardvärdena för att återställa aktiviteter.';
$string['configrestorebadges'] = 'Ställer in standardvärdena för att återställa märken.';
$string['configrestoreblocks'] = 'Ställer in standardvärdena för att återställa block.';
$string['configrestorecalendarevents'] = 'Ställer in standardvärdena för att återställa kalenderhändelser.';
$string['configrestorecomments'] = 'Ställer in standardvärdena för att återställa kommentarer.';
$string['configrestorecompetencies'] = 'Ställer in standardvärdena för att återställa kompetenser.';
$string['configrestorecontentbankcontent'] = 'Ställer in standardvärdena för att återställa innehållet i innehållsbank.';
$string['configrestoreenrolments'] = 'Ställer in standardvärdena för att återställa anmälningsmetoder.';
$string['configrestorefilters'] = 'Ställer in standardvärdena för att återställa filter.';
$string['configrestoregroups'] = 'Ställer in standardvärdena för att återställa grupper och gruppindelningar om de inkluderats i backupen.';
$string['configrestorehistories'] = 'Ställer in standardvärdena för att återställa användarhistorik om den inkluderats i backupen.';
$string['configrestorelogs'] = 'Om aktiverad kommer loggar att återställas om de fanns med i säkerhetskopian.';
$string['configrestorepermissions'] = 'Om detta är aktiverat återställs rollbehörigheterna. Detta kan åsidosätta befintliga behörigheter för registrerade användare.';
$string['configrestoreroleassignments'] = 'Om aktiverad kommer rolltilldelningarna återställas om de inkluderats i säkerhetskopian.';
$string['configrestoreusers'] = 'Anger standardvärdet för om användare ska återställas om de inkluderats i säkerhetskopian.';
$string['configrestoreuserscompletion'] = 'Om aktiverad kommer användarnas slutförandeinformation återställas som standard om den inkluderats i säkerhetskopian.';
$string['confirmcancel'] = 'Avbryt säkerhetskopiering';
$string['confirmcancelimport'] = 'Avbryt import';
$string['confirmcancelno'] = 'Avbryt inte';
$string['confirmcancelquestion'] = 'Är du säker på att du vill avbryta? All information som du matat in kommer att försvinna.';
$string['confirmcancelrestore'] = 'Avbryt återställning';
$string['confirmcancelyes'] = 'Avbryt säkerhetskopiering';
$string['confirmnewcoursecontinue'] = 'Ny kurs-varning';
$string['confirmnewcoursecontinuequestion'] = 'En tillfällig (dold) kurs kommer att skapas av kursåterställningsprocessen. För att avbryta återställningen klicka på Avbryt. Stäng inte webbläsaren medan återställningen pågår-';
$string['copiesinprogress'] = 'Det finns pågående kopieringar för denna kurs. <a href="{$a}">Visa pågående kurskopieringar.</a>';
$string['copycoursedesc'] = 'Denna kurs kommer att dupliceras och läggas i den valda kurskategoring.';
$string['copycourseheading'] = 'Kopiera en kurs';
$string['copycoursetitle'] = 'Kopiera kurs: {$a}';
$string['copydest'] = 'Mål';
$string['copyfieldnotfound'] = 'Obligatoriska fältdata hittades inte för fält: {$a}';
$string['copyformfail'] = 'AJAX-anropet som användes vid bekräftandet av kurskopieringen misslyckades.';
$string['copyingcourse'] = 'Kopiering av kurs pågår';
$string['copyingcourseshortname'] = 'kopierar';
$string['copyop'] = 'Nuvarande operation';
$string['copyprogressheading'] = 'Pågående kurskopieringar';
$string['copyprogressheading_help'] = 'Denna tabell visar status för alla dina pågående kurskopieringar.';
$string['copyprogresstitle'] = 'Status för kurskopiering';
$string['copyreturn'] = 'Kopiera och återgå';
$string['copysource'] = 'Källa';
$string['copyview'] = 'Kopiera och visa';
$string['coursecategory'] = 'Kategori som kursen återställs till';
$string['courseid'] = 'Ursprungligt ID';
$string['coursesettings'] = 'Kursinställningar';
$string['coursetitle'] = 'Titel';
$string['currentstage1'] = 'Initiala inställningar';
$string['currentstage16'] = 'Slutför';
$string['currentstage2'] = 'Schemainställningar';
$string['currentstage4'] = 'Granska och bekräfta';
$string['currentstage8'] = 'Utför säkerhetskopiering';
$string['enableasyncbackup'] = 'Aktivera asynkrona säkerhetskopieringar';
$string['enableasyncbackup_help'] = 'Om detta alternativ är aktiverat kommer alla säkerhetskopieringar och återställningar göras asynkront (i bakgrunden). Detta påverkar inte importer eller exporter. Asynkrona säkerhetskopieringar och återställningar gör det möjligt för användare att göra andra saker under tiden som säkerhetskopieringen eller återställningen pågår.';
$string['enterasearch'] = 'Ange en sökning';
$string['error_block_for_module_not_found'] = 'Den övergivna block-instansen (ID: {$a->bid}) för delkurs (ID: {$a->mid}) hittades. Detta block kommer inte att säkerhetskopieras';
$string['error_course_module_not_found'] = 'Den övergivna kursen (ID: {$a}) hittades. Denna modul kommer inte att säkerhetskopieras.';
$string['errorcopyingbackupfile'] = 'Misslyckades med att kopiera filen med säkerhetskopian till den tillfälliga mappen innan återställningen.';
$string['errorfilenamemustbezip'] = 'Filnamnet du anger måste vara en ZIP-fil och har .mbz förlängning';
$string['errorfilenamerequired'] = 'Du måste ange ett giltigt filnamn för denna säkerhetskopia';
$string['errorfilenametoolong'] = 'Filnamnet måste innehålla mindre än 255 tecken.';
$string['errorinvalidformat'] = 'Okänt format på säkerhetskopia';
$string['errorinvalidformatinfo'] = 'Den valda filen är inte en giltig Moodle backupfil och kan inte återställas.';
$string['errorminbackup20version'] = 'Denna säkerhetskopia har skapats med en utvecklingsversion av Moodle backup ({$a->backup}). Minimikravet är {$a->min}. Säkerhetskopian kan inte återställas.';
$string['errorrestorefrontpagebackup'] = 'Säkerhetskopior av startsidan kan endast återställas på startsidan';
$string['executionsuccess'] = 'Säkerhetskopian har skapats.';
$string['extractingbackupfileto'] = 'Extraherar säkerhetskopia till: {$a}';
$string['failed'] = 'Säkerhetskopieringen misslyckades';
$string['filealiasesrestorefailures'] = 'Fel vid återställning av alias';
$string['filealiasesrestorefailures_help'] = 'Alias är symboliska länkar till andra filer, inklusive de som lagras i externa databaser. I vissa fall kan Moodle inte återställa dem - till exempel när du återställer säkerhetskopian på en annan plats eller när den refererade filen finns inte. Fler detaljer och den faktiska orsaken till felet finns i loggfilen för återställningen.';
$string['filealiasesrestorefailures_link'] = 'restore/filealiases';
$string['filealiasesrestorefailuresinfo'] = 'Vissa alias som ingår i säkerhetskopian kunde inte återställas. Följande lista innehåller deras förväntade plats och källfilen de hänvisar till på dess ursprungliga plats.';
$string['filename'] = 'Filnamn';
$string['filereferencesincluded'] = 'Filreferenser till externt innehåll inkluderas i säkerhetskopian. Dessa kommer inte fungera om de återställs på en annan webbplats än denna.';
$string['filereferencesnotsamesite'] = 'Säkerhetskopian är från en annan plats. Filreferenser kan inte återställas.';
$string['filereferencessamesite'] = 'Säkerhetskopian kommer från den här webbplatsen. Filreferenser kan återställas.';
$string['generalactivities'] = 'Inkludera aktiviteter och resurser';
$string['generalanonymize'] = 'Anonymisera informationen';
$string['generalbackdefaults'] = 'Allmänna standardinställningar för säkerhetskopiering';
$string['generalbadges'] = 'Inkludera märken';
$string['generalblocks'] = 'Inkludera block';
$string['generalcalendarevents'] = 'Inkludera kalenderhändelser';
$string['generalcomments'] = 'Inkludera kommentarer';
$string['generalcompetencies'] = 'Inkludera kompetenser';
$string['generalcontentbankcontent'] = 'Inkludera innehåll i innehållsbank';
$string['generalenrolments'] = 'Inkludera registreringsmetoder';
$string['generalfiles'] = 'Inkludera filer';
$string['generalfilters'] = 'Inkludera filter';
$string['generalgradehistories'] = 'Inkludera historik';
$string['generalgroups'] = 'Inkludera grupper och gruppindelningar';
$string['generalhistories'] = 'Inkludera historik';
$string['generallegacyfiles'] = 'Inkludera kursfiler i äldre format';
$string['generallogs'] = 'Inkludera loggar';
$string['generalpermissions'] = 'Inkludera åsidosatta behörigheter';
$string['generalquestionbank'] = 'Inkludera frågebank';
$string['generalrestoredefaults'] = 'Standardinställningar för återställning';
$string['generalrestoresettings'] = 'Allmänna inställningar för återställning';
$string['generalroleassignments'] = 'Inkludera rolltildelningar';
$string['generalsettings'] = 'Allmänna inställningar för säkerhetskopiering';
$string['generalusers'] = 'Inkludera användare';
$string['generaluserscompletion'] = 'Inkludera slutförandeinformation för användare';
$string['hidetypes'] = 'Dölj typalternativ';
$string['importbackupstage16action'] = 'Fortsätt';
$string['importbackupstage1action'] = 'Nästa';
$string['importbackupstage2action'] = 'Nästa';
$string['importbackupstage4action'] = 'Importera';
$string['importbackupstage8action'] = 'Fortsätt';
$string['importcurrentstage0'] = 'Välj kurs';
$string['importcurrentstage1'] = 'Initiala inställningar';
$string['importcurrentstage16'] = 'Slutför';
$string['importcurrentstage2'] = 'Schemainställningar';
$string['importcurrentstage4'] = 'Granska och bekräfta';
$string['importcurrentstage8'] = 'Importera';
$string['importfile'] = 'Importera en säkerhetskopia';
$string['importgeneralduplicateadminallowed'] = 'Tillåt automatisk lösning av motstridiga \'admin\'-användarnamn';
$string['importgeneralduplicateadminallowed_desc'] = 'Om webbsajten redan har ett konto där användarnamnet är \'admin\' och man samtidigt försöker återställa en säkerhetskopia som också innehåller ett konto med detta användarnamn kommer detta resultera i motstridiga konton. Om denna inställning är aktiverad kommer detta lösas genom att användarnamnet på kontot i säkerhetskopian döps om till \'admin_xyz\'.';
$string['importgeneralmaxresults'] = 'Maximum antal av kurser som visas vid import';
$string['importgeneralmaxresults_desc'] = 'Detta styr antalet kurser som visas under det första steget i importprocessen';
$string['importgeneralsettings'] = 'Standardinställningar för import';
$string['importrootsettings'] = 'Inställningar för import';
$string['importsettings'] = 'Allmänna inställningar för import';
$string['importsuccess'] = 'Importen har slutförts. Klicka på <b>Fortsätt</b> för att återgå till kursen.';
$string['includeactivities'] = 'Inkludera:';
$string['includeditems'] = 'Inkluderade komponenter:';
$string['includefilereferences'] = 'Filreferenser till externt innehåll';
$string['includesection'] = 'Sektion {$a}';
$string['includeuserinfo'] = 'Användardata';
$string['inprogress'] = 'Säkerhetskopiering pågår';
$string['jumptofinalstep'] = 'Hoppa till sista steget';
$string['keep'] = 'Behåll';
$string['keptroles'] = 'Inkludera registrering via roll';
$string['keptroles_help'] = 'Användare med de valda rollerna kommer att registreras på den nya kursen. Ingen användardata kommer att tas med såvida inte alternativet \'Inkludera användardata\' aktiverats.';
$string['locked'] = 'Låst';
$string['lockedbyconfig'] = 'Den här inställningen har låsts av standardinställningarna för säkerhetskopiering';
$string['lockedbyhierarchy'] = 'Låst av beroenden';
$string['lockedbypermission'] = 'Du har inte tillräckliga behörigheter för att ändra den här inställningen.';
$string['loglifetime'] = 'Behåll loggar i';
$string['managefiles'] = 'Hantera säkerhetskopior';
$string['mergerestoredefaults'] = 'Återställ standardinställningarna vid sammanslagning med annan kurs';
$string['missingfilesinpool'] = 'Vissa filer kunde inte sparas under säkerhetskopieringen. Det kommer inte att vara möjligt att återställa dem.';
$string['module'] = 'Modul';
$string['moodleversion'] = 'Moodleversion';
$string['morecoursesearchresults'] = 'Hittade mer än {$a} kurser, visar första {$a} resultat';
$string['moreresults'] = 'Det finns för många resultat. Ange en mer specifik sökning.';
$string['nomatchingcourses'] = 'Det finns inga kurser att visa';
$string['norestoreoptions'] = 'Det finns inga kategorier eller befintliga kurser du kan återställa till.';
$string['originalwwwroot'] = 'URL till säkerhetskopia';
$string['overwrite'] = 'Skriv över';
$string['pendingasyncdeletedetail'] = 'Det finns en väntande säkerhetskopiering för denna kurs.<br>Kurser kan inte raderas innan denna säkerhetskopiering är avslutad.';
$string['pendingasyncdetail'] = 'Vid asynkrona säkerhetskopieringar är det endast möjligt för en användare att ha en(1) pågående säkerhetskopiering aktiv åt gången per resurs.<br>Multipla asynkrona säkerhetskopieringar för samma resurs kan inte köas eftersom detta troligtvis skulle resultera i multipla säkerhetskopior med identiskt innehåll.';
$string['pendingasyncedit'] = 'Det finns en väntande säkerhetskopiering av denna kurs. Vänligen undvik att redigera denna kurs tills det att säkerhetskopieringen är slutförd.';
$string['pendingasyncerror'] = 'Väntande säkerhetskopiering för denna resurs';
$string['preparingdata'] = 'Förbereder data';
$string['preparingui'] = 'Förbereder att visa sidan';
$string['previousstage'] = 'Föregående';
$string['privacy:metadata:backup:detailsofarchive'] = 'Det här arkivet kan innehålla olika användardata som har med en kurs att göra, till exempel resultat, användarregistreringar och aktivitetsdata.';
$string['privacy:metadata:backup:externalpurpose'] = 'Syftet med detta arkiv är att lagra information relaterad till en kurs och som kan återställas i framtiden.';
$string['privacy:metadata:backup_controllers'] = 'Listan med säkerhetskopieringsaktiviteter';
$string['privacy:metadata:backup_controllers:itemid'] = 'Kursens ID';
$string['privacy:metadata:backup_controllers:operation'] = 'Processen som utfördes, t.ex. återställning';
$string['privacy:metadata:backup_controllers:timecreated'] = 'Tidpunkten då åtgärden skapades';
$string['privacy:metadata:backup_controllers:timemodified'] = 'Tidpunkten då åtgärden ändrades';
$string['privacy:metadata:backup_controllers:type'] = 'Typ av objekt som bearbetats, t.ex. åtgärd';
$string['qcategory2coursefallback'] = 'Frågekategorin "{$a->name}", ursprungligen på system/kursnivå i säkerhetskopian, kommer att skapas på kursnivå vid återställningen';
$string['qcategorycannotberestored'] = 'Frågekategorin "{$a->name}" kan inte skapas av återställningprocessen';
$string['question2coursefallback'] = 'Frågekategorin "{$a->name}" kan inte skapas av återställningprocessen';
$string['questioncannotberestored'] = 'Frågorna "{$a->name}" kan inte skapas av återställningprocessen';
$string['recyclebin_desc'] = '<strong>OBS!</strong> Dessa inställningar kommer även att användas för papperskorgen.';
$string['replacerestoredefaults'] = 'Återställ standardinställningarna när återställningen görs in i en annan kurs där innehållet raderas.';
$string['restoreactivity'] = 'Återställ aktivitet';
$string['restorecourse'] = 'Återställ kurs';
$string['restorecoursesettings'] = 'Kursinställningar';
$string['restoredcourseid'] = 'Återställt kurs-ID: {$a}';
$string['restoreexecutionsuccess'] = 'Kursen återställdes framgångsrikt, klicka på fortsätt knappen under för att se kursen du återställde.';
$string['restorefileweremissing'] = 'Vissa filer kunde inte återställas eftersom de saknades i säkerhetskopian.';
$string['restorenewcoursefullname'] = 'Namn på ny kurs';
$string['restorenewcourseshortname'] = 'Kortnamn för ny kurs';
$string['restorenewcoursestartdate'] = 'Nytt startdatum';
$string['restorerolemappings'] = 'Återställ rollmappning';
$string['restorerootsettings'] = 'Återställ inställningar';
$string['restoresection'] = 'Återställ sektion';
$string['restorestage1'] = 'Bekräfta ';
$string['restorestage16'] = 'Granska';
$string['restorestage16action'] = 'Utför återställning';
$string['restorestage1action'] = 'Nästa';
$string['restorestage2'] = 'Destination';
$string['restorestage2action'] = 'Nästa';
$string['restorestage32'] = 'Process';
$string['restorestage32action'] = 'Fortsätt';
$string['restorestage4'] = 'Inställningar';
$string['restorestage4action'] = 'Nästa';
$string['restorestage64'] = 'Slutförd';
$string['restorestage64action'] = 'Fortsätt';
$string['restorestage8'] = 'Schema';
$string['restorestage8action'] = 'Nästa';
$string['restoretarget'] = 'Återställ mål';
$string['restoretocourse'] = 'Återställ till kurs:';
$string['restoretocurrentcourse'] = 'Återställ till den här kursen';
$string['restoretocurrentcourseadding'] = 'Slå ihop den säkerhetskopierade kursen med den här kursen';
$string['restoretocurrentcoursedeleting'] = 'Ta bort innehållet i den här kursen och återställ sedan';
$string['restoretoexistingcourse'] = 'Återställ till en befintlig kurs';
$string['restoretoexistingcourseadding'] = 'Slå samman den säkerhetskopierade kursen med den befintliga kursen';
$string['restoretoexistingcoursedeleting'] = 'Ta bort innehållet i den befintliga kursen och återställ sedan';
$string['restoretonewcourse'] = 'Återställ som ny kurs';
$string['restoringcourse'] = 'Kursåterställning pågår';
$string['restoringcourseshortname'] = 'återställer';
$string['rootenrolmanual'] = 'Återställ med manuell registrering';
$string['rootsettingactivities'] = 'Inkludera aktiviteter och resurser';
$string['rootsettinganonymize'] = 'Anonymisera användarinformation';
$string['rootsettingbadges'] = 'Inkludera märken';
$string['rootsettingblocks'] = 'Inkludera block';
$string['rootsettingcalendarevents'] = 'Inkludera kalenderhändelser';
$string['rootsettingcomments'] = 'Inkludera kommentarer';
$string['rootsettingcompetencies'] = 'Inkludera kompetenser';
$string['rootsettingcontentbankcontent'] = 'Inkludera innehållet i innehållsbanken';
$string['rootsettingcustomfield'] = 'Inkludera anpassade fält';
$string['rootsettingenrolments'] = 'Inkludera registreringsmetoder';
$string['rootsettingenrolments_always'] = 'Ja, alltid';
$string['rootsettingenrolments_never'] = 'Nej, återställ användare som manuellt registrerade';
$string['rootsettingenrolments_withusers'] = 'Ja, men endast om användare inkluderas';
$string['rootsettingfiles'] = 'Inkludera filer';
$string['rootsettingfilters'] = 'Inkludera filter';
$string['rootsettinggradehistories'] = 'Inkludera betygshistorik';
$string['rootsettinggroups'] = 'Inkludera grupper och gruppindelningar';
$string['rootsettingimscc1'] = 'Konvertera till IMS Common Cartridge 1.0';
$string['rootsettingimscc11'] = 'Konvertera till IMS Common Cartridge 1.1';
$string['rootsettinglegacyfiles'] = 'Inkludera kursfiler sparade i äldre format';
$string['rootsettinglogs'] = 'Inkludera kursloggar';
$string['rootsettingpermissions'] = 'Inkludera åsidosatta behörigheter';
$string['rootsettingquestionbank'] = 'Inkludera frågebanken';
$string['rootsettingroleassignments'] = 'Inkludera rolltilldelningar för användare';
$string['rootsettings'] = 'Inställningar för säkerhetskopiering';
$string['rootsettingusers'] = 'Inkludera registrerade användare';
$string['rootsettinguserscompletion'] = 'Inkludera detaljer om användares slutförande';
$string['samesitenotification'] = 'Denna säkerhetskopia skapades med en inställning som resulterat i att enbart referenserna till filerna i säkerhetskopian sparades och inte deras innehåll. En återställning av denna säkerhetskopia kommer enbart att fungera på denna webbsajt.';
$string['sectionactivities'] = 'Aktiviteter';
$string['sectioninc'] = 'Ingår i säkerhetskopian (ingen användarinformation)';
$string['sectionincanduser'] = 'Ingår i säkerhetskopian tillsammans med användarinformation';
$string['selectacategory'] = 'Välj kategori';
$string['selectacourse'] = 'Välj kurs';
$string['setting_course_fullname'] = 'Kursnamn';
$string['setting_course_shortname'] = 'Kortnamn';
$string['setting_course_startdate'] = 'Startdatum för kurs';
$string['setting_keep_groups_and_groupings'] = 'Behåll nuvarande grupper och grupperingar';
$string['setting_keep_roles_and_enrolments'] = 'Behåll nuvarande roller och registreringar';
$string['setting_overwrite_conf'] = 'Skriv över kursinställningarna';
$string['setting_overwrite_course_fullname'] = 'Skriv över kursnamnet';
$string['setting_overwrite_course_shortname'] = 'Skriv över kursens kortnamn';
$string['setting_overwrite_course_startdate'] = 'Skriv över kursens startdatum';
$string['showtypes'] = 'Visa typalternativ';
$string['sitecourseformatwarning'] = 'Detta är en säkerhetskopia av en startsida. OBS! Dessa kan endast återställas på startsidan.';
$string['skiphidden'] = 'Hoppa över dolda kurser';
$string['skiphiddenhelp'] = 'Välj om du vill hoppa över dolda kurser, eller ej';
$string['skipmodifdays'] = 'Hoppa över kurser som inte ändrats sedan';
$string['skipmodifdayshelp'] = 'Välj att hoppa över kurser som inte har ändrats sedan detta antal dagar';
$string['skipmodifprev'] = 'Hoppa över kurser som inte ändrats sedan föregående säkerhetskopiering';
$string['skipmodifprevhelp'] = 'Välj om du vill hoppa över kurser som inte har ändrats sedan den senaste automatiska säkerhetskopieringen. Detta kräver att loggning är aktiverad.';
$string['status'] = 'Status';
$string['storagecourseandexternal'] = 'Filarea för kursens säkerhetskopia och den angivna katalogen';
$string['storagecourseonly'] = 'Filarea för kursens säkerhetskopia';
$string['storageexternalonly'] = 'Specificerad katalog för automatiska säkerhetskopieringar';
$string['successful'] = 'Säkerhetskopieringen slutfördes';
$string['successfulcopy'] = 'Kopieringen slutfördes';
$string['successfulrestore'] = 'Återställningen slutfördes';
$string['timetaken'] = 'Tidsåtgång';
$string['title'] = 'Titel';
$string['totalcategorysearchresults'] = 'Summa kategorier: {$a}';
$string['totalcoursesearchresults'] = 'Summa kurser: {$a}';
$string['undefinedrolemapping'] = 'Rollmappningen är inte definierad för \'{$a}\'-arketypen';
$string['unnamedsection'] = 'Namnlös sektion';
$string['userdata'] = 'Inkludera användardata';
$string['userdata_help'] = 'Om aktiverad kommer data, såsom inlägg i forum, inlämnade uppgifter m.m., att kopieras till den nya kursen för användare som har någon av rollerna som valts under \'Include role enrolments\'.';
$string['userinfo'] = 'Användarinformation';
