// Utilizamos el bucle for para generar las horas:

/* El let es mejor en estos casos, ya que el let se queda dentro y no sirve fuera del código. 
Tiene que estar dentro de una instrucción y solo es válida ahí. */

// Copiar y pegarlo dentro del index6.html

for (let hora = 9; hora <= 21; hora++) {
    for (let minuto = 0; minuto < 60; minuto += 5) {
        // Convertimos la hora y el minuto a formato de 24 horas
        let horaFormato24 = (hora < 10 ? '0' : '') + hora;
        let minutoFormato = (minuto < 10 ? '0' : '') + minuto;

        // Mostramos la hora en el HTML utilizando document.write
        document.write('Hora: ' + horaFormato24 + ':' + minutoFormato + '<br>');
    }
}