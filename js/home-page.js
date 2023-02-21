document.querySelector(".section-style .button").addEventListener("click", (event) => {
    event.preventDefault();
    alert(
        "Welcome to Pileshkiq! This website is still under construction"
        + "but check back soon for more updates!"
    );
});

//!random fakt za piletata

const chickenFacts = [
    "Chickens are the closest living relatives to the T-Rex dinosaur!",
    "Chickens have a natural ability to see over 300 degrees, without moving their heads!",
    "The record for most eggs laid in one day by a single chicken is 7!",
    "Chickens have a strong memory and can recognize over 100 different faces of people or animals!",
    "Chickens are very social animals and have their own unique ways of communicating with each other!",
    "A group of chickens is called a flock!",
    "Chickens have their own unique language, consisting of over 30 different calls and sounds!",
    "Hens can communicate with their chicks while they are still in the egg!",
    "Chickens can remember and recognize over 100 different individuals, including humans!",
    "Chickens are social animals and can form strong bonds with each other!",
    "Chickens have excellent eyesight and can see in color!",
    "Chickens can run up to 9 miles per hour!",
    "Chickens are capable of problem-solving and can even understand cause and effect relationships!"
];

const factDisplay = document.querySelector(".fact-display");

if (factDisplay) {
    const randomFact = chickenFacts[Math.floor(Math.random() * chickenFacts.length)];
    factDisplay.textContent = randomFact;
}