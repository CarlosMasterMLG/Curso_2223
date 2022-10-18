<?php
    
        class Calculadora{
            
            function obtenerFactorial($numero){

                $resultado = 1;
                
                if($numero == 0){
                    return 1;
                } elseif($numero > 0){
                    
                    while($numero > 0){
                        $resultado = $resultado * $numero;
                        $numero--;
                    }
                    return $resultado;
                } else{
                    throw new Exception("Introduzca un número mayor o igual a 0");
                }

            }

            function coeficienteBinominial($n, $k){
                // hay que llamar al metodo anterior
                $x = $n - $k;
                $this->obtenerFactorial();
                $resultado = (obtenerFactorial($n))/(obtenerFactorial($k)*obtenerFactorial($x));

                return $resultado;
            }

        }
        

        
    ?>
    