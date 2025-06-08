<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dino Apriyanto | Portofolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
  <style>
    :root {
      --accent: #34b3ff;
      --accent-dark: #1780c7;
      --bg: #010a17;
      --bg-alt: #02101f;
      --text: #d4d7dd;
      --muted: #8b98a9;
      --radius: 16px;
      --shadow: 0 20px 60px rgba(0,0,0,0.6);
    }
    *{margin:0;padding:0;box-sizing:border-box;scroll-behavior:smooth;}
    body{font-family:'Poppins',sans-serif;background:var(--bg);color:var(--text);}
    /* NAV */
    nav{position:fixed;top:0;inset-inline:0;padding:18px 50px;background:rgba(1,10,23,0.7);backdrop-filter:blur(12px);display:flex;justify-content:space-between;align-items:center;z-index:999;}
    .logo{display:flex;align-items:center;font-weight:700;font-size:1.2rem;color:var(--accent);gap:8px;}
    .logo i{font-size:1.6rem;}
    nav ul{display:flex;gap:38px;list-style:none;}
    nav a{color:var(--muted);text-decoration:none;font-weight:500;position:relative;}
    nav a::after{content:"";position:absolute;left:0;bottom:-6px;width:0;height:2px;background:var(--accent);transition:.3s;}
    nav a:hover,nav a.active{color:var(--accent);}nav a:hover::after,nav a.active::after{width:100%;}

    /* HERO */
    .hero{height:100vh;display:grid;place-items:center;position:relative;text-align:left;padding-inline:clamp(1rem,6vw,6rem);background:url('https://images.unsplash.com/photo-1446776811953-b23d57bd21aa?auto=format&fit=crop&w=1600&q=80') center/cover no-repeat;}
    .hero::after{content:"";position:absolute;inset:0;background:linear-gradient(45deg,rgba(1,10,23,0.9),rgba(1,10,23,0.3));}
    .hero-content{position:relative;z-index:1;max-width:620px;animation:fadeDown 1s ease-out;}
    @keyframes fadeDown{from{opacity:0;transform:translateY(-40px);}to{opacity:1;transform:translateY(0);}}
    .hero h1{font-size:clamp(2.6rem,6vw,4.4rem);line-height:1.1;color:#fff;font-weight:700;}
    .hero p{margin-top:20px;font-size:1.05rem;color:var(--muted);}
    .btn{display:inline-block;margin-top:34px;background:var(--accent);color:#fff;padding:14px 38px;border-radius:50px;font-weight:600;font-size:1rem;text-decoration:none;box-shadow:0 8px 20px rgba(52,179,255,0.35);transition:.3s;}
    .btn:hover{background:var(--accent-dark);transform:translateY(-3px);}

    /* SECTIONS */
    section{padding:110px 6vw;}
    h2.section-title{font-size:2.6rem;color:var(--accent);text-align:center;margin-bottom:60px;font-weight:700;letter-spacing:.04em;}

    /* PROFILE */
    .profile-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:60px;align-items:center;}
    .profile-img{text-align:center;}
    .profile-img img{width:220px;height:220px;border-radius:50%;object-fit:cover;border:6px solid var(--accent);box-shadow:var(--shadow);}
    .profile-info h3{font-size:2rem;font-weight:700;margin-bottom:10px;}
    .profile-info .role{color:var(--accent-dark);font-weight:600;margin-bottom:18px;}
    .skills{display:flex;flex-wrap:wrap;gap:12px;margin-top:24px;}
    .skill{background:var(--accent-dark);padding:6px 16px;border-radius:30px;font-size:.9rem;font-weight:600;display:flex;align-items:center;gap:6px;color:#fff;}

    /* TIMELINE */
    .timeline{max-width:720px;margin-inline:auto;border-left:3px solid var(--accent);} .tl-item{position:relative;padding:18px 22px 18px 32px;color:var(--muted);font-weight:500;} .tl-item::before{content:"";position:absolute;left:-11px;top:24px;width:14px;height:14px;background:var(--accent);border-radius:50%;}

    /* GRID LIST */
    .card-grid{display:grid;gap:26px;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));}
    .card{background:var(--bg-alt);border-radius:var(--radius);padding:28px;box-shadow:var(--shadow);display:flex;align-items:flex-start;gap:18px;color:var(--text);transition:.35s;}
    .card:hover{transform:translateY(-6px);} .card i{font-size:1.6rem;color:var(--accent);} .card span{font-weight:600;}

    /* FOOTER */
    footer{background:#020915;padding:50px 0;text-align:center;color:var(--muted);} .socials{display:flex;justify-content:center;gap:26px;margin-bottom:20px;} .socials a{font-size:1.6rem;color:var(--muted);transition:.3s;} .socials a:hover{color:var(--accent);} small{font-size:.85rem;}

    /* SCROLL ANIMATION */
    [data-reveal]{opacity:0;transform:translateY(40px);transition:all .8s ease;} [data-reveal].revealed{opacity:1;transform:none;}
  </style>
</head>
<body>

  <!-- NAV -->
  <nav>
    <div class="logo"><i class="fas fa-rocket"></i> Dino</div>
    <ul>
      <li><a href="#profil">Profil</a></li>
      <li><a href="#pendidikan">Pendidikan</a></li>
      <li><a href="#tugas">Tugas & Kuis</a></li>
    </ul>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-content">
      <h1>Orbiting Creativity<br/>with <span style="color:var(--accent)">Code & Design</span></h1>
      <p>Exploring the digital universe as a UI/UX designer & developer — crafting engaging experiences, one pixel at a time.</p>
      <a href="#profil" class="btn">Get Started</a>
    </div>
  </section>

  <!-- PROFILE -->
  <section id="profil" data-reveal>
    <h2 class="section-title">Profil Saya</h2>
    <div class="profile-grid">
      <div class="profile-img"><img src="/img/profil-dino.jpg" alt="foto dino"></div>
      <div class="profile-info">
        <h3>Dino Apriyanto</h3>
        <p class="role">UI/UX Designer &amp; Mahasiswa Ilmu Komputer</p>
        <p>Saya tertarik pada desain antarmuka yang intuitif dan pengembangan web modern. Berfokus pada solusi digital yang estetis, fungsional, dan human‑centered.</p>
        <div class="skills">
          <span class="skill"><i class="fab fa-html5"></i> HTML</span>
          <span class="skill"><i class="fab fa-css3-alt"></i> CSS</span>
          <span class="skill"><i class="fab fa-js"></i> JavaScript</span>
          <span class="skill"><i class="fab fa-php"></i> Laravel</span>
          <span class="skill"><i class="fas fa-palette"></i> Figma</span>
        </div>
      </div>
    </div>
  </section>

  <!-- EDUCATION -->
  <section id="pendidikan" data-reveal>
    <h2 class="section-title">Riwayat Pendidikan</h2>
    <div class="timeline">
      <div class="tl-item">SDN 5 Sukajawa (2010 – 2016)</div>
      <div class="tl-item">SMPN 9 Bandar Lampung (2016 – 2019)</div>
      <div class="tl-item">SMAN 3 Bandar Lampung (2019 – 2022)</div>
      <div class="tl-item">Universitas Lampung — Ilmu Komputer (2022 – Sekarang)</div>
    </div>
  </section>

  <!-- TASKS -->
<section id="tugas" data-reveal>
  <h2 class="section-title">Tugas & Kuis Grafika Komputer</h2>
  <div class="card-grid">
    <!-- Tugas PDF -->
    <a href="https://youtu.be/y-gUpAKsVjI" target="_blank" class="card"><i class="fas fa-satellite"></i> <span>Tugas 1: Tokoh Perintis Grafika Komputer</span></a>
    <a href="/pdf/tugas-2.pdf" target="_blank" class="card"><i class="fas fa-satellite"></i> <span>Tugas 2: Algoritma Pembentukan Garis</span></a>
    <a href="/pdf/tugas-3.pdf" target="_blank" class="card"><i class="fas fa-satellite"></i> <span>Tugas 3: Algoritma Pembentukan Lingkaran</span></a>
    <a href="/pdf/tugas-4.pdf" target="_blank" class="card"><i class="fas fa-satellite"></i> <span>Tugas 4: Algoritma Pembentukan Kurva</span></a>

    <!-- Kuis YouTube -->
    <a href="https://youtu.be/yEmJ8nGZPaQ" target="_blank" class="card"><i class="fas fa-pen"></i> <span>Kuis 1: Persamaan Misteri</span></a>
    <a href="https://youtu.be/MNBU0Ai_CXM" target="_blank" class="card"><i class="fas fa-pen"></i> <span>Kuis 2: Transformasi 2D</span></a>
    <a href="https://youtu.be/efCvEavXdW0" target="_blank" class="card"><i class="fas fa-pen"></i> <span>Kuis 3: Line Clipping Algorithm</span></a>
    <a href="https://youtu.be/n6wOyvyTOw4" target="_blank" class="card"><i class="fas fa-pen"></i> <span>Kuis 4: Polygon Clipping Algorithm</span></a>
  </div>
</section>


  <!-- FOOTER -->
  <footer>
    <div class="socials">
      <a href="https://www.youtube.com/@dinoapriyanto8" target="_blank"><i class="fab fa-youtube"></i></a>
      <a href="https://github.com/dinoapriyanto88" target="_blank"><i class="fab fa-github"></i></a>
      <a href="https://www.instagram.com/dinoaprynt/" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="mailto:2257051011@student.unila.ac.id"><i class="fas fa-envelope"></i></a>
    </div>
    <small>© 2025 • Dibuat dengan ☕ oleh Dino Apriyanto</small>
  </footer>

  <script>
    const revealEls = document.querySelectorAll('[data-reveal]');
    const io = new IntersectionObserver((entries)=>{
      entries.forEach(entry=>{
        if(entry.isIntersecting){entry.target.classList.add('revealed');io.unobserve(entry.target);}
      });
    },{threshold:0.15});
    revealEls.forEach(el=>io.observe(el));

    // active link
    const links=document.querySelectorAll('nav a');
    const sections=[...links].map(l=>document.querySelector(l.getAttribute('href')));
    window.addEventListener('scroll',()=>{
      const pos=window.scrollY+100;
      sections.forEach((sec,i)=>{
        if(pos>=sec.offsetTop&&pos<sec.offsetTop+sec.offsetHeight){links.forEach(l=>l.classList.remove('active'));links[i].classList.add('active');}
      })
    });
  </script>
</body>
</html>
