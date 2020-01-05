<?php

//colocando um select(html) para ficar selecionavel os anos do codigo.

echo "<select>";//html

for ($i=date("Y"); $i >= date("Y") - 100; $i--){

	echo '<option value ="'.$i.'">'.$i.'</option>';//html
}

//para $i = ano atual; enquanto ano atual for maior que ano atual - 100; faça i++

echo "</select>";//html

 
?>