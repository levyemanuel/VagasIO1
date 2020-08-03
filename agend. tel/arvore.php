<! DOCTYPE html >
< html  lang = " pt-br " >
< cabeça >
    < meta  charset = " UTF-8 " >
    < link  rel = " folha de estilo " href = " arv.css " >
    < Título > Agenda Telefônica </ title >
    <? php
    $ gestao = 'Conselho de Gestão' ;
    $ ceo = 'CEO' ;
    $ secExec = 'Secretaria Executiva' ;
    $ cso = 'CSO' ;
    $ cfo = 'CFO' ;
    $ gestMaq = 'Gestor Máquinas' ;
    $ gestCam = 'Gestor Caminhões' ;
    $ gestEngeLog = 'Gestor EngeLog' ;
    $ gestSup = 'Gestor Suprimentos' ;
    ?>
    < script >

    </ script >
</ cabeça >
< corpo >
    < div  class = " content " >
    < div  class = " gestao " >
        <? php  echo  $ gestao ; ?> 
    </ div >
    < div  class = " cont1 " >
        <? php  echo  $ ceo  ?>
        <? php  echo  $ secExec  ?>
    </ div >
    < div  class = " cont2 " >
        <? php  echo  $ cso  ?>
    < div  class = " contCso " >

    </ div >
        <? php  echo  $ cfo  ?>
    </ div >
    </ div >
</ corpo >
</ html >