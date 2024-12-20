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
 * Strings for component 'repository', language 'sv', version '4.4'.
 *
 * @package     repository
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessiblefilepicker'] = 'Tillgänglig filväljare';
$string['activaterep'] = 'Aktiva lagringstjänster';
$string['activerepository'] = 'Tillgängliga pluginmoduler för lagringstjänster';
$string['activitybackup'] = 'Säkerhetskopiering av aktivitet';
$string['add'] = 'Lägg till';
$string['addfile'] = 'Lägg till...';
$string['addfiletext'] = 'Lägg till fil';
$string['addplugin'] = 'Lägg till pluginmodul för lagringstjänst';
$string['aliaseschange'] = 'Det finns {$a} länkar till den här filen. Om du fortsätter uppdateras platser som för närvarande länkar till filen automatiskt till att istället använda en kopia av filen.';
$string['allowexternallinks'] = 'Tillåt externa länkar';
$string['areacategoryintro'] = 'Kategoripresentation';
$string['areacourseintro'] = 'Kurspresentation';
$string['areacourseoverviewfiles'] = 'Kursbild';
$string['areamainfile'] = 'Huvudfil';
$string['arearoot'] = 'System';
$string['areauserbackup'] = 'Säkerhetskopiering av användare';
$string['areauserdraft'] = 'Utkast';
$string['areauserpersonal'] = 'Privata filer';
$string['areauserprofile'] = 'Profil';
$string['attachedfiles'] = 'Bifogade filer';
$string['attachment'] = 'Bilaga';
$string['author'] = 'Författare';
$string['automatedbackup'] = 'Automatisk säkerhetskopiering';
$string['back'] = 'Tillbaka';
$string['backtodraftfiles'] = 'Tillbaka till filutkast-hanteraren';
$string['cachecleared'] = 'Cachlagrade filer tas bort';
$string['cacheexpire'] = 'Förfallotid för cache';
$string['cannotaccessparentwin'] = 'När HTTPS används uppdateras inte lagringsplatsen automatiskt. Du behöver istället gå tillbaka till filväljaren och välja lagringsplatsen igen.';
$string['cannotdelete'] = 'Kan inte ta bort filen.';
$string['cannotdownload'] = 'Det går inte att ladda ner den här filen';
$string['cannotdownloaddir'] = 'Det går inte att ladda ner den här katalogen';
$string['cannotinitplugin'] = 'Anropet till plugin_init misslyckades';
$string['cannotunzipcontentunreadable'] = 'Kan inte packa upp filen eftersom innehållet inte kan läsas.';
$string['cannotunzipextractfileerror'] = 'Kan inte packa upp filen eftersom en eller flera av dess filer inte kan läsas.';
$string['cannotunzipquotaexceeded'] = 'Kan inte packa upp filen eftersom den tillåtna maxstorleken för platsen för utkast kommer överskridas.';
$string['choosealink'] = 'Välj en länk';
$string['chooselicense'] = 'Välj licens';
$string['chooselicense_help'] = 'Följ dessa länkar för vidare information om tillgängliga licensalternativ:';
$string['cleancache'] = 'Rensa mina cachade filer';
$string['close'] = 'Stäng';
$string['commonrepositorysettings'] = 'Standardinställningar för lagringsplats';
$string['configallowexternallinks'] = 'Med det här alternativet kan alla användare välja om externa media kopieras till Moodle eller inte. Om detta är inaktiverat kopieras media alltid till Moodle (detta är oftast bäst för övergripande dataintegritet och säkerhet). Om detta är aktiverat kan användarna välja varje gång de lägger till media till en text.';
$string['configcacheexpire'] = 'Hur lång tid som filförteckningar cachelagras lokalt (i sekunder) när du listar filer från externa lagringsplatser.';
$string['configgetfiletimeout'] = 'Timeout i sekunder för nedladdning av en extern fil till Moodle.';
$string['configsaved'] = 'Konfigurationen har sparats';
$string['configsyncfiletimeout'] = 'Timeout i sekunder för synkronisering av den externa filstorleken.';
$string['configsyncimagetimeout'] = 'Timeout i sekunder för hämtning av en bildfil från extern lagringsplats vid synkronisering.';
$string['confirmdelete'] = 'Vill du ta bort lagringsplatsen {$a}? Om du väljer "Fortsätt och ladda ner" kommer filreferenser till externt innehåll att laddas ner till Moodle. Detta kan ta lång tid att bearbeta.';
$string['confirmdeletefile'] = 'Är du säker på att du vill ta bort den här filen?';
$string['confirmdeletefilewithhref'] = 'Vill du ta bort den här filen? Det finns {$a} länkar till den här filen. Om du fortsätter uppdateras platser som för närvarande länkar till filen automatiskt till att istället använda en kopia av filen.';
$string['confirmdeletefolder'] = 'Är du säker på att du vill ta bort den här mappen? Alla filer och undermappar kommer att raderas.';
$string['confirmdeleteselectedfile'] = 'Vill du ta bort de markerade {$a} filerna?';
$string['confirmremove'] = 'Är du säker på att du vill ta bort denna plugin-modul, dess alternativ och <strong>alla av dess instanser</strong> - {$a}? Om du väljer "Fortsätt och ladda ner" kommer filreferenser till externt innehåll att laddas ner till Moodle. Detta kan ta lång tid att bearbeta.';
$string['confirmrenamefile'] = 'Vill du döpa om/flytta den här filen?';
$string['confirmrenamefolder'] = 'Vill du döpa om/flytta den här filen? Om du fortsätter uppdateras platser som för närvarande länkar till filen automatiskt till att istället använda en kopia av filen.';
$string['continueuninstall'] = 'Fortsätt';
$string['continueuninstallanddownload'] = 'Fortsätt och hämta';
$string['copying'] = 'Kopierar';
$string['coursebackup'] = 'Säkerhetskopior av kurser';
$string['create'] = 'Skapa';
$string['createfolder'] = 'Skapa katalog';
$string['createfolderfail'] = 'Misslyckas med att skapa den här katalogen';
$string['createfoldersuccess'] = 'Skapa katalog framgångsrikt';
$string['createinstance'] = 'Skapa ny lagringsplats';
$string['createrepository'] = 'Skapa en ny lagringsplats';
$string['createxxinstance'] = 'Skapa en "{$a}" instans ';
$string['date'] = 'Datum';
$string['datecreated'] = 'Skapad';
$string['deleted'] = 'Lagringstjänst borttagen';
$string['deleterepository'] = 'Ta bort den här lagringstjänsten';
$string['detailview'] = 'Se detaljer';
$string['dimensions'] = 'Dimensioner';
$string['disabled'] = 'Inaktiverad';
$string['displayasdetails'] = 'Visa som fildetaljer';
$string['displayasicons'] = 'Visa som ikoner';
$string['displayastree'] = 'Visa som filträd';
$string['displaydetails'] = 'Visa mapp som en lista med detaljer om filerna';
$string['displayicons'] = 'Visa mapp med symboler för filerna';
$string['displaytree'] = 'Visa mapp som trädstruktur';
$string['download'] = 'Ladda ner';
$string['downloadallfiles'] = 'Ladda ned alla filer';
$string['downloadfolder'] = 'Ladda ner allt';
$string['downloadsucc'] = 'Filen har laddats ner framgångsrikt';
$string['draftareanofiles'] = 'Det går inte att ladda ner eftersom det inte finns några bifogade filer';
$string['editrepositoryinstance'] = 'Redigera lagringstjänst';
$string['emptylist'] = 'Tom lista';
$string['emptytype'] = 'Det går inte att skapa denna typ av lagringsplats: typnamnet är tomt';
$string['enablecourseinstances'] = 'Tillåt användare att lägga till en instans av en lagringsplats till kursen';
$string['enableuserinstances'] = 'Tillåt användare att lägga till en instans av en lagringsplats i användarens kontext';
$string['enter'] = 'Skriv in';
$string['entername'] = 'Skriv in namnet på katalogen';
$string['enternewname'] = 'Skriv in det nya namnet på filen';
$string['error'] = 'Det inträffade ett okänt fel!';
$string['errordoublereference'] = 'Det gick inte att skriva över filen med en länk eftersom det redan finns länkar till den här filen.';
$string['errornotyourfile'] = 'Du kan endast välja filer som du lagt till.';
$string['errorpostmaxsize'] = 'Filen du försökte ladda upp är för stor för att servern ska kunna hantera den.';
$string['erroruniquename'] = 'Namnet på instansen av en lagringsplats ska vara unikt';
$string['errorwhilecommunicatingwith'] = 'Det gick inte att kommunicera med \'{$a}\'-lagringsplatsen.';
$string['errorwhiledownload'] = 'Ett fel uppstod vid nedladdning av filen: {$a}';
$string['existingrepository'] = 'Den här lagringsplatsen finns redan';
$string['federatedsearch'] = 'Federerad sökning';
$string['fileexists'] = 'Filnamnet används redan, v.g. välj ett annat namn';
$string['fileexistsdialog_editor'] = 'En fil med det namnet redan bifogats till texten som du redigerar.';
$string['fileexistsdialog_filemanager'] = 'En fil med det namnet har redan bifogats';
$string['fileexistsdialogheader'] = 'Filen finns';
$string['filename'] = 'Filnamn';
$string['filenotnull'] = 'Du måste välja en fil som ska laddas upp';
$string['filepicker'] = 'Filväljare';
$string['filesaved'] = 'Den här filen har sparats';
$string['filesizenull'] = 'Filstorlek kan inte bestämmas';
$string['folderexists'] = 'Mappnamn används redan, använd ett annat namn';
$string['foldernotfound'] = 'Mapp hittades inte';
$string['folderrecurse'] = 'En katalog kan inte flyttas till sin en egen underkatalog.';
$string['getfile'] = 'Välj den här filen';
$string['getfiletimeout'] = 'Timeout vid filnedladdning';
$string['help'] = 'Hjälp';
$string['iconview'] = 'Visa som ikoner';
$string['imagesize'] = '{$a->width} x {$a->height} px';
$string['instance'] = 'instans';
$string['instancedeleted'] = 'Instansen har tagits bort';
$string['instances'] = 'Lagringsplatsinstanser';
$string['instancesforcourses'] = '{$a} allmänna instanser på kursnivå';
$string['instancesforsite'] = '{$a} allmänna instanser på webbplatsnivå';
$string['instancesforusers'] = '{$a} privata instanser för användare';
$string['invalidfiletype'] = 'Filtypen {$a} accepteras inte.';
$string['invalidjson'] = 'Ogiltig JSON-sträng';
$string['invalidparams'] = 'Ogiltiga parametrar';
$string['invalidplugin'] = 'Ogiltig pluginmodul {$a} för lagringstjänst';
$string['invalidrepositoryid'] = 'Ogiltigt ID för lagringsplats';
$string['isactive'] = 'Aktiv?';
$string['keyword'] = 'Nyckelord';
$string['lastmodified'] = 'Senast ändrad';
$string['license'] = 'Licens';
$string['linkexternal'] = 'Extern länk';
$string['listview'] = 'Visa som lista';
$string['loading'] = 'Laddar...';
$string['login'] = 'Logga in';
$string['logintoaccount'] = 'Logga in på ditt {$a}-konto';
$string['logout'] = 'Logga ut';
$string['lostsource'] = 'Fel. Källa saknas. {$a}';
$string['makefilecontrolledlink'] = 'Skapa en behörighetskontrollerad länk till filen';
$string['makefileinternal'] = 'Gör en kopia av filen';
$string['makefilelink'] = 'Länk till den externa filen';
$string['makefilereference'] = 'Länka till filen';
$string['manage'] = 'Hantera lagringstjänster';
$string['manageinstances'] = 'Hantera instanser';
$string['manageurl'] = 'Hantera';
$string['manageuserrepository'] = 'Hantera individuell lagringsplats';
$string['missingsourcekey'] = 'Källnyckeln saknas. Den här nyckeln måste också anges för att hämta filen.';
$string['moving'] = 'Flytta';
$string['name'] = 'Namn';
$string['newfolder'] = 'Ny mapp';
$string['newfoldername'] = 'Nytt namn';
$string['noenter'] = 'Inget angivet';
$string['nofilesattached'] = 'Inga bifogade filer';
$string['nofilesavailable'] = 'Det finns inga tillgängliga filer';
$string['nofilesselected'] = 'Inga filer valda';
$string['nolicenses'] = 'Det finns inga tillgängliga licenser';
$string['nomorefiles'] = 'Inga fler bilagor tillåts';
$string['nopathselected'] = 'Det har inte valts någon sökväg ännu (dubbelklicka på noden för att välja)';
$string['nopermissiontoaccess'] = 'Ingen behörighet att komma åt den här lagringsplatsen.';
$string['norepositoriesavailable'] = 'Tyvärr kan ingen av dina nuvarande lagringsplatser returnera filer i det format som krävs.';
$string['norepositoriesexternalavailable'] = 'Tyvärr kan ingen av dina nuvarande lagringsplatser returnera externa filer.';
$string['noresult'] = 'Inget sökresultat';
$string['notyourinstances'] = 'Du kan inte visa/redigera instanser av lagringsplatser för en annan användare';
$string['off'] = 'Aktiverad men dold';
$string['on'] = 'Aktiverad och synlig';
$string['openpicker'] = 'Välj en fil';
$string['operation'] = 'Operation';
$string['original'] = 'Original';
$string['originalextensionchange'] = 'Det ursprungliga filtillägget har ändrats som en del i filnamnsändringen. Att ändra tillägget från ".{$a->originalextension}" till ".{$a->newextension}" kan resultera i en fil som inte kan öppnas.';
$string['originalextensionremove'] = 'Det ursprungliga filtillägget har tagits bort som en del i filnamnsändringen. Att ta bort tillägget ".{$a}" resulterar troligen i en fil som inte kan öppnas.';
$string['overwrite'] = 'Skriv över';
$string['overwriteall'] = 'Skriv över alla';
$string['path'] = 'Sökväg';
$string['plugin'] = 'Pluginmoduler för lagringsplatser';
$string['pluginerror'] = 'Fel i plugin-modul för lagringsplats.';
$string['pluginname'] = 'Namn';
$string['pluginnamehelp'] = 'Om detta fält lämnas tomt används standardnamnet';
$string['popup'] = 'Klicka på knappen \'Logga in\' för att ansluta';
$string['popupblockeddownload'] = 'Nedladdningsfönstret är blockerat. Tillåt popup-fönster och försök igen.';
$string['preview'] = 'Förhandsgranska';
$string['privacy:metadata:repository'] = 'Komponenten Lagringsplats lagrar databastyperna i kärnundersystemet.';
$string['privacy:metadata:repository_instances'] = 'Komponenten Lagringsplats lagrar data från användar-lagringsplatsinstanser i kärnundersystemet.';
$string['privacy:metadata:repository_instances:name'] = 'Det anpassade namnet på lagringsplatsen.';
$string['privacy:metadata:repository_instances:password'] = 'Det valfria lösenordet som konfigurerats för lagringsplatsinstansen.';
$string['privacy:metadata:repository_instances:timecreated'] = 'Datum/tidpunkt för skapandet av lagringsplatsinstansen.';
$string['privacy:metadata:repository_instances:timemodified'] = 'Datum/tidpunkt för ändringen av lagringsplatsinstansen.';
$string['privacy:metadata:repository_instances:typeid'] = 'Lagringsplatsinstansens ID-typ.';
$string['privacy:metadata:repository_instances:userid'] = 'ID:t för den användare som äger lagringsplatsinstansen.';
$string['privacy:metadata:repository_instances:username'] = 'Det valfria användarnamnet som konfigurerats för lagringsplatsinstansen.';
$string['privatefilesof'] = '{$a} privata filer';
$string['readonlyinstance'] = 'Du kan inte redigera/ta bort en instans som bara är läsbar';
$string['referencesexist'] = 'Det finns {$a} länkar till den här filen';
$string['referenceslist'] = 'Länkar';
$string['refresh'] = 'Uppdatera';
$string['refreshnonjsfilepicker'] = 'Vänligen ta bort det här fönstret och återställ den filväljare som inte använder javascript.';
$string['removed'] = 'Lagringsplatsen har tagits bort';
$string['renameall'] = 'Byta namn på alla';
$string['renameto'] = 'Byt namn till &quot;{$a}&quot;';
$string['repositories'] = 'Lagringsplatser';
$string['repository'] = 'Lagringsplats';
$string['repositorycourse'] = 'Lagringsplatser för kurser';
$string['repositoryerror'] = 'Fjärrlagringsplatsen returnerade felet: {$a}';
$string['repositoryicon'] = 'Ikon för lagringsplats';
$string['save'] = 'Spara ';
$string['saveas'] = 'Spara som';
$string['saved'] = 'Sparad';
$string['saving'] = 'Sparar';
$string['search'] = 'Sök';
$string['searching'] = 'Sök i ';
$string['searchrepo'] = 'Sök på lagringsplatsen';
$string['sectionbackup'] = 'Säkerhetskopior av sektioner';
$string['select'] = 'Välj';
$string['setmainfile'] = 'Ställ in huvudfilen';
$string['setmainfile_help'] = 'Om det finns flera filer i katalogen är huvudfilen den som visas på visningssidan. Andra filer, så som bilder eller videor, kan vara inbäddade i den. I filhanteraren indikeras huvudfilen med en rubrik i fetstil.';
$string['settings'] = 'Inställningar';
$string['setupdefaultplugins'] = 'Konfigurerar pluginmoduler för standardlagringsplatser';
$string['siteinstances'] = 'Instanser av lagringsplatser på webbplatsen';
$string['size'] = 'Storlek';
$string['sourcekeymismatch'] = 'Käll-URL:en och källnyckeln stämmer inte överens.';
$string['submit'] = 'Skicka in';
$string['sync'] = 'Synk';
$string['syncfiletimeout'] = 'Timeout för filsynkronisering';
$string['syncimagetimeout'] = 'Timeout för bildsynkning';
$string['thumbview'] = 'Visa som ikoner';
$string['title'] = 'Välj en fil...';
$string['type'] = 'Typ';
$string['typenotvisible'] = 'Typen är inte synlig';
$string['undisclosedreference'] = '(Hemlig)';
$string['undisclosedsource'] = '(Hemlig)';
$string['unknownoriginal'] = 'Okänd';
$string['unknownsource'] = 'Okänd källa';
$string['unzipped'] = 'Packade upp framgångsrikt';
$string['upload'] = 'Ladda upp den här filen';
$string['uploading'] = 'Laddar upp...';
$string['uploadsucc'] = 'Filen har laddats upp framgångsrikt';
$string['uselatestfile'] = 'Använd senaste filen';
$string['usenonjsfilemanager'] = 'Öppna filhanteraren i nytt fönster';
$string['usenonjsfilepicker'] = 'Öppna filväljaren i ett nytt fönster';
$string['usercontextrepositorydisabled'] = 'Du kan inte redigera det här lagringsplatsen i sammanhanget för användare';
$string['wrongcontext'] = 'Du har inte åtkomst till detta innehåll';
$string['xhtmlerror'] = 'Du använder förmodligen ett strikt XHTML-huvud. Vissa YUI-komponenter fungerar inte i det här läget. Stäng av detta.';
$string['ziped'] = 'Komprimera katalogen framgångsrikt';
