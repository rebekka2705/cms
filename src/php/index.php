<?php 
$section = "index";
//include './partials/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Slabo+13px&display=swap" rel="stylesheet"> 
    <title>Alex Mayer</title>
    <?php wp_head(); ?>
</head>
<body>

        <header>
        
                <nav>
                    <h1><a>Alex Mayer</a></h1>
                    <a href="#" class="toggleNav"><span> &#9776;</span></a>
                    <ul>
                        <li><a href="./index.php">Start</a></li>
                        <li><a>Leistungen</a></li>
                        <li><a>Blog</a></li>
                        <li><a href="./about.php">Über mich</a></li>
                        <li><a>Kontakt</a></li>
                    </ul>
                </nav>


                <section class="hero__<?php echo $section ?>">

<div class="hero__text">
                <h2><span>Glänzende Ideen</span><br><span>für leuchtende</span><br><span>Augen</span> </span></h2>
                <button>Angebot einholen</button>
            </div>
        </section>

    </header>

    <main>
        <h2>Leistungen</h2>
        <section id="services">
           
            
            <div id="Design">
                <a href=#>
                   <h3>Design</h3>
                    <img src=<%= require('./images/design.png') %> alt="pencils">   
                </a>
            </div>

            <div id="Strategie">
                <a href=#>
                    <h3>Strategie</h3>
                    <img src=<%= require('./images/strategy.png') %> alt="target">
                </a>
            </div>

            <div id="Consulting">
                <a href=#>
                    <h3>Consulting</h3>
                    <img src=<%= require('./images/consulting.png') %> alt="lightbulb">
                </a>
            </div>
        </section>

        <h2>News</h2>
        <section id="news">
                
            <ul>
                <li><p><a href=#>365 Postkarten</a> - Eine Liebeserklärung für jeden Tag!<a href=#>[mehr erfahren]</a></p></li>
                <li><p><a href=#>Award Nominierung</a> - Tolle News: ich bin bei der Endauswahl 2018!<a href=#>[mehr erfahren]</a></p></li>
                <li><p><a href=#>CMYK erklärt</a> - der neueste <a href=#>Blog</a>-Eintrag<a href=#>[mehr erfahren]</a></p></li>
            </ul>
        </section>
        
        
        <h2>Referenzen</h2>
        <section id="references">
            
            <div id="t_img"></div>
            <p id="t_name">Tina Ubuntu, CEO headless Ltd.</p>
            <div id="t_quote"><blockquote>Alex' Redesign hat maßgeblich mitgeholfen, unseren Umsatz um 20% in die Höhe zu treiben</blockquote></div>
           
            <div id="tom_img"></div>
            <div id="tom_name"><p>Tom Herzog, Cutter's Finest</p></div>
            <blockquote id="tom_quote">Große Webkunst - keine Kunst mit Alex Mayer!</blockquote>
            
            <div id="quotes"> <img src=<%= require('./images/quotation_mark.svg') %> alt="quotes"></div>

            <div id="mueller_img"></div>
            <div id="mueller_text">
                <p id="mueller_name"><cite>Vorstand Müller AG <br> KR Ernst Anker, Dr. Florian Eisner</cite></p>
                <blockquote id="mueller_quote">Das Store-Konzept von Alex Mayer hat unsere größten Erwartungen übertroffen</blockquote>
            </div>
          
            
        </section>


    </main>


    <footer>
        <section id="copyright">
            <div id="footer-flexbox">
            <p>&copy; Alex Mayer 2018</p>
            <p><a href="#">Impressum</a> | <a href="#">Datenschutzerklärung</a></p>
            </div>
            <p id="footer-text">Demo-Wordpress-Seite im Rahmen der LV ‚ Content Mangagement Systeme‘ an der FH Salzburg von Aliya Abdullayeva und Rebekka Schönauer</p>
            <p>Alle Inhalte frei erfunden</p>
        </section>
    
        <section id="pictures">
            <h3>Bildnachweis:</h3>
    
                <h3>Fotos</h3>
                <ul>
                    <li>Herofoto Tastatur: Aman Anderson, <a href="#">http://de.freeimages.com/photo/illuminated-keyboard-124228 </a></li>
                    <li>Foto Dina Mayer by Dreifachaxel [CC BY-SA 4.0  <a href="#">(https://creativecommons.org/licenses/by-sa/4.0)]</a>,from Wikimedia Commons</li>
                    <li>Foto Thomas Meyer-Hermann By Thomas Meyer-Hermann (Thomas Meyer-Hermann) [GFDL <a href="#">(http://www.gnu.org/copyleft/fdl.html)</a>, CC BY-SA 3.0 <a href="#">(https://creativecommons.org/licenses/by-sa/3.0)</a> or CC BY-SA 3.0 de <a href="#">(https://creativecommons.org/licenses/by-sa/3.0/de/deed.en)]</a> , via Wikimedia Commons <a href="#">https://upload.wikimedia.org/wikipedia/commons/thumb/c/c6/Thomas_Meyer-Hermann_1.jpg/407px-Thomas_Meyer-Hermann_1.jpg</a></li>
                    <li>Foto Vorstand Sparkasse Ülzen [[File:SKUelzen Vorstand 2015.jpg|SKUelzen Vorstand 2015]] <a href="#">https://upload.wikimedia.org/wikipedia/commons/3/3e/SKUelzen_Vorstand_2015.jpg</a> </li>
                    <li>Herofoto "Über mich" <a href="#">https://pixabay.com/de/photos/ux-prototyping-design-webdesign-788002/</a> </li>
                </ul>
    
                <h3>Icons</h3>
                <ul id=footer-bottom>
                    <li>Freepik <a href="#">(http://www.freepik.com)</a> / <a href="#">www.flaticon.com </a> </li>
                </ul>
        </section>
     
    </footer>

    <?php wp_footer(); ?>
</body>
</html>

<?php
include './partials/footer.php'
?>


