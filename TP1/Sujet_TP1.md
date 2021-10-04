# TP1

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
## Exercice 1 : Les variables

Exemple de variables :
```php
$string = "Salut !";
$int = 22;
$float = 11.5;
$array = [1, 2, 3, 4, 5];
$hashTable = [
    "key1" => 42,
    "key2" => "salut",
    "key3" => $float,
    "key4" => [1, 2, 3, 4, 5]
];
$stringConcat = "Je suis une " . "string " . "concaténée.";
```
___
### 1.1 Le nom

Supprimez la ligne où il y a le code suivant :
```html
<title>Document</title>
```

Déclarez une variable `$nom` avec votre nom complet.  

**Q1** => Utilisez cette variable pour ré-écrire la ligne supprimée en code **PHP** avec votre nom en titre de votre page HTML : entre les balises `<title></title>`  

Actualisez votre page web et voyez le résultat.
___
### 1.2 Les tableaux

Voici un tableau :  
```php
$array = [1, 2, 3, 4, 5];
```

Si je veux **accéder** au 1er élément je vais devoir écrire : `$array[0]`.  
Si je veux **modifier** le 1er élément je vais devoir écrire : `$array[0] = 123`.  
Je peux aussi assigner une variable à cette valeur.  
```php
$variable = $array[0];
```

**Q2** => Déclarez un nouveau tableau avec le **2ème** et **dernier** élément du tableau ci-dessus. Utilisez **bien entendu** les accès aux valeurs du tableau. Je ne veux pas que vous m'écriviez `$variable = [2, 5];`  
**Q3** => Modifiez la **dernière valeur** de votre tableau et assignez lui la valeur : `12`  
**Q4** => **bonus** : affichez joliement votre nouveau tableau.
___
### 1.3 Une String est un tableau

Copiez cette String et collez-la dans votre code.
```php
$string = "Je n'aime pas manger cette plante en particulier sans de la ratte et du Morbier";
```

**Q5** => Récupérez, dans une variable, les lettre aux positions suivantes (vous devrez concaténer les lettres) : 1, 10, 41, 51, 58, 60 et 69.  
**Q6** => Affichez le résultat.

___
### 1.4 Les tableaux à 2 dimensions

Voici un tableau à 2 dimensions :  
```php
$array2D = [
    [0, 1, 2, 3, 4, 5],
    [6, 7, 8, 9, 10, 11],
    [12, 13, 14, 15, 16],
];
```
Explications: 
- Pour accéder au **tout premier** élément (le nombre `0`) j'écris : `$array2D[0][0]`.  
- Pour accéder au **1er** élément du **2nd** tableau (le nombre `6`) j'écris : `$array2D[1][0]`.  
- Pour accéder au **2ème** élément du **3ème** tableau (le nombre `13`) j'écris : `$array2D[2][1]`.

**Q7** => Avec la même méthode accédez au chiffre `9` et affichez le  
**Q8** => Déclarez la variable `$sousTableau` qui prend comme valeur **tout** le second tableau. Puis modifier la dernière valeur de `$sousTableau` pour qu'elle soit égale à `22`  
**Q9** => **bonus** : Créez un tableau à **3** dimensions cette fois et affichez sa **dernière** valeur en utilisant un accesseur.

___
## Exercice 2 : Les conditions
Opérateurs de comparaison :
| Symbole | Signification           |
|---------|-------------------------|
| ==      | Est égal à              |
| <       | Est inférieur à         |
| >       | Est supérieur à         |
| <=      | Est inférieur ou égal à |
| >=      | Est supérieur ou égal à |
| !=      | Est différent de        |  
  
Opérateurs mathématiques :
| Symbole | Signification           |
|---------|-------------------------|
| +       | Addition                |
| -       | Soustraction            |
| *       | Multiplication          |
| /       | Division                |
| %       | Reste de la division    |
  

Voici un exemple de condition :
```php
$time = "après-midi";

if ($time == "après-midi")
{
    echo "<p> Je te souhaite un bon après-midi !</p>";
}
else if ($time == "matin")
{
    echo "<p> Je te souhaite une bonne matinée !</p>";
}
else
{
    echo "<p> Je te souhaite une bonne ... Nuit ?</p>";
}
```
Demandez-vous ce que va afficher ce code. Puis faites des tests.
___
### 2.1 le if / else

**Q10** => Copiez le code plus haut et faites en sorte qu'il affiche le texte "`Je te souhaite une bonne matinée !`" en ne modifiant **que** la variable "`$time`".

<b id='Q11'> Q11</b> => Déclarez une nouvelle variable `$number` (assignez lui le nombre que vous voulez) et faites un second code qui affiche :
- "`C'est un multiple de 10`" si `$number` est est un multiple de 10.
- "`Ce n'est pas un multiple de 10`" si `$number` n'en est pas un.

A savoir : `9/3 = 3` et `10%3 = 1`

<b id='Q12'> Q12</b> => Faites un code qui affiche :
- `C'est un nombre pair` si `$number` est **pair**
- `C'est un nombre impair` si `$number` est **impair**.

