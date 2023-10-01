/* 
    Earnings - Expenses = Profit

    earnings = 100
    expenses = 45
    profit = 55
*/
console.log("User landing page!");

const changeNumberDynamically = () => {
  const earningsDyn = document.getElementById("earnings-dynamic");
  const expensesDyn = document.getElementById("expenses-dynamic");
  const profitDyn = document.getElementById("profit-dynamic");
  let earnings = 100;
  let expenses = 45;
  let profit = earnings - expenses;
  const min = -10;
  const max = 10;
  let percentChange;

  percentChange = Math.random() * (max - min) + min;
  earnings += percentChange;
  profit += earnings - expenses;
  earningsDyn.innerText = earnings.toFixed(2);
  expensesDyn.innerText = expenses.toFixed(2);
  profitDyn.innerText = profit.toFixed(2);
};

setInterval(changeNumberDynamically, 3000);

// setTimeout(() => {
//   percentChange = Math.random() * (max - min) + min;
//   earnings += percentChange;
//   profit += earnings - expenses;
//   earningsDyn.innerText = earnings;
// }, 2000);

// function changeNumberDynamic() {
//   const earningsDyn = document.getElementById("earnings-dynamic");
//   const newContent = "New Content " + new Date().toLocaleTimeString();
//   earningsDyn.textContent = newContent;
// }

// setInterval(changeNumberDynamic, 3000);
