// get main
let main = document.querySelector('main');
main.style.height = innerHeight + 'px';

// get elements
let userChoice = document.querySelector('#userChoice');
let choice = document.getElementsByClassName('choice');
let switchForm = document.getElementsByClassName('switchForm');
let goBack = document.getElementsByClassName('goBack');
let whatForm = document.getElementById('whatForm');

// get form
let userForm = document.getElementsByTagName('form');

let wForm;
// display form register or connection
for(let i = 0 ; i < choice.length ; i++){
    choice[i].addEventListener('click', function (){
        // display the form
        switchForm[i].style.display = 'block';
        userChoice.style.display = 'none';
        whatForm.style.display = 'none';
        wForm = i;
        console.log(wForm);
    })
}

// return on "choice" step - hide forms
for (let i = 0 ; i < goBack.length ; i++){
    goBack[i].addEventListener('click', function (){
        userChoice.style.display = 'flex';
        whatForm.style.display = 'block';
        for(let item of switchForm){
            item.style.display = 'none';
        }
    })
}

// if(form) {}

