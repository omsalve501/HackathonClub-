
//for navbar


// You can customize the text here
const textToType = '"WELCOME TO HACKATHON CLUB!"';
const typingElement = document.getElementById('typing-text');
const typingSpeed = 100; // Adjust the typing speed by changing the interval

function typeText() {
  let i = 0;

  function updateText() {
    if (i <= textToType.length) {
      typingElement.textContent += textToType.charAt(i);
      i++;
    } else {
      clearInterval(typingInterval);
    }
  }

  // Call updateText at regular intervals
  const typingInterval = setInterval(updateText, typingSpeed);
}

// Start typing when the page loads
window.onload = typeText;



 //Login Page code from here **************************************************************************

 