// lecture d'un fichier de maniere SYNCHRONE
// chargement d'un module d'IO
// 'fin du programme' est affiche APRÈS le chargement du fichier

const { readFileSync } = require("fs");
const fs = require("fs-extra");
let data = readFileSync("input.txt");
console.log(data.toString());
console.log("fin du programme");

// commande du terminal: node exo1.js