<?php
include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Daffa Nur Fiat</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200:300:400:500:600:700:800:900&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="index.js"></script>
</head>

<body>
    <header>
        <ul class="sidebar">
            <li onclick=hideSidebar()><a href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="#home">Home</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <ul>
            <li><a href="#" class="logo">Dap<span>ur</span>s.</a></li>
            <li class="hideOnMobile"><a href="#home">Home</a></li>
            <li class="hideOnMobile"><a href="#gallery">Gallery</a></li>
            <li class="hideOnMobile"><a href="#blog">Blog</a></li>
            <li class="hideOnMobile"><a href="#contact">Contact</a></li>
            <li class="menu-button" onclick=showSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
        </ul>
    </header>

    <section id="home" class="home-container">
        <div class="home-text">
            <div class="slide">
                <span class="one">Hello</span>
                <span class="two">I'm</span>
            </div>
            <h1>Daffa Nur Fiat</h1>
            <h3><span class="auto-type"></span></h3>
            <p>I am an individual who has a passion for learning new things, especially in the
                world of information technology. I always enjoy gaining new knowledge and developing the skills I
                have so that I can continue to contribute to the ever-growing world of technology. I am happy if I
                can collaborate with people who have a professional spirit in development</p>
            <div class="icons">
                <a href="https://www.instagram.com/dapnurs/"><i class='bx bxl-instagram-alt bx-md'></i></a>
                <a href="https://www.facebook.com/dafa.nurfiat/"><i class='bx bxl-facebook-square bx-md'></i></a>
                <a href="https://www.linkedin.com/in/daffa-nur-fiat-843559294/"><i
                        class='bx bxl-linkedin-square bx-md'></i></a>
                <a href="https://github.com/Dafanurfiat"><i class='bx bxl-github bx-md'></i></a>
                <a href="https://twitter.com/dafnurfi"><i class='bx bxl-twitter bx-md'></i></a>
            </div>
        </div>
    </section>
    <section id="gallery" class="gallery-container">
        <div class="main-text">
            <h1><span>G</span>allery</h1>
        </div>
        <div class="slider">
            <span style="--i:1;"><img src="Asset/foto1.JPG" alt=""></span>
            <span style="--i:2;"><img src="Asset/foto2.JPG" alt=""></span>
            <span style="--i:3;"><img src="Asset/foto3.jpg" alt=""></span>
            <span style="--i:4;"><img src="Asset/foto4.jpg" alt=""></span>
            <span style="--i:5;"><img src="Asset/foto1.JPG" alt=""></span>
            <span style="--i:6;"><img src="Asset/foto3.jpg" alt=""></span>
            <span style="--i:7;"><img src="Asset/foto3.jpg" alt=""></span>
            <span style="--i:8;"><img src="Asset/foto3.jpg" alt=""></span>
        </div>
    </section>

    <section id="blog" class="blog">
        <div class="main-text">
            <h2><span>B</span>log</h2>
        </div>
        <div class="blog-content">
            <?php
            $query = "SELECT * FROM blog";
            $result = mysqli_query($conn, $query);

            $no = 1;

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($no >=0) {
            ?>
            <div class="row">
                <img src="Asset/<?= $row["foto"] ?>">
                <div class="layer">
                    <h5><?= $row["alamat"] ?></h5>
                    <p><?= $row["artikel"] ?></p>
                    <a
                        href=<?= $row["href"] ?>><i
                            class="bx bx-link-external"></i></a>
                </div>
            </div>
            <?php } 
            $no++;
            }
            } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
            } ?>
        </div>
        </div>
    </section>

    <section id="contact" class="contact-me">
        <div class="contact-text">
            <h2>Contact <span>Me</span></h2>
            <div class="contact-box">
                <div class="contact">
                    <h4>Address</h4>
                    <p>Perumahan Waleumbanua</p>
                </div>
                <div class="contact">
                    <h4>Email</h4>
                    <p>nurfiatdaffa@gmail.com</p>
                </div>
                <div class="contact">
                    <h4>Phone</h4>
                    <p>+62895802929397</p>
                </div>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d715.3265420974901!2d124.87625650858367!3d1.481731861376759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32870ac44dc1de61%3A0xdaea0533a5c441c!2sPerum.%20Waleumbanua!5e0!3m2!1sid!2sid!4v1711890241890!5m2!1sid!2sid"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <h3>Contact <span>Me</span></h3>
                <p>Email: nurfiatdaffa@gmail.com</p>
                <p>Phone: +62895802929397</p>
                <p>Address: Perumahan Waleumbanua</p>
            </div>
            <div class="footer-content">
                <h3>Quick <span>Links</span></h3>
                <ul class="list">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-content">
                <h3>Follow <span>Me</span></h3>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/dapnurs/"><i class='bx bxl-instagram-alt bx-md'></i></a></li>
                    <li><a href="https://www.facebook.com/dafa.nurfiat/"><i
                                class='bx bxl-facebook-square bx-md'></i></a></li>
                    <li><a href="https://www.linkedin.com/in/daffa-nur-fiat-843559294/"><i
                                class='bx bxl-linkedin-square bx-md'></i></a></li>
                    <li><a href="https://github.com/Dafanurfiat"><i class='bx bxl-github bx-md'></i></a></li>
                    <li><a href="https://twitter.com/dafnurfi"><i class='bx bxl-twitter bx-md'></i></a></li>
                </ul>
            </div>
        </div>
        <div class="end">
            <p>&copy; 2024 All rights reserved | Made by Daffa Nur Fiat</p>
        </div>
    </footer>
</body>

</html>