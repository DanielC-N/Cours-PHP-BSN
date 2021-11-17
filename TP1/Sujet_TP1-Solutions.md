# TP1

Veillez à bien travailler dans les conditions décrites dans le [Readme](https://github.com/DanielC-N/cours_php#ensuite) de ce dépôt github.  

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

**Tous** le reste ne sera que du code PHP.
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
$hashTable = {
    "key1" : 42,
    "key2" : "salut",
    "key3" : $float,
    "key4" : [1, 2, 3, 4, 5]
};
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

**REPONSE :**  
```php
$nom = "Nicolas Condomitti";
echo "<title>$nom</title>";
```

Actualisez votre page web et voyez le résultat.
___
### 1.2 Les tableaux

Voici un tableau :  
```php
$array = [1, 2, 3, 4, 5];
```

Si je veux **accéder** au premier élément je vais devoir écrire : `$array[0]`.  
Si je veux **modifier** le élément je vais devoir écrire : `$array[0] = 123`.  
Je peux aussi assigner une variable à cette valeur.  
```php
$variable = $array[0];
```

**Q2** => Déclarez un nouveau tableau avec le 2ème et dernier élément du tableau ci-dessus. Utilisez **bien entendu** les accès aux valeurs du tableau. Je ne veux pas que vous m'écriviez `$variable = [2, 5];`  

**REPONSE :**  
```php
$array = [1, 2, 3, 4, 5];
$array2 = [$array[1],$array[4]];
```

**Q3** => Modifiez la **dernière valeur** de votre tableau et assignez lui la valeur : `12`  

**REPONSE :**  
```php
$array2[1] = 12;
```
**Q4** => **bonus** : affichez joliement votre nouveau tableau.  
**REPONSE :**  
```php
echo "<p> [" . $array2[0] ", " . $array2[1] . "] </p>";
```
___
### 1.3 Une String est un tableau

Copiez cette String et collez-la dans votre code.
```php
$string = "Je n'aime pas manger cette plante en particulier sans de la ratte et du Morbier";
```

**Q5** => Récupérez, dans une variable, les lettre aux positions suivantes (vous devrez concaténer les lettres) : 1, 10, 41, 51, 58, 60 et 69.  
**REPONSE :**  
```php
$mot= $string[1].$string[10].$string[41].$string[51].$string[58].$string[60].$string[69];
```
**Q6** => Affichez le résultat.  
**REPONSE :**  
```php
echo "<p> " . $mot . " </p>";
```

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
- Pour accéder au **premier** élément du **second** tableau (le nombre `6`) j'écris : `$array2D[1][0]`.  
- Pour accéder au **deuxième** élément du **troisième** tableau (le nombre `12`) j'écris : `$array2D[2][1]`.

**Q7** => Avec la même méthode accédez au chiffre `9` et affichez le  
**REPONSE :**  
```php
echo "<p> " . $array2D[1][3] . " </p>";
```
**Q8** => Déclarez la variable `$sousTableau` qui prend comme valeur **tout** le second tableau. Puis modifier la dernière valeur de `$sousTableau` pour qu'elle soit égale à `22`  
**REPONSE :**  
```php
$sousTableau=$array2D[1];
$sousTableau[5]=22;
```
**Q9** => **bonus** : Créez un tableau à **3** dimensions cette fois et affichez sa **dernière** valeur en utilisant un accesseur.  
**REPONSE :**  
```php
$array3D = [
    [
        [0, 1, 2, 3, 4, 5],
        [6, 7, 8, 9, 10, 11],
        [12, 13, 14, 15, 16],
    ],
    [
        [17, 18, 19, 20, 21, 22],
        [23, 24, 25, 26, 27, 28],
        [29, 30, 31, 32, 33, 34],
    ]
];
echo "<p> " . $array3D[1][2][5] . " </p>";
```

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

**Q10** => Copiez le code plus haut et faites en sorte qu'il affiche le texte "`Je te souhaite une bonne matinée !`"  
**REPONSE :**  
```php
$time = "matin";
```

**Q11** => Déclarez une nouvelle variable `$number` (assignez lui le nombre que vous voulez) et faites un second code qui affiche :
- "`C'est un multiple de 10`" si `$number` est est un multiple de 10.
- "`Ce n'est pas un multiple de 10`" si `$number` n'en est pas un.

(Indice : `9/3 = 3` et `10%3 = 1`)  
**REPONSE :**  
```php
$number=10;
if ($number%10==0)
{
    echo "<p> C'est un multiple de 10 </p>";
}
else
{
    echo "<p> Ce n'est pas un multiple de 10 </p>";
}
```

**Q12** => Faites un code qui affiche :
- `C'est un nombre pair` si `$number` est **pair**
- `C'est un nombre impair` si `$number` est **impair**.

(Indice : [Lien ici :) ](https://www.mathematiquesfaciles.com/nombre-pair-et-impair_2_92889.htm))   
**REPONSE :**  
```php
if ($number%2==0)
{
    echo "<p>C'est un nombre pair</p>";
}
else
{
    echo "<p>C'est un nombre impair</p>";
}
```
___
### 2.2 le switch

**Q13** => Travail d'investigation : cherchez la documentation de `switch` sur le site [php.net](www.php.net) et transformez le `if` ci-dessus en format `switch` de sorte qu'il ait le **même comportement**.

**Note** : faites des tests pour être sûr que votre nouvelle condition affiche bien ce que vous voulez.  
**REPONSE :**  
```php
switch ($time)
{
    case "après-midi":
        echo "<p> Je te souhaite un bon après-midi !</p>";
        break;
    case"matin":
        echo "<p> Je te souhaite une bonne matinée !</p>";
        break;
    default:
        echo "<p> Je te souhaite une bonne ... Nuit ?</p>";
}
```
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
**REPONSE :**  
```php
$i = 0;

while ($i < 10)
{
    echo "<p> $i. J'aime le PHP </p>";
    $i++;
}
```
**Q15** => Copiez ce tableau `$array = [1, 2, 3, 4, 5]` et affichez, à l'aide d'un `while`, chaque éléments du tableau.  
**REPONSE :**  
```php
$i = 0;

while ($i < 5)
{
    echo "<p> " . $array[$i] . " </p>";
    $i++;
}
```
___
### 3.2 le while et if combiné
**Q16** => Ajoutez une condition `if` dans le `while` de sorte que le code affiche `J'aime le PHP` si `$i` est **pair**, et `Je n'aime pas le PHP` si `$i` est **impair**  
**REPONSE :**  
```php
$i = 0;

while ($i < 10)
{
    if ($i%2==0)
    {
        echo "<p> $i. J'aime le PHP </p>"; 
    }
    else
    {
        echo "<p> $i. Je n'aime pas le PHP </p>";
    }  
    $i++;
}
```
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
**REPONSE :**  
On va faire ça joliement
```php
$i = 0;

echo "<p > \$doubleArray = [";
while($i < 3)
{
    $ligne = "<br><dd>[";
    $j=0;
    while($j < 6)
    {
        $ligne = $ligne . $doubleArray[$i][$j];
        if ($j < 5)
        {
            $ligne = $ligne . ", ";
        }
        $j++;
    }
    if($i == 2)
    {
        echo "$ligne] </dd><br>";
    }
    else
    {
        echo "$ligne],";
    }
    $i++;
}
echo "\n] </p>"
```

___
### 3.4 la boucle for
**Q18** => Travail d'investigation : cherchez la documentation de `for` sur le site [php.net](www.php.net) et transformez le double `while` que vous avez en format `for` de sorte qu'il ait le **même comportement**  
**REPONSE :**  
```php
echo "<p > \$doubleArray = [";
for($i=0; $i<3; $i++)
{
    $ligne = "<br><dd>[";
    for($j=0; $j<6; $j++)
    {
        $ligne = $ligne . $doubleArray[$i][$j];
        if ($j < 5)
        {
            $ligne = $ligne . ", ";
        }
    }
    if($i == 2)
    {
        echo "$ligne] </dd><br>";
    }
    else
    {
        echo "$ligne],";
    }
}
echo "\n] </p>"
```
**Q19** => **bonus :** Faites pareil avec un tableau à **3** dimensions. Avec 3 boucles `for` impriquées.  
**REPONSE :**  
```php
$array3D = [
    [
        [0, 1, 2, 3, 4, 5],
        [6, 7, 8, 9, 10, 11],
        [11, 12, 13, 14, 15, 16],
    ],
    [
        [17, 18, 19, 20, 21, 22],
        [23, 24, 25, 26, 27, 28],
        [29, 30, 31, 32, 33, 34],
    ]
];

// exemple de syntaxe compacte
echo "<p> [";
for ($i=0; $i<2; $i++)
    for ($j=0 ;$j<3; $j++)
        for ($k=0; $k<6; $k++)
            echo ($i != 1 || $j != 2 || $k != 5) ? $array3D[$i][$j][$k] . ", " : $array3D[$i][$j][$k];
echo "]</p>";
```
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

**Q20** => Reprenez le code de la question 11 (`Q11`) et mettez-le dans une fonction de prototype `isMultipleTen($number)`.  
**REPONSE :**  
```php
function isMultipleTen($number)
{
    if ($number%10==0)
    {
        echo "<p> C'est un multiple de 10</p>";
    }
    else
    {
        echo "<p> Ce n'est pas un multiple de 10</p>";
    }
}
```
**Q21** => Faites pareil pour la question 12 (`Q12`) avec le prototype `isPair($number)`.  
**REPONSE :**  
```php
function isPair($number)
{
    if ($number%2==0)
    {
        echo "<p>C'est un nombre pair</p>";
    }
    else
    {
        echo "<p>C'est un nombre impair</p>";
    }
}
```
___
### 4.1 le "return"

**Q22** => Faites une fonction `getLast($integer)` qui prend en entrée un nombre et qui `return` le **dernier chiffre** de ce nombre. Appelez votre fonction et affichez son résultat.  
**REPONSE :**  
```php
function getLast($integer)
{
    return $integer%10;
}
echo "<p>" . getLast(53) . "</p>";
```
**Q23** => Faites une fonction `getLenght($str)` qui prend en entrée une String et qui `return` **la taille** de la string. Appelez votre fonction et affichez son résultat.  
**REPONSE :**  
Réponse impossible sans un "warning". Mea culpa car j'ai dit en TP que c'était possible.  
Fonction à utiliser, pour avoir la taille d'une String, qui vient de PHP : `strlen()`
```php
function getLenght($str)
{
    $i=0;
    while ($str[$i])
    {
        $i++;
    }
    return $i;
}
echo "<p>" . getLenght("j'aime le PHP !") . "</p>";
```

___
### 4.2 On complexifie
**Q24** => Utilisez la fonction de la question 22 (`Q22`) et construisez une nouvelle fonction dont le prototype sera `catchInArray($integer)`. Cette fonction initialise un tableau dans lequel vous ajouterez les chiffres qui composent `$integer`. Chaque `cases` de ce tableau contiendra **1 chiffre**.  

*L'idée est que dans le code de `catchInArray` vous appeliez la fonction `getLast`*   
**REPONSE :**  
```php
function catchInArray($integer)
{
    $array = [];
    while ($integer > 10)
    {
        $last = getLast($integer);
        $array[] = $last;
        $integer -= $last;
        $integer /= 10; 
    }
    $array[] = $integer;
    return $array;
}
$myIntegerArray = catchInArray(123456789);

// J'affiche mais ce n'était pas demandé
$i = 0;

while ($i < 9)
{
    echo "<p> " . $myIntegerArray[$i] . " </p>";
    $i++;
}
```