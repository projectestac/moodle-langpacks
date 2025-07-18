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
 * Strings for component 'adaptivequiz', language 'es', version '4.4'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['abilityestimated'] = 'Habilidad estimada';
$string['abilityestimated_help'] = 'La habilidad estimada de alguien que hizo la prueba se alinea con la dificultad del examen en la cual el examinado tiene una probabilidad de 50% de contestar correctamente la pregunta. Para identificar el nivel de desempeño, hacer coincidir el valor de habilidad con el rango de nivel de preguntas  (vea el rango después del símbolo \'/\' ).';
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
$string['attemptfeedbackdefaulttext'] = 'Has terminado tu intento, gracias por realizar este cuestionario!';
$string['attemptfinishedtimestamp'] = 'Hora de finalización del intento';
$string['attemptfirst'] = 'Primer intento';
$string['attemptlast'] = 'Último intento';
$string['attemptnofirstquestion'] = 'Lo sentimos, pero no se pudo definir la primera pregunta para iniciar el intento; posiblemente el examen esté mal configurado.';
$string['attemptquestion_ability'] = 'Medida de capacidad';
$string['attemptquestion_abilitylogits'] = 'Capacidad medida (logits)';
$string['attemptquestion_difficulty'] = 'Dificultad de la pregunta (logits)';
$string['attemptquestion_diffsum'] = 'Suma de dificultad';
$string['attemptquestion_level'] = 'Nivel de pregunta';
$string['attemptquestion_rightwrong'] = 'Respuesta Correcta/Incorrecta';
$string['attemptquestion_stderr'] = 'Error estándar (&plusmn;&nbsp;logits)';
$string['attemptquestionsprogress'] = 'Progreso de preguntas: {$a}';
$string['attemptquestionsprogress_help'] = 'El número máximo de preguntas mostradas aquí no necesariamente es el número de preguntas que usted tiene que tomar durante el examen. Esto es el MÁXIMO POSIBLE número de preguntas que usted podría tomar, pero el examen podría terminar más pronto si la medida de habilidad está suficientemente definida.';
$string['attemptsallowed'] = 'Intentos permitidos';
$string['attemptsallowed_help'] = 'Número de veces que un estudiante puede intentar esta actividad';
$string['attemptstarttime'] = 'Hora de inicio del intento';
$string['attemptstate'] = 'Estado del intento';
$string['attemptstopcriteria'] = 'Razón para detener el intento';
$string['attemptsusernoprevious'] = 'Usted no ha intentado realizar este cuestionario aún.';
$string['attemptsuserprevious'] = 'Sus intentos anteriores';
$string['attempttotaltime'] = 'Tiempo total (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Regresar a todas las preguntas';
$string['bestscore'] = 'Mejor puntuación';
$string['bestscorestderror'] = 'Error estándar';
$string['browsersecurity'] = 'Seguridad del navegador';
$string['browsersecurity_help'] = 'Si se selecciona "Ventana emergente de pantalla completa con algo de seguridad de JavaScript", la prueba solo comenzará si el estudiante tiene un navegador web habilitado para JavaScript, la prueba aparece en una ventana emergente de pantalla completa que cubre todas las demás ventanas y no tiene navegación, los controles y los estudiantes no pueden, en la medida de lo posible, utilizar funciones como copiar y pegar';
$string['calcerrorwithinlimits'] = 'El error estándar calculado de {$a->calerror} está dentro de los límites marcados por la actividad {$a->definederror}';
$string['closeattempt'] = 'Cerrar intento';
$string['completionattemptcompletedcminfo'] = 'Completar un intento';
$string['completionattemptcompletedform'] = 'El estudiante debe tener al menos un intento completado en esta actividad';
$string['confirmcloseattempt'] = '¿Estás seguro de que deseas cerrar este intento de {$a->name}?';
$string['confirmcloseattemptscore'] = 'Se respondieron {$a->num_questions} preguntas y la puntuación hasta ahora es {$a->measure} {$a->standarderror}.';
$string['confirmcloseattemptstats'] = 'Este intento se inició el {$a->started} y se actualizó por última vez el {$a->modified}.';
$string['confirmdeleteattempt'] = 'Confirmando la eliminación del intento de {$ a-> name} enviado el {$ a-> timecompleted}';
$string['deleteattemp'] = 'Eliminar intento';
$string['discrimination_display_name'] = 'Discriminación';
$string['downloadcsv'] = 'Descargar CSV';
$string['enterrequiredpassword'] = 'Introduzca la contraseña requerida';
$string['errorattemptstate'] = 'Hubo un error al determinar el estado del intento';
$string['errorclosingattempt_alreadycomplete'] = 'El intento ya ha sido finalizado; no puede ser cerrado manualmente.';
$string['errorfetchingquest'] = 'No se pudo obtener una pregunta para el nivel {$a->level}';
$string['errorlastattpquest'] = 'Error en la comprobación del valor de la respuesta para la última pregunta intentada';
$string['errornumattpzero'] = 'Error con el número de preguntas intentadas ya que es igual a cero, pero el usuario envió una respuesta a la pregunta anterior';
$string['errorsumrightwrong'] = 'La suma de las respuestas correctas e incorrectas no equivale al número total de preguntas intentadas';
$string['eventattemptcompleted'] = 'Intento completado';
$string['formelementdecimal'] = 'Introduzca un número decimal. Máximo 10 dígitos de longitud total y con hasta 5 dígitos a la derecha del punto decimal.';
$string['formelementempty'] = 'Introduzca un entero positivo entre 1 y 999';
$string['formelementnegative'] = 'Introduzca un número positivo entre 1 y 999';
$string['formelementnumeric'] = 'Introduzca un valor numérico entre 1 y 999';
$string['formlowlevelgreaterthan'] = 'El nivel más bajo debe ser inferior al nivel más alto';
$string['formminquestgreaterthan'] = 'El número mínimo de preguntas debe ser inferior al número máximo de preguntas';
$string['formquestionpool'] = 'Seleccione, al menos, una categoría de pregunta';
$string['formstartleveloutofbounds'] = 'El nivel de inicio debe ser un número entre el nivel más bajo y el más alto';
$string['formstderror'] = 'Debe introducir un porcentaje menor que 50 y mayor o igual que 0';
$string['functiondisabledbysecuremode'] = 'Esa funcionalidad está actualmente deshabilitada';
$string['gradehighest'] = 'Calificación más alta';
$string['grademethod'] = 'Método de calificación';
$string['grademethod_help'] = 'Cuando se permiten múltiples intentos, para calcular la nota final del cuestionario están disponibles los siguientes métodos:

