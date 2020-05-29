<?php
  
  class myTable
  {
  
    protected $db;
    private $res_exec;
    private $table;
    //public $tabCols;
    
    public function __construct($_table)
    {
      $this->db = self::dbconnection();
      $this->res_exec=$this->db->prepare(" select * from ".$_table);
      $this->res_exec->execute();
      $this->table=$_table;
    }


    public static function dbconnection()
    {
      try
      {
        return new PDO('mysql:host=localhost;dbname=guide','root','', array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_CASE =>  PDO::CASE_NATURAL,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NUM));
      } catch( PDOException $e) {

        die("Database connection failded". $e->getMessage());

        return "erreur connexion";

      }
    }

    public function cherchNomCol()
    {
      // travail a faire


    }


    //fonction de recherche d'une ligne dans la table
    public function cherchligne($_critere, $_value)
    {
      $rq="SELECT * FROM ".$this->table." WHERE ".$_critere."= :valueCritere";

      $rq_prepare=$this->db->prepare($rq);
     
      $rq_prepare->execute (array(':valueCritere'=>$_value));
      return $rq_prepare->fetchAll();
    }


    //fonction suppression de ligne dans la table
    public function insertionLigne($_nom,$_adresse,$_prix,$_commentaire,$_note,$_visite)
    {
      $rq="INSERT INTO restaurants ( nom, adresse, prix ( en € ), commentaire, note ( sur /10), visite) VALUES (:nom, :adresse, :prix , :commentaire, :note, :visite)";
      $rq_prepare=$this->db->prepare($rq);

      $rq_prepare->bindParam(':nom',$_nom, PDO::PARAM_STR);
      $rq_prepare->bindParam(':adresse',$_aderesse,PDO::PARAM_STR);
      $rq_prepare->bindParam(':prix',$_prix,PDO::PARAM_STR);
      $rq_prepare->bindParam(':commentaire',$_commentaire,PDO::PARAM_STR);
      $rq_prepare->bindParam(':note',$_note,PDO::PARAM_STR);
      $rq_prepare->bindParam(':visite',$_visite,PDO::PARAM_STR);

      $rq_prepare->execute();
      $nbLigne=$rq_prepare->rowCount();

      return $nbLigne;
    }

    //fonction de modification d'une ligne de la table
    public function modificationligne($_id,$_nom,$_adresse,$_prix,$_commentaire,$_note,$_visite)
    {
      $rq="UPDATE restaurants SET 'nom'=:nom, 'adresse'=:adresse, 'prix'=:prix ( en € ), 'commentaire'=:commentaire, 'note'=:note ( sur /10), 'visite'=:visite) WHERE id=:id";
      $rq_prepare=$this->db->prepare($rq);

      $rq_prepare->bindParam(':id', $_id, PDO::PARAM_INT);
      $rq_prepare->bindParam(':nom',$_nom, PDO::PARAM_STR);
      $rq_prepare->bindParam(':adresse',$_aderesse,PDO::PARAM_STR);
      $rq_prepare->bindParam(':prix',$_prix,PDO::PARAM_STR);
      $rq_prepare->bindParam(':commentaire',$_commentaire,PDO::PARAM_STR);
      $rq_prepare->bindParam(':note',$_note,PDO::PARAM_STR);
      $rq_prepare->bindParam(':visite',$_visite,PDO::PARAM_STR);

      $rq_prepare->execute();
      $nbLigne=$rq_prepare->rowCount();

      return $nbLigne;
    }
    public function supprimerLigne()
    {
      $rq ="DELETE FROM ".$this->table."WHERE id=:id";
      $rq_prepare=$this->db->prepare($rq);
      $rq_prepare->bindParam(':id', $_id,PDO::PARAM_INT);
      $rq_prepare->execute();
      $nbLigne=$rq_prepare->rowCount();

      return $nbLigne;

    }
    
    //Récupére les données en JSON
    public function chercherCollection()
    {
      
      $collection='[';
      while($unResto=$this->res_exec->fetch(PDO::FETCH_OBJ))//mode lance à incendie (ligne par ligne)
		  { 
        $collection.='{';
		    $collection.='"id":"'.$unResto->id.'",';
		    $collection.='"nom":"'.$unResto->nom.'",';
		    $collection.='"adresse":"'.$unResto->adresse.'",';
		    $collection.='"prix":'.$unResto->prix.',';
		    $collection.='"commentaire":"'.$unResto->commentaire.'",';
		    $collection.='"note":'.$unResto->note.',';
		    $collection.='"date_visite":"'.$unResto->date_visite.'"';
		
			  $collection.='},';
      }

      $longChaine = strlen($collection);
      $sousCollec=substr($collection,0,$longChaine-1);
      $sousCollec.=']';

      $flux=fopen("dataObject/collections.json","w+");
      fwrite($flux,$sousCollec);
      fclose($flux);
      return $sousCollec;

      
    }

    public function affichContenuTable()
    {

      $this->cherchNomCol();
      echo '<table class="table table-dark table-hover" ><tbody>';
      while($tabLigne=$this->res_exec->fetch())//methode de recupération du résultat de la requête ligne par ligne ( en mode lance à incendie)
      {
        echo"<tr>";
        echo '<th><form method="POST" action="modifier.php"> <input type="hidden" value="'.$tabligne[0].'" name="idmod"  id="idmod'.$tabligne[0].'" > 
        <input type="submit" id="btnMod" name="btnMod" value="Modifier" class="btn btn-primary" > </form> </th>
        <th><a href="detail.php?id='.$tabligne[0].'"  target="_blank" >Voir détail</a></th>';
       

        for($i=0; $i<sizeof($tabligne);$i++)
			  {
          if($i!=0)
          {
				
					  if($i==3)
					  {
						  echo"<td>".$tabligne[$i]."€</td>";
					  }
					  else if($i==6)
					  {

				  	  $madate=new DateTime($tabligne[$i]);
						  echo"<td>".$madate->format('d-m-Y')."</td>";
					  } 
					  else
					  {
					    echo"<td>".stripslashes($tabligne[$i])."</td>";
						
					  }
				  }
				
			  }

        echo "</tr>";
      }


      echo' </tbody></table>';

    }

  }



  class MySpecialTable extends Mytable 
	{
		

		
		
	}
    /* function cherchNomCol ($_table,$_connex)
      {
        $rq="select * from".$_table;
          $resultat=$_connex->query($rq);
          $select_messages=$_db->execute();
          $nbCols=$resultat->columnCount();
          $tabNomCol=array();
          for($i=0; $i<$nbCols;$i++){
            $tab=$resultat->getColumnMeta($i);

          $tabNomCols[$i]=$tab['name'];
          }
          //echo var_dump($tabNomCol);

        return $tabNomCol;
    } */