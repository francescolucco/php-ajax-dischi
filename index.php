<!-- Esercizio di Natale: PHP Ajax Dischi
cartella/repo php-ajax-dischi
Stampare a schermo una decina di dischi musicali (vedi screenshot).
Utilizzare:
Html/CSS, JS, VueJS (CDN), PHP
Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, che stampa direttamente i dischi in pagina: al caricamento della pagina ci saranno tutti i dischi.
Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus:
Attraverso un’altra chiamata api, filtrare gli album per genere
Riposate che ve lo siete meritato ma tenete anche fresco tutto!
AUGURI a tuttə!!! :occhiolino:  :tada::sassofono: -->

<?php
include_once __DIR__ .'./db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Vue Slider</title>
</head>

<body>
  <div id="app">
    <div class="container">
      <div class="row">
        <?php foreach($db as $disco){ ?>
        <div class="col-3 p-2">
          <div class="box">
            <img src="<?php echo $disco['image']  ?>" alt="">
            <h2 class="title"><?php echo $disco['title'] ?></h2>
            <p><?php echo $disco['text'] ?></p>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
  <script src="js/vue.js"></script>
</body>
</html>




