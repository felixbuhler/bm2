function switchText() {
  var texts = ["🌈", "🧠", "✊🏻✊🏽✊🏿", "🫶", "❤️", "🌿", "🧙‍♂️", "🦄"];

  var randomNumber = Math.floor(Math.random() * texts.length); //creates random No. from 1 - 3
  console.log(randomNumber);
  document.getElementById("intro-switch").innerHTML = texts[randomNumber];
  //the problem
}

// Magnetic Button

