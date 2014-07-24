$(document).ready(function() {
  // On r�cup�re la balise <div> en question qui contient l'attribut � data-prototype � qui nous int�resse.
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
  var $lienAjout = $('<a href="#" class="boutonAjouter">Ajouter une documentation</a>');
  $container.append($lienAjout);
 
  // On ajoute un nouveau champ � chaque clic sur le lien d'ajout.
  $lienAjout.click(function(e) {
    ajouterDocumentation($container);
    e.preventDefault(); // �vite qu'un # apparaisse dans l'URL
    return false;
  });
 
  // On d�finit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = $container.find(':input').length;
 
  // On ajoute un premier champ directement s'il n'en existe pas d�j� un (cas d'un nouvel article par exemple).
  if (index == 0) {

  } else {
    // Pour chaque documentation d�j� existante, on ajoute un lien de suppression
    $container.children('div').each(function() {
      ajouterLienSuppression($(this));
    });
  }
  

 
  // La fonction qui ajoute un formulaire Documentation
  function ajouterDocumentation($container) {
    // Dans le contenu de l'attribut � data-prototype �, on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le num�ro du champ
	if(index == 0) {
		var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Cahier de Consigne : ')
	            .replace(/__name__/g, index));
	}else {
		var $prototype = $($container.attr('data-prototype').replace(/__name__label__/g, 'Documentation n°' + (index+1)+' : ')
            .replace(/__name__/g, index));
		}
    
 
    // On ajoute au prototype un lien pour pouvoir supprimer la Documentation
    ajouterLienSuppression($prototype);
 
    // On ajoute le prototype modifié à la fin de la balise <div>
    $container.append($prototype);
 
    // Enfin, on incr�mente le compteur pour que le prochain ajout se fasse avec un autre num�ro
    index++;
  }
 
  // La fonction qui ajoute un lien de suppression d'une Documentation
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
