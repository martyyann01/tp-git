Quelle sont les deux façons d'initialiser un dépôt ? (1 point)
 
En ligne de commande avec git init ou en clonant un dossier depuis le serveur distant.
 
 
À quoi sert une Pull Request / Merge Request ? (1 point)
 
Cela permet de controler les demandes de merges avec une validation obligatoire avant de faire le merge et d'avoir la possibilité de se faire corriger le code par un collège ou un camarade.
 
 
Qu'est ce qu'une branche ? (1 point)
 
Une branche est une version d'un projet pointant vers un commit.
 
 
Vous venez de modifier un fichier. Comment créer un commit ? (3 points)
 
git status pour vérifier le statuts des fichiers (ajouté, modifié ou supprimé)
 
git add -A pour ajouter les modifications.
 
git commit -m "Mon 1er Commit" pour creer le commit.
 
 
Pourquoi est-il plus prudent d'utiliser origin/master plutôt que master pour se mettre à jour ? (1 point)
 
origin/master est le dépot distant et donc le plus à jour, alors que Master est son clone locale.
 
 
A quoi servent les commandes git status, git log et git reflog ? Quand les utiliser ? (2 points)
 
git statuts sert à vérifier si tout les fichiers sont suivis ainsi que savoir leurs statuts (d'où le nom).
 
git log permet de voir l'historique des commits avec leurs hashs, date, auteur et le message
 
git reflog permet de voir l'historique des mises a jour de la branche dans le dépot local.
 
 
Quelles sont les conditions qui doivent être réunies pour que des conflits surviennent ? (2 points)
 
Tenter de fusionner deux branches en ayant modifiée le même fichier.
 
 
Imaginez que la branche master du dépôt distant contient de nouveaux commits. Comment intégrer ces commits dans votre branche ? (3 points)
 
git pull --rebase origin master
 

