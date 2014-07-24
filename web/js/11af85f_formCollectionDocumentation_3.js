$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var $container = $('div#melon_refappbundle_applicationtype_documentations');
  
  /*var img = document.createElement('img');
  //definit le fichier
  img.src = '../images/add.png';
  //recupere le conteneur par id et lui ajoute un fils : ton image
  document.getElementById('melon_refappbundle_applicationtype_documentations').appendChild(img);
  
//On ajoute un lien pour ajouter une nouvelle documentation
  var $image = $('<div><img src="{{ asset('bundles/melonRefapp/images/add.png') }}" alt="logo" /> </div>');
  $container.append($image);
  */
  // On ajoute un lien pour ajouter une nouvelle documentation
  var $lienAjout = $('<a href="#" class="btn_ajouter">Ajouter une documentation</a>');
  $container.append($lienAjout);
 
  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  $lienAjout.click(function(e) {
    ajouterDocumentation($container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });
 
  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = $container.find(':input').length;
 
  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterDocumentation($container);
  } else {
    // Pour chaque documentation déjà existante, on ajoute un lien de suppression
    $container.children('div').each(function() {
      ajouterLienSuppression($(this));
    });
  }
 
  // La fonction qui ajoute un formulaire Documentation
  function ajouterDocumentation($container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le numéro du champ
    var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Documentation n°' + (index+1))
                                                        .replace(/__name__/g, index));
 
    // On ajoute au prototype un lien pour pouvoir supprimer la Documentation
    ajouterLienSuppression($prototype);
 
    // On ajoute le prototype modifié à la fin de la balise <div>
    $container.append($prototype);
 
    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }
 
  // La fonction qui ajoute un lien de suppression d'une Documentation
  function ajouterLienSuppression($prototype) {
    // Création du lien
    $lienSuppression = $('<a href="#" class="btn_supprimer">Supprimer</a>');
 
    // Ajout du lien
    $prototype.append($lienSuppression);
 
    // Ajout du listener sur le clic du lien
    $lienSuppression.click(function(e) {
      $prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