* Nota más alta de todos los intentos
* Primer intento (el resto de intentos se ignoran)
* Último intento (el resto de intentos se ignoran)';
$string['graphlegend_error'] = 'Error estándar';
$string['highestlevel'] = 'Nivel más alto de dificultad';
$string['highestlevel_help'] = 'El nivel más alto de dificultad que pueden tener las preguntas seleccionadas para esta tarea. Durante un intento la actividad no sobrepasará este nivel de dificultad';
$string['highlevelusers'] = 'Usuarios por encima del nivel de pregunta';
$string['id'] = 'ID';
$string['indvuserreport'] = 'Informe de intentos individuales de usuario para {$a}';
$string['leveloutofbounds'] = 'El nivel solicitado {$a->level} está fuera de los límites para el intento';
$string['lowestlevel'] = 'Nivel más bajo de dificultad';
$string['lowestlevel_help'] = 'El nivel más alto de dificultad que pueden tener las preguntas seleccionadas para esta tarea. Durante un intento la actividad no bajará este nivel de dificultad';
$string['lowlevelusers'] = 'Usuarios por debajo del nivel de pregunta';
$string['maximumquestions'] = 'Número máximo de preguntas';
$string['maximumquestions_help'] = 'El número máximo de preguntas que el estudiante puede intentar';
$string['maxquestattempted'] = 'Número máximo de preguntas intentadas';
$string['midlevelusers'] = 'Usuarios cerca del nivel de pregunta';
$string['minimumquestions'] = 'Número mínimo de preguntas';
$string['minimumquestions_help'] = 'El número mínimo de preguntas que el estudiante puede intentar';
$string['missingtagprefix'] = 'Falta el prefijo de etiqueta';
$string['modformshowattemptprogress'] = 'Mostrar progreso del examen a estudiantes';
$string['modformshowattemptprogress_help'] = 'Cuando es seleccionado, un estudiante verá una barra de progreso que ilustra cuantas preguntas están contestadas del número máximo.';
$string['modulename'] = 'Cuestionario adaptado';
$string['modulename_help'] = 'La actividad Cuestionario Adaptativo, en inglés Adaptive Quiz, permite al profesor crear pruebas que miden de manera eficiente las habilidades de los participantes. Los cuestionarios adaptativos se componen de preguntas seleccionadas del banco de preguntas que están etiquetadas con una puntuación de dificultad. Las preguntas se eligen para que coincidan con el nivel de capacidad estimado del examinado actual. Si el examinado tiene éxito en una pregunta, a continuación se presenta una pregunta más desafiante. Si el examinado responde una pregunta incorrectamente, a continuación se presenta una pregunta menos desafiante. Esta técnica se desarrollará en una secuencia de preguntas que convergerán en el nivel de capacidad efectiva del examinado. La prueba se detiene cuando se determina la capacidad del examinado con la precisión requerida.

