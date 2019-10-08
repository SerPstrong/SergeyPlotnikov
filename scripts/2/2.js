function getRandomDigit() {
  return Math.round(Math.random() * 9);
}

function getRandomNumber() {
  var digits = [];
  while(digits.length !== 4) {
    var digit = getRandomDigit();

    if(!digits.includes(digit)) {
      digits.push(digit);
    }
  }

  return digits.join('');
}

// функция геренации подсказки
function buildHint(question, answer) {
  // конвертируем строки в массивы
  var qArr = question.split('');
  var aArr = answer.split('');

  // первое число - кол-во быков, второе - коров
  var result = [0, 0];

  // сравниваем кажду цифру из вопроса с каждой цифрой из ответа
  for(var i = 0; i < qArr.length; i++) {
    if(qArr[i] === aArr[i]) {
      // увеличиваем количество быков
      result[0]++;
    } else if(qArr.includes(aArr[i])) {
      // увеличиваем количество коров
      result[1]++;
    }
  }

  return result;
}

// загадаываем число (все цифры разные)
var random = getRandomNumber();
var score = 0;

while(true) {
  var guess = prompt('Введите число: ' + random);

  if(isNaN(+guess) || guess.length !== 4) {
    alert('Вы ввели какую-то чепуху!');
    continue;
  }
  score++;

  if(random === guess) {
    alert('Молодец! Ты победил! Количество попыток: ' + score);
    break;
  } else {
    var hint = buildHint(random, guess);
    alert('Быков: ' + hint[0] + '. Коров: ' + hint[1]);
  }
}
