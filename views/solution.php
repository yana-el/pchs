<style>
.sol-header{
    padding:100px 8% 60px;
    border-bottom:1px solid #e5e7eb;
}
.sol-header span{
    text-transform:uppercase;
    letter-spacing:0.3em;
    font-size:12px;
    color:#0078D4;
    font-weight:600;
}
.sol-header h1{
    font-size:52px;
    font-weight:800;
    margin:15px 0 0;
    line-height:1.1;
    max-width:700px;
}

.sol-section{
    display:flex;
    gap:80px;
    padding:80px 8%;
    border-bottom:1px solid #e5e7eb;
    align-items:flex-start;
}
.sol-section:nth-child(even){
    background:#f8fafc;
}
.sol-section-left{
    min-width:280px;
    max-width:280px;
}
.sol-section-left h2{
    font-size:28px;
    font-weight:800;
    margin-bottom:10px;
}
.sol-section-left p{
    color:#6b7280;
    font-size:15px;
    line-height:1.6;
}
.sol-section-right{
    flex:1;
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
}
.sol-item{
    padding:30px;
    border:1px solid #e5e7eb;
    border-radius:12px;
    background:white;
    cursor:pointer;
    transition:box-shadow 0.2s, transform 0.2s;
}
.sol-item:hover{
    box-shadow:0 8px 30px rgba(0,0,0,0.08);
    transform:translateY(-2px);
}
.sol-item .sol-icon{
    font-size:28px;
    margin-bottom:15px;
}
.sol-item h3{
    font-size:17px;
    font-weight:700;
    margin-bottom:8px;
}
.sol-item p{
    color:#6b7280;
    font-size:14px;
    line-height:1.6;
}
.sol-item .sol-tag{
    display:inline-block;
    margin-top:15px;
    font-size:12px;
    font-weight:600;
    color:#0078D4;
    text-transform:uppercase;
    letter-spacing:0.1em;
}

.sol-cta{
    text-align:center;
    padding:100px 20px;
}
.sol-cta h2{
    font-size:40px;
    font-weight:800;
    margin-bottom:15px;
}
.sol-cta p{
    color:#6b7280;
    margin-bottom:30px;
    font-size:17px;
}

.sol-popup-overlay{
    display:none;
    position:fixed;
    inset:0;
    background:rgba(0,0,0,0.5);
    align-items:center;
    justify-content:center;
    z-index:999;
}
.sol-popup-box{
    background:white;
    border-radius:12px;
    padding:45px;
    width:90%;
    max-width:520px;
    position:relative;
    border:1px solid #e5e7eb;
}
.sol-popup-box h2{
    font-size:26px;
    font-weight:800;
    margin-bottom:15px;
    color:#111827;
}
.sol-popup-box p{
    color:#6b7280;
    line-height:1.8;
    font-size:15px;
}
.sol-popup-close{
    position:absolute;
    top:15px;
    right:20px;
    font-size:24px;
    background:none;
    border:none;
    cursor:pointer;
    color:#6b7280;
}

@media(max-width:768px){
    .sol-header h1{ font-size:34px; }
    .sol-section{ flex-direction:column; gap:30px; padding:50px 6%; }
    .sol-section-left{ min-width:unset; max-width:unset; }
}
</style>

<div class="sol-header">
    <span>Solutions</span>
    <h1>Des solutions informatiques pour chaque défi.</h1>
</div>

<!-- Cybersécurité -->
<div class="sol-section">
    <div class="sol-section-left">
        <h2>🛡️ Cybersécurité</h2>
        <p>Protégez vos systèmes, vos données et vos utilisateurs contre les menaces numériques.</p>
    </div>
    <div class="sol-section-right">
        <div class="sol-item" onclick="solOpenPopup('Antivirus', 'Installation et gestion de solutions antivirus professionnelles pour protéger vos postes et serveurs contre les menaces connues et inconnues.')">
            <div class="sol-icon">🦠</div>
            <h3>Antivirus</h3>
            <p>Protection en temps réel contre les logiciels malveillants</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Ransomware', 'Mise en place de protections contre les ransomwares : sauvegardes isolées, détection comportementale et plan de reprise en cas d\'attaque.')">
            <div class="sol-icon">🔒</div>
            <h3>Ransomware</h3>
            <p>Prévention et récupération après une attaque par rançongiciel</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Fuite de données', 'Audit de sécurité, chiffrement des données sensibles et mise en conformité pour éviter toute fuite d\'informations confidentielles.')">
            <div class="sol-icon">🔐</div>
            <h3>Fuite de données</h3>
            <p>Audit et protection de vos données sensibles</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
    </div>
