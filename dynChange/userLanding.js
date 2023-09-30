/* 
    Earnings - Expenses = Profit

    earnings = 100
    expenses = 45
    profit = 55
*/
console.log("User landing page!");
const earningsDyn = document.getElementById("earnings-dynamic");
const expensesDyn = document.getElementById("expenses-dynamic");
const profitDyn = document.getElementById("profit-dynamic");

let earnings = 100;
let expenses = 45;
let profit = earnings - expenses;
const min = -10;
const max = 10;
let percentChange;

setTimeout(() => {
  percentChange = Math.random() * (max - min) + min;
  earnings += percentChange;
  profit += earnings - expenses;
  earningsDyn.innerText = earnings;
}, 2000);
