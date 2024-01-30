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

        .Hedge-Shears{
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

        .Garden-Boots{
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
        let imgArray = ["Rake.jpeg", 'Axe.jpg', 'Spade.jpg', 'Hoe.jpg', 'Pruners.jpg', 'Wheelbarrow.jpg', 'Hedge-Shears.jpg', 'Garden-Hose.jpg', 'Garden-Boots.jpg'];

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
            <p>Rake : 20€ <br> Place of origin: Kosovo</p>
        </div>
    </div>
    <div>
    <img src="Axe.jpg" alt="">
    <div class="Axe">
        <p>Axe : 8€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
    <img src="Spade.jpg" alt="">
    <div class="Spade">
        <p>Spade : 13€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
    <img src="Hoe.jpg" alt="">
    <div class="Hoe">
        <p>Hoe : 15€ <br> Place of origin: Albania</p>
    </div>
</div>

<div>
    <img src="Pruners.jpg" alt="">
    <div class="Pruners">
        <p>Pruners : 5€ <br> Place of origin: Croatia</p>
    </div>
</div>

<div>
    <img src="Wheelbarrow.jpg" alt="">
    <div class="Wheelbarrow">
        <p>Wheelbarrow : 90€ <br> Place of origin: Croatia</p>
    </div>
</div>

<div>
    <img src="Hedge-Shears.jpg" alt="" width="50px" height="50px">
    <div class="Hedge-Shears">
        <p>Hedge-Shears : 7€ <br> Place of origin: Slovenia</p>
    </div>
</div>

<div>
    <img src="Garden-Hose.jpg" alt="">
    <div class="Garden-Hose">
        <p>Garden-Hose : 50€ <br> Place of origin: Kosovo</p>
    </div>
</div>

<div>
    <img src="Garden-Boots.jpg" alt="">
    <div class="Garden-Boots">
        <p>Garden-Boots : 12€ <br> Place of origin: Kosovo</p>
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