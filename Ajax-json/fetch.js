/* 
1) Récupérer la liste des employés en utilisant AJAX sur http://dummy.restapiexample.com/api/v1/employees
2) Alimenter le tableau HTML
*/

const empList = document.getElementById('employeesList'); // TBODY du tableau 
const empFoot = document.getElementById('employeesFoot'); // TFOOT du tableau
var employees = []; // La collection d'employés


/** Evènement déclenché au click d'un bouton "Delete"
		Supprime un employé de la collection et reconstruit le tableau HTML
		@param MouseEvent _event Les données de l'évènement
*/
function deleteClick(_event)
{
	// _event.target = élément qui a déclenché l'évènement
	console.log(_event.target); 
    
  // _event.target.dataset.rowid = position de l'employé dans la collection
  // cette valeur a été définie dans la fonction displayEmployees() à la création du bouton
  // Pour les dataset, voir: 
  // https://developer.mozilla.org/fr/docs/Web/API/HTMLElement/dataset
  console.log(_event.target.dataset.rowid); 
  
  // rowId = position de l'employé dans la collection
  let rowId = _event.target.dataset.rowid; 
  
  // suppression d'1 élément à la position rowId dans la collection employees
  // Voir: https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Objets_globaux/Array/splice
  employees.splice(rowId, 1); 
  
  // contrôle du contenu de la collection
  console.log(employees);
  
  // On régénère l'affichage du tableau HTML
  displayEmployees();
}


/** Evènement déclenché au click d'un bouton "Duplicate"
		Duplique un employé dans la collection et reconstruit le tableau HTML
		@param MouseEvent _event Les données de l'évènement
*/
function duplicateClick(_event)
{
	let rowId = _event.target.dataset.rowid; // voir deleteClick
}


/** (re)Construction des données des employés au format HTML
		Prrcours de la collection d'employés et insertion dans le tableau HTML
		@param MouseEvent _event Les données de l'évènement
*/
function displayEmployees()
{
	empList.innerHTML = ''; // On vide le contenu du TBODY (récupéré en haut du script via getElementById)

	// Pour chaque employé de la collection employees
  // i = position de l'employé dans la collection
	for(var i = 0; i < employees.length; i++) {
  	
    let emp = employees[i]; // employé courant    
    
    // Création de la cellule <TD> pour le nom de l'employé    
    let tdName = document.createElement('td');
    tdName.innerHTML = emp.employee_name;
    
    // Création de la cellule <TD> pour les boutons d'action
    let tdBtn = document.createElement('td');
      
    // Création du bouton "Duplicate"
    let btnDuplicate = document.createElement('button');
    btnDuplicate.innerHTML = 'Duplicate';
    
    // Création du bouton "Delete"
    let btnDelete = document.createElement('button');
    btnDelete.innerHTML = 'Delete';
    btnDelete.dataset.rowid = i; // row-id sera visible comme atribut "data-rowid="i" dans l'élément HTML.
    // Voir: https://developer.mozilla.org/fr/docs/Web/API/HTMLElement/dataset
    btnDelete.addEventListener('click', deleteClick); // associaiotn de l'évènement
    
    // ajout des 2 boutons à la cellule des boutons
    tdBtn.appendChild(btnDuplicate); 
    tdBtn.appendChild(btnDelete);
        
    // création d'un élément <TR> (ligne de tableau courante)
    let tr = document.createElement('tr'); 
    
    tr.appendChild(tdName); // ajout de la cellule du nom à la ligne TR courante
    tr.appendChild(tdBtn); // ajout de la celulle des boutons à la ligne TR courante
    
    empList.appendChild(tr); // ajout de la ligne courante au TBODY du tableau HTML   
  }
}


// AJAX fetch: https://developer.mozilla.org/fr/docs/Web/API/Fetch_API
// Tuto vidéo: https://www.grafikart.fr/tutoriels/fetch-1017


fetch('https://dummy.restapiexample.com/api/v1/employees') 
.then(function(_reponse) { 
	console.log(_reponse);
	return _reponse.json();
})
.then(function(_json) {
  employees = _json.data;
	console.log(employees);
  displayEmployees();
});


