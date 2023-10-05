console.log("User landing page!");

/* const changeNumberDynamically = () => {
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

  // ******** DISPLAYING FIGURES CALCULATION ******** 

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
}; */

// Initialize earnings, expenses, and profit values
let earnings = 100000; // Initial earnings
let expenses = 80000; // Initial expenses
let profit = earnings - expenses;

// Define the percentage change range (-2% to 2%)
const minChangePercent = -2;
const maxChangePercent = 2;

// Function to generate a random percentage change within the specified range
function getRandomPercentageChange(min, max) {
  return (Math.random() * (max - min) + min) / 100;
}

// Function to update values with a random change within the range
function updateValues() {
  const earningsChange =
    earnings * getRandomPercentageChange(minChangePercent, maxChangePercent);
  const expensesChange =
    expenses * getRandomPercentageChange(minChangePercent, maxChangePercent);

  earnings += earningsChange;
  expenses += expensesChange;
  profit = earnings - expenses;

  // Update the HTML or display the values
  document.getElementById("earnings-dynamic").textContent = earnings.toFixed(2);
  document.getElementById("expenses-dynamic").textContent = expenses.toFixed(2);
  document.getElementById("profit-dynamic").textContent = profit.toFixed(2);
  document.getElementById("percentage-earnings").textContent =
    earningsChange.toFixed(2);
  document.getElementById("percentage-expenses").textContent =
    expensesChange.toFixed(2);
}

// Call the updateValues function to initiate the updates
updateValues();

// You can call the updateValues function periodically (e.g., using setInterval) to simulate dynamic updates
// For example, to update every 2 seconds:
setInterval(updateValues, 2000);