</div>

<div class="sol-section">
    <div class="sol-section-left">
        <h2>☁️ Office 365</h2>
        <p>Déployez et gérez les outils Microsoft 365 pour booster la productivité de vos équipes.</p>
    </div>
    <div class="sol-section-right">
        <div class="sol-item" onclick="solOpenPopup('Email professionnel', 'Configuration et gestion de vos boîtes mail professionnelles avec Microsoft Exchange Online — sécurité, anti-spam et accès multi-appareils.')">
            <div class="sol-icon">📧</div>
            <h3>Email</h3>
            <p>Messagerie professionnelle avec Microsoft Exchange</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Agenda partagé', 'Mise en place d\'agendas partagés et de salles de réunion via Microsoft Outlook et Teams pour une meilleure organisation.')">
            <div class="sol-icon">📅</div>
            <h3>Agenda</h3>
            <p>Gestion des agendas et réunions en équipe</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
    </div>
</div>

<div class="sol-section">
    <div class="sol-section-left">
        <h2>🌐 Infrastructure Réseau</h2>
        <p>Concevez et déployez une infrastructure fiable et sécurisée adaptée à votre activité.</p>
    </div>
    <div class="sol-section-right">
        <div class="sol-item" onclick="solOpenPopup('Serveur', 'Installation, configuration et maintenance de serveurs physiques ou virtuels adaptés à votre activité.')">
            <div class="sol-icon">🖧</div>
            <h3>Serveur</h3>
            <p>Installation et gestion de vos serveurs</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Mise en réseau', 'Conception et déploiement de votre infrastructure réseau local avec switch, routeur et VLAN.')">
            <div class="sol-icon">🔌</div>
            <h3>Mise en réseau</h3>
            <p>Déploiement de votre réseau local</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Wi-Fi', 'Installation de points d\'accès Wi-Fi professionnels pour une couverture optimale dans vos locaux.')">
            <div class="sol-icon">📶</div>
            <h3>Wi-Fi</h3>
            <p>Couverture Wi-Fi professionnelle et sécurisée</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Postes de travail', 'Fourniture, configuration et déploiement de postes de travail adaptés à vos besoins métiers.')">
            <div class="sol-icon">🖥️</div>
            <h3>Postes de travail</h3>
            <p>Configuration et déploiement de PC</p>
            <span class="sol-tag">En savoir plus →</span>
        </div>
    </div>
</div>

<div class="sol-section">
    <div class="sol-section-left">
        <h2>🖥️ Infogérance</h2>
        <p>Externalisez la gestion de votre parc informatique avec un suivi adapté à vos besoins.</p>
    </div>
    <div class="sol-section-right">
        <div class="sol-item" onclick="solOpenPopup('Contrat de suivi', 'Contrat d\'infogérance avec suivi régulier de votre parc informatique, maintenance préventive, mises à jour et support prioritaire inclus.')">
            <div class="sol-icon">📋</div>
            <h3>Contrat de suivi</h3>
            <p>Suivi régulier, maintenance préventive et support prioritaire</p>
            <span class="sol-tag">Contrat →</span>
        </div>
        <div class="sol-item" onclick="solOpenPopup('Dépannage one-shot', 'Intervention ponctuelle sans engagement : diagnostic et résolution rapide de tout problème informatique sur site ou à distance.')">
            <div class="sol-icon">🔧</div>
            <h3>Dépannage one-shot</h3>
            <p>Intervention ponctuelle sans engagement</p>
            <span class="sol-tag">À la demande →</span>
        </div>
    </div>
</div>

<div class="sol-cta">
    <h2>Un projet ? Une question ?</h2>
    <p>Notre équipe est disponible pour vous accompagner.</p>
    <a href="/contact" class="btn-primary">Nous contacter</a>
</div>

<div class="sol-popup-overlay" id="solPopup">
    <div class="sol-popup-box">
        <button class="sol-popup-close" onclick="solClosePopup()">×</button>
        <h2 id="solPopupTitle"></h2>
        <p id="solPopupText"></p>
    </div>
</div>

<script>
function solOpenPopup(title, text){
    document.getElementById("solPopupTitle").innerText = title;
    document.getElementById("solPopupText").innerText = text;
    document.getElementById("solPopup").style.display = "flex";
}
function solClosePopup(){
    document.getElementById("solPopup").style.display = "none";
}
document.addEventListener("keydown", function(e){
    if(e.key === "Escape") solClosePopup();
});
</script>
