function exibemanu() {
    Swal.fire({
        title: "Como jogar?",
        text: "Esse é o jogo FORCA, seu objetivo é tentar descobrir a palava escondida colocando letras que você acha que estão presentes nessa palavra. Porem tome cuidado, você não pode colocar mais de 6 letras erradas, se isso acontecer você perderá. Para facilitar as coisas você pode olhara a dica que esta debaixo do teclado. Boa sorte!",
      });
}
function exibemanu2() {
    Swal.fire({
        title: "Como jogar?",
        text: "Esse é o QUIZ, seu objetivo é tentar acertar a maior quantidade possível de perguntas. Serão 7 perguntas e cada uma só possui uma resposta correta, que será indicada pela luz verde e caso você erre você vera uma luz vermelha. E no final será mostrado seus resultados. Boa sorte!",
      })
}

function exibemanu3() {
  Swal.fire({
      title: "Como jogar?",
      text: "O jogo de caça-palavras consiste em encontrar palavras escondidas em uma grade de letras, seguindo uma lista fornecida. As palavras podem estar dispostas em várias direções: horizontal (da esquerda para a direita ou vice-versa), vertical (de cima para baixo ou de baixo para cima) e diagonal. Para jogar, observe atentamente a grade e procure por padrões de letras que correspondam às palavras da lista, marcando-as ao encontrá-las, seja circulando, sublinhando ou destacando. O jogo termina quando todas as palavras forem localizadas, sendo uma atividade divertida e desafiadora para estimular a concentração e o raciocínio. Boa sorte!",
    })
}

function mostrarInstrucoes() {
  Swal.fire({
    title: 'Como Jogar?',
     text: 'No Jogo Caça-Palavras, você deve encontrar palavras relacionadas a diferentes períodos históricos, como Pré-História, Idade Antiga, Idade Média, Idade Moderna e Idade Contemporânea, em uma grade de letras. As palavras estão escondidas de forma horizontal, vertical ou diagonal, e o objetivo é localizá-las. Ao jogar, você aprenderá sobre eventos e figuras importantes de cada período histórico, desafiando seus conhecimentos de forma divertida e educativa.',
     icon: 'info',
     confirmButtonText: 'Entendido',
     background: '#f3f4f6', 
     color: '#333', 
    confirmButtonColor: '#4c362d' 
        });
      }