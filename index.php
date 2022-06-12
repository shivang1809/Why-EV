<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" href="Style/nav.css">
    <title>WhyEV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/0df6ffb9ff.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="./Script/typed.js"></script>

    <style>
    body{
        background-color: rgb(49, 63, 72);
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        color: white;
    }
    table{
        align-items: center;
        border-collapse: separate;
        border-spacing: 15 0px;
    }
    th{
        width: 200px;
        text-align: center;
        font-size: x-large;
        font-style: italic;
    }
    </style>
</head>
<body>
    <nav><span class="Logo">Why an <span style="color: #3bdfdf;">EV</span> ?</span>
        <div class="navbar">
            <ul>
                <li class="home active"><a href="#home">Home</a></li>
                <li class="calculate"><a href="#calculate">Calculate</a></li>
                <li class="benefits"><a href="#benefits">Benefits</a></li>
                <li class="news"><a href="#news">News</a></li>
            </ul>
        </div>
    </nav>

    <section id="home">
    <div class="content">
        <h2 data-aos="fade-right">EV Is <span class="typing" ></span>.<br><br></h2>
        <p>Use EVs to save Future.</p>
    </div>
    </section>
    <section id="calculate">
<br>
 
    <div class="container">
    <center>
    <div data-aos="fade-up" class="formbox">
        <h1 class="heading">Carbon Calculation</h1>
        <input type="text" id="km" class="details" placeholder="ENTER YOUR DAILY COMMUTE [In Km]">
        <p>Calculate the amount of Carbon Dioxide emmited by your Vehical. </p>
        <input type="button" onclick="calculate()" class="calcBtn" value="Calculate">
    </div>
    <div data-aos="fade-down" class="formbox">
        <h2 class="heading">Carbon Dioxide Emmited By You [In Kg]</h2>
        <table align="center">
            <tbody >
            <tr>
                <th>DAILY</th><th>MONTHLY</th><th>YEARLY</th>
            </tr>
            <tr>
                <th><span id="daily">00</span></th><th><span id="monthly">00</span></th><th><span id="yearly">00</span></th>
            </tr>
        </tbody>
        </table>
        <p><strong>By using <span id="ev"> EVs</span> you can prevent this much Carbon Dioxide emmition and save the <span id="ev">environment</span>.</strong></p>
</div>
</center>

</section>


<section id="benefits">
    <br><br><br><br>
    <div class="container">
    <div data-aos="fade-up" class="benefit">
    <h1>Benefits of EVs</h1><br>
    <span id="icon" style="margin-left: 100px;"><i data-aos="fade-right" class="fa-solid fa-wrench"></i></span>
    <span id="icon" style="margin-left: 150px;"><i data-aos="fade-up-right" class="fa-solid fa-gas-pump"></i></span>
    <span id="icon" style="float:right; margin-right: 100px;"><i data-aos="fade-left" class="fa-brands fa-envira"></i></span>
    <span id="icon" style="float:right; margin-right: 100px;"><i data-aos="fade-up-left" class="fa-solid fa-square-parking"></i></span><br>
    <span id="detail" style="margin-left: 90px;">Low Maintaince Cost</span>
    <span id="detail" style="margin-left: 90px;">Lower Running Cost</span>
    <span id="detail" style="float:right; margin-right: 100px;">Eco-Friendly</span>
    <span id="detail" style="float:right; margin-right: 140px;">Free Parking</span><br><br>
</div>
<br><h1>Number of <span id="ev">EVs</span> Running In the World </h1>
    <h1><span id="ev"><span id="noEv" onclick="stopCount()"></span><span id="EvNo">67,50,000</span></span></h1>
    <p>*click to skip counting animation</p><br>
</div>
</section>
<section id="news">
    <br><br><br><br>
    <div class="container">
    <center>
    <div data-aos="fade-up" class="newsBox">
        <h1>EV News</h1>
        <marquee scrollamount="1" behavior="scroll" direction="up" height="500px" width="80%">
        <div class="newsList">
        <?php
            include('others/news.php');?>    
        </div></marquee>
                            <p style="color: white; float:left">*All these news headlines are automatically gathered through Web Scraping.</p>
</div></center></div>
</section>
</div>
<footer>
    Designed and Created By Shivang Yadav
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
    <script src="./Script/type.js"></script>
    <script src="./Script/main.js"></script>
    <script src="./Script/nav.js"></script>
</html>
