Ciao a tutti!
Esercizio di oggi: PHP Strong Password Generator
nome repo: php-strong-password-generator
*Descrizione*
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
*Milestone 1*
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php.
In Allegato avete un esempio di form nel caso non aveste fantasia.
*Milestone 2*
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale
*Milestone 3 (BONUS)*
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
*Milestone 4 (BONUS)*
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
Ricordatevi di fare sempre il file README.md
NUMERO DI PUSH MINIMO: 7

1. creo stuttura index con un form per l'utente

2. tramite get ottengo un numero da 6 a 25 dall utente

3. una volta ottenuto il numero , creo una function che mi genera un tot di numeri,caratterli e lettere

4. una volta creata dico alla function che questo array deve rispettare la lunghezza inserita dall'utente

5. stampo il result