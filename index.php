<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magdalena Włodkowska - Front End Developer</title>
  <link rel="icon" type="image/png" href="img/favicon.png">
  <script src="https://kit.fontawesome.com/8e100dedc0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/mobile.css">
</head>

<body>
  <header>
    <div class="text">
      <h1>Hello!</h1>
      <p>I'm Magdalena Włodkowska,</p>
      <p>Front End developer</p>
    </div>
    <div class="image">
      <img src="img/ja_color.png" alt="ja - kolor" class="color">
      <img src="img/ja_gray.png" alt="ja - czarnobiały" class="gray">
    </div>
  </header>
  <nav>
    <ul>
      <li>about</li>
      <li>skills</li>
      <li>projects</li>
      <li>contact</li>
    </ul>
    <div class="social">
      <a href="https://www.facebook.com/profile.php?id=100001291446079">
        <img src="img/contact1.png" alt="facebook">
      </a>
      <a href="https://www.linkedin.com/in/magdalena-w%C5%82odkowska-6b79911b7/">
        <img src="img/contact2.png" alt="linkedin">
      </a>
      <a href="https://github.com/life4music">
        <img src="img/contact3.png" alt="github">
      </a>
    </div>
  </nav>
  <main>
    <section class="about">
      <h1>A few words about me</h1>
      <p>
        I'm a graduate of biomedical engineering. During my studies I've learnt some basic C++ and Python programming,
        but
        I mostly focused on biomedical skills. Only after graduation I've discovered that web developing is something I
        would like to pursue in life, so my front end experience lasts about 6 months. My main goal is to broaden my
        knowledge in this area by implementing interesting projects.
      </p>
      <p>In my free time I like:</p>
      <div class="hobby">
        <div>
          <img src="img/hobby1.jpg" alt="snowboard">
          <p>snowboarding</p>
        </div>
        <div>
          <img src="img/hobby2.jpg" alt="góry">
          <p>hiking</p>
        </div>
        <div>
          <img src="img/hobby4.JPG" alt="rower">
          <p>cycling</p>
        </div>
        <div>
          <img src="img/hobby3.JPG" alt="widok">
          <p>traveling</p>
        </div>
      </div>
    </section>
    <section class="skills">
      <h1>Skills</h1>
      <div class="wrap">
        <div class="icons">
          <div>
            <img src="img/skill1.png" alt="html5 icon">
            <span>HTML5</span>
          </div>
          <div>
            <img src="img/skill2.png" alt="css icon">
            <span>CSS, SASS</span>
          </div>
          <div>
            <img src="img/skill3.png" alt="js icon">
            <span>JavaScript</span>
          </div>
          <div>
            <img src="img/skill4.png" alt="jQuery icon">
            <span>jQuery</span>
          </div>
        </div>
        <div class="icons">
          <h2>also I know a little:</h2>
          <div>
            <img src="img/skill5.png" alt="node.js icon">
            <span>Node.js</span>
          </div>
          <div>
            <img src="img/skill6.png" alt="express icon">
            <span>Express</span>
          </div>
        </div>
      </div>

    </section>
    <section class="projects">
      <h1>My projects</h1>
      <div class="project">
        <img src="img/drevo.jpg" alt="miniature of drevotorun.pl">
        <div class="info">
          <h2>Website for DREVO company</h2>
          <p>A website presenting company's selection of wooden tables. It's fully resposive - it looks and works well
            on
            desktops and on mobile devices. User can send email from the website to company's mailbox (PHP function).
            Website developed with tools:</p>
          <ul>
            <li>HTML5</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>PHP</li>
          </ul>
          <a href="https://www.drevotorun.pl">www.drevotorun.pl</a>
        </div>
      </div>
      <div class="project">
        <img src="img/shopping.jpg" alt="application miniature">
        <div class="info">
          <h2>Shopping list</h2>
          <p>Application in which user can add new items to shopping list, remove them one at a time or cross them off
            and
            clear the list at the end. User can also check if the product is already on the list or not.
            Application developed with tools:</p>
          <ul>
            <li>HTML5</li>
            <li>CSS</li>
            <li>JavaScript</li>
          </ul>
          <a href="to_do_list/index.html">Live version avaliable here</a>
        </div>
      </div>
    </section>
    <section class="contact">
      <h1>Contact me</h1>
      <form method="post">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="xxx" placeholder="E-mail">
        <textarea name="text" placeholder="Message"></textarea>
        <button type="submit" name="submit">Send message</button>
      </form>
      <?php 
      ini_set('display_errors',1);

      if (isset($_POST['submit'])){
        $to = "mawlodkowska@gmail.com";
        // dane z formularza
        $name = $_POST['name'];
        $xxx = $_POST['xxx'];
        $text = $_POST['text'];

        $xxx = filter_var($xxx, FILTER_SANITIZE_EMAIL);
          
        // treść wiadomości
        $message = "Treść wiadomości:\n".$text."\n\nOd: $name";

        // adres zwrotny
        $header = "From: $xxx";

        // wysłanie maila
        mail($to, "Wiadomość ze stronki", $message, $header) or die('Błąd: wiadomość nie została wysłana');

        // komunikat
        echo "<script>alert('Wiadomość wysłana pomyślnie!')</script>";
      }
      ?>
    </section>
  </main>
  <footer>
    <a href="tel:+48604904676"><i class="fas fa-phone-square-alt"></i>+48604904676</a>
    <a href="mailto:mawlodkowska@gmail.com"><i class="fas fa-envelope-square"></i>mawlodkowska@gmail.com</a>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>