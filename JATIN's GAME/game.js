'use strict';

//        generate random number between two differnet values
//        Math.random() * (max - min) + min;
// ex.    num = Math.floor(Math.random() * (100 - 20) + 20);

/*      PRINTING RANDOM NUMBER BETWEEN 0 TO 20
WAY 1 : const num = Math.ceil(Math.random() * 20);          
WAY 2 : const num = Math.ceil(Math.random() * (20 - 0) + 0);

 */

console.log('Hello world');
let score = 20;
let newhs = 0;
document.querySelector('#updateScore').textContent = score;
let secretNumber = Math.ceil(Math.random() * 20);
console.log('your guess is ', secretNumber);

document.querySelector('.check').addEventListener('click', function () {
  const guess = Number(document.querySelector('.usernum').value);
  console.log(guess);

  // document.querySelector('table.updateScore'). = '20';
  // document.querySelector('table.updateScoree').innerHTML = 'Hello ';

  if (!guess) {
    document.querySelector('.hint').textContent = '⛔ Enter a Number ❗ ';
  } else {
    if (guess > 20) {
      document.querySelector('.hint').textContent =
        '🚫 Abeee Pagal 20 tak he le 🤦';
    } else if (guess < 0) {
      document.querySelector('.hint').textContent =
        '🚫 Abeee Pagal 0 se bada le 🤦';
    } else if (guess > secretNumber) {
      document.querySelector('.hint').textContent = '🚫 Too High Guess 🤦';
      score -= 1;
      document.querySelector('#updateScore').textContent = score;
      if (score < 0) {
        document.querySelector('#updateScore').textContent = 0;
        document.querySelector('#status').textContent = 'Game Over';
        let vis = document.querySelector('.hide');
        // vis.style.display = 'inline';
        vis.style.visibility = 'visible';
      }
    } else if (guess < secretNumber) {
      document.querySelector('.hint').textContent = '🚫 Too Low Guess 🤦';
      score -= 1;
      document.querySelector('#updateScore').textContent = score;
      if (score < 1) {
        document.querySelector('#updateScore').textContent = 0;
        document.querySelector('#status').textContent = 'Game Over🏁';
        let vis = document.querySelector('.hide');
        // vis.style.display = 'inline';
        vis.style.visibility = 'visible';

        let hid = document.querySelector('#checknum');
        hid.style.display = 'none';
      }
    } else if (guess === secretNumber) {
      document.querySelector('#q').textContent = secretNumber;
      document.querySelector('.hint').textContent = '🚀 CORRECT GUESS ✅';
      document.querySelector('body').style.background = 'green';
      document.querySelector('#q').style.color = 'green';
      document.querySelector('#q').style.background = '#040200';
      document.querySelector('#q').style.fontSize = '50px';
      document.querySelector('#q').style.padding = '19px';
      document.querySelector('#q').style.width = '20px';
      document.querySelector('#q').style.height = '20px';

      let vis = document.querySelector('.hide');
      vis.style.visibility = 'visible';

      let hs = score;
      document.querySelector('#updateHS').textContent = hs; // ok updte ho rha hai yaha tak

      let hid = document.querySelector('#checknum'); // for button check
      hid.style.display = 'none';
    }
  }
});

document.querySelector('.hide').addEventListener('click', function () {
  score = 20;
  document.querySelector('body').style.backgroundColor = 'black';
  document.querySelector('#q').style.color = 'white';
  document.querySelector('#q').style.padding = '19px';
  document.querySelector('#q').style.backgroundColor = 'grey';

  // background-color: grey; color: white

  document.querySelector('#checknum').style.display = 'inline';
  document.querySelector('.hint').textContent = 'Start Guessing..';
  document.querySelector('#q').textContent = '?';
  document.querySelector('#updateScore').textContent = score;
  document.querySelector('.usernum').value = '';
  document.querySelector('.hide').style.visibility = 'hidden';

  secretNumber = Math.ceil(Math.random() * 20);
  console.log('this is the second ', secretNumber);
  let newhs = document.querySelector('#updateHS').textContent;

  if (newhs < hs) {
    document.querySelector('#updateHS').textContent = hs;
  } else if (newhs == hs) {
    document.querySelector('#updateHS').textContent = hs;
  } else {
    document.querySelector('#updateHS').textContent = newhs;
  }
});
