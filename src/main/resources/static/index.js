const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add('right-panel-active');
});

signInButton.addEventListener('click', () => {
  container.classList.remove('right-panel-active');
});

function validateForm() {
  var x = document.forms["registerForm"]["password"].value;
  var y = document.forms["registerForm"]["password_check"].value;
  if(x.length<6){
      alert("密碼長度不足，至少為6位");
      return false;
  }
  if (x != y) {
      alert("密碼與確認密碼需一致");
      return false;
  }
}
