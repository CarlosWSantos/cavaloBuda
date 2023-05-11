<?php

        /*
        * @param STRING
        * @param INT (VALOR MÍNIMO)
        * @param INT (VALOR MÁXIMO)
        */
        function valida_tamanho_da_string($palavra, $tamanho_min, $tamanho_max){
            if(strlen($palavra) < $tamanho_min OR strlen($palavra) > $tamanho_max){
                return false;
            }else{
                return true;
            }
        }


         //FUNÇÃO QUE VERIFICA SE A STRING ESTÁ VAZIA OU É IGUAL A NULL
         function verifica_string_vazia($string){
            if(empty($string) OR $string == NULL){
                return false;
            }else{
                return true;
            }
        }





