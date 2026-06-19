<style>
.sol-hero{
    background:#0F2B5B;
    color:white;
    padding:120px 8% 80px;
}
.sol-hero span{
    text-transform:uppercase;
    letter-spacing:0.3em;
    font-size:12px;
    color:#60a5fa;
    font-weight:600;
}
.sol-hero h1{
    font-size:56px;
    font-weight:800;
    margin:15px 0 20px;
    line-height:1.1;
    max-width:700px;
}
.sol-hero p{
    font-size:18px;
    color:rgba(255,255,255,0.65);
    max-width:550px;
    line-height:1.7;
}

.sol-grid{
    padding:80px 8%;
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:30px;
    background:#f9fafb;
}

.sol-card{
    background:white;
    border-radius:16px;
    padding:50px 45px;
    border:1px solid #e5e7eb;
    transition:box-shadow 0.3s, transform 0.3s;
}
.sol-card:hover{
    box-shadow:0 20px 60px rgba(0,0,0,0.08);
    transform:translateY(-4px);
}

.sol-card-icon{
    width:52px;
    height:52px;
    background:#EFF6FF;
    border-radius:12px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:24px;
    margin-bottom:25px;
}

.sol-card h2{
    font-size:22px;
    font-weight:800;
    color:#0F2B5B;
    margin-bottom:6px;
}

.sol-card .sol-card-sub{
    font-size:14px;
    color:#0078D4;
    font-weight:600;
    margin-bottom:18px;
}

.sol-card .sol-card-intro{
    font-size:14px;
    color:#6b7280;
    line-height:1.8;
    margin-bottom:25px;
    padding-bottom:25px;
    border-bottom:1px solid #f3f4f6;
}

.sol-card h4{
    font-size:11px;
    font-weight:700;
    text-transform:uppercase;
    letter-spacing:0.12em;
    color:#9ca3af;
    margin-bottom:14px;
    margin-top:20px;
}

.sol-list{
    list-style:none;
    padding:0;
    margin:0 0 20px;
}

.sol-list li{
    font-size:14px;
    color:#374151;
    line-height:1.6;
    padding:8px 0;
    border-bottom:1px solid #f9fafb;
    display:flex;
    align-items:center;
    gap:10px;
}

.sol-list li::before{
    content:"";
    width:6px;
    height:6px;
    background:#0078D4;
    border-radius:50%;
    flex-shrink:0;
}

.sol-card-tagline{
    font-size:13px;
    font-weight:700;
    color:#F97316;
    margin-top:25px;
    display:flex;
    align-items:center;
    gap:6px;
}

.sol-cta{
    text-align:center;
    padding:100px 20px;
    background:white;
    border-top:1px solid #e5e7eb;
}
.sol-cta h2{
    font-size:40px;
    font-weight:800;
    color:#0F2B5B;
    margin-bottom:15px;
}
.sol-cta p{
    color:#6b7280;
    margin-bottom:30px;
    font-size:17px;
}

@media(max-width:768px){
    .sol-hero h1{ font-size:34px; }
    .sol-hero{ padding:80px 6% 50px; }
    .sol-grid{ grid-template-columns:1fr; padding:40px 6%; }
    .sol-card{ padding:35px 25px; }
}
</style>

<div class="sol-hero">
    <span>Nos Solutions</span>
    <h1>Des solutions informatiques pour chaque défi.</h1>
    <p>PC-HS vous accompagne avec des solutions concrètes, adaptées à chaque besoin de votre entreprise.</p>
</div>

<div class="sol-grid">

    <div class="sol-card">
        <div class="sol-card-icon">🛡️</div>
        <h2>Cybersécurité</h2>
        <p class="sol-card-sub">Protégez votre entreprise contre les menaces numériques</p>
        <p class="sol-card-intro">Nous sécurisons votre système d'information afin de limiter les risques liés aux cyberattaques et aux pertes de données.</p>
        <h4>Nos services</h4>
        <ul class="sol-list">
            <li>Protection antivirus et anti-malware</li>
            <li>Prévention et gestion des ransomwares</li>
            <li>Sécurisation des données sensibles</li>
            <li>Protection contre les fuites de données</li>
            <li>Surveillance et accompagnement en cas d'incident</li>
        </ul>
        <p class="sol-card-tagline">Votre sécurité est notre priorité →</p>
    </div>

    <div class="sol-card">
        <div class="sol-card-icon">☁️</div>
        <h2>Solutions Microsoft 365</h2>
        <p class="sol-card-sub">Des outils collaboratifs pour gagner en efficacité</p>
        <p class="sol-card-intro">Nous vous accompagnons dans le déploiement et la gestion des solutions Microsoft 365 pour faciliter le travail de vos équipes.</p>
        <h4>Nos services</h4>
        <ul class="sol-list">
            <li>Messagerie professionnelle Outlook</li>
            <li>Gestion des calendriers et agendas partagés</li>
            <li>Microsoft Teams et outils collaboratifs</li>
            <li>Stockage et partage avec OneDrive et SharePoint</li>
            <li>Installation, migration et assistance</li>
        </ul>
        <p class="sol-card-tagline">Travaillez simplement, où que vous soyez →</p>
    </div>

    <div class="sol-card">
        <div class="sol-card-icon">🌐</div>
        <h2>Infrastructure Réseau</h2>
        <p class="sol-card-sub">Une infrastructure fiable et performante</p>
        <p class="sol-card-intro">Nous concevons, installons et maintenons votre environnement informatique afin de garantir stabilité, sécurité et performances.</p>
        <h4>Nos prestations</h4>
        <ul class="sol-list">
            <li>Installation et configuration de serveurs</li>
            <li>Mise en réseau des postes de travail</li>
            <li>Déploiement et sécurisation du Wi-Fi</li>
            <li>Installation et configuration des PC</li>
            <li>Maintenance et optimisation de votre infrastructure</li>
        </ul>
        <p class="sol-card-tagline">Un réseau performant pour une entreprise connectée →</p>
    </div>

    <div class="sol-card">
        <div class="sol-card-icon">🖥️</div>
        <h2>Infogérance & Dépannage</h2>
        <p class="sol-card-sub">Un accompagnement adapté à vos besoins</p>
        <p class="sol-card-intro">Choisissez la formule qui correspond le mieux à votre activité : un suivi régulier ou une intervention ponctuelle.</p>
        <h4>Contrat d'infogérance</h4>
        <ul class="sol-list">
            <li>Maintenance préventive</li>
            <li>Suivi régulier de votre parc informatique</li>
            <li>Assistance utilisateur et résolution des incidents</li>
            <li>Mises à jour et conseils</li>
        </ul>
        <h4>Dépannage ponctuel</h4>
        <ul class="sol-list">
            <li>Intervention unique sans engagement</li>
            <li>Résolution rapide des pannes</li>
            <li>Assistance sur site ou à distance</li>
            <li>Diagnostic et remise en service</li>
        </ul>
        <p class="sol-card-tagline">Une assistance réactive pour votre continuité →</p>
    </div>

</div>

<div class="sol-cta">
    <h2>Un projet ? Une question ?</h2>
    <p>Notre équipe est disponible pour vous accompagner.</p>
    <a href="/contact" class="btn-primary">Nous contacter</a>
</div>
