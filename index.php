<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jacques+Francois+Shadow&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFE9BA;
            color: #000000;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: #4D4D4D;
            color: #FFE9BA;
            padding: 20px 0;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-family: "Jacques Francois Shadow", serif;
            font-size: 24px;
            font-weight: normal;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            color: #FFE9BA;
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .nav-links a:hover {
            color: #C2C2C2;
        }
        
        .hero {
            padding: 80px 0;
            text-align: center;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #4D4D4D;
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 40px;
            color: #4D4D4D;
        }
        
        .btn {
            display: inline-block;
            background-color: #4D4D4D;
            color: #FFE9BA;
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn:hover {
            background-color: #000000;
            transform: translateY(-2px);
        }
        
        .features {
            padding: 60px 0;
            background-color: #C2C2C2;
            background-color:4D4D4D
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: #FFE9BA;
            padding: 30px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 40px;
            margin-bottom: 20px;
            color: #4D4D4D;
        }
        
        .feature-card h3 {
            margin-bottom: 15px;
            color: #4D4D4D;
        }
        
        .testimonials {
            padding: 60px 0;
        }
        
        .testimonial-card {
            background-color: #C2C2C2;
            padding: 30px;
            border-radius: 5px;
            margin-bottom: 30px;
            position: relative;
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
        }
        
        .testimonial-author {
            font-weight: bold;
            color: #4D4D4D;
        }
        
        .cta {
            background-color: #4D4D4D;
            color: #FFE9BA;
            padding: 80px 0;
            text-align: center;
        }
        
        .cta h2 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        footer {
            background-color: #000000;
            color: #C2C2C2;
            padding: 40px 0;
            text-align: center;
        }
        
        .social-links {
            margin-top: 20px;
        }
        
        .social-links a {
            color: #C2C2C2;
            margin: 0 10px;
            font-size: 20px;
            text-decoration: none;
        }
        
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
            
            .nav-links {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">DONEZO</div>
                <div class="nav-links">
                </div>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="container">
            <h1>Hallo Orang Baik</h1>
            <p>Bukan soal seberapa cepat kamu sampai, tapi seberapa konsisten kamu melangkah.</p>
            <a href="login.php" class="btn">Mulai Sekarang</a>
            
        </div>
    </section>
    
    <section class="features">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">★</div>
                    <h3>Fitur Unggulan 1</h3>
                    <p>Nikmati berbagai keuntungan dari fitur unggulan pertama kami yang dirancang khusus untuk meningkatkan pengalaman Anda.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✓</div>
                    <h3>Fitur Unggulan 2</h3>
                    <p>Fitur kedua kami menawarkan solusi efisien dan efektif untuk mengatasi tantangan yang Anda hadapi sehari-hari.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">♥</div>
                    <h3>Fitur Unggulan 3</h3>
                    <p>Fitur ketiga kami akan memberikan nilai tambah yang signifikan bagi Anda dengan kualitas terbaik di kelasnya.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section class="testimonials">
        <div class="container">
            <div class="testimonial-card">
                <p class="testimonial-text">"Produk ini benar-benar mengubah cara kerja saya menjadi lebih efisien. Sangat merekomendasikan untuk semua orang yang ingin meningkatkan produktivitas!"</p>
                <p class="testimonial-author">- Rina Wijaya, Entrepreneur</p>
            </div>
            <div class="testimonial-card">
                <p class="testimonial-text">"Saya sudah mencoba banyak layanan serupa, tapi yang ini benar-benar berbeda. Kualitasnya luar biasa dan dukungan pelanggannya sangat responsif."</p>
                <p class="testimonial-author">- Budi Santoso, Marketing Director</p>
            </div>
        </div>
    </section>
    
    <section class="cta">
        <div class="container">
            <h2>Siap untuk Bergabung?</h2>
            <p>Daftar sekarang dan nikmati semua fitur premium selama 30 hari pertama secara gratis!</p>
            <a href="#" class="btn">Daftar Sekarang</a>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <p>&copy; 2025 Nama Perusahaan Anda. Hak Cipta Dilindungi.</p>
            <div class="social-links">
                <a href="#">FB</a>
                <a href="#">IG</a>
                <a href="#">TW</a>
                <a href="#">YT</a>
            </div>
        </div>
    </footer>
</body>
</html>