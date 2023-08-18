<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="include/vagas.css">
    <style>
        /* Estilos CSS para o desenho do estacionamento */
        .parking-lot {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .parking-row {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .parking-spot {
            width: 50px;
            height: 50px;
            background-color: lightgray;
            border: 1px solid gray;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .car {
            background-color: blue;
            color: white;
        }

        .button-container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="parking-lot"></div>

    <div class="button-container">
        <button onclick="selectParkingSpot(2, 1)">Selecionar Vaga</button>
    </div>

    <script>
        // Definir as configurações do estacionamento
        const parkingLotWidth = 8; // Largura do estacionamento (número de vagas por linha)
        const parkingLotHeight = 3; // Altura do estacionamento (número de linhas)
        const carPosition = { row: 0, spot: 1 }; // Posição inicial do carro (linha e vaga)
        let selectedSpot = null; // Vaga selecionada no estacionamento


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

                    if (selectedSpot && row === selectedSpot.row && spot === selectedSpot.spot) {
                        spotElement.classList.add('selected');
                    }

                    rowElement.appendChild(spotElement);
                }

                parkingLotContainer.appendChild(rowElement);
            }
        }

        // Função para selecionar a vaga no estacionamento
        function selectParkingSpot(row, spot) {
            selectedSpot = { row, spot };
            drawParkingLot();
        }

        // Inicializar o desenho do estacionamento
        drawParkingLot();
    </script>
</body>
</html>
