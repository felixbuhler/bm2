function switchText() {
  var texts = ["🧜‍♂️", "💕", "✊🏻✊🏽✊🏿", "🫶", "🤝", "👀", "🌈", "🧠", "❤️", "🌿", "🦄"];

  var randomNumber = Math.floor(Math.random() * texts.length); //creates random No. from 1 - 3
  console.log(randomNumber);
  document.getElementById("intro-switch").innerHTML = texts[randomNumber];
  //the problem
}

// Magnetic Button

var magnets = document.querySelectorAll('.magnetic')
var strength = 100

magnets.forEach((magnet) => {
  magnet.addEventListener('mousemove', moveMagnet);
  magnet.addEventListener('mouseout', function (event) {
    TweenMax.to(event.currentTarget, 1, { x: 0, y: 0, ease: Power4.easeOut })
  });
});

function moveMagnet(event) {
  var magnetButton = event.currentTarget
  var bounding = magnetButton.getBoundingClientRect()

  //console.log(magnetButton, bounding)

  TweenMax.to(magnetButton, 1, {
    x: (((event.clientX - bounding.left) / magnetButton.offsetWidth) - 0.5) * strength,
    y: (((event.clientY - bounding.top) / magnetButton.offsetHeight) - 0.5) * strength,
    ease: Power4.easeOut
  })

  //magnetButton.style.transform = 'translate(' + (((( event.clientX - bounding.left)/(magnetButton.offsetWidth))) - 0.5) * strength + 'px,'+ (((( event.clientY - bounding.top)/(magnetButton.offsetHeight))) - 0.5) * strength + 'px)';
}

