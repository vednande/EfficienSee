console.log("User landing page!");

let earnings = 80000000;
let expenses = 55000000;
let profit = earnings - expenses;
const profitLastMonthValue = 17477439;

const profitLastMonthVar = document.getElementById("prev-month-profit");
profitLastMonthVar.textContent = profitLastMonthValue;

const minChangePercent = -2;
const maxChangePercent = 2;

function getRandomPercentageChange(min, max) {
  return (Math.random() * (max - min) + min) / 100;
}

function updateValuesDynamically() {
  const earningsChange =
    earnings * getRandomPercentageChange(minChangePercent, maxChangePercent);
  const expensesChange =
    expenses * getRandomPercentageChange(minChangePercent, maxChangePercent);

  earnings += earningsChange;
  expenses += expensesChange;
  profit = earnings - expenses;

  document.getElementById("earnings-dynamic").textContent = earnings.toFixed(2);
  document.getElementById("expenses-dynamic").textContent = expenses.toFixed(2);
  document.getElementById("profit-dynamic").textContent = profit.toFixed(2);
  document.getElementById("percentage-earnings").textContent = (
    earningsChange / 10000
  ).toFixed(2);
  document.getElementById("percentage-expenses").textContent = (
    expensesChange / 10000
  ).toFixed(2);
  document.getElementById("percentage-profit").textContent = (
    profit - profitLastMonthValue
  ).toFixed(2);
}

updateValuesDynamically();

setInterval(updateValuesDynamically, 2000);
