<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $imagePath = $_FILES['image']['tmp_name'];
    $apiUrl = "http://localhost:5000/predict";


    $cfile = new CURLFile($imagePath, $_FILES['image']['type'], $_FILES['image']['name']);
    $data = ['image' => $cfile];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    $result = json_decode($response, true);

    if (!$result || isset($result['error'])) {
        echo "Error: " . ($result['error'] ?? 'Invalid API response') . "<br>";
        echo "<pre>$response</pre>"; 
        exit;
    }
}   
?>

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

    <form action="" method="POST" enctype="multipart/form-data" class="upload-photo">
        <div class="img-container">
            <img id="imagePreview">
        </div>
        <input type="file" name="image" accept="image/*" id="imageInput" accept="image/*" required>
        <button type="submit" class="detect-button">
            <span class="material-symbols-outlined">
                image_search
            </span>
            Detect Disease
        </button>
    </form>





<?php if (!empty($result) && isset($result['predictions'])) : ?>
    <div class="diseases diseases-pad-15">
        <div class="icon-text">
            <span class="material-symbols-outlined">
                microbiology
            </span>
            Diseases
        </div>
        <?php foreach ($result['predictions'] as $prediction) : ?>
            <div class="disease expandableText">
                <div class="name poppins-medium"> <?= htmlspecialchars($prediction['disease']) ?></div>
                <?= round($prediction['confidence'] * 100, 2) . "%" ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
   




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



        

    <script src="script.js"></script>
</body>
</html>