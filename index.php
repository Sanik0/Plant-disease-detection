
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rum+Raisin&display=swap" rel="stylesheet">
    <title>PlantCam</title>
</head>
<body>
    <section class="header">
        <div class="logo poppins-regular">
            Group 7
        </div>
    </section>

    <section class="informations">
        <!-- ===================weather=================== -->
        <div class="container-20 weather-info">
            <div class="info">
                <div class="location poppins-regular">
                    San Bartolome, Novaliches, Philippines
                </div>
                <div class="temperature poppins-medium">
                    18°C
                </div>
            </div>
    
            <div class="image-container">
                <img src="resrources/Weather.png" alt="">
            </div>
    
        </div>

        <!-- ===================infos from esp=================== -->

        <div class="cards-container">
            <div class="container-20">
                <span class="material-symbols-outlined">
                    humidity_percentage
                </span>
                <div class="card-info">
                    <div class="temper  ature poppins-medium">
                        Temp
                    </div>
                    <div class="number poppins-medium" id="tempSensor">
                    Loading...
                    </div>
                </div>
            </div>

            <div class="container-20">
                <span class="ph material-symbols-outlined">
                    water_ph
                </span>
                <div class="card-info">
                    <div class="title poppins-medium">
                        pH Level
                    </div>
                    <div class="number poppins-medium" id="phSensor">
                        Loading...
                    </div>
                </div>
            </div>

            <div class="container-20">
                <span class=" moisture material-symbols-outlined">
                    psychiatry
                </span>
                <div class="card-info">
                    <div class="title poppins-medium">
                       Moisture
                    </div>
                    <div class="number poppins-medium" id="moistureSensor">
                        Loading...
                    </div>
                </div>
            </div>
            <div class="container-20">
                <span class="material-symbols-outlined">
                    humidity_percentage
                </span>
                <div class="card-info">
                    <div class="title poppins-medium">
                        Humidity
                    </div>
                    <div class="number poppins-medium"id="humiditySensor">
                        Loading...
                    </div>
                </div>
            </div>
        </div>

        <!-- ===================my plants=================== -->

        <div class="cards-container-plants">
            <div class="heading poppins-regular">
                Plants
            </div>
            <div class="cards-slider">
                
                <a href="plant.php" class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </a>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/images (8).jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Tomato</small>
                    </div>
                </div>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </div>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </div>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </div>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </div>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </div>

                <div class="card">
                    <div class="filter"></div>
                    <div class="image-container">
                        <img src="resrources/okra.jpg" alt="">
                    </div>
                    <div class="title">
                        <small class="poppins--medium-bold">Okra</small>
                    </div>
                </div>
            </div>


        </div>


        <!-- ===================inspect for diseases=================== -->

        <div class="inspect-diseases">
            <!-- <input type="file" id="cameraInput" accept="image/*" capture="environment" style="display: none;" > -->
            <div class="heading poppins-regular">
                Inspect for diseases
            </div>

            <div class="container-20">
                <div class="headings">
                    <div class="texts">
                        <div class="heading1 poppins-bold">
                            Take a picture of your plant
                        </div>
                        <div class="heading poppins-regular">
                            Simply snap a photo of your plant to begin the diagnosis. 
                        </div>
                    </div>
                    <div class="image-container">
                        <img src="resrources/recycling-icon-design.png" alt="">
                    </div>
                </div>
                <a href="disease.php" class="button-container">
                    <div class="button">
                        <div class="text">
                            Start scanning now
                        </div>
                        <span class="material-symbols-outlined">
                            arrow_forward_ios
                        </span>
                    </div>

                </a>
            </div>

        </div>




    </section>

    <!-- ===================navigation=================== -->

    <div class="navigation">

        <a href="history.php" class="nav-item">
            <span class="material-symbols-outlined">
                history
            </span>
            <div class="text">
                History
            </div>
        </a>

        <a href="index.php" class="nav-item">
            <span class="material-symbols-outlined">
                home
            </span>
            <div class="text">
                Home
            </div>
        </a>

        <div class="nav-item">
            <span class="material-symbols-outlined">
                settings
            </span>
            <div class="text">
                Settings
            </div>
        </div>

    </div>
    <script>
function fetchTemperature() {
    fetch('getTemp.php')
        .then(response => response.text())
        .then(data => {
            const tempDisplay = document.getElementById('tempSensor');
            if (data === '-') {
                tempDisplay.innerText = "OFF";
                tempDisplay.style.color = "#ff4444";
                tempDisplay.style.fontStyle = "italic";
            } else {
                tempDisplay.innerText = data + '%';
                tempDisplay.style.color = "";
                tempDisplay.style.fontStyle = "";
            }
        })
        .catch(error => {
            console.error('Error fetching Temperature Value:', error);
            document.getElementById('tempSensor').innerText = "ERR";
        });
}
function fetchMoisture() {
    fetch('getMoisture.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('moistureSensor').innerText = data + '%';
        })
        .catch(error => {
            console.error('Error fetching Soil Moisture:', error);
        });
}
function fetchPh() {
    fetch('getPh.php')
        .then(response => response.text())
        .then(data => {
            const phDisplay = document.getElementById('phSensor');
            if (data === '-') {
                phDisplay.innerText = "OFF";
                phDisplay.style.color = "#ff4444";
                phDisplay.style.fontStyle = "italic";
            } else {
                phDisplay.innerText = data + '%';
                phDisplay.style.color = "";
                phDisplay.style.fontStyle = "";
            }
        })
        .catch(error => {
            console.error('Error fetching Ph Level:', error);
            document.getElementById('phSensor').innerText = "ERR";
        });
}
function fetchHumidity() {
    fetch('getHumidity.php')
        .then(response => response.text())
        .then(data => {
            const humidityDisplay = document.getElementById('humiditySensor');
            if (data === '-') {
                humidityDisplay.innerText = "OFF";
                humidityDisplay.style.color = "#ff4444";
                humidityDisplay.style.fontStyle = "italic";
            } else {
                humidityDisplay.innerText = data + '%';
                humidityDisplay.style.color = "";
                humidityDisplay.style.fontStyle = "";
            }
        })
        .catch(error => {
            console.error('Error fetching Humidity Level:', error);
            document.getElementById('humiditySensor').innerText = "ERR";
        });
}

// Initial fetch on page load
window.onload = () => {
    fetchTemperature();
    fetchMoisture();
    fetchPh();
    fetchHumidity();

    // Delay interval polling slightly
    setTimeout(() => {
        setInterval(fetchTemperature, 500);
        setInterval(fetchMoisture, 500);
        setInterval(fetchPh, 500);
        setInterval(fetchHumidity, 500);
    }, 300);
};
</script>


    <script src="script.js"></script>
</body>
</html>