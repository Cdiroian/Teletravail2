//var requestURL = 'C:\Users\CRM\Desktop\exercices-JSON\javascript\volcan.json';
// La fonction renvoie l'objet XMLHttpRequest selon le système 
// d'exploitation sur lequel s'exécute le navigateur

var container = new XMLHttpRequest();
container.addEventListener('readystatechange',function(){
if(container.readyState === 4 && container.status == 200){
    var data = JSON.parse(container.responseText);
    console.log(data);
    }
});
container.open('GET','javascript/volcans.json',true);

container.send();

img = 1;
nombreImages = 0;
data = '';


function afficheImage(_data){
    nombreImages = data.length;
    if (img >= 1 && img < _data.length) {
        var uneImage = _data[img];
        var unCarousel = document.createElement('div');

        unCarousel.setAttribute('class','carousel-inner');
        unCarousel.innerHTML = '<div class="carousel-item active"><img class="d-block w-100" src="./photos_volcans/'+uneImage.id'.jpg" alt="'+uneImage.alt+'">'+
        '<div class= "carousel-caption d-block"><p class="titre" id="titreImage">'+uneImage.titre+'</p></div>';
        document.getElementById('carouselExampleControls').appendChild(unCarousel)
    }
    else {
        img = 1;
        container.open('GET','javascript/volcans.json',true);
        container.send();
    }
}