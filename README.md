# UniSist - Software di gestione dei corsi di un'università
Progetto scolastico in MySQL, PHP, HTML e Bootstrap per la gestione di corsi universitari

## Cartelle di progetto

<ul>
<li> <strong> API </strong>: contiene le API che possono essere richiamate dal front-end </li>
<li> <strong> MODEL </strong>: contiene le classi con le query che devono essere eseguite al richiamo delle API </li>
<li> <strong> CONNECT </strong>: contiene la classe che esegue la connessione al database MySQL </li>
<li> <strong> DATABASE </strong>: contiene lo script del database </li>
<li> <strong> DATA </strong>: contiene i dati grezzi che permettono di popolare il database </li>
<li> <strong> HANDLERS </strong>: permettono l'interfacciamento fra il front-end e le API </li>
<li> <strong> VIEWS </strong>: contiene le pagine che verranno visualizzate nel front-end </li>
</ul>

## File della cartella principale

<ul>
<li> <strong> index.php </strong>: è il file di base con il collegamento alle librerie di Bootstrap e JQuery in CDN </li>
<li> <strong> main.php </strong>: gestisce il routing fra le pagine che compongono il software </li>
<li> <strong> header.php </strong>: contiene l'intestazione delle pagine che compongono il software </li>
<li> <strong> footer.php </strong>: contiene il footer che compongono il software</li>
<li> <strong> style.css </strong>: contiene particolari formattazioni dello stile, non già presenti nelle librerie di Bootrastrp </li>
</ul>

