# rPress-WP

1. Crée un compte TMDB et [générer une clé API](https://www.themoviedb.org/settings/api?language=fr)
2. Dans le dossier `plugins/rpress.php`, ligne 17 **ajouter votre Clé API fraichement générer**:
```
https://api.themoviedb.org/3/movie/popular?api_key=<CLÉ-API>&language=fr-FR&page=1
```
4. Ajouter le plugin / theme a votre Wordpress
5. Activer le plugin / theme
6. Enjoy.

⚠️ Ce projet utilise TailwindCSS pour modifier le CSS tout se passe dans les fichiers

🔹 [Voici une mini-explications de TailwindCSS](https://www.alsacreations.com/tuto/lire/1812-Tailwind-CSS-decouverte-du-framework-original-et-innovant.html) ➜ Pour appliquer les changement à votre CSS a la base de votre theme (Dossier rpress dans theme)
```
npm run watch:frontend
```
⚠️ Pour appliquer votre theme vous aller devoir crée un liens symbolique de votre dossier:

Dans le dossier theme/rpress effectuer la commande suivante:
```
ln -s theme ../rPress
```
⚠️ ⚠️ Le plugin ne marche pas sans le theme, prenez ce repo pour exemple

Enjoy!
