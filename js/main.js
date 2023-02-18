document.querySelector('.section-style .button').addEventListener('click', (event) => {
    event.preventDefault();
    alert('Welcome to Pileshkiq! This website is still under construction, but check back soon for more updates!');
});

// Display a random chicken fact on the homepage
const chickenFacts = [
    "Chickens are the closest living relatives to the T-Rex dinosaur!",
    "Chickens have a natural ability to see over 300 degrees, without moving their heads!",
    "The record for most eggs laid in one day by a single chicken is 7!",
    "Chickens have a strong memory and can recognize over 100 different faces of people or animals!",
    "Chickens are very social animals and have their own unique ways of communicating with each other!"
];

const factDisplay = document.querySelector('.fact-display');

if (factDisplay) {
    const randomFact = chickenFacts[Math.floor(Math.random() * chickenFacts.length)];
    factDisplay.textContent = randomFact;
}

  // Add a form submission handler for a "Contact Us" form
// const contactForm = document.querySelector('#contact-form');

// if (contactForm) {
//     contactForm.addEventListener('submit', function(event) {
//     event.preventDefault();
//     const nameInput = document.querySelector('#name');
//     const emailInput = document.querySelector('#email');
//     const messageInput = document.querySelector('#message');

//       // TODO: Send form data to a server using an AJAX request
//         alert('Thank you for your message! We will get back to you as soon as possible.');
//         nameInput.value = '';
//         emailInput.value = '';
//         messageInput.value = '';
//     });
// }

document.getElementById("showMore").addEventListener('mouseover', (event) => {

}); 

    

