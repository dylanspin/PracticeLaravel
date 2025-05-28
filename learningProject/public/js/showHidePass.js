const passwordInput = document.getElementById('passwordInput');
const toggleButton = document.getElementById('togglePassword');

const eyeIcon = document.getElementById('eyeIcon');
const eyeIconClosed = document.getElementById('eyeIconClosed');

const eyeIconLight = document.getElementById('eyeIcon2');
const eyeIconClosedLight = document.getElementById('eyeIconClosed2');


eyeIcon.style.display = 'none';
eyeIconLight.style.display = 'none';

toggleButton.addEventListener('click', () => {
    const isPassword = passwordInput.type === 'password';
    passwordInput.type = isPassword ? 'text' : 'password';
    
    eyeIcon.style.display = isPassword ? 'block' : 'none';
    eyeIconClosed.style.display = !isPassword ? 'block' : 'none';

    eyeIconLight.style.display = isPassword ? 'block' : 'none';
    eyeIconClosedLight.style.display = !isPassword ? 'block' : 'none';
});