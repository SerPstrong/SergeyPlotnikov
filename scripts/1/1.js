function builtQuestion() {
  var text = '[' +  this.prize + '] ' + this.text;
  for(var i = 0; i < this.options.length; i++) {
    text = text + '\n' + (i + 1) + ') ' + this.options[i];
  }

  if(this.fixed) {
    text = text + '\n' + 'НЕСГОРАЕМАЯ СУММА';
  }

  return text;
}

var questions = [
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 0,
    prize: 100,
    fixed: false,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 1,
    prize: 500,
    fixed: false,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 2,
    prize: 1000,
    fixed: false,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 3,
    prize: 5000,
    fixed: true,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 0,
    prize: 50000,
    fixed: false,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 1,
    prize: 100000,
    fixed: true,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 2,
    prize: 500000,
    fixed: false,
    getText: builtQuestion,
  },
  {
    text: 'Висит груша - нельзя скушать!',
    options: ['Лампочка', 'Кактус', 'Лопата', 'Автомобиль'],
    correct: 3,
    prize: 1000000,
    fixed: false,
    getText: builtQuestion,
  }
];

var prize = 0;
for(var i = 0; i < questions.length; i++) {
  var questionText = 'Вопрос №' + (i + 1) + ' ' + questions[i].getText();

  if(+prompt(questionText) === (questions[i].correct + 1)) {
    alert('Текущий выигрыш: ' + questions[i].prize);
    prize = questions[i].prize;
  } else {
    prize = 0;
    alert('Вы проиграли!');
    for(var j = i; j >= 0; j--) {
      if(questions[j].fixed) {
        prize = questions[j].prize;
        break;
      }
    }
    break;
  }
}

alert('Ваш выигрыш составил: ' + prize);
