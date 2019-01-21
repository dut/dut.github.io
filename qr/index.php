<!DOCTYPE html>
<html lang="fr-FR" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>210180</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>
  // Pour le bouton FRANCE
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();

      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }

      // Run the effect
      $( "#effectfr" ).toggle( selectedEffect, options, 500 );

      var selectedEffect = $( "#effectTypes" ).val();

      // cacher les autres toggles
      $( "#effecten" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effectes" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effectde" ).hide( "drop", { direction: "down" }, "slow" );
    };

    // Set effect from select menu value
    $( "#buttonfr" ).on( "click", function() {
      runEffect();
    });

  } );


// Pour le bouton ANGLETERRE
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();

      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }

      // Run the effect
      $( "#effecten" ).toggle( selectedEffect, options, 500 );

      // cacher les autres toggles
      $( "#effectfr" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effectes" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effectde" ).hide( "drop", { direction: "down" }, "slow" );
    };

    // Set effect from select menu value
    $( "#buttonen" ).on( "click", function() {
      runEffect();
    });

  } );

// Pour le bouton ESPAGNE
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();

      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }

      // Run the effect
      $( "#effectes" ).toggle( selectedEffect, options, 500 );

      // cacher les autres toggles
      $( "#effectfr" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effecten" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effectde" ).hide( "drop", { direction: "down" }, "slow" );
    };

    // Set effect from select menu value
    $( "#buttones" ).on( "click", function() {
      runEffect();
    });

  } );

// Pour le bouton ALLEMAGNE
  $( function() {
    // run the currently selected effect
    function runEffect() {
      // get effect type from
      var selectedEffect = $( "#effectTypes" ).val();

      // Most effect types need no options passed by default
      var options = {};
      // some effects have required parameters
      if ( selectedEffect === "scale" ) {
        options = { percent: 50 };
      } else if ( selectedEffect === "size" ) {
        options = { to: { width: 200, height: 60 } };
      }

      // Run the effect
      $( "#effectde" ).toggle( selectedEffect, options, 500 );

      // cacher les autres toggles
      $( "#effectfr" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effecten" ).hide( "drop", { direction: "down" }, "slow" );
      $( "#effectes" ).hide( "drop", { direction: "down" }, "slow" );
    };

    // Set effect from select menu value
    $( "#buttonde" ).on( "click", function() {
      runEffect();
    });

  } );
  </script>
  </head>
  <body style="background-color:rgb(7, 36, 78);">
    <header>
      <div class="page-header">

            <div class="titre" style="float: left; font-size: 80px; text-align: center;">


            <?php
            $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2); $lang="fr";

            if ($lang==="fr") {
              ?>
              <b>Documentation<br>du produit</b>
              <?php
            }

            elseif ($lang==="en") {
              ?>
              <b>Product<br>documentation</b>
              <?php
            }

            elseif ($lang==="es") {
              ?>
              <b style="font-size: 78px;">Documentación<br>del producto</b>
              <?php
            }

            elseif ($lang==="de") {
                ?>
                <b style="font-size: 53px;">Produktdokumentation</b>
                <?php
              }

              else {
                ?>
                <b>Product<br>documentation</b>
                <?php
              }
             ?>
           </div>
           <a href="http://www.sf-electric.com/">
           <img src="http://image.noelshack.com/fichiers/2019/03/5/1547799859-esp.jpg" style="float: right; width:40%; height:40%;"alt="210180" class="logo">
           </a>
         </div>
      </header>
    <div class="container-fla">

        <center>
        <img src="https://cdn.countryflags.com/thumbs/france/flag-button-square-250.png" alt="français"  class="flag" width="200px" height="200px" id="buttonfr" class="ui-state-default ui-corner-all">
        <img src="https://cdn.countryflags.com/thumbs/united-kingdom/flag-button-square-250.png" alt="english"  class="flag" width="200px" height="200px" id="buttonen" class="ui-state-default ui-corner-all">
        <img src="https://cdn.countryflags.com/thumbs/spain/flag-button-square-250.png" alt="español"  class="flag" width="200px" height="200px" id="buttones" class="ui-state-default ui-corner-all">
        <img src="https://cdn.countryflags.com/thumbs/germany/flag-button-square-250.png" alt="deutsch"  class="flag" width="200px" height="200px" id="buttonde" class="ui-state-default ui-corner-all">
        <div class="toggler">
