$(document).ready(function() {
  // On r�cup�re la balise <div> en question qui contient l'attribut � data-prototype � qui nous int�resse.
  var $container = $('div#melon_refappbundle_applicationtype_editeur');
 
  // On ajoute un lien pour ajouter une nouvelle environnement
  var $lienAjout = $('<a href="#" class="boutonAjouter">Nouvel Editeur</a>');
  $container.append($lienAjout);
 

 
  // On d�finit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = $container.find(':input').length;
  
  // On ajoute un nouveau champ � chaque clic sur le lien d'ajout.
  $lienAjout.click(function(e) {
	 
    ajouterEditeur($container);
    e.preventDefault();
    // �vite qu'un # apparaisse dans l'URL
    return false;
  });
 
  // On ajoute un premier champ directement s'il n'en existe pas d�j� un (cas d'un nouvel article par exemple).
  if (index == 0) {
   
  } else {
    // Pour chaque environnement d�j� existante, on ajoute un lien de suppression
	  $container.children('div').each(function() {
      ajouterLienSuppression($(this));
    });
  }
 
  // La fonction qui ajoute un formulaire environnement
  function ajouterEditeur($container) {
    // Dans le contenu de l'attribut � data-prototype �, on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le num�ro du champ
    var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Editeur : '));
                                                       
 
    // On ajoute au prototype un lien pour pouvoir supprimer la environnement
    ajouterLienSuppression($prototype);
 
    // On ajoute le prototype modifi� � la fin de la balise <div>
    $container.append($prototype);
  }
 
  // La fonction qui ajoute un lien de suppression d'une environnement
  function ajouterLienSuppression($prototype) {
    // Cr�ation du lien
    $lienSuppression = $('<div class="divSuppr"><a href="#" class="boutonSupprimer">Supprimer</a></div>');
 
    // Ajout du lien
    $prototype.append($lienSuppression);
 
    // Ajout du listener sur le clic du lien
    $lienSuppression.click(function(e) {
      $prototype.remove();
      e.preventDefault(); // �vite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
