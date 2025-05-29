const passwordInput = document.getElementById('passwordInput');
const passwordInput2 = document.getElementById('password');
const passwordInput3 = document.getElementById('password_confirmation');

const toggleButton = document.getElementById('togglePassword');

const eyeIcon = document.getElementById('eyeIcon');
const eyeIconClosed = document.getElementById('eyeIconClosed');

const eyeIconLight = document.getElementById('eyeIcon2');
const eyeIconClosedLight = document.getElementById('eyeIconClosed2');

let current = 'password';

eyeIcon.style.display = 'none';
eyeIconLight.style.display = 'none';

toggleButton.addEventListener('click', () => {

    const isPassword = current === 'password';

    current = isPassword ? 'text' : 'password';
    
    if(passwordInput)
    {
        passwordInput.type = current;
    }

    if(passwordInput2)
    {
        passwordInput2.type = current;
    }

    if(passwordInput3)
    {
        passwordInput3.type = current;
    }
    
    eyeIcon.style.display = isPassword ? 'block' : 'none';
    eyeIconClosed.style.display = !isPassword ? 'block' : 'none';

    eyeIconLight.style.display = isPassword ? 'block' : 'none';
    eyeIconClosedLight.style.display = !isPassword ? 'block' : 'none';
});