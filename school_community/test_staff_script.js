const staffSignInButton=document.getElementById('staffSignInButton');
const staffSignUpButton=document.getElementById('staffSignUpButton');
const staffSignInForm=document.getElementById('staff_signIn');
const staffSignUpForm=document.getElementById('staff_signUp');

staffSignUpButton.addEventListener('click', function(){
    staffSignInForm.style.display="none";
    staffSignUpForm.style.display="block";
})
staffSignInButton.addEventListener('click', function(){
    staffSignInForm.style.display="block";
    staffSignUpForm.style.display="none";
})