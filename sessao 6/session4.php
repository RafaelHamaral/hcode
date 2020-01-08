<?php
//criando uma funcao nativa do php para forcar que seja criado uma nova sessao

session_id('v2gl6palq951mmn889u2r6hfp4');/* recuperar uma sessao (antes de session_start();) - vai mostrar o valor
 Hcode configurado quando criado a sessao (nao vai mostrar essa chave)*/
                                            
require_once("config.php");

session_regenerate_id();//funcao que gera novamente um id de sessao

echo session_id();//toda vez que eu atualizar a pagina vai gerar um id novo

var_dump($_SESSION);//visualizar todo o array super global da sessao


/* se um hacker descobrir o id de sessao ele consegue "pegar" os valores da sessao de ouro usuario.
https:// entre outros recursos ele tambem vai encriptar o id de sessao do usuario 
*/

?>