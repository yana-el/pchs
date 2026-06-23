<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');

.exp-section {
    --navy: #0F2B5B;
    --blue: #0078D4;
    --orange: #0078D4;
    --muted: #64748b;
    --divider: #dbe7f5;

    font-family: 'Inter', sans-serif;
    background: #ffffff;
    color: var(--navy);
    padding: 100px 12% 60px;
}

.exp-header {
    text-align: center;
    max-width: 720px;
    margin: 0 auto 90px;
}
.exp-header span {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.3em;
    color: var(--blue);
}
.exp-header h2 {
    font-size: 44px;
    font-weight: 900;
    line-height: 1.15;
    margin: 16px 0 0;
}
.exp-header h2 em {
    font-style: normal;
    color: var(--orange);
}

.exp-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    max-width: 1180px;
    margin: 0 auto;
    position: relative;
}
.exp-grid::before {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 1px;
    background: var(--divider);
}
.exp-grid::after {
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    top: 50%;
    height: 1px;
    background: var(--divider);
}

.exp-card {
    padding: 60px 56px 70px;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.exp-icon {
    width: 76px;
    height: 76px;
    margin-bottom: 26px;
    transition: transform 0.25s ease;
}
.exp-card:hover .exp-icon {
    transform: translateY(-4px);
}

.exp-card h3 {
    font-size: 26px;
    font-weight: 800;
    margin: 0 0 22px;
}

.exp-row {
    margin: 0 0 10px;
    font-size: 14.5px;
    line-height: 1.75;
    color: var(--muted);
    max-width: 380px;
}
.exp-row strong {
    display: block;
    color: var(--navy);
    font-weight: 700;
    font-size: 15px;
    margin-bottom: 2px;
}

.exp-tagline {
    margin-top: 22px;
    font-size: 12.5px;
    font-weight: 700;
    letter-spacing: 0.04em;
    text-transform: uppercase;
}
.exp-tagline.c-blue { color: var(--blue); }
.exp-tagline.c-orange { color: var(--orange); }

@media (max-width: 768px) {
    .exp-section { padding: 70px 6% 40px; }
    .exp-header h2 { font-size: 30px; }
    .exp-header { margin-bottom: 50px; }
    .exp-grid { grid-template-columns: 1fr; }
    .exp-grid::before { display: none; }
    .exp-grid::after { display: none; }
    .exp-card { padding: 40px 6%; border-bottom: 1px solid var(--divider); }
    .exp-card:last-child { border-bottom: none; }
}
</style>

<div class="exp-section">

    <div class="exp-header">
        <span>Nos expertises</span>
        <h2>Concentrez-vous sur votre activité,<br><em>on s'occupe du reste.</em></h2>
    </div>

    <div class="exp-grid">

        <div class="exp-card">
            <svg class="exp-icon" viewBox="0 0 76 76" fill="none">
                <path d="M38 8 L62 16 V36 C62 54 52 64 38 70 C24 64 14 54 14 36 V16 Z" stroke="#0078D4" stroke-width="2.5" stroke-linejoin="round"/>
                <path d="M22 40 H30 L34 30 L40 48 L44 38 H54" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <circle cx="58" cy="20" r="3" fill="#0078D4"/>
            </svg>
            <h3>Cybersécurité</h3>
            <p class="exp-row"><strong>Prévention</strong>Des gestes simples pour sensibiliser vos équipes et réduire l'exposition aux risques cyber.</p>
            <p class="exp-row"><strong>Supervision</strong>Une surveillance continue pour détecter et réagir rapidement face aux incidents.</p>
            <p class="exp-row"><strong>Remédiation</strong>Investigation, analyse, éradication de la menace et reconstruction du système.</p>
            <p class="exp-row"><strong>Sécurisation</strong>Une approche résiliente, agile et durable pour protéger votre activité.</p>
            <p class="exp-tagline c-orange">La sécurité au cœur de vos projets !</p>
        </div>

        <div class="exp-card">
            <svg class="exp-icon" viewBox="0 0 76 76" fill="none">
                <rect x="10" y="16" width="56" height="40" rx="4" stroke="#0078D4" stroke-width="2.5"/>
                <path d="M10 22 L38 40 L66 22" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <rect x="22" y="58" width="32" height="6" rx="2" stroke="#0078D4" stroke-width="2.5"/>
                <circle cx="62" cy="14" r="3" fill="#0078D4"/>
            </svg>
            <h3>Microsoft 365</h3>
            <p class="exp-row"><strong>Messagerie &amp; agendas</strong>Outlook et calendriers partagés pour une organisation fluide au quotidien.</p>
            <p class="exp-row"><strong>Teams &amp; collaboration</strong>Réunions, échanges et travail d'équipe simplifiés, où que vous soyez.</p>
            <p class="exp-row"><strong>OneDrive &amp; SharePoint</strong>Stockage et partage sécurisé de tous vos documents.</p>
            <p class="exp-row"><strong>Déploiement</strong>Installation, migration et assistance tout au long de l'année.</p>
            <p class="exp-tagline c-blue">Travaillez simplement, où que vous soyez.</p>
        </div>

        <div class="exp-card">
            <svg class="exp-icon" viewBox="0 0 76 76" fill="none">
                <rect x="20" y="10" width="36" height="12" rx="2" stroke="#0078D4" stroke-width="2.5"/>
                <rect x="20" y="26" width="36" height="12" rx="2" stroke="#0078D4" stroke-width="2.5"/>
                <rect x="20" y="42" width="36" height="12" rx="2" stroke="#0078D4" stroke-width="2.5"/>
                <circle cx="27" cy="16" r="2" fill="#0078D4"/>
                <circle cx="27" cy="32" r="2" fill="#0078D4"/>
                <circle cx="27" cy="48" r="2" fill="#0078D4"/>
                <path d="M38 54 V64" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                <path d="M28 64 H48" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                <circle cx="58" cy="48" r="3" fill="#0078D4"/>
            </svg>
            <h3>Infrastructure Réseau</h3>
            <p class="exp-row"><strong>Serveurs</strong>Installation et configuration adaptées à la taille de votre entreprise.</p>
            <p class="exp-row"><strong>Postes de travail</strong>Mise en réseau et configuration de l'ensemble de votre parc.</p>
            <p class="exp-row"><strong>Wi-Fi</strong>Déploiement et sécurisation de votre réseau sans fil.</p>
            <p class="exp-row"><strong>Maintenance</strong>Suivi régulier et optimisation continue de vos équipements.</p>
            <p class="exp-tagline c-blue">Un réseau performant pour une entreprise connectée.</p>
        </div>

        <div class="exp-card">
            <svg class="exp-icon" viewBox="0 0 76 76" fill="none">
                <path d="M16 40 V36 C16 22 26 12 38 12 C50 12 60 22 60 36 V40" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                <rect x="12" y="40" width="10" height="18" rx="4" stroke="#0078D4" stroke-width="2.5"/>
                <rect x="54" y="40" width="10" height="18" rx="4" stroke="#0078D4" stroke-width="2.5"/>
                <path d="M22 58 V62 C22 65 25 67 28 67 H34" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                <circle cx="36" cy="67" r="3" stroke="#0078D4" stroke-width="2.5"/>
                <circle cx="60" cy="22" r="3" fill="#0078D4"/>
            </svg>
            <h3>Infogérance &amp; Dépannage</h3>
            <p class="exp-row"><strong>Contrat d'infogérance</strong>Maintenance préventive, suivi régulier et assistance utilisateur prioritaire.</p>
            <p class="exp-row"><strong>Dépannage ponctuel</strong>Intervention rapide sans engagement, diagnostic et remise en service.</p>
            <p class="exp-tagline c-orange">Une assistance réactive pour votre continuité.</p>
        </div>

    </div>
</div>
