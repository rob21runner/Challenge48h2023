# Fiche réponse Lambda Corporation

## Page d'accueil

En premier lieu nous arrivons sur la page d'accueil donnant un contexte au challenge.

Rien de spécial sur cette page juste un bouton pour nous amener à la page suivante.

## Erreur 404

Cette page 404 est un piège il y a un rick roll en arrière plan pour induire en erreur et faire penser qu'il fallait cliquer autre part.

Mais cette page est bien la suite, si nous allons dans le code source nous pouvons voir en commentaire des caractères spéciaux :

```
    Lorem
    amet
    sit
    consectetur
    ipsum
    dolor
    vrai
    plait
    login
    plait
    Le
    vous
    s'il
    dog
    brown
    lazy
    the
    quick
    the
    jumps
    fox
    over
```

Ce qui nous permet d'obtenir 3 phrases :

* Lorem ipsum dolor sit amet consectetur

* Le vrai login s'il vous plait

* The quick brown fox jumps over the lazy dog

Au bout de 3 minutes nous avons un premier indice qui est : `Les bons mots, le bon ordre et on navigue. Avec le .php pour finir bien-sûr`

Nous voulons prouver ici deux choses: 

* Laisser un commentaire comportant des informations confidentiels peut être dangereux et laisser un indice pouvant mener à une faille.

* Un url non protégé peut mener à une vulnérabilité informatique qui peut se produire lorsqu'une application Web utilise des entrées utilisateur dans une URL sans les valider ou les filtrer adéquatement.

La réponse à cette étape était de mettre `Lorem-ipsum-dolor-sit-amet-consectetur.php` dans l'url.

## login-page.php

Sur cette page l'utilisateur se trouve face à un login.

La méthode pour passer cette étape est de faire un injection sql : `' or 1 =1 ;`

Il y a un petit piège, le bouton de connexion est un faux, il évite votre souris, il y a un réel bouton de connexion transparent qui peut être cliquer aléatoirement ou trouver en inspectant la page.

## user-page.php

Cette page présente l'injection et comment l'éviter.
Dans l'url il suffit de remplacer user par admin dans l'url pour se rendre sur `admin-page.php`

## admin-page.php

Cette page contient un code binaire : `01110101 01110010 01101100 00111101 01110100 01100101 01110011 01110100 00101110 01110000 01100100 01100110`

Il suffit de le convertir en texte et ça nous donne : `url=test.pdf`

si la personne met dans l'url `test.pdf` ça lui affiche un pdf.

## Le PDF

Le pdf est chiffré en César-10. Si l'utilisateur traduit les différents textes du pdf il trouve l'url d'un serveur discord `dtUveqypNA` et un salon `analyse-lambda-bot` et un utilisateur `XxDylanKillerxX`.

## Le serveur Discord

Le serveur Discord contient un bot qui met une liste de failles, dans le salon `analyse-lambda-bot` pour des ip de clients du serveur avec un mot de passe.

Là il faut retrouver l'utilisateur donné, prendre le mot de passe et se rendre sur l'ip donnée qui est `10.13.33.222:1194/login-page-2.php`

## Le site de XxDylanKillerxX

Sur ce site on retrouve un formulaire à remplir, il suffit de mettre l'identifiant `XxDylanKillerxX` et le mot de passe `Je suis dylan le Kikoo`

On est redirigé sur une page avec un lien qui contient un lien confidentiel (win-page.php).

## win-page.php

On retrouve le lien d'un doc confidentiel dans lequel on félicite le joueur et on lui donne la commande à effectuer sur discord `λhacker`. Un rôle lui sera donné afin qu'il puisse accéder aux explications.

## Easter-egg

![](C:\Users\kioki\AppData\Roaming\marktext\images\984c34d8f2250f48f465b0856ce3ca0384c1989f.png)

Ici nous avons Lambda and co

La dernière commande `λhacker` cela sous entends que pour effectuer une commande avec le bot il faut utiliser λ.

Donc la commande est `λ&co`
