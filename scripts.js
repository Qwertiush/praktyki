const firstName = document.getElementById('firstName');
const lastName = document.getElementById('lastName');
const email = document.getElementById('email');
const message = document.getElementById('message');

const form = document.getElementById('form');
const errorMessage = document.getElementById('errorMessage');

form.addEventListener('submit', (e) => {
    let errors = [];
    var pattern = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(firstName.value === '' || firstName.value == null){
        errors.push('Imie jest wymagane');
    }
    if(lastName.value === '' || lastName.value == null){
        errors.push('Nazwisko jest wymagane');
    }
    if(!email.value.match(pattern)){
        errors.push('Email jest niepoprawny');
    }
    if(message.value === '' || message.value == null){
        errors.push('Treść wiadomości jest wymagana');
    }
    
    if(errors.length > 0){
        e.preventDefault();
        errorMessage.innerText = errors.join(', ');
    }
    
});