Esta actividad es más adecuada para determinar una medida de capacidad a lo largo de una escala unidimensional. Si bien la escala puede ser muy amplia, todas las preguntas deben proporcionar una medida de capacidad o aptitud en la misma escala. En una prueba de nivel, por ejemplo, las preguntas de nivel inferior en la escala que los principiantes pueden responder correctamente también deberían ser respondidas por expertos, mientras que las preguntas de nivel más alto de la escala solo deberían ser respondidas por expertos o por una suposición afortunada. Las preguntas que no discriminan entre participantes de diferentes habilidades harán que la prueba sea ineficaz y pueden proporcionar resultados no concluyentes.

Las preguntas utilizadas en el cuestionario adaptativo deben

  * calificarse automáticamente como correcto/incorrecto
  * ser etiquetadas con su dificultad al usar \'adpq_\' seguido de un número entero positivo que esté dentro del rango del cuestionario

El cuestionario adaptativo se puede configurar para

  * definir el rango de preguntas-dificultades/habilidades del usuario que se medirán. 1-10, 1-16 y 1-100 son ejemplos de rangos válidos.
  * definir la precisión requerida antes de que se detenga el cuestionario. Con frecuencia, un error del 5% en la medida de la capacidad es una regla de parada adecuada.
  * requieren un número mínimo de preguntas a ser respondidas.
  * requieren un número máximo de preguntas que puedan ser respondidas

