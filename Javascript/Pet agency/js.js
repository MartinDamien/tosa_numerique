const petsData = [
  {
    name: "Purrsloud",
    species: "chat",
    favFoods: ["wet food", "dry food", "<strong>any</strong> food"],
    birthYear: 2021,
    photo: "https://learnwebcode.github.io/json-example/images/cat-2.jpg",
  },
  {
    name: "Barksalot",
    species: "chien",
    birthYear: 2013,
    photo: "https://learnwebcode.github.io/json-example/images/dog-1.jpg",
  },
  {
    name: "Meowsalot",
    species: "chat",
    favFoods: ["thon", "catnip", "celerie"],
    birthYear: 2016,
    photo: "https://learnwebcode.github.io/json-example/images/cat-1.jpg",
  },
];
function age(birthYear) {
    let calculatedAge = new Date().getFullYear() - birthYear;
    if (calculatedAge == 1) {
      return "1 ans";
    } else if (calculatedAge == 0) {
      return "Bébé";
    } else {
      return `${calculatedAge} ans`;
    }
  }
  
  function foods(foods) {
    return `
  <h4>Nouriture favorite</h4>
  <ul class="foods-list">
  ${foods.map(food => `<li>${food}</li>`).join("")}
  </ul>
  `;
  }
  
  function petTemplate(pet) {
    return `
      <div class="animal">
      <img class="pet-photo" src="${pet.photo}">
      <h2 class="pet-name">${pet.name} <span class="species">(${pet.species})</span></h2>
      <p><strong>Age:</strong> ${age(pet.birthYear)}</p>
      ${pet.favFoods ? foods(pet.favFoods) : ""}
      </div>
    `;
  }
  
  document.getElementById("app").innerHTML = `
    <h1 class="app-title">Pets (${petsData.length} results)</h1>
    ${petsData.map(petTemplate).join("")}
    <p class="footer">These ${petsData.length} pets were added recently. Check back soon for updates.</p>
  `;
  

/*femmes.forEach(function (f) {
  document.write(f.nom_produit + "<br>");
  document.write(f.prix + "<br>");
  document.write('<img src="images/' + f.photo + '"><br>');
  document.write(f.tailles + "<br>");
});*/
