document.addEventListener('DOMContentLoaded', () => {
    
    let startGreeting = "";
    let endGreeting = "";

  
    if (window.location.pathname.includes('/forgot-password'))
    {
        createForgotPass()
    }       
    else
    {
        createGreeting();
    }

   
});

function createGreeting() 
{
    const hour = new Date().getHours();
    let timeGreeting;

    if (hour < 5) timeGreeting = GREETINGS.night;
    else if (hour < 12) timeGreeting = GREETINGS.morning;
    else if (hour < 18) timeGreeting = GREETINGS.afternoon;
    else timeGreeting = GREETINGS.evening;

    startGreeting = `${timeGreeting} `;

    endGreeting = `${GREETINGS.welcomeBack} <br> ${GREETINGS.tagline}`;

    setNewText(startGreeting, endGreeting);
}

// Forgot password variant
function createForgotPass() 
{
    startGreeting = `${GREETINGS.noProblem} `;
    endGreeting = `${GREETINGS.passwordBack}`;
    setNewText(startGreeting, endGreeting);
}

function setNewText(setOne, setTwo)
{
    const el = document.getElementById('greeting-p1');
    const el2 = document.getElementById('greeting-p2');

    el.innerHTML = setOne;
    el2.innerHTML = setTwo;
}