Esta descripción y el proceso de prueba en esta actividad se basan en <a href="http://www.rasch.org/memo69.pdf">Computer-Adaptive Testing: A Methodology Whose Time Has Come</a> by John Michael Linacre, Ph.D. MESA Psychometric Laboratory - University of Chicago. MESA Memorandum No. 69.';
$string['modulenameplural'] = 'Cuestionario adaptado';
$string['na'] = 'n/a';
$string['name'] = 'Nombre';
$string['noattemptsallowed'] = 'No se permiten más intentos en esta actividad';
$string['nonewmodules'] = 'No se encontraron instancias de Cuestionario adaptado';
$string['nopermission'] = 'No tiene permiso para ver este recurso';
$string['notinprogress'] = 'Este intento no está en curso.';
$string['notyourattempt'] = 'Este no es su intento en la actividad';
$string['numofattemptshdr'] = 'Número de intentos';
$string['percent_correct_display_name'] = '% Correctas';
$string['pluginadministration'] = 'Cuestionario adaptado';
$string['pluginname'] = 'Cuestionario adaptado';
$string['question_report'] = 'Análisis de pregunta';
$string['questionanalysisbtn'] = 'Análisis de pregunta';
$string['questionnumber'] = 'Pregunta #';
$string['questionpool'] = 'Banco de preguntas';
$string['questionpool_help'] = 'Seleccione la(s) categoría(s) de pregunta de donde se obtendrán las preguntas para la actividad durante un intento.';
$string['questions_report'] = 'Informe de preguntas';
$string['questionsattempted'] = 'Suma de preguntas intentadas';
$string['questionspoolerrornovalidstartingquestions'] = 'Las categorías de pregunta seleccionadas no contienen preguntas que estén marcadas apropiadamente para coincidir con el nivel inicial de dificultas seleccionado.';
$string['recentactquestionsattempted'] = 'Preguntas intentadas: {$a}';
$string['recentattemptstate'] = 'Estado del intento:';
$string['recentcomplete'] = 'Completado';
$string['recentinprogress'] = 'En progreso';
$string['reportanswersdistributionchartdisplaystacked'] = 'Barras de visualización apiladas';
$string['reportanswersdistributionchartnumrightlabel'] = 'Número de respuestas correctas';
$string['reportanswersdistributionchartnumwronglabel'] = 'Número de respuestas incorrectas';
$string['reportanswersdistributionchartxaxislabel'] = 'Dificultad de la pregunta';
$string['reportanswersdistributionchartyaxislabel'] = 'Número de respuestas';
$string['reportattemptadmanswerright'] = 'C';
$string['reportattemptadmanswerwrong'] = 'W';
$string['reportattemptadmchartadmdifflabel'] = 'Dificultad Administrada';
$string['reportattemptadmcharttargetdifflabel'] = 'Dificultad objetivo';
$string['reportattemptanswerdistributiontab'] = 'Distribución de Respuesta';
$string['reportattemptgraphtab'] = 'Gráfica de Intento';
$string['reportattemptgraphtabletitle'] = 'Vista de Tabla de Gráfica de Intento';
$string['reportattemptquestionsdetailstab'] = 'Detalles de la pregunta';
$string['reportattemptreviewpageheading'] = '{$a->quizname} - revisando intento por {$a->fullname} enviado en {$a->finished}';
$string['reportattemptsbothenrolledandnotenrolled'] = 'todos los usuarios que alguna vez hicieron intentos';
$string['reportattemptsdownloadfilename'] = '{$a}_attempts_report';
$string['reportattemptsenrolledwithattempts'] = 'participantes que hicieron intentos';
$string['reportattemptsenrolledwithnoattempts'] = 'participantes que NO hicieron intentos';
$string['reportattemptsfilterformheader'] = 'Filtrando';
$string['reportattemptsfilterformsubmit'] = 'Filtro';
$string['reportattemptsfilterincludeinactiveenrolments'] = 'Incluir usuarios con inscripciones inactivas';
$string['reportattemptsfilterincludeinactiveenrolments_help'] = 'Si es que se incluyen o no usuarios con inscripciones suspendidas.';
$string['reportattemptsfilterusers'] = 'Mostrar';
$string['reportattemptsnotenrolled'] = 'usuarios no inscritos que hicieron intentos';
$string['reportattemptspersistentfilter'] = 'Filtro persistente';
$string['reportattemptspersistentfilter_help'] = 'Cuando se activa, la configuración inferior del filtro será almacenada al enviar, y entonces será aplicada cada vez que usted visite la página del reporte.';
$string['reportattemptsprefsformheader'] = 'Preferencias de informe';
$string['reportattemptsprefsformsubmit'] = 'Aplicar';
$string['reportattemptsresetfilter'] = 'Reiniciar filtro';
$string['reportattemptsshowinitialbars'] = 'Mostrar barra de iniciales';
$string['reportattemptsummarytab'] = 'Resumen de intentos';
$string['reportattemptsusersperpage'] = 'Número de usuarios a mostrar:';
$string['reportindividualuserattemptpageheading'] = '{$a->quizname} - reporte de intentos de usuario individual para {$a->username}';
$string['reportquestionanalysispageheading'] = '{$a} - informe de preguntas';
$string['reportuserattemptstitleshort'] = '{$a}\'s intentos';
$string['requirepassword'] = 'Contraseña requerida';
$string['requirepassword_help'] = 'Se requiere que los estudiantes introduzcan una contraseña antes de empezar su intento';
$string['requirepasswordmessage'] = 'Para intentar este cuestionario tienes que conocer la contraseña del cuestionario';
$string['resetadaptivequizsall'] = 'Borrar todos los intentos de Cuestionario adaptado';
$string['result'] = 'Resultado';
$string['reviewattempt'] = 'Revisar intento';
$string['reviewattemptreport'] = 'Revisando el intento por {$a->fullname} enviado en {$a->finished}';
$string['score'] = 'Puntuación';
$string['showabilitymeasure'] = 'Mostrar medición de habilidad a los estudiantes';
$string['showabilitymeasure_help'] = 'A veces, podría ser útil revelar las estimaciones de habilidad a los estudiantes después de un examen adaptativo. Con esta configuración habilitada, un estudiante puede ver la estimación de la habilidad en el resumen de los intentos y también  justo después de terminar un intento.';
$string['standarderror'] = 'Error estándar para parar';
$string['standarderror_help'] = 'Cuando el error en la medida de la destreza del usuario se encuentra por debajo de esta cantidad, el cuestionario se detendrá. Ajuste este valor del 5% por defecto para requerir más o menos precisión en la medida de destreza';
$string['standarderrorhdr'] = 'Error estándar';
$string['startattemptbtn'] = 'Comenzar intento';
$string['startinglevel'] = 'Nivel inicial de dificultad';
$string['startinglevel_help'] = 'Cuando el estudiante inicia un intento, la actividad seleccionará al azar una pregunta que coincida con el nivel de dificultad';
$string['statistic'] = 'Estadística';
$string['stopingconditionshdr'] = 'Condiciones de parada';
$string['submitanswer'] = 'Enviar respuesta';
$string['times_used_display_name'] = 'Veces usado';
$string['updateattempterror'] = 'Error al intentar actualizar el registro de intentos';
$string['user'] = 'Usuario';
$string['value'] = 'Valor';
$string['wrongpassword'] = 'Contraseña es incorrecta';
