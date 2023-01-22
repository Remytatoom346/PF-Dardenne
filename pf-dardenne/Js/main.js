let btn_burger = document.querySelector('.burger_container');
let burger_affichage = document.querySelector('.container_navbar_mobile');
let i = 0;

btn_burger.addEventListener('click', (e) => {
   if (i==0) {
    burger_affichage.style.display = 'flex';
    i++;
   } else {
    burger_affichage.style.display = 'none';
    i=0;
   }
});



// burger_affichage.style.display = 'flex';