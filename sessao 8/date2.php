<?php


setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");

//LC_ALL - mude toda a configuração local para portugues 
//no linux é diferente por isso o ideal é inserir todas as configuraçoes para nao dar problema

echo ucwords(strftime("%A %B"));// %A-Representação textual completa do dia e %B-Nome completo do mês, baseado no idioma

//strftime — Formata uma hora/data de acordo com as configurações locais

?>