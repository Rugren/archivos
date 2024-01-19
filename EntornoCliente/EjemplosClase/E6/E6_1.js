function rombo(numero){
    for (f= 1; f<= numero; f++) // controla saltos de linea
    {
        for(c=1;c<=numero-f;c++) // controla espacios de la izquierda
            if(f > 2 && f % 2 != 0 || f == 1){
                document.write("&nbsp"); // si esta el 1 crea espacios hasta 5 f= 6-1
            }
        for (c=1;c<=f;c++){ // controla asteriscos
            if(f ==1){
                document.write("*"); // si está en el primero coge asteriscos f=1
            }
            if(f > 2 && f % 2 != 0){
                // cuando el número es 3 o mayor
                if(c == 1 || c == f){
                    documedocument.write("*");
                }else{
                    document.write("&nbsp" + "&nbsp");
                }
            }
        }
            if(f > 2 && c % 2 !=0 || f == 1 || c == 1){
                document.write("<br>"); // si está en el primero coge asteriscos f=1
            }
    }
    if(numero % 2 == 0){
        f = numero;
    }else{
        document.write("<br>");
        if(numero >=5){
            f = numero - 2;
        }else{
            f = --numero;
        }
    }

    for(f;f>=1;f--) // controla saltos de línea
    {
        for(c=1;c<=numero-f;c++) // controla espacios
            if(f > 2 && f % 2 !=0 || f == 1){
                document.write("&nbsp"); // si el primero coge asteriscos con c=1
            }
        for (c=f; c>=1; c--){ // controla asteriscos 
        if(f == 1){
            document.write("*"); // si está en el primero coge asteriscos f = 1
        }
        if(f > 2 && f % 2 !=0){
            // cuando el número es 3 o mayor
            if(c == 1 || c == f){
                    documedocument.write("*");
                }else{
                    document.write("&nbsp" + "&nbsp");
                }
            }
        }
        if(f > 2 && f % 2 !=0 || f == 1){
            document.write("</br>"); // cuando acaban los espacios y los asteriscos hace un salto
        }
    }
}

rombo(9);