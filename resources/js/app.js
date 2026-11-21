
import './bootstrap';

// DOM Selection Practice

const pageTitle = document.querySelector('title');

console.log('Page Title:', pageTitle.textContent);


// Login Form DOM Selection

const loginForm = document.querySelector('#loginForm');

const emailInput = document.querySelector('#email');

const passwordInput = document.querySelector('#password');

console.log('Login Form:', loginForm);

console.log('Email Input:', emailInput);

console.log('Password Input:', passwordInput);


// Login Form Submission Event

loginForm.addEventListener('submit', function (event) {

    event.preventDefault();

    console.log('Login form submitted successfully!');

});
