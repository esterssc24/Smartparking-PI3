// Definir as configurações do estacionamento
const parkingLotWidth = 5; // Largura do estacionamento (número de vagas por linha)
const parkingLotHeight = 4; // Altura do estacionamento (número de linhas)
const carPosition = { row: 0, spot: 1 }; // Posição inicial do carro (linha e vaga)

// Função para desenhar o estacionamento
function drawParkingLot() {
  const parkingLotContainer = document.querySelector('.parking-lot');
  parkingLotContainer.innerHTML = '';

  for (let row = 0; row < parkingLotHeight; row++) {
    const rowElement = document.createElement('div');
    rowElement.classList.add('parking-row');

    for (let spot = 0; spot < parkingLotWidth; spot++) {
      const spotElement = document.createElement('div');
      spotElement.classList.add('parking-spot');

      if (row === carPosition.row && spot === carPosition.spot) {
        spotElement.classList.add('car');
      }

      rowElement.appendChild(spotElement);
    }

    parkingLotContainer.appendChild(rowElement);
  }
}

// Inicializar o desenho do estacionamento
drawParkingLot();
