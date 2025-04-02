
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
    <!-- ===================navigation=================== -->
     <section class="plant">

        <div class="name-classification">
            <div class="classification poppins-medium">Mallow</div>
            <div class="name poppins-medium">Okra</div>
        </div>

        <div class="image-container">
            <img src="/resrources/okra.jpg" alt="">
        </div>

        <div class="about">

            <div class="icon-text">
                <span class="material-symbols-outlined">
                    info
                </span>
                About
            </div>

            <div class="text expandableText" >
                The species is a perennial, often cultivated as an annual in temperate climates, often growing to around 2 metres (6 ft 7 in) tall. As a member of the Malvaceae, it is related to such species as cotton, cocoa, and hibiscus. The leaves are 10–20 centimetres (4–8 in) long and broad, palmately lobed with 5–7 lobes. The flowers are 4–8 cm (1+5⁄8–3+1⁄8 in) in diameter, with five white to yellow petals, often with a red or purple spot at the base. The pollen grains are spherical and approximately 188 microns in diameter. The fruit is a capsule up to 18 cm (7 in) long with pentagonal cross-section, containing numerous seeds.

                Etymology
                Abelmoschus is Neo-Latin from Arabic: أَبُو المِسْك, romanized: ʾabū l-misk, lit. 'father of musk',[6] while esculentus is Latin for being fit for human consumption.[7]

                The first use of the word okra (alternatively; okro or ochro) appeared in 1679 in the Colony of Virginia, deriving from Igbo: ọ́kwụ̀rụ̀.[8] The word gumbo was first used in American English around 1805, derived from Louisiana Creole,[9] but originates from either Umbundu: ochinggõmbo[10] or Kimbundu: kingombo.[11] Even though the word gumbo often refers to the dish gumbo in most of the United States, many places in the Deep South may have used it to refer to the pods and plant as well as many other variants of the word found across the African diaspora in the Americas.[12]
            </div>

        </div>

        <div class="diseases">
            <div class="icon-text">
                <span class="material-symbols-outlined">
                    microbiology
                </span>
                Diseases
            </div>

            <div class="disease expandableText">
                <div class="name poppins-medium"> Powdery Mildew</div>
                    Powdery mildew is a fungal disease that affects a wide range of plants. Powdery mildew diseases are caused by many different species of ascomycete fungi in the order Erysiphales. Powdery mildew is one of the easier plant diseases to identify, as the signs of the causal pathogen are quite distinctive. Infected plants display white powdery spots on the leaves and stems.[1] This mycelial layer may quickly spread to cover all of the leaves. The lower leaves are the most affected, but the mildew can appear on any above-ground part of the plant. As the disease progresses, the spots get larger and denser as large numbers of asexual spores are formed, and the mildew may spread up and down the length of the plant.

                    Powdery mildew grows well in environments with high humidity and moderate temperatures; greenhouses provide an ideal moist, temperate environment for the spread of the disease. This causes harm to agricultural and horticultural practices where powdery mildew may thrive in a greenhouse setting.[2] In an agricultural or horticultural setting, the pathogen can be controlled using chemical methods, bio-organic methods, and genetic resistance. It is important to be aware of powdery mildew and its management strategies as the resulting disease can significantly reduce important crop yields.[3]
            </div>

            <div class="disease expandableText">
                <div class="name poppins-medium">Furasium Wilt</div>
                    Fusarium wilt is a common vascular wilt fungal disease, exhibiting symptoms similar to Verticillium wilt. This disease has been investigated extensively since the early years of this century. The pathogen that causes Fusarium wilt is Fusarium oxysporum (F. oxysporum).[1] The species is further divided into formae speciales based on host plant.

                    Hosts and symptoms
            </div>

            <div class="disease expandableText">
                <div class="name poppins-medium">Yellow vewin mosaic virus</div>
                    Bhendi yellow vein mosaic virus (BYVMV) or okra yellow vein mosaic (OYVMV) is a viral disease caused by monopartite Begomovirus affecting okra plants.[1][2] It was first found in 1924 in Bombay, India, and Sri Lanka.[3] It is the major limitation of the production of okra.[4] This disease is transmitted by whitefly.
            </div>

            <div class="disease expandableText">
                <div class="name poppins-medium">Cercospora leaf spot</div>
                    Cercospora is a genus of ascomycete fungi. Most species have no known sexual stage, and when the sexual stage is identified, it is in the genus Mycosphaerella.[2] Most species of this genus cause plant diseases, and form leaf spots. It is a relatively well-studied genus of fungi, but there are countless species not yet described, and there is still much to learn about the best-known members of the genus.
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


        

    <script src="script.js"></script>
    <script>
       document.querySelectorAll(".expandableText").forEach(element => {
            element.addEventListener("click", function() {
                this.classList.toggle("expanded");
            });
        });

    </script>
</body>
</html>