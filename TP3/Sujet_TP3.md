# TP3

Veillez à bien travailler dans les conditions décrites dans le [Readme](../README.md) de ce dépôt github.  

Vous avez un fichier ouvert dans `C:\MAMP\htdocs` avec la base html suivante :  
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
```

**Tout** le reste ne sera que du code PHP.
Vous n'aurez **pas** à écrire du HTML si ce n'est comme ceci :  
```php
echo "<maBalise> mesTrucs </maBalise>";
```

___

## A vous de jouer

Vous trouverez le fichier `index.php`, `index.css` et `handle.php` dans [ce dépôt](https://github.com/DanielC-N/Cours-PHP-BSN/tree/main/TP3).  

Vous n'aurez **qu'à modifier** le fichier `handle.php` et à créer des Classes selon les instructions données ici, plus bas.  

**Important: Vous aurez un dossier `objets` dans lequel vous mettrez tous vos fichiers de classes.**  
___
### Exercice 1
=> Remplissez la classe `User` dans le fichier nommé `User.php` (dans le dossier `objet`) qui définit ce qu'est un utilisateur. Vous rajouterez des `getter` et `setter` dans cette classe. N'oubliez pas le **constructeur**.  
**Indication :** Reprenez la même méthode utilisée pour définir la classe `Legume` et inspirez vous des données du formulaire. Qu'est-ce qu'un utilisateur ? Quelles sont ses propriétés ? 

___
### Exercice 2

=> Remplissez la fonction `createUser` dans la classe `listeUsers` qui prend en arguments toutes les informations nécessaires à la création d'un utilisateur, qui déclare un nouvel Utilisateur (donc on appelle le constructeur de `User`) ET qui l'ajoute au tableau `$users`.
___
### Exercice 3 (Important)
Maintenant dans le fichier `handle.php` allez dans la section de code pour tester ce que vous avez fait.  
Explications :  
```php
/**
 ****  DEBUT CODE TEST ****
*/

// Inspirez-vous du code de la leçon pour la classe Legume. J'ai écrit du code pour déclarer, afficher, modifier puis ré-afficher les informations de mon objet $tomate pour tester si mon code fonctionne
// Faites PAREIL
// Commencez par déclarer un nouvel User avec des paramètres donné 'à la main'.
// effacez ces commentaires (sauf "DEBUT CODE TEST" et "FIN CODE TEST") dans votre code

// De même pour votre classe ListeUsers.
// Testez en particulier votre fonction "createUser"

/**
 **** FIN CODE TEST ****
*/
```

**Important : Vous reviendrez sur cette section du code pour toutes les autres fonctions/classes que vous coderez par la suite. Cette section est importante pour la notation, faites des sections pour me montrer quelle question de du TP vous testez**  
___
### Exercice 4
=> Codez la fonction de prototype `printUser()` du fichier `User.php`.
___

### Exercice 5
=> Codez la fonction de prototype `printUsers()` du fichier `ListUsers.php`.
___
### Exercice 6

=> On a créé un nouvel utilisateur, ok. Maintenant remplissez la fonction `deleteLastUser` qui supprimera le dernier utilisateur du tableau `users`.  
N'oubliez pas de la tester et de regarder le résultat.  

Aide 1 : Il y a plusieurs manières de faire. Commencez par regarder la documentation de `array_pop()` sur le site `php.net`.

Aide 2 :
```php
// code pour les tests
// ce code appelle la fonction "deleteUser()"
$listeUtilisateurs->deleteLastUser();
```
___
### Exercice 7
=> Maintenant codez une fonction qui cherche un utilisateur dans la liste à partir de son pseudo. Voici son prototype : `findUser($pseudo)`.  
Cette fonction renvoie `false` si elle ne trouve pas l'utilisateur avec le pseudo renseigné. Sinon elle `print` l'utilisateur trouvé en appelant la fonction `printUser()` et le ensuite `return`.  
**N'oubliez pas de tester et de regarder le résultat.**  

<details>
    <summary>Aide</summary>
    Parcourez votre tableau avec une boucle.
</details> 

___
### Exercice 8
=> Dans la même idée. Coder une fonction qui supprime un utilisateur à partir de son pseudo.  
Prototype : `deleteUser($pseudo)`

<details>
    <summary>Aide</summary>
    <strong>cherchez la documentation de <code>array_splice</code> sur le site <a href="https://www.php.net">php.net</a>.</strong>
</details>

___
### Exercice 9
=> Remplissez la fonction de prototype : `getSomeUsers(int $nbr)` 
___
### Exercice 10
Dans la même idée si je souhaite créer une classe `Message` qui serait un objet qui contiendrait les messages que les utilisateurs s'envoient. De quelles informations aurais-je besoin ?  
=> Allez dans le fichier `Message.php` et codez le constructeur, et les `getter` et `setter` nécessaires. **Et** remplissez les fonctions à l'intérieur.

___
### Exercice 11
Maintenant on va essayer de gérer une liste de messages.  
=> Allez dans le fichier `ListeMessages.php` et codez le constructeur, et les `getter` et `setter` nécessaires.

___
<details>
    <summary>Bonus</summary>
    <h3>Exercice 12</h3>
    <strong>A demander à l'oral si tout est fini. Avec les tests dans le fichier "handle.php" etc ...</strong>
</details>
