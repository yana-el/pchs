<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap');

.asst-page {
    --navy: #0F2B5B;
    --blue: #0078D4;
    --blue-light: #EAF4FC;
    --blue-pale: #cfe6fa;
    --muted: #64748b;
    font-family: 'Inter', sans-serif;
    background: #ffffff;
    color: var(--navy);
}

/* HERO */
.asst-hero {
    padding: 130px 12% 90px;
    text-align: center;
}
.asst-hero span {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.3em;
    color: var(--blue);
}
.asst-hero h1 {
    font-size: 50px;
    font-weight: 900;
    line-height: 1.15;
    margin: 18px auto 22px;
    max-width: 680px;
    color: var(--navy);
}
.asst-hero h1 em {
    font-style: normal;
    color: var(--blue);
}
.asst-hero p {
    font-size: 17px;
    color: var(--muted);
    line-height: 1.8;
    max-width: 500px;
    margin: 0 auto;
}

/* STEPS */
.asst-steps {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    max-width: 1180px;
    margin: 0 auto;
    padding: 80px 12% 100px;
    gap: 48px;
}
.asst-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
.asst-icon-wrap {
    width: 88px;
    height: 88px;
    border-radius: 50%;
    background: var(--blue-light);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 22px;
}
.asst-icon {
    width: 40px;
    height: 40px;
}
.asst-step-num {
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 0.15em;
    color: var(--blue);
    margin-bottom: 10px;
}
.asst-step h3 {
    font-size: 19px;
    font-weight: 800;
    margin: 0 0 12px;
    color: var(--navy);
}
.asst-step p {
    font-size: 14px;
    color: var(--muted);
    line-height: 1.8;
    margin: 0 0 22px;
}
.asst-btn {
    display: inline-block;
    background: var(--blue);
    color: white;
    text-decoration: none;
    font-size: 14px;
    font-weight: 700;
    padding: 13px 26px;
    border-radius: 8px;
}
.asst-link-note {
    font-size: 12.5px;
    color: var(--muted);
    margin-top: 10px;
    word-break: break-all;
}
.asst-link-note a {
    color: var(--blue);
    text-decoration: none;
}

/* CTA */
.asst-cta {
    max-width: 600px;
    margin: 0 auto 100px;
    padding: 0 6%;
    text-align: center;
    border-top: 1px solid var(--blue-pale);
    padding-top: 60px;
}
.asst-cta h2 {
    font-size: 30px;
    font-weight: 800;
    margin: 0 0 12px;
    color: var(--navy);
}
.asst-cta p {
    color: var(--muted);
    font-size: 16px;
    margin: 0 0 32px;
}

@media (max-width: 768px) {
    .asst-hero { padding: 90px 6% 60px; }
    .asst-hero h1 { font-size: 32px; }
    .asst-steps { grid-template-columns: 1fr; padding: 50px 6% 70px; gap: 56px; }
    .asst-cta { padding: 50px 6% 0; margin-bottom: 70px; }
}
</style>

<div class="asst-page">

    <div class="asst-hero">
        <h1>Besoin d'aide ? On est à <em>un clic</em> de vous.</h1>
        <p>Notre équipe peut prendre la main sur votre poste à distance pour résoudre votre problème en quelques minutes.</p>
    </div>

    <div class="asst-steps">

        <div class="asst-step">
            <div class="asst-icon-wrap">
                <svg class="asst-icon" viewBox="0 0 56 56" fill="none">
                    <path d="M28 8 V36" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M16 26 L28 38 L40 26" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10 44 H46" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="asst-step-num">ÉTAPE 01</div>
            <h3>Installez RustDesk</h3>
            <p>Téléchargez et installez le logiciel d'assistance à distance en cliquant sur le bouton ci-dessous.</p>
            <a class="asst-btn" href="https://github.com/rustdesk/rustdesk/releases/tag/1.4.8" target="_blank" rel="noopener">Télécharger RustDesk</a>
        </div>

        <div class="asst-step">
            <div class="asst-icon-wrap">
                <svg class="asst-icon" viewBox="0 0 56 56" fill="none">
                    <rect x="10" y="14" width="36" height="28" rx="4" stroke="#0078D4" stroke-width="2.5"/>
                    <circle cx="22" cy="26" r="4" stroke="#0078D4" stroke-width="2.5"/>
                    <path d="M16 36 C16 31 19 29 22 29 C25 29 28 31 28 36" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M33 22 H40" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M33 30 H40" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="asst-step-num">ÉTAPE 02</div>
            <h3>Communiquez-nous votre ID</h3>
            <p>Une fois ouvert, RustDesk affiche un identifiant et un mot de passe à l'écran. Gardez la fenêtre ouverte.</p>
        </div>

        <div class="asst-step">
            <div class="asst-icon-wrap">
                <svg class="asst-icon" viewBox="0 0 56 56" fill="none">
                    <path d="M14 30 V28 C14 18 20 11 28 11 C36 11 42 18 42 28 V30" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                    <rect x="10" y="30" width="8" height="14" rx="3" stroke="#0078D4" stroke-width="2.5"/>
                    <rect x="38" y="30" width="8" height="14" rx="3" stroke="#0078D4" stroke-width="2.5"/>
                    <path d="M18 44 V47 C18 49.5 20 51 22.5 51 H27" stroke="#0078D4" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="29" cy="51" r="2.5" stroke="#0078D4" stroke-width="2.5"/>
                </svg>
            </div>
            <div class="asst-step-num">ÉTAPE 03</div>
            <h3>Contactez-nous</h3>
            <p>Appelez-nous ou envoyez-nous un message avec votre ID : nous prenons le relais à distance.</p>
        </div>

    </div>

    <div class="asst-cta">
        <h2>Un problème ?</h2>
        <p>Contactez-nous, on s'occupe du reste.</p>
        <a class="asst-btn" href="/contact">Nous contacter</a>
    </div>

</div>