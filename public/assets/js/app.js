// get main
let main = document.querySelector('main');
main.style.height = innerHeight + 'px';

let userChoice = document.querySelector('#userChoice');
let check = document.getElementsByClassName('check');
let switchForm = document.getElementsByClassName('switch');
let goBack = document.getElementsByClassName('goBack');
let logOrSign = document.getElementById('logOrSign');


for(let i = 0 ; i < check.length ; i++){
    check[i].addEventListener('click', function (){
        switchForm[i].style.display = 'block';
        userChoice.style.display = 'none';
        logOrSign.style.display = 'none';
    })
}

for (let i = 0 ; i < goBack.length ; i++){
    goBack[i].addEventListener('click', function (){
        userChoice.style.display = 'flex';
        logOrSign.style.display = 'block';
        for(let item of switchForm){
            item.style.display = 'none';
        }
    })
}

