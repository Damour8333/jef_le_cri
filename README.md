# jef
# jef_le_cri
 pour initialiser
git init
git add .
git commit -m "Premier commit"
git remote add origin https://github.com/tonnom/utilisateur.git
git push -u origin master


aprés le travail 

Ah, je comprends mieux maintenant ! Une fois que tu as déjà configuré ton dépôt Git et que tu as déjà effectué un premier `push`, si tu veux ajouter de nouvelles modifications et les envoyer à nouveau vers GitHub, tu n’as qu’à suivre ces étapes :

### 1. **Naviguer vers ton dossier de projet (si tu n'y es pas déjà)**
```bash
cd /chemin/vers/ton/dossier
```

### 2. **Vérifier l'état des fichiers**
Avant d'ajouter tes changements, tu peux vérifier l’état de ton dépôt (si tu as des fichiers modifiés, ajoutés, etc.) avec :
```bash
git status
```

Cela te permettra de voir les fichiers modifiés ou ajoutés. Si tout est en ordre et que tu souhaites ajouter ces modifications, passe à l'étape suivante.

### 3. **Ajouter les modifications (ou tous les fichiers)**
Si tu veux ajouter **toutes** les modifications (fichiers modifiés et nouveaux fichiers) :
```bash
git add .
```

Si tu souhaites ajouter un fichier spécifique, tu peux faire :
```bash
git add nom_du_fichier
```

### 4. **Effectuer un commit avec un message**
Une fois que tu as ajouté les fichiers, tu dois enregistrer ces changements avec un commit. Utilise un message explicite pour décrire ce que tu as changé :
```bash
git commit -m "Ajout des dernières modifications"
```

### 5. **Pousser tes modifications vers GitHub**
Ensuite, il te suffit de pousser tes modifications sur GitHub. Cela enverra les modifications sur la branche `master` (ou `main` selon la configuration de ton dépôt) :
```bash
git push origin master
```

Si tu utilises `main` comme branche principale, remplace `master` par `main` :
```bash
git push origin main
```

### Récapitulatif des commandes :
1. `cd /chemin/vers/ton/dossier`
2. `git status` (facultatif, pour vérifier l’état)
3. `git add .` (ou `git add nom_du_fichier`)
4. `git commit -m "Ajout des dernières modifications"`
5. `git push origin master` (ou `git push origin main` si tu utilises `main`)

Et voilà, tes modifications seront envoyées sur GitHub !
