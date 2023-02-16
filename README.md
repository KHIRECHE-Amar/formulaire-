# formulaire-securis-
Dans cet exercice j’ai créé trois pages la premier est celle de l’inscription qui nous permet de récupérer le nom et le mot de passe des utilisateurs afin de les stocker dans ma base de donné que j’ai créé au préalable,

 La deuxième c’est la page de la connexion, après l’inscription l’utilisateur est automatiquement renvoyer vers cette page qui permet la saisie du pseudonyme et du mot passe afin de se connecter,

La troisième et l’accueil qui est la juste pour confirmer le succès de la connexion.

Dans le but de sécuriser notre formulaire j’ai opté pour le chiffrage de mot de passe et ceci grâce à la fonction password_hash que propose PHP, password_hash est une fonction intégrée en PHP qui permet de hacher des mots de passe de manière sécurisée sachant que celle-ci utilise l’algorithme PASSWORD_DEFAULT  bcrypt. 

J’ai rajouté un Salt ou sel en français qui permet de rajouter une chaine de caractère unique qui renforce le mot de passe.

Pour la protection contre les injections SQL j’ai utilisé les requêtes préparé PDO avec 
prepare () et execute() 

Pour la création de la base de données J’ai utilisé Uwamp qui est un serveur local.




