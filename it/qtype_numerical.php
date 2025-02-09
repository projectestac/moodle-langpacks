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
 * Strings for component 'qtype_numerical', language 'it', version '4.4'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Errore accettato';
$string['addmoreanswerblanks'] = 'Spazi per altre {no} risposte';
$string['addmoreunitblanks'] = 'Spazi per altre {no} unità';
$string['answercolon'] = 'Risposta:';
$string['answererror'] = 'Errore';
$string['answermustbenumberorstar'] = 'La risposta deve essere un numero, ad esempio -1.234 or 3e8, oppure \'*\'.';
$string['answerno'] = 'Risposta {$a}';
$string['decfractionofquestiongrade'] = 'come frazione decimale (0-1) della valutazione della domanda';
$string['decfractionofresponsegrade'] = 'come frazione decimale (0-1) del voto della  risposta';
$string['decimalformat'] = 'decimali';
$string['editableunittext'] = 'l\'elemento input testo';
$string['errornomultiplier'] = 'Devi specificare un moltiplicatore per questa unità.';
$string['errorrepeatedunit'] = 'Non puoi avere due unità con lo stesso nome.';
$string['geometric'] = 'Geometrico';
$string['invalidnumber'] = 'Devi inserire un numero valido.';
$string['invalidnumbernounit'] = 'Devi inserire un numero valido. Non aggiungere una unità nella risposta';
$string['invalidnumericanswer'] = 'Una delle risposte date non è un numero valido.';
$string['invalidnumerictolerance'] = 'Una delle tolleranze inserite non è un numero valido.';
$string['leftexample'] = 'a sinistra, ad esempio $1.00 o £1.00';
$string['manynumerical'] = 'Le unità sono opzionali. Se si inserisce un\'unità, verrà utilizzata per convertire la risposta data all\'Unità 1 prima della valutazione.';
$string['multiplier'] = 'Moltiplicatore';
$string['nominal'] = 'Nominale';
$string['noneditableunittext'] = 'Testo dell\'Unità 1 NON modificabile';
$string['nonvalidcharactersinnumber'] = 'Caratteri NON validi nel numero';
$string['notenoughanswers'] = 'Devi inserire almeno una risposta.';
$string['nounitdisplay'] = 'Senza valutazione unità';
$string['numericalmultiplier'] = 'Moltiplicatore';
$string['numericalmultiplier_help'] = 'Il moltiplicatore è il fattore per il quale la risposta numerica corretta verrà moltiplicata.

La prima unità (Unità 1) ha un moltiplicatore default pari a 1. Per cui se la risposta numerica corretta è 5500 e si è impostato W come unità nella Unità 1, che ha 1 come moltiplicatore default, la risposta corretta è 5500 W.

Se si aggiunge l\'unità kW con un moltiplicatore di 0,001, questo aggiungerà una risposta corretta di 5,5 kW. Questo significa che le risposte 5500W e 5,5kW saranno entrambi corrette.

Da notare che sarà anche moltiplicato l\'errore accettabile, così che un errore accettabile di 100W diventerà un errore di 0,1kW.';
$string['oneunitshown'] = 'L\'unità 1 è visualizzata automaticamente accanto alla casella della risposta.';
$string['onlynumerical'] = 'Le unità non vengono usate. Sarà valutato solo il valore numerico.';
$string['pleaseenterananswer'] = 'Per favore inserisci una risposta';
$string['pleaseenteranswerwithoutthousandssep'] = 'Per favore inserisci la tua risposta senza il separatore delle migliaia ({$a}).';
$string['pluginname'] = 'Numerica';
$string['pluginname_help'] = 'Dal punto di vista dello studente una domanda numerica appare come una domanda a risposta breve. La differenza è che le risposte numeriche possono avere un errore accettabile. Questo consente che un intero range di risposte possano essere valutate come una sola risposta. Per esempio, se la risposta è 10 con un errore accettabile di 2, ogni numero tra 8 e 12 sarà accettato come corretto.';
$string['pluginname_link'] = 'question/type/numerical';
$string['pluginnameadding'] = 'Creazione domanda Numerica';
$string['pluginnameediting'] = 'Modifica domanda Numerica';
$string['pluginnamesummary'] = 'Consente l\'uso di risposte numeriche, possibilmente con unità, valutate rispetto a modelli di risposta, possibilmente con tolleranza.';
$string['privacy:metadata'] = 'Il plugin di tipo domanda numerica consente agli autori delle domande di impostare opzioni predefinite come preferenze utente.';
$string['privacy:preference:defaultmark'] = 'Punteggio di default di una specifica domanda.';
$string['privacy:preference:multichoicedisplay'] = 'Opzione per visualizzare le unità come elemento di immissione testo, selezione a scelta multipla o menu a discesa.';
$string['privacy:preference:penalty'] = 'Penalità per ogni tentativo errato quando le domande vengono eseguite utilizzando il comportamento \'Interattivo con tentativi multipli\' o \'Modalità adattiva\'.';
$string['privacy:preference:unitgradingtypes'] = 'Opzione per applicare la penalità unitaria si applica come frazione (0-1) del voto della risposta o del voto della domanda.';
$string['privacy:preference:unitpenalty'] = 'Applicazione della frazione (0-1) sulla valutazione della risposta o sulla valutazione della domanda';
$string['privacy:preference:unitrole'] = 'Opzione per indicare se l\'unità è essenziale, facoltativa o non prevista.';
$string['privacy:preference:unitsleft'] = 'Opzione di visualizzazione dell\'unità, a sinistra (ad esempio $, £) oppure a destra (ad esempio kg, km, cm).';
$string['relative'] = 'Relativo';
$string['rightexample'] = 'a destra, ad esempio  come 1.00cm or 1.00km';
$string['selectunit'] = 'Scegli una unità';
$string['selectunits'] = 'Seleziona unità';
$string['studentunitanswer'] = 'Le unità sono inserite usando';
$string['tolerancetype'] = 'Tipo di tolleranza';
$string['unit'] = 'Unità';
$string['unitappliedpenalty'] = 'Questi punteggi includono una penalità di {$a} per unità errata.';
$string['unitchoice'] = 'selezione a scelta multipla';
$string['unitedit'] = 'Modifica unità';
$string['unitgraded'] = 'Le unità devono essere date e saranno oggetto di valutazione';
$string['unithandling'] = 'Gestione unità';
$string['unitincorrect'] = 'Non hai fornito l\'unità corretta.';
$string['unitmandatory'] = 'Obbligatorio';
$string['unitmandatory_help'] = '* La risposta sarà valutata in base all\'unità scritta

* La penalità sarà applicata se il campo per le unità rimane vuoto';
$string['unitnotselected'] = 'Devi selezionare una unità';
$string['unitonerequired'] = 'Devi selezionare almeno una unità';
$string['unitoptional'] = 'Unità opzionale';
$string['unitoptional_help'] = '* verrà utilizzata l\'unità specificata nel campo corrispondente

* se l\'unità non sarà riportata correttamente, o risulterà comunque sconosciuta, la risposta non sarà considerata valida';
$string['unitpenalty'] = 'Penalità per unità';
$string['unitpenalty_help'] = 'La penalità sarà applicata se

* un nome unità errato viene inserito nello spazio previsto per l\'unità oppure
 * un\'unità viene inserita nello spazio previsto per il valore';
$string['unitposition'] = 'Posizione unità';
$string['units'] = 'Unità';
$string['unitselect'] = 'menu a discesa';
$string['unitx'] = 'Unità {no}';
$string['xmustbenumeric'] = '{$a} deve essere un numero.';
$string['xmustnotbenumeric'] = '{$a} non può essere un numero.';
$string['youmustenteramultiplierhere'] = 'Deve essere inserito un moltiplicatore.';
