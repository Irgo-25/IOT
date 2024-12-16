<!DOCTYPE html>
<html lang="en">

<head>
  <title>Praktikum IoT Monitoring</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="./assets/chart.min.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>
  <div class="container mt-5">
    <span class="d-flex justify-content-between align-items-center">
      <h1><ion-icon name="leaf-outline"></ion-icon>Dashboard</h1>
      <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#dataModal">Show Data</button>
    </span>
    <div class="row">
      <div class="col-md-6 mt-2">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <ion-icon name="thermometer-outline" class="custom-icon"></ion-icon>
                </div>
                <div class="media-body text-right">
                  <h5 class="card-title font-weight-bold">Temperature</h5>
                  <p id="temp-value" class="card-text">-</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-2">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <ion-icon name="fitness-outline" class="custom-icon"></ion-icon>
                </div>
                <div class="media-body text-right">
                  <h5 class="card-title font-weight-bold">Humidity</h5>
                  <p id="humd-value" class="card-text">-</p>
                  <p id="humidity-level">Tingkat Kelembapan: </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- LED Indicators -->
    <div class="row mt-5">
      <div class="col-md-12">
        <h5 class="d-flex justify-content-start align-items-center">Temperature Indicator <ion-icon name="pulse-outline" class="ml-2"></ion-icon></h5>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex flex-row justify-content-start">
                <div class="align-self-center">
                  <div id="led-1" class="led-indicator"></div>
                </div>
                <div class="align-self-center ml-2">
                  <div id="led-2" class="led-indicator"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <audio id="beep1" src="./assets/beep1.mp3"></audio>
    <audio id="beep2" src="./assets/beep2.mp3"></audio>
    <audio id="beep3" src="./assets/beep3.mp3"></audio>

    <!-- LED controll -->
    <div class="row mt-5">
      <div class="col-md-12">
        <h5 class="d-flex justify-content-start align-items-center">Light Control <ion-icon name="settings-outline" class="ml-2"></ion-icon></h5>
      </div>
      <div class="col-12 col-md-4 my-2">
        <button class="btn btn-danger btn-block" id="led1" onclick="toggleLED(1)">LED 1 OFF</button>
      </div>
      <div class="col-12 col-md-4 my-2">
        <button class="btn btn-danger btn-block" id="led2" onclick="toggleLED(2)">LED 2 OFF</button>
      </div>
      <div class="col-12 col-md-4 my-2">
        <button class="btn btn-danger btn-block" id="led3" onclick="toggleLED(3)">LED 3 OFF</button>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12">
        <h5 class="d-flex justify-content-start align-items-center">Grafik Temperature & Humidity <ion-icon name="stats-chart-outline" class="ml-2"></ion-icon></h5>
      </div>
      <div class="col-12">
        <canvas id="tempHumidityChart"></canvas>
      </div>
    </div>
  </div>

  <div class="modal fade" id="dataModal" tabindex="-1" aria-labelledby="dataModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="dataModalLabel">Data Sensor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <table class="table table-striped table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>ID</th>
                <th>Temperature (°C)</th>
                <th>Humidity (%)</th>
                <th>Waktu</th>
              </tr>
            </thead>
            <tbody id="table-body">
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="audioModal" tabindex="-1" aria-labelledby="audioModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="audioModalLabel">Mohon izinkan untuk pemutaran audio</h5>
        </div>
        <div class="modal-body">
          Klik "Izinkan" untuk mengijinkan pemutaran audio.
        </div>
        <div class="modal-footer">
          <button type="button" id="playAudioButton" class="btn btn-primary">Izinkan</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="./assets/script.js" type="text/javascript"></script>
</body>

</html>