<!-- Pour le bouton FRANCE -->
      <div id="effectfr" class="ui-widget-content ui-corner-all">
        <h3 class="ui-widget-header ui-corner-all" >Français</h3>
        <p style="overflow:scroll;">
          <?php
          $nb_fichier = 0;
          echo '<ul>';
          if($dossier = opendir('./FRA'))
          {
            while(false !== ($fichier = readdir($dossier)))
          {
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'Thumbs.db')
          {
            $nb_fichier++; // On incrémente le compteur de 1

            if (strpos($fichier, 'pdf') || strpos($fichier, 'txt')) {
              echo '<li><a href="./FRA/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
            elseif (strpos($fichier, 'png') || strpos($fichier, 'jpg') || strpos($fichier, 'gif')) {
              echo '<li><a href="./FRA/' . $fichier . '">' . "🖼️ ". $fichier . '</a></li>';
            }

            else {
            echo '<li><a href="./FRA/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
          } // On ferme le if (qui permet de ne pas afficher index.php, etc.)

          } // On termine la boucle
          }
           ?>
        </p>
      </div>

<!-- Pour le bouton ANGLETERRE -->
      <div id="effecten" class="ui-widget-content ui-corner-all">
        <h3 class="ui-widget-header ui-corner-all">English</h3>
        <p>
          <?php
          $nb_fichier = 0;
          echo '<ul>';
          if($dossier = opendir('./ANG'))
          {
            while(false !== ($fichier = readdir($dossier)))
          {
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'Thumbs.db')
          {
            $nb_fichier++; // On incrémente le compteur de 1

            if (strpos($fichier, 'pdf') || strpos($fichier, 'txt')) {
              echo '<li><a href="./ANG/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
            elseif (strpos($fichier, 'png') || strpos($fichier, 'jpg') || strpos($fichier, 'gif')) {
              echo '<li><a href="./ANG/' . $fichier . '">' . "🖼️ ". $fichier . '</a></li>';
            }

            else {
              echo '<li><a href="./ANG/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
          } // On ferme le if (qui permet de ne pas afficher index.php, etc.)

          } // On termine la boucle
          }
           ?>
        </p>
      </div>

<!-- Pour le bouton ESPAGNE -->
      <div id="effectes" class="ui-widget-content ui-corner-all">
        <h3 class="ui-widget-header ui-corner-all">Español</h3>
        <p>
          <?php
          $nb_fichier = 0;
          echo '<ul>';
          if($dossier = opendir('./ESP'))
          {
            while(false !== ($fichier = readdir($dossier)))
          {
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'Thumbs.db')
          {
            $nb_fichier++; // On incrémente le compteur de 1

            if (strpos($fichier, 'pdf') || strpos($fichier, 'txt')) {
              echo '<li><a href="./ESP/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
            elseif (strpos($fichier, 'png') || strpos($fichier, 'jpg') || strpos($fichier, 'gif')) {
              echo '<li><a href="./ESP/' . $fichier . '">' . "🖼️ ". $fichier . '</a></li>';
            }

            else {
              echo '<li><a href="./ESP/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
          } // On ferme le if (qui permet de ne pas afficher index.php, etc.)

          } // On termine la boucle
          }
           ?>
        </p>
      </div>

<!-- Pour le bouton ALLEMAGNE -->
      <div id="effectde" class="ui-widget-content ui-corner-all">
        <h3 class="ui-widget-header ui-corner-all">Deutsch</h3>
        <p>
          <?php
          $nb_fichier = 0;
          echo '<ul>';
          if($dossier = opendir('./ALL'))
          {
            while(false !== ($fichier = readdir($dossier)))
          {
            if($fichier != '.' && $fichier != '..' && $fichier != 'index.php' && $fichier != 'Thumbs.db')
          {
            $nb_fichier++; // On incrémente le compteur de 1

            if (strpos($fichier, 'pdf') || strpos($fichier, 'txt')) {
              echo '<li><a href="./ALL/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
            elseif (strpos($fichier, 'png') || strpos($fichier, 'jpg') || strpos($fichier, 'gif')) {
              echo '<li><a href="./ALL/' . $fichier . '">' . "🖼️ ". $fichier . '</a></li>';
            }

            else {
              echo '<li><a href="./ANG/' . $fichier . '">' . "🗎 ". $fichier . '</a></li>';
            }
          } // On ferme le if (qui permet de ne pas afficher index.php, etc.)

          } // On termine la boucle
          }
           ?>
        </p>
      </div>
    </div>

<input type="hidden" name="effects" id="effectTypes" value="blind">
    <!--<select type="hidden" name="effects" id="effectTypes">
  <option value="blind">Blind</option>
  <option value="bounce">Bounce</option>
  <option value="clip">Clip</option>
  <option value="drop">Drop</option>
  <option value="explode">Explode</option>
  <option value="fade">Fade</option>
  <option value="fold">Fold</option>
  <option value="highlight">Highlight</option>
  <option value="puff">Puff</option>
  <option value="pulsate">Pulsate</option>
  <option value="scale">Scale</option>
  <option value="shake">Shake</option>
  <option value="size">Size</option>
  <option value="slide">Slide</option>
</select>-->

<!--<button id="button" class="ui-state-default ui-corner-all">Run Effect</button>-->


        </center>
        <?php
echo "votre langue est ".$lang;
if ($lang=== "fr") {
  echo '<style type="text/css">
        #effectfr {
            display: block;
        }

        #effecten {
            display: none;
        }

        #effectes {
            display: none;
        }

        #effectde {
            display: none;
        }
        </style>';
}

elseif ($lang=== "en") {
  echo '<style type="text/css">
        #effecten {
            display: block;
        }

        #effectfr {
            display: none;
        }

        #effectes {
            display: none;
        }

        #effectde {
            display: none;
        }
        </style>';
}

elseif ($lang=== "es") {
  echo '<style type="text/css">
        #effectes {
            display: block;
        }

        #effectfr {
            display: none;
        }

        #effecten {
            display: none;
        }

        #effectde {
            display: none;
        }
        </style>';
}

elseif ($lang=== "de") {
  echo '<style type="text/css">
        #effectde {
            display: block;
        }

        #effectfr {
            display: none;
        }

        #effecten {
            display: none;
        }

        #effectes {
            display: none;
        }
        </style>';
}

else {
  echo '<style type="text/css">
        #effecten {
            display: block;
        }

        #effectfr {
            display: none;
        }

        #effectes {
            display: none;
        }

        #effectde {
            display: none;
        }
        </style>';
}

?>
    </div>
  </body>
</html>
