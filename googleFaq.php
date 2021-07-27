<!-- Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php

$faq = [
  [
    "domanda" => ["Come state implementando la recente decisione della Corte di giustizia dell'Unione europea (CGUE) relativa al diritto all'oblio?"],
    "risposta" => ["La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.",

    "Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura    complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati   personali ed il diritto di tutti di conoscere e distribuire le informazioni.",

    "Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua     richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po' di tempo perché abbiamo già ricevuto tante richieste simili)    . Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi     è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza     professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse     e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d'accordo    con la nostra valutazione, puoi rivolgerti all'Autorità garante per la protezione dei dati personali nel tuo paese.",

    "Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio.     La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo    anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.",

    "Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle    leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le   pagine che sono state soggette a una rimozione."]
    ],
  [
    "domanda" => ["Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?"],
    "risposta" => ["Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.",

    "Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.",
    
    "Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.",
    
    "Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo."]
  ],
  [
    "domanda" => ["Perché il mio account è associato a un paese?"],
    "risposta" => ["Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",

    "<ol>
      <li>La società consociata Google che offre i servizi, tratta le tue informazioni ed è responsabile del rispetto delle leggi sulla privacy   vigenti. Generalmente Google offre i propri servizi per i consumatori tramite una delle due società seguenti:
      
        <ol type='a'><br>
          <li>Google Ireland Limited, se gli utenti sono residenti nello Spazio economico europeo (paesi dell'Unione europea, oltre a Islanda,  Liechtenstein e Norvegia) o in Svizzera.</li><br>
          <li>Google LLC, con sede negli Stati Uniti, per il resto del mondo.</li><br>
        </ol> </li>
      <li>La versione dei termini che regola il nostro rapporto, che può variare in base alle leggi locali.</li>
    </ol>", 

    "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è    associato il tuo account.
    Stabilire il paese associato al tuo account",

    "Quando crei un nuovo Account Google, lo associamo a un paese in base a dove è stato creato. Per quanto riguarda gli account creati almeno un anno fa,     usiamo il paese da cui accedi solitamente ai servizi Google, in genere i servizi in cui hai trascorso più tempo nell'ultimo anno.",

    "I viaggi frequenti solitamente non influiscono sul paese associato al tuo account. Se ti trasferisci in un altro paese, potrebbe occorrere circa un     anno per aggiornare l'associazione del paese.",

    "Se il paese associato al tuo account non corrisponde al tuo paese di residenza, il motivo potrebbe essere la differenza tra il paese in cui lavori e    il paese in cui risiedi, l'installazione di una rete privata virtuale (VPN) per mascherare il tuo indirizzo IP oppure la residenza vicino a un    confine territoriale. Contattaci se ritieni che il paese associato al tuo account sia sbagliato."]
  ],
  [
    "domanda" => ["Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?"],
    "risposta" => ["I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni."]
  ],
  [
    "domanda" => ["Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?"],
    "risposta" => ["In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell'URL referrer potrebbero essere disponibili mediante Google Analytics o un'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all' esatte parole chiave che hanno determinato il clic su un annuncio."]
  ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- link bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <!-- link font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 

  <link rel="stylesheet" href="css/style.css">
  <title>Google faq</title>
</head>
<body>

<header>
  <div class="container-fluid">
    <div class="top d-flex justify-content-between">
      <div class="left d-flex align-items-center m-3">
        <img src="img/google.png" alt="logo google">
        <div>
          <strong class="ms-3">Privacy e termini</strong> 
        </div>
      </div>

      <div class="right d-flex align-items-center m-3">
        <i class="fas fa-th"></i>
        <div class="ava ms-3">
          <img src="img/avatar.webp" alt="">
        </div>
      </div>
    </div>
    <div class="bottom d-flex justify-content-start">
      <a href="#" class="mx-3">Introduzione</a>
      <a href="#" class="mx-3">Norme sulla privacy</a>
      <a href="#" class="mx-3">Termini di servizio</a>
      <a href="#" class="mx-3">Tecnologie</a>
      <a href="#" class="mx-3 pb-2">Domande frequenti</a>
    </div>
  </div>
</header>

<main>
  <div class="container-lg">



    <?php
      foreach($faq as $singleFaq){ ?>

      <h4><?php foreach($singleFaq['domanda'] as $domanda){
        echo $domanda;
      } ?></h4>

      <!-- essendo "risposta" un array di oggetti, lo ciclo per creare più paragrafi ed avere la giusta spaziatura -->
      <?php foreach($singleFaq['risposta'] as $risposta){ ?> 
        <p>
          <?php echo $risposta; ?>
        </p>
      <?php } ?>

      <?php 
    } ?>

  </div>

</main>

<footer>
  <div class="container-lg py-3 d-flex justify-content-between">

    <div class="left">
      <ul class="d-flex align-items-center">
        <li>Google</li>
        <i class="fas fa-circle"></i>
        <li>Tutto su Google</li>
        <i class="fas fa-circle"></i>
        <li>Privacy</li>
        <i class="fas fa-circle"></i>
        <li>Termini</li>
      </ul>
    </div>

    <div class="right d-flex align-items-center">
      <i class="fas fa-globe"></i>
      <div class="btn btn-outline-secondary d-flex justify-content-between align-items-center ms-2">
        Italiano
        <i class="fas fa-angle-down"></i>
      </div>
    </div>

  </div>
</footer>
  
</body>
</html>