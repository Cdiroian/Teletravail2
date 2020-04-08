<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Exercice avec POST</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    </head>
    <body>
        <form action="recoit_post.php" method="POST" name="formulaire">
            <h2>Formulaire d'envoi du prénom et du nom</h2>
            Nom: <input type="text" name="nom" /><br />
            Revenus: <input type="text" name="revenu" /><br />
            <input type="submit" name="envoyer" value="envoyer" />
        </form>
    </body>
</html>