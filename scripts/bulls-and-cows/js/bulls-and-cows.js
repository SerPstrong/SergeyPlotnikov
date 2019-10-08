// Функция генерации случайного числа
function getRandomNumber(fromNumber, toNumber) {
  // [0, 1]
  return Math.round(fromNumber + Math.random() * (toNumber - fromNumber));
}

function buildHint(question, answer) {
  var qArray = question.split('');
  var aArray = answer.split('');

  var result = [0, 0];

  for(var i = 0; i < qArray.length; i++) {
    if(qArray[i] === aArray[i]) {
      result[0]++;
    } else if(qArray.includes(aArray[i])) {
      result[1]++;
    }
  }

  return result;
}

var random = getRandomNumber(1000, 9999) + '';

while(true) {
  var guess = prompt('Введите 4-значное число ' + random);

  if(isNaN(+guess) || guess.length !== 4) {
    alert('Некорректный ввод');
    continue;
  }

  if(random === guess) {
    alert('Вы победили');
    break;
  } else {
    var result = buildHint(random, guess);
    alert('Быков: ' + result[0] + '. Коров: ' + result[1]);
  }
}
