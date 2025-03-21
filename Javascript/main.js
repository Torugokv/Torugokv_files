const numbers = [1, 2, 3, 4, 5];

const numbersMultipliedbyTwo = numbers.map(function (number) {
  return number * 2;
});

console.log(numbersMultipliedbyTwo);

const ages = [8, 13, 27, 30, 22, 40];

const evenAges = ages.filter(function (age) {
  return age % 2 === 0;
});

console.log(evenAges);

const sumOfAges = ages.reduce(function () {});

const person = {
  firstName: "Felipe",
  lastName: "Rocha",
  age: "21",
  hobbies: ["Assistir F1", "Jogar futebol", "Ler"],
};
