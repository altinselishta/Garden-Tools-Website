<?php
include_once 'productsRepositoryPr.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produktet</title>
    <style>
        body{
            margin:0px;
        }

        .items{
            background-color:  brown;
            display: flex;
            justify-content: space-between;
        }

        .logo{
            display: flex;  
            margin-left: 10px;
            width: 60px;
            height: 60px;
        }

        #listatheader{
            display: flex;
            width: 20%;
            margin-right:30px;
            list-style: none;
            justify-content: space-between;
            flex-wrap: wrap;
            column-gap: 15px;
        }

        p{
            background-color: red;
            color: white;
            height: 70px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        a{
            color: white;
            text-decoration: none;
        }

        a:hover{
            background-color: gray;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        .Container{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            padding: 20px;
        }

        .Container img{
            width: 200px;
            height: 200px;
        }

        .Tools{
            text-align: center;
            background-color: white;
            color: red;
            font-size: 200%;
        }

        .Rake{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }

        .Axe{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }

        .Spade{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }

        .Hoe{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px ; 
        }

        .Pruners{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }

        .Wheelbarrow{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px ;
        }


        .Garden-Hose{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }

        .Bush-Hook{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }
        .Gardening-Gloves{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;

        }
        .Mower{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }
        .Watering-Can{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }
        .Ladder{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }
        .Sprayer{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }
        .Bucket{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;

        }
        .Prunning-Saw{
            display: flex;
            flex-direction: column;
            width: 200px;
            height: 100px;
        }
        .footeri{
            background-color: gray;
            align-items: center;
            display: flex;
            height: 80px;
            justify-content: space-between;
            padding: 10px;
        }

        .footeri h4{
            text-align: center;
            margin: 0;
            gap: 10px;
            margin-right: 10px;
        }

        .Linkat-social{
            display: flex;
            gap: 10px;
            margin-right: 10px;
        }

        .Linkat-kontaktues{
            display: flex;
            gap: 10px;
        }

        .slideshow-section {
            display: flex;
            text-align: center;
            justify-content: center;
            color: red;
        }

        #button-slideshow {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            border: 2px solid #3498db;
            border-radius: 5px;
            color: #3498db;
            background-color: #ffffff;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        #button-slideshow:hover {
            background-color: #3498db;
            color: #ffffff;
            border-color: #ffffff;
        }
</style>
</head>
<body>


    <script>
        let i = 0;
        let imgArray = ["Rake.jpeg", 'Axe.jpg', 'Spade.jpg', 'Hoe.jpg', 'Pruners.jpg', 'Wheelbarrow.jpg', 'Garden-Hose.jpg', 'Bush-Hook.jpg', 'Gardening-Gloves.jpg', 'Mower.jpg', 'Watering-Can.jpg', 'Ladder.jpg', 'Sprayer.jpg', 'Bucket.jpg', 'Prunning-Saw.jpg'];

        function changeImg() {
            document.getElementById('slideshow').src = imgArray[i];
            if (i < imgArray.length - 1) {
                i++;
            } else {
                i = 0;
            }
        }
        document.addEventListener('load', changeImg);
    </script>
    <header>
        <div class="items">
            <div>
                <img src="Logo.png" alt="Logo i Garden" class="logo">
            </div>
            <ul id="listatheader">
                <li><a href="Garden Tools.html">Garden Tools</a></li>
                <li><a href="About Us.html">About Us</a></li>
                <li><a href="Contact Us.html">Contact Us</a></li>
            </ul>
        </div>
    </header>

    <main>
    <table>
<h2>Produktet</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Emri</th>
                <th>Cmimi</th>
                <th>Përshkrimi</th>
                <th>Fotografia</th>
            </tr>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product->getId(); ?></td>
                    <td><?php echo $product->getName(); ?></td>
                    <td><?php echo $product->getPrice(); ?></td>
                    <td><?php echo $product->getDescription(); ?></td>
                    <td><img src="<?php echo $product->getPhotograph(); ?>" alt="<?php echo $product->getName(); ?>"></td>
                </tr>
            <?php endforeach; ?>
</table>
    <p class="Tools"><b>Garden Tools</b></p>
    <div class="Container">
    <div>
        <img src="Rake.jpeg" alt="">
        <div class="Rake">
            <p>ID:1 Rake : 20€ <br> Place of origin: Kosovo</p>
        </div>
    </div>
    <div>
    <img src="Axe.jpg" alt="">
    <div class="Axe">
        <p>ID:2 Axe : 8€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
    <img src="Spade.jpg" alt="">
    <div class="Spade">
        <p>ID:3 Spade : 13€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
    <img src="Hoe.jpg" alt="">
    <div class="Hoe">
        <p>ID:4 Hoe : 15€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
    <img src="Pruners.jpg" alt="">
    <div class="Pruners">
        <p>ID:5 Pruners : 5€ <br> Place of origin: Croatia</p>
    </div>
</div>

<div>
    <img src="Wheelbarrow.jpg" alt="">
    <div class="Wheelbarrow">
        <p>ID:6 Wheelbarrow : 90€ <br> Place of origin: Croatia</p>
    </div>
</div>


<div>
    <img src="Garden-Hose.jpg" alt="">
    <div class="Garden-Hose">
        <p>ID:7 Garden-Hose : 50€ <br> Place of origin: Kosovo</p>
    </div>
</div>


<div>
    <img src="Bush-Hook.jpg" alt="">
    <div class = "Bush-Hook">
    <p>ID:8 Bush-Hook : 11€ <br> Place of origin: Albania</p>

    </div>
</div>

<div>
    <img src="Gardening-Gloves.jpg" alt="">
    <div class = "Gardening-Gloves">
        <p>ID:9 Gardening-Gloves : 5€ <br> Place of origin: Kosovo</p>
    </div>
</div>

<div>
    <img src="Mower.jpg" alt="">
    <div class = "Mower">
        <p>ID:10 Lawn Mower : 110€ <br> Place of origin: Croatia</p>
    </div>
</div>

<div>
    <img src="Watering-Can.jpg" alt="">
    <div class = "Watering-Can">
        <p>ID:11 Watering-Can : 2€ <br> Place of origin: Kosovo</p>
    </div>
</div>

<div>
<img src="Ladder.jpg" alt="">
    <div class = "Ladder">
        <p>ID:12 Ladder : 20€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
<img src="Sprayer.jpg" alt="">
    <div class = "Sprayer">
        <p>ID:13 Sprayer : 70€ <br> Place of origin: Slovenia</p>
    </div>
</div>

<div>
<img src="Bucket.jpg" alt="">
    <div class = "Bucket">
        <p>ID:14 Bucket : 1€ <br> Place of origin: Kosovo</p>
    </div>
</div>

<div>
<img src="Prunning-Saw.jpg" alt="">
    <div class ="Prunning-Saw">
        <p>ID:15 Prunning-Saw: 5€ <br> Place of origin: Croatia</p>
    </div>
</div>

</div>
<section class="slideshow-section">
    <div id="kontenti">
        <header>
            <h2>Slide Show: Products Display</h2>
            <img id="slideshow" width="600" height="400">
        </header>
        <button onclick="changeImg()" id="button-slideshow">Next</button>
    </div>
</section>
<footer class="footeri">
    <div class="Linkat-social">
        <img src="LogoFacebok.png" alt="Logo Facebook" width="32px" height="32px">
        <img src="LogoInstagram.png" alt="Logo Instagram" width="32px" height="32px">
    </div>
    <h4>www.gardentools.com</h4>
    <div class="Linkat-kontaktues">
        <img src="LogoPhone.png" alt="Logo Phone" width="32px" height="32px">
        <img src="LogoViber.png" alt="Logo Viber" width="32px" height="32px">
        <img src="LogoEmail.png" alt="Logo Email" width="32px" height="32px">
    </div>
</footer>

    </main>
</body>
</html> 