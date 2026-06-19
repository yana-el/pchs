<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');

.sol-page { font-family: 'Inter', sans-serif; background: #fff; color: #0F2B5B; }

.sol-hero {
    padding: 160px 12% 120px;
    background: #0078D4;
    color: white;
}
.sol-hero span {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.3em;
    color: rgba(255,255,255,0.7);
}
.sol-hero h1 {
    font-size: 64px;
    font-weight: 900;
    line-height: 1.02;
    margin: 18px 0 28px;
    max-width: 700px;
}
.sol-hero p {
    font-size: 18px;
    color: rgba(255,255,255,0.85);
    line-height: 1.9;
    max-width: 460px;
}

.sol-intro-band {
    padding: 60px 12%;
    border-bottom: 1px solid #f1f5f9;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
}
.sol-intro-band p {
    font-size: 20px;
    font-weight: 600;
    color: #0F2B5B;
    line-height: 1.6;
    max-width: 600px;
}
.sol-intro-band a {
    white-space: nowrap;
    flex-shrink: 0;
}

.sol-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1px;
    background: #f1f5f9;
}

.sol-card {
    background: white;
    padding: 70px 10%;
    display: flex;
    flex-direction: column;
}

.sol-card-num {
    font-size: 72px;
    font-weight: 900;
    color: #f1f5f9;
    line-height: 1;
    margin-bottom: 20px;
    letter-spacing: -3px;
}

.sol-card h2 {
    font-size: 26px;
    font-weight: 800;
    color: #0F2B5B;
    margin-bottom: 14px;
    line-height: 1.2;
}

.sol-card .sol-hook {
    font-size: 15px;
    color: #0078D4;
    font-weight: 600;
    margin-bottom: 20px;
    line-height: 1.5;
}

.sol-card .sol-desc {
    font-size: 14px;
    color: #64748b;
    line-height: 1.9;
    margin-bottom: 36px;
    flex: 1;
}

.sol-items {
    display: flex;
    flex-direction: column;
    gap: 0;
    border-top: 1px solid #f1f5f9;
}

.sol-item {
    padding: 14px 0;
    border-bottom: 1px solid #f8fafc;
    font-size: 14px;
    color: #475569;
    display: flex;
    align-items: center;
    gap: 12px;
}
.sol-item::before {
    content: "→";
    color: #0078D4;
    font-size: 12px;
    flex-shrink: 0;
}

.sol-group-title {
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: #cbd5e1;
    padding: 20px 0 6px;
}

.sol-tagline {
    margin-top: 28px;
    font-size: 13px;
    font-weight: 700;
    color: #F97316;
}

.sol-cta {
    padding: 120px 12%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
    background: #0F2B5B;
}
.sol-cta h2 {
    font-size: 38px;
    font-weight: 800;
    color: white;
    margin-bottom: 10px;
}
.sol-cta p {
    color: rgba(255,255,255,0.45);
    font-size: 16px;
}
.sol-cta .btn-primary {
    background: #F97316;
    border-radius: 8px;
    padding: 18px 44px;
    font-size: 15px;
    font-weight: 700;
    white-space: nowrap;
    flex-shrink: 0;
}

@media(max-width: 768px) {
    .sol-hero { padding: 100px 6% 80px; }
    .sol-hero h1 { font-size: 38px; }
    .sol-intro-band { flex-direction: column; padding: 50px 6%; }
    .sol-grid { grid-template-columns: 1fr; }
    .sol-card { padding: 60px 6%; }
    .sol-cta { flex-direction: column; align-items: flex-start; padding: 80px 6%; }
}
</style>

<div class="sol-page">

<div class="sol-hero">
    <span>Nos Solutions</span>
    <h1>L'informatique qui travaille pour vous.</h1>
    <p>Des solutions adaptées à chaque défi, de la sécurité à la gestion complète de votre parc.</p>
</div>


<div class="sol-grid">

    <div class="sol-card">
        <div class="sol-card-num">01</div>
        <h2>Cybersécurité</h2>
        <p class="sol-hook">Protégez votre entreprise avant qu'il ne soit trop tard.</p>
        <p class="sol-desc">Les cyberattaques touchent toutes les entreprises, quelle que soit leur taille. Nous mettons en place des protections adaptées pour sécuriser vos données et votre activité.</p>
        <div class="sol-items">
            <div class="sol-item">Antivirus et anti-malware professionnels</div>
            <div class="sol-item">Prévention et gestion des ransomwares</div>
            <div class="sol-item">Sécurisation des données sensibles</div>
            <div class="sol-item">Protection contre les fuites de données</div>
            <div class="sol-item">Surveillance et accompagnement en cas d'incident</div>
        </div>
        <p class="sol-tagline">Votre sécurité est notre priorité.</p>
    </div>

    <div class="sol-card">
        <div class="sol-card-num">02</div>
        <h2>Microsoft 365</h2>
        <p class="sol-hook">Vos équipes méritent les meilleurs outils.</p>
        <p class="sol-desc">Messagerie, réunions, partage de fichiers — nous déployons et gérons Microsoft 365 pour que vos collaborateurs travaillent efficacement, où qu'ils soient.</p>
        <div class="sol-items">
            <div class="sol-item">Messagerie professionnelle Outlook</div>
            <div class="sol-item">Calendriers et agendas partagés</div>
            <div class="sol-item">Microsoft Teams et outils collaboratifs</div>
            <div class="sol-item">OneDrive et SharePoint</div>
            <div class="sol-item">Installation, migration et assistance</div>
        </div>
        <p class="sol-tagline">Travaillez simplement, où que vous soyez.</p>
    </div>

    <div class="sol-card">
        <div class="sol-card-num">03</div>
        <h2>Infrastructure Réseau</h2>
        <p class="sol-hook">Un réseau solide, c'est une entreprise qui tourne.</p>
        <p class="sol-desc">Serveurs, Wi-Fi, postes de travail — nous concevons et maintenons l'infrastructure dont vous avez besoin pour travailler sans interruption.</p>
        <div class="sol-items">
            <div class="sol-item">Installation et configuration de serveurs</div>
            <div class="sol-item">Mise en réseau des postes de travail</div>
            <div class="sol-item">Déploiement et sécurisation du Wi-Fi</div>
            <div class="sol-item">Installation et configuration des PC</div>
            <div class="sol-item">Maintenance et optimisation</div>
        </div>
        <p class="sol-tagline">Un réseau performant pour une entreprise connectée.</p>
    </div>

    <div class="sol-card">
        <div class="sol-card-num">04</div>
        <h2>Infogérance & Dépannage</h2>
        <p class="sol-hook">Un problème ? On s'en occupe.</p>
        <p class="sol-desc">Contrat de suivi ou intervention ponctuelle — choisissez la formule qui vous convient et concentrez-vous sur votre cœur de métier.</p>
        <div class="sol-items">
            <div class="sol-group-title">Contrat d'infogérance</div>
            <div class="sol-item">Maintenance préventive et suivi régulier</div>
            <div class="sol-item">Assistance utilisateur prioritaire</div>
            <div class="sol-item">Résolution des incidents et mises à jour</div>
            <div class="sol-group-title">Dépannage ponctuel</div>
            <div class="sol-item">Intervention unique sans engagement</div>
            <div class="sol-item">Diagnostic et remise en service rapide</div>
        </div>
        <p class="sol-tagline">Une assistance réactive pour votre continuité.</p>
    </div>

</div>
</div>