(Indice : [Lien ici :) ](https://www.mathematiquesfaciles.com/nombre-pair-et-impair_2_92889.htm))
___
### 2.2 le switch

**Q13** => Travail d'investigation : cherchez la documentation de `switch` sur le site [php.net](https://www.php.net) et transformez le `if` ci-dessus en format `switch` de sorte qu'il ait le **même comportement**.

**Note** : faites des tests pour être sûr que votre nouvelle condition affiche bien ce que vous voulez.
___
## Exercice 3 : Les boucles

Voici un exemple de boucle qui écrit 10 fois `"J'aime le php"`:
```php
$i = 0;

while ($i < 10)
{
    echo "<p> J'aime le PHP </p>";
    $i = $i + 1;
}
```

### 3.1 le while
**Q14** => Faites en sorte que ce code affiche aussi le numéro de la ligne. Exemple d'affichage : `5. J'aime le PHP`  
**Q15** => Copiez le tableau suivant et affichez, à l'aide d'un `while`, chaque éléments du tableau.
```php
$array = [1, 2, 3, 4, 5]
```


___
### 3.2 le while et if combiné
**Q16** => Ajoutez une condition `if` dans le `while` de sorte que le code affiche `J'aime le PHP` si `$i` est **pair**, et `Je n'aime pas le PHP` si `$i` est **impair**  
___
### 3.3 le double while imbriqué
```php
$i = 0;
$j = 0;

while ($i < 5)
{
    $j = 0;
    while ($j < 5)
    {
        echo "<p> J'aime le PHP </p>";
        $j++;
    }
    $i++;
}

$doubleArray = [
    [0, 1, 2, 3, 4, 5],
    [6, 7, 8, "PHP", 10, 11],
    [11, 12, 13, 14, 15, 16],
];
```
**Copiez la variable `$doubleArray` dans votre code.**

**Q17** => Avec l'exemple du double `while` ci-dessus, affichez tous les éléments de ce tableau à deux dimensions.

___
### 3.4 la boucle for
**Q18** => Travail d'investigation : cherchez la documentation de `for` sur le site [php.net](https://www.php.net) et transformez le double `while` que vous avez, en format `for` de sorte qu'il ait le **même comportement**  
**Q19** => **bonus :** Faites pareil avec un tableau à **3** dimensions. Avec 3 boucles `for` impriquées.
___
### 3.5 la boucle foreach
**Q20** => Travail d'investigation : cherchez la documentation de `foreach` sur le site [php.net](https://www.php.net) et faites de même qu'à la quesiton précédente.  
___
## Exercice 4 : Les fonctions

Voici un exemple de fonction qui dit si on a eu la moyenne ou non à un contrôle (**prenez le temps de décortiquer le code**) :
```php
function testMoyenne($maNote, $noteMax) {
    $moyenne = $noteMax/2;

    if ($maNote > $noteMax) {
        echo "<p> Mauvais arguments !</p>";
        return 0;
    }

    if ($maNote < $moyenne) {
        echo "<p> Tu n'as pas eu la moyenne </p>";
    } else if ($maNote >= $moyenne) {
        echo "<p> Tu as eu la moyenne !</p>";
    } else {
        echo "<p> la variable n'est sûrement pas un nombre ! </p>";
    }
}

```
Pour appeler ma fonction j'écris par exemple : `noteTest(57732, 115462);`  
Cela affiche : `Tu as eu la moyenne !`  

**Q20** => Reprenez le code de la question 11 (<a href='#Q11'>Q11</a>) et mettez-le dans une fonction de prototype `isMultipleTen($number)`.  
**Q21** => Faites pareil pour la question 12 (<a href='#Q12'>Q12</a>) avec le prototype `isPair($number)`.  
___
### 4.1 le "return"

<b id='Q22'> Q22</b> => Faites une fonction `getLast($integer)` qui prend en entrée un nombre et qui `return` le **dernier chiffre** de ce nombre. Appelez votre fonction et affichez son résultat.  
**Q23** => Faites une fonction `getLenght($str)` qui prend en entrée une String et qui `return` **la taille** de la string. Appelez votre fonction et affichez son résultat.  

___
### 4.2 On complexifie
**Q24** => Utilisez la fonction de la question 22 (<a href='#Q22'>Q22</a>) et construisez une nouvelle fonction dont le prototype sera `catchInArray($integer)`. Cette fonction initialise un tableau dans lequel vous ajouterez les chiffres qui composent `$integer`. Chaque `cases` de ce tableau contiendra **1 chiffre**. 

```php
$outputArray = catchInArray(123456);
var_dump($outputArray);
```
output :
```php
array(6) {
  [0]=>
    int(1)
  [1]=>
    int(2)
  [2]=>
    int(3)
  [3]=>
    int(4)
  [4]=>
    int(5)
  [5]=>
```

<details>
  <summary>Indice</summary>
  > <i>L'idée est que dans le code de <code>catchInArray()</code> vous appeliez la fonction <code>getLast()</code></i>
</details>
