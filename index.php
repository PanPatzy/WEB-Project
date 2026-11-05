<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Osobní web Patrika Hašeka – o mně, fotbal a kontakt.">
<title>Patrik Hašek</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,400;12..96,700;12..96,800&display=swap" rel="stylesheet">
<style>
:root{--bg:#dfe5ee;--card:#f7f9fc;--ink:#18212b;--muted:#566272;--accent:#2742e6;--line:#cfd6df;--glow:rgba(39,66,230,.14);--g1:#2f9e55;--g2:#37ad60}
@media (prefers-color-scheme:dark){:root{--bg:#0a0e13;--card:#10151c;--ink:#e8ecf2;--muted:#9aa6b6;--accent:#8aa0ff;--line:#2a3441;--glow:rgba(138,160,255,.16);--g1:#1f6e3c;--g2:#257a44}}
html{scroll-padding-top:5rem;scroll-behavior:smooth}
body{background:var(--bg);color:var(--ink);font-family:"Bricolage Grotesque",system-ui,-apple-system,"Segoe UI",sans-serif;line-height:1.6;padding:clamp(.75rem,3vw,2rem)}
.page{max-width:60rem;margin:0 auto;background:var(--card);border:1px solid var(--line);border-radius:1.5rem;
background-image:radial-gradient(circle at 100% 0,var(--glow),transparent 38%),radial-gradient(circle at 0 60%,var(--glow),transparent 30%)}
.navbar{background:var(--card);border-bottom:1px solid var(--line);border-radius:1.5rem 1.5rem 0 0;padding:.9rem clamp(1.25rem,5vw,3rem)}
.navbar-brand{font-weight:800;letter-spacing:-.02em;color:var(--ink)}
.navbar-brand:hover{color:var(--accent)}
.nav-link{color:var(--muted)}
.nav-link:hover{color:var(--accent)}
.navbar-toggler{border-color:var(--line)}
.navbar-toggler:focus{box-shadow:0 0 0 .2rem var(--glow)}
.navbar-toggler-icon{background-image:none;background-color:var(--ink);
-webkit-mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='black' stroke-linecap='round' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") center/100% no-repeat;
mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='black' stroke-linecap='round' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E") center/100% no-repeat}
main{padding:clamp(2rem,6vw,4rem) clamp(1.25rem,5vw,3rem) 2rem}
h1{font-size:clamp(2.8rem,10vw,6.5rem);line-height:.92;letter-spacing:-.04em;font-weight:800;margin:0 0 1.5rem}
h1 span{display:block;color:var(--accent)}
.lead{font-size:clamp(1.1rem,2.4vw,1.4rem);max-width:28rem}
.pitch{position:relative;width:min(100%,15rem);aspect-ratio:3/4;border-radius:1rem;border:3px solid rgba(255,255,255,.85);background:repeating-linear-gradient(0deg,var(--g1) 0 2.5rem,var(--g2) 2.5rem 5rem);overflow:hidden;margin:0 auto;box-shadow:0 1.2rem 2.5rem -1rem rgba(0,0,0,.45);transform:rotate(3deg)}
.pitch::before{content:"";position:absolute;left:50%;top:50%;width:42%;aspect-ratio:1;border:3px solid rgba(255,255,255,.85);border-radius:50%;transform:translate(-50%,-50%)}
.pitch::after{content:"";position:absolute;left:0;right:0;top:50%;height:3px;margin-top:-1.5px;background:rgba(255,255,255,.85)}
.box{position:absolute;left:24%;right:24%;height:17%;border:3px solid rgba(255,255,255,.85)}
.box.t{top:-3px;border-top:0}
.box.b{bottom:-3px;border-bottom:0}
.ball{position:absolute;left:50%;top:50%;width:2.6rem;aspect-ratio:1;margin:-1.3rem 0 0 -1.3rem;border-radius:50%;z-index:2;
background:radial-gradient(circle,#1b1b1b 0 18%,transparent 19%),conic-gradient(#fff 0 12%,#222 0 16%,#fff 0 28%,#222 0 32%,#fff 0 44%,#222 0 48%,#fff 0 60%,#222 0 64%,#fff 0 76%,#222 0 80%,#fff 0 92%,#222 0 96%,#fff 0);
box-shadow:inset -.3rem -.4rem .6rem rgba(0,0,0,.3),0 .8rem .6rem -.4rem rgba(0,0,0,.4);animation:bounce 1.6s ease-in-out infinite alternate}
@keyframes bounce{from{transform:translateY(-3.5rem) rotate(0)}to{transform:translateY(3.5rem) rotate(360deg)}}
.stripe{height:.6rem;border-radius:99px;margin:3rem 0;background:repeating-linear-gradient(135deg,var(--accent) 0 1rem,transparent 1rem 2rem);opacity:.55}
section{border-top:1px solid var(--line);padding:1.75rem 0}
h2{font-size:1rem;font-weight:700;color:var(--muted)}
h2::before{content:"";display:inline-block;width:.7rem;height:.7rem;border-radius:50%;background:var(--accent);margin-right:.5rem}
.intro,.outro{color:var(--muted);max-width:40rem}
a{color:var(--accent)}
footer{border-top:1px solid var(--line);color:var(--muted);font-size:.9rem;padding:1.5rem clamp(1.25rem,5vw,3rem)}
footer a{color:var(--muted)}
@media (prefers-reduced-motion:reduce){.ball{animation:none}html{scroll-behavior:auto}}
</style>
</head>
<body>
<div class="page" id="top">

<header>
<nav class="navbar navbar-expand-md sticky-top" aria-label="Hlavní navigace">
<div class="container-fluid px-0">
<a class="navbar-brand" href="#top">Patrik Hašek</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Zobrazit menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav ms-auto">
<li class="nav-item"><a class="nav-link" href="#o-mne">O mně</a></li>
<li class="nav-item"><a class="nav-link" href="#fotbal">Fotbal</a></li>
<li class="nav-item"><a class="nav-link" href="#kontakt">Kontakt</a></li>
</ul>
</div>
</div>
</nav>
</header>

<main>
<div class="row align-items-center g-4">
<div class="col-12 col-md-8">
<h1>Patrik <span>Hašek</span></h1>
<p class="lead">Vítejte na mém webu. Tady najdete, kdo jsem, co mě baví a jak se mi ozvat.</p>
</div>
<div class="col-12 col-md-4">
<div class="pitch" aria-hidden="true"><span class="box t"></span><span class="box b"></span><span class="ball"></span></div>
</div>
</div>

<div class="stripe" aria-hidden="true"></div>
<p class="intro mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio praesent libero, sed cursus ante dapibus diam. Sed nisi nulla quis sem at nibh elementum imperdiet.</p>

<section id="o-mne">
<div class="row g-3">
<div class="col-12 col-md-3"><h2>O mně</h2></div>
<div class="col-12 col-md-9">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
</div>
</div>
</section>

<section id="fotbal">
<div class="row g-3">
<div class="col-12 col-md-3"><h2>Fotbal</h2></div>
<div class="col-12 col-md-9">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.</p>
<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo, quisque sit amet est et sapien ullamcorper pharetra.</p>
</div>
</div>
</section>

<section id="kontakt">
<div class="row g-3">
<div class="col-12 col-md-3"><h2>Kontakt</h2></div>
<div class="col-12 col-md-9">
<p>Napište mi na <a href="mailto:patrik@example.com">patrik@example.com</a>.</p>
</div>
</div>
</section>

<p class="outro mt-4 mb-0">Duis sagittis ipsum praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa vestibulum lacinia arcu eget nulla, class aptent taciti sociosqu ad litora torquent.</p>
</main>

<footer class="d-flex justify-content-between flex-wrap gap-2">
<span>© 2026 Patrik Hašek</span>
<a href="#top">Zpět nahoru ↑</a>
</footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
