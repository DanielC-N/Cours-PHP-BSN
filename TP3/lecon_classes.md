# Introduction

Dans ce TP nous allons voir un nouveau type de variable assez spéciale : **Les Classes**.  
Je vous donnerai le squelette des classes et je vous demanderai uniquement de coder la partie logique (les fonctions et les déclarations de variables).

Vous allez apprendre à gérer un `système de fichier` donc notez que chaque `classe` devra être définie dans un fichier **à part**.  
Vous créerez un dossier "objets" dans lequel vous mettrez vos fichiers où seront déclarée vos Classes.
Cela devra s'organiser comme suit :  
```bash
.
├── handle.php  (fourni)
├── objets      (à faire)
│   ├── ClasseUn.php
│   ├── ClasseDeux.php
    .
    .
    .

```

___
## Les Classes

Si je veux créer une classe, je dois penser comme si je voulais définir un objet.  
Admettons que je veuille définir un `légume`.  
Quelles sont les propriétés d'un légume ?  
Listons les :
- poids
- nom
- couleur
- forme
- comestible ou non

C'est très bien pour le moment. Maintenant je vais me demander de quel `type` sont ces propriétés :
- Le poids : un `nombre` (integer)
- Le nom : une `chaîne de caractère` (String)
- La couleur : une `chaîne de caractère` (String)
- La forme : une `chaîne de caractère` (String)
- S'il est commestible : oui ou non. en d'autres termes `true` ou  `false` (boolean)

Voici un exemple de déclaration de la classe `Legume` :
```php
// IMPORTANT
// le nom d'une classe commence TOUJOURS par une majuscule
class Legume {
    public int     $poids;
    public string  $couleur;
    public string  $forme;
    public string  $nom;
    public bool    $comestible;
}

// je n'ai plus qu'à la créer avec la primitive "new"
$monLegume = new Legume();
```

Vous l'avez remarqué, une classe s'appelle comme on appelle une fonction (avec les parenthèses), mais on rajoute le mot clef `new`.  

```
- Super ! Mais ... Comment on fait pour accéder aux propriétés de mon légume ?
Et d'ailleurs ! On ne les as même pas définies (elles n'ont pas de valeur assignée) !!
```

Très juste.  
Il va nous falloir `construire` notre légume. Même si c'est bizarre dit comme ça, dans la classe `Legume` on peut rajouter des fonctions et d'autres variables. Une fonction **très importante** s'appelle `__construct()`  
(Oui il y a bien les deux tirets du bas "`__`" devant le mot "`construct`")  
Cette fonction, ajoutée à notre classe va nous permettre de construire notre objet en lui donnant toutes les informations dont il a besoin !  

Voyez dans le code ci-dessous.

```php
// le nom d'une classe commence TOUJOURS par une majuscule
class Legume {
    public int     $poids;
    public string  $couleur;
    public string  $forme;
    public string  $nom;
    public bool    $comestible;

    function __construct($p, $c, $f, $n, $comm) {
        $this->poids      = $p;
        $this->couleur    = $c;
        $this->forme      = $f;
        $this->nom        = $n;
        $this->comestible = $comm;
    }

}
// je n'ai plus qu'à la créer avec la méthode "new"
$tomate = new Legume(40, "rouge", "rond", "tomate", true);
```

```
- STOP ! Trop d'infos ! c'est quoi ça : " -> "  ?? et c'est quoi "$this" ??
```

Ok ok. Reprenons le code là-haut.  

`$this` signifie : la classe **Legume**.  
Quand on écrit `$this`, le code va "comprendre" qu'on veut la classe dans laquelle il est écrit. Ici, ce sera la classe `Legume`, avec **toutes** ses propriétés.  
Pour ce qui est de `->` : c'est un moyen de récupérer une des propriétés de la classe. Donc si je veux accéder à la propriété `poids` de ma classe j'écris : `$this->poids`  

Ce qui nous amène à la dernière ligne. Je défini ma variable `$tomate` comme étant un nouveau `Legume` avec certaines propriétés. Ma tomate est rouge, elle est ronde, etc.  

**Ce qu'il faut comprendre** :  
Quand j'écrit ceci : `new Legume(40, "rouge", "rond", "tomate", true)`  
PHP comprend ça : `Legume->__construct(40, "rouge", "rond", "tomate", true)`  

Le constructeur va assigner les variables passées en `paramètres` (40, rouge, rond, etc.) et les assigner aux propriétés de mon légume (poids, couleur, forme, etc.)  

```
- Ok. Mais qu'est-ce que je fais de $tomate ?
```

Ben ... On peut faire ça par exemple :  
```php
echo $tomate->couleur;
```

Cette ligne nous affichera la couleur de mon légume (testez !).  
___

C'est ça la **P**rogrammation **O**rientée **O**bjet (**POO**).  
Parce qu'on pense à des objets (classes). Ce sont des moyens de structurer nos variables.  
Ici on accède aux propriétés des objets et non plus à des variables seules qui seraient perdues dans des lignes de codes.


```
- Génial ! Mais ... C'est tout ?
```

**NON !**  

Voilà l'exemple de la classe `Legume` en version bien construite, avec des fonctions cette fois.

```php
// le nom d'une classe commence TOUJOURS par une majuscule
class Legume {
    public int     $poids;
    public string  $couleur;
    public string  $forme;
    public string  $nom;
    public bool    $comestible;

    function __construct($p, $c, $f, $n, $com) {
        $this->poids      = $p;
        $this->couleur    = $c;
        $this->forme      = $f;
        $this->nom        = $n;
        $this->comestible = $com;
    }

    // Habituellement dans une classe nous avons ce qu'on appelle
    // des "getter"
    // ce sont des fonctions qui vont tout simplement renvoyer
    // la propriété qu'on cherche.
    // généralement on écrit : get[nom de la propriété]()
    function getPoid() {
        return $this->poids;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function getForme() {
        return $this->forme;
    }

    function getNom() {
        return $this->nom;
    }

    function isComestible() {
        return $this->comestible;
    }


    // et ici ce sont les "setter"
    // ils permettent de changer les propriétés de notre objet
    function setPoid($nouveauPoid) {
        $this->poids = $nouveauPoid;
    }

    function setCouleur($nouvelleCouleur) {
        $this->couleur = $nouvelleCouleur;
    }

    function setForme($nouvelleForme) {
        $this->forme = $nouvelleForme;
    }

    function setNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    function setComestible($nouveauComestible) {
        $this->comestible = $nouveauComestible;
    }


    // imaginons que je veuille une fonction qui
    // me dise joliement si mon légume est comestible
    function estCeComestible() {
        // DANS la classe, on est pas obligé d'appeler la fonction isComestible()
        // il vaut mieux ici accéder à la main à la propriété 'comestible'
        if ($this->comestible) {
            echo "Ce légume est comestible !";
        }
        else {
            echo "Pas touche ! Il n'est pas comestible !";
        }
    }

}

// je n'ai plus qu'à la créer avec la méthode "new"
$tomate = new Legume(40, "rouge", "rond", "tomate", true);

// ici plutôt que d'écrire : $tomate->couleur
// on va plutot faire ça
echo $tomate->getCouleur();
// affiche : "rouge"

// Pour tester ma fonction j'écris 
$tomate->estCeComestible();
// affiche : "Ce légume est comestible !"

// Si je veux changer les propriétés de ma tomate
// et faire en sorte que ce soit une tomate pas mûre
// j'écrit ceci
$tomate->setCouleur("vert");
$tomate->setComestible(false);


// je teste
echo $tomate->getCouleur();
// affiche : "vert"

$tomate->estCeComestible();
// affiche : "Pas touche ! Il n'est pas comestible !"

```

Pour tester le code au dessus je vous conseille de créer un fichier `Legume.php` et de tout coller dedans.  
Chacunes de vos classes seront dans un fichier différents. **Souvenez-vous en**.  

Pour utiliser cette classe dans le fichier `handle.php`, vous aurez juste à écrire cette ligne :
```php
require("Legume.php");
```

Exemple ici :
```php
<?php
require("Legume.php");

$tomate = new Legume(40, "rouge", "rond", "tomate", true);

echo $tomate->getCouleur();
// affiche : "rouge"

$tomate->estCeComestible();
// affiche : "Ce légume est comestible !"

$tomate->setCouleur("vert");
$tomate->setComestible(false);

// je teste
echo $tomate->getCouleur();
// affiche : "vert"

$tomate->estCeComestible();
// affiche : "Pas touche ! Il n'est pas comestible !"
?>
```

Vous êtes fin prêt à coder des classes !
