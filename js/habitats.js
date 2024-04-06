
let toggleSwitch = document.getElementById('toggle-switch');
let targetElement = document.getElementById('hidden_animal_image');

toggleSwitch.addEventListener('change', function() {
  if (toggleSwitch.checked) {
    targetElement.classList.remove('hidden_animal_image');
  } else {
    targetElement.classList.add('hidden_animal_image');
  }
});

