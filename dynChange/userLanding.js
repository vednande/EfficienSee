console.log("User landing page!");

const changeNumberDynamically = () => {
  // FOR PRINTING FIGURES OF EARNINGS, EXPENSES AND PROFITS
  const earningsDyn = document.getElementById("earnings-dynamic");
  const expensesDyn = document.getElementById("expenses-dynamic");
  const profitDyn = document.getElementById("profit-dynamic");

  // FOR PRINTING FIGURES OF PERCENTAGE CHANGE IN EARNINGS, EXPENSES AND PROFITS
  const percentageChangeEarnings = document.getElementById(
    "percentage-earnings"
  );
  const percentageChangeExpenses = document.getElementById(
    "percentage-expenses"
  );
  const percentageChangeProfit = document.getElementById("percentage-profit");

  /* ******** DISPLAYING FIGURES CALCULATION ********  */

  // MIN and MAX DECLARATION FOR PERCENTAGE CHANGE
  const min = -2;
  const max = 2;

  // EARNINGS DECLARATION
  let earnings = 100000;
  let percentageChangeInEarnings = Math.random() * (max - min) + min;

  // EXPENSES DECLARATION
  let expenses = 45000;
  let percentageChangeInExpenses = Math.random() * (max - min) + min;

  // PROFIT DECLARATION
  let profit = earnings - expenses;

  if (percentageChangeInEarnings > 0 && percentageChangeInExpenses > 0) {
    earnings = earnings + earnings * percentageChangeInEarnings;
    expenses = expenses + expenses * percentageChangeInExpenses;
    profit = earnings - expenses;
  }

  if (percentageChangeInEarnings < 0 && percentageChangeInExpenses < 0) {
    earnings = earnings - earnings * percentageChangeInEarnings;
    expenses = expenses - expenses * percentageChangeInExpenses;
    profit = earnings - expenses;
  }

  if (percentageChangeInEarnings > 0 && percentageChangeInExpenses < 0) {
    earnings = earnings + earnings * percentageChangeInEarnings;
    expenses = expenses - expenses * percentageChangeInExpenses;
    profit = earnings - expenses;
  } else {
    earnings = earnings - earnings * percentageChangeInEarnings;
    expenses = expenses + expenses * percentageChangeInExpenses;
    profit = earnings - expenses;
  }

  // WRITING NUMERIC CHANGE ON WEB PAGE
  earningsDyn.innerText = earnings.toFixed(2);
  expensesDyn.innerText = expenses.toFixed(2);
  profitDyn.innerText = profit.toFixed(2);

  // WRITING PERCENTAGE CHANGE ON WEB PAGE
  percentageChangeEarnings.innerText = percentageChangeInEarnings.toFixed(2);
  percentageChangeExpenses.innerText = percentageChangeInExpenses.toFixed(2);
  // percentageChangeProfit.innerText = percentageChangeInEarnings.toFixed(2);
};

setInterval(changeNumberDynamically, 2000);

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
