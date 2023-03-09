<?php 
    require("file.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css'>
</head>
<body>
  <!-- Header -->
    <header class="bg-header">
        <div id="abc">
            <nav>
                <ul>
                    <li><a href="#bg-header">Home</a></li>
                    <li><a href="#porto">Portofolio</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        <div class="logo">Lucky<span>.</span></div>
        <div class="hai">HI! EVERYONE</div>
        <div class="name">Lucky Kurniawan<br/>Freelance Videographer</div>
        <p class="make-a-documentation">Make a documentation Event, Wedding, Prewedding, <br/> Project Film, Editing, and Pilot Drone.</p>
        <div class="btn-1">
            <a class="btn-1" href="https://api.whatsapp.com/send?phone=62895627560574" target="_blank" title="Klik Disini">Contact Us</a>
       </div>
    </header>
    <section id="porto">
        <div class="portofolio">WHO AM I
            <p> Iam <?php echo $umur ?> </p> 
        </div>
       
        <div class="desk-job">A Videographer with entry-level experience, specializing in camera operations, film shoots, </br>video editing, and Adobe After Effects. A strong history of planning shoots, </br>coordinating with videography teams, and recording live events for clients.</div>
        
               <!-- PROGRESS BAR -->

                  <div class="bar-skill">
                    <h3>COMMUNICATION</h3>
                     <div class="back-bar">
                      <div class="front-bar bar1">
                      </div>
                    </div>
                    <h3>80%</h3>
                  </div>
                    <div class="bar-skill">
                                  <h3>EDITING</h3>
                                   <div class="back-bar">
                                      <div class="front-bar bar2">
                                      </div>
                      </div>
                                  <h3>70%</h3>
                              </div>
                    </div>
                        <div class="bar-skill">
                          <h3>CONCEPT MAKER</h3>
                           <div class="back-bar">
                            <div class="front-bar bar3">
                            </div>
                          </div>
                          <h3>90%</h3>
                        </div>
                                  </div>
                      <div class="bar-skill">
                        <h3>VIDEO MAKER</h3>
                         <div class="back-bar">
                          <div class="front-bar bar4">
                          </div>
                        </div>
                                  <h3>80%</h3>
                              </div>
                  </div>
                </div>
              </div>
        <a href="https://linktr.ee/m.luckykurniawan" class="btn first">PORTOFOLIO</a>
    </section>
    <!-- footer -->
    <section id="footer"></section>
    
<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Lucky<span>.</span></h3>

        <p class="footer-links">
          
          <a href="#abc">Home</a>
        
          <a href="#porto">Portofolio</a>
        
          <a href="#footer">Contact Us</a>
        </p>

        <p class="footer-company-name">m.luckykurniawan © 2023</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Jombang</span> Surabaya, Indonesia</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+62 8956 2756 0574</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:m.luckykurniawan22@gmail.com">m.luckykurniawan22@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Iam a Freelance Videographer. This is my social media.
        </p>

        <div class="footer-icons">

          <a href="https://www.instagram.com/m.luckykurniawan/?hl=id"><i class="fa fa-instagram"></i></a>
          <a href="https://www.facebook.com/exye.zet.3"><i class="fa fa-facebook"></i></a>
          <a href="https://www.tiktok.com/@kokngamookk?is_from_webapp=1&sender_device=pc"><i class="bi bi-tiktok"></i></a>
          <a href="https://api.whatsapp.com/send?phone=62895627560574"><i class="fa fa-whatsapp"></i></a>

        </div>

      </div>

    </footer>
    </section>
</body>
</html>