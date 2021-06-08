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
 * Strings for component 'adaptivequiz', language 'es', version '3.11'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Reporte de intentos';
$string['adaptivequiz:addinstance'] = 'Añadir un nuevo cuestionario adaptativo';
$string['adaptivequiz:attempt'] = 'Complete el cuestionario adaptativo';
$string['adaptivequiz:reviewattempts'] = 'Revise los envíos del cuestionario adaptativo';
$string['adaptivequiz:viewreport'] = 'Ver los reportes del cuestionario adaptativo';
$string['adaptivequizname'] = 'Nombre';
$string['adaptivequizname_help'] = 'Introduzca el nombre del cuestionario adaptativo';
$string['all_attempts_deleted'] = 'Todos los intentos del cuestionario adaptativo han sido borrados';
$string['all_grades_removed'] = 'Todos las calificaciones de cuestionarios adaptativos han sido borradas';
$string['answer'] = 'Respuesta';
$string['answerdistgraph_numrightwrong'] = 'Número incorrecto (-)  /   Número correcto (+)';
$string['answerdistgraph_questiondifficulty'] = 'Nivel de pregunta';
$string['answerdistgraph_title'] = 'Distribución de respuesta para  {$a->firstname} {$a->lastname}';
$string['answers_display_name'] = 'Respuestas';
$string['attempt_questiondetails'] = 'Detalles de la pregunta';
$string['attempt_state'] = 'Estado del intento';
$string['attempt_summary'] = 'Resumen del intento';
$string['attempt_user'] = 'Usuario/a';
$string['attemptclosed'] = 'Los intentos han sido cerrados manualmente.';
$string['attemptclosedstatus'] = 'Cerrados manualmente por {$a->current_user_name} (user-id: {$a->current_user_id}) en {$a->now}.';
$string['attemptdeleted'] = 'Intento eliminado para {$a->name} submitted on {$a->timecompleted}';
$string['attemptfeedback'] = 'Retroalimentación del intento';
$string['attemptfeedback_help'] = 'La retroalimentación del intento se muestra al usuario una vez finalizado el intento';
$string['attemptfinishedtimestamp'] = 'Hora de finalización del intento';
$string['attemptfirst'] = 'Primer intento';
$string['attemptlast'] = 'Último intento';
$string['attemptquestion_ability'] = 'Medida de capacidad';
$string['attemptquestion_abilitylogits'] = 'Capacidad medida (logits)';
$string['attemptquestion_difficulty'] = 'Dificultad de la pregunta (logits)';
$string['attemptquestion_error'] = 'Error estándar (&plusmn;&nbsp;x%)';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Correcto/Incorrecto';
$string['attemptquestion_stderr'] = 'Error estándar (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptsallowed_help'] = 'Número de veces que un estudiante puede intentar esta actividad';
$string['attemptstarttime'] = 'Hora de inicio del intento';
$string['attemptstate'] = 'Estado del intento';
$string['attemptstopcriteria'] = 'Razón para detener el intento';
$string['attempttotaltime'] = 'Tiempo total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Regresar a todas las preguntas';
$string['backtomainreport'] = 'Volver a los informes principales';
$string['backtoviewattemptreport'] = 'Regresar a ver el reporte de intentos';
$string['backtoviewreport'] = 'Volver a los informes principales';
$string['bestscore'] = 'Mejor puntuación';
$string['bestscorestderror'] = 'Error estándar';
$string['browsersecurity'] = 'Seguridad del navegador';
$string['browsersecurity_help'] = 'Si se selecciona "Ventana emergente de pantalla completa con algo de seguridad de JavaScript", la prueba solo comenzará si el estudiante tiene un navegador web habilitado para JavaScript, la prueba aparece en una ventana emergente de pantalla completa que cubre todas las demás ventanas y no tiene navegación, los controles y los estudiantes no pueden, en la medida de lo posible, utilizar funciones como copiar y pegar';
$string['closeattempt'] = 'Cerrar intento';
$string['completeattempterror'] = 'Error al intentar completar el registro del intento';
$string['confirmcloseattempt'] = '¿Estás seguro de que deseas cerrar este intento de {$a->name}?';
$string['confirmcloseattemptscore'] = 'Se respondieron {$a->num_questions} preguntas y la puntuación hasta ahora es {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Este intento se inició el {$a->started} y se actualizó por última vez el {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando la eliminación del intento de {$ a-> name} enviado el {$ a-> timecompleted}';
$string['deleteattemp'] = 'Eliminar intento';
$string['downloadcsv'] = 'Descargar CSV';
$string['enterrequiredpassword'] = 'Ingrese la contraseña requerida';
$string['errorattemptstate'] = 'Hubo un error al determinar el estado del intento';
$string['errorclosingattempt'] = 'No se encontró un registro del intento';
$string['errorclosingattempt_alreadycomplete'] = 'El intento ya ha sido finalizado; no puede ser cerrado manualmente.';
$string['errordeletingattempt'] = 'No se encontró un registro del intento!';
$string['formelementdecimal'] = 'Ingrese un número decimal. Máximo 10 dígitos de longitud total y con hasta 5 dígitos a la derecha del punto decimal.';
$string['formelementempty'] = 'Ingrese un entero positivo entre 1 y 999';
$string['formelementnegative'] = 'Ingrese un número positivo entre 1 y 999';
$string['formelementnumeric'] = 'Ingrese un valor numérico entre 1 y 999';
$string['formlowlevelgreaterthan'] = 'El nivel más bajo debe ser inferior al nivel más alto';
