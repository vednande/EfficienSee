const cardOne = document.getElementById("card-one");
const cardTwo = document.getElementById("card-two");
const cardThree = document.getElementById("card-three");
const cardFour = document.getElementById("card-four");
const cardFive = document.getElementById("card-five");
const cardSix = document.getElementById("card-six");
const cardSeven = document.getElementById("card-seven");
const cardEight = document.getElementById("card-eight");
const cardNine = document.getElementById("card-nine");

/* FOR CARD ONE */
cardOne.addEventListener("mouseenter", () => {
  cardTwo.style.opacity = "0.2";
  cardThree.style.opacity = "0.2";
  cardFour.style.opacity = "0.2";
  cardFive.style.opacity = "0.2";
  cardSix.style.opacity = "0.2";
  cardSeven.style.opacity = "0.2";
  cardEight.style.opacity = "0.2";
  cardNine.style.opacity = "0.2";
});
cardOne.addEventListener("mouseleave", () => {
  cardTwo.style.opacity = "1";
  cardThree.style.opacity = "1";
  cardFour.style.opacity = "1";
  cardFive.style.opacity = "1";
  cardSix.style.opacity = "1";
  cardSeven.style.opacity = "1";
  cardEight.style.opacity = "1";
  cardNine.style.opacity = "1";
});

/* FOR CARD TWO */
cardTwo.addEventListener("mouseenter", () => {
  cardOne.style.opacity = "0.2";
  cardThree.style.opacity = "0.2";
  cardFour.style.opacity = "0.2";
  cardFive.style.opacity = "0.2";
  cardSix.style.opacity = "0.2";
  cardSeven.style.opacity = "0.2";
  cardEight.style.opacity = "0.2";
  cardNine.style.opacity = "0.2";
});
cardTwo.addEventListener("mouseleave", () => {
  cardOne.style.opacity = "1";
  cardThree.style.opacity = "1";
  cardFour.style.opacity = "1";
  cardFive.style.opacity = "1";
  cardSix.style.opacity = "1";
  cardSeven.style.opacity = "1";
  cardEight.style.opacity = "1";
  cardNine.style.opacity = "1";
});

/* FOR CARD THREE */
cardThree.addEventListener("mouseenter", () => {
  cardOne.style.opacity = "0.2";
  cardTwo.style.opacity = "0.2";
  cardFour.style.opacity = "0.2";
  cardFive.style.opacity = "0.2";
  cardSix.style.opacity = "0.2";
  cardSeven.style.opacity = "0.2";
  cardEight.style.opacity = "0.2";
  cardNine.style.opacity = "0.2";
});
cardThree.addEventListener("mouseleave", () => {
  cardOne.style.opacity = "1";
  cardTwo.style.opacity = "1";
  cardFour.style.opacity = "1";
  cardFive.style.opacity = "1";
  cardSix.style.opacity = "1";
  cardSeven.style.opacity = "1";
  cardEight.style.opacity = "1";
  cardNine.style.opacity = "1";
});
