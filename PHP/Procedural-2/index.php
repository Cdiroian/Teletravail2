<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <title>Exercice 1 calcul de l'impot par tranche Webserveur PHP</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
		    * {box-sizing: border-box}
		    body {background: #DFCE76; color: #000}
		   
	    </style>
    </head>
    <body>

    <h1>METHODE DE CALCUL D’UNE MENSUALITE D’UN PRET</h1>
        <form role="form" class="form-inline" action="resultatImpot.php" method="get" id="form1" enctype="multipart/form-data">
            <div class="form-group">
                
                <br/><br/>
                <label>Capital emprunté : </label><br />
                <input type="text" name="capEmpr" id="capEmpr">
                <label>Taux intérêt en %: </label><br />
                <input type="text" name="interet"/><br />
                <label>Durée de remboursement en nb d'année : </label><br />
                <input type="text" name="nbAnnee" /><br />
                <input type="submit" class="btn btn-primary" value="envoyer" />
                <label>Mensualité : </label><br />
                <input type="text" name="Mensualite"/><br />
                <br /><textarea cols="50" rows="5" readonly></textarea><br />
                <br />
            </div>
        </form>
       

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>