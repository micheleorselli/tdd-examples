slugger 2
--

1. Abbiamo ripreso l'esempio iniziale e abbiamo creato un piccolo programma da linea di comando 

   1. scrivere un test per main.php
   2. che differenze ci sono rispetto al test dello slugger?

2. lo stesso slugger vogliamo utilizzarlo fornendo una api pubblica, che accetta in input un parametro 'string' e restituisce un json 
   1. scrivere un test per server.php
   2. che differenze ci sono rispetto al test dello slugger?

PS: è possibile vedere il server in funziona lanciando il webserver di PHP con il comando

php -S localhost:8000

e aprendo un browser all'indirizzo http://localhost:8000/server.php?string=<la stringa che volete convertire>