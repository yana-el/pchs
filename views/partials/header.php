<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles.css" rel="stylesheet" type="text/css"/>
<title>PC-HS</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#ffffff;
    color:#111827;
}

nav{
    height:70px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 60px;
    background:#ffffff;
    border-bottom:1px solid #e5e7eb;
}

.logo img{
    height:50px;
    width:auto;
    display:block;
}

.links{
    display:flex;
    gap:35px;
}

.links a{
    text-decoration:none;
    color:#6b7280;
    font-size:15px;
    font-weight:500;
    transition:0.2s;
}

.links a:hover{
    color:#111827;
}

.burger{
    display:none;
    flex-direction:column;
    gap:5px;
    cursor:pointer;
    background:none;
    border:none;
    padding:5px;
}

.burger span{
    display:block;
    width:25px;
    height:2px;
    background:#111827;
}

@media (max-width: 768px) {
    nav{
        padding:0 20px;
        position:relative;
    }

    .burger{
        display:flex;
    }

    .links{
        display:none;
        flex-direction:column;
        position:absolute;
        top:70px;
        left:0;
        width:100%;
        background:#ffffff;
        border-bottom:1px solid #e5e7eb;
        padding:20px;
        gap:15px;
        z-index:100;
    }

    .links.open{
        display:flex;
    }
}

</style>
</head>

<body>

<nav>
    <div class="logo">
      <a href='/'>
        <img src="image/logo.png" alt="PC-HS">
      </a>
    </div>

    <div class="links">
        <a href="/">Accueil</a>
        <a href="/solution">Solutions</a>
        <a href="/assistance">Assistance</a>
        <a href="/contact">Contact</a>
    </div>

    <button class="burger" onclick="this.previousElementSibling.classList.toggle('open')">
        <span></span><span></span><span></span>
    </button>
</nav>
