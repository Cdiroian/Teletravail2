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
     
    }

    public function cherchligne($_critere, $_value)
    {
      $rq="SELECT * FROM ".$this->table." WHERE ".$_critere."= :valueCritere";

      $rq_prepare=$this->db->prepare($rq);
     
      $rq_prepare->execute (array(':valueCritere'=>$_value));
      return $rq_prepare->fetchAll();
    }

    public function affichContenuTable()
    {

      $this->cherchNomCol();
      echo '<table class="table table-dark table-hover" ><tbody>';
      while($tabLigne=$this->res_exec->fetch())//methode de recupération du résultat de la requête ligne par ligne ( en mode lance à incendie)
      {
        echo"<tr>";
        echo'<th><a href="class-metier/detail.php?id='.$tabLigne[0].'" target="_blank">Voir detail</a></th>';
        

        for($i=0; $i<sizeof($tabLigne);$i++){

          if($i!=0)
          {
            if($i==3)
            {
              echo"<td>".$tabLigne[$i]."€</td>";
            }
            else
            {
              echo"<td>".$tabLigne[$i]."</td>";
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