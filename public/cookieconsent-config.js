import 'https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.0.1/dist/cookieconsent.umd.js';

CookieConsent.run({
    categories: {
        necessary: {
            enabled: true,
            readOnly: true  // diese Kategorie kann nicht deaktiviert werden
        },
        analytics: {}
    },
    language: {
        default: 'de',
        translations: {
            de: {
                consentModal: {
                    title: 'Wir verwenden Cookies',
                    description: 'Diese Website verwendet Cookies, um sicherzustellen, dass Sie die beste Erfahrung auf unserer Website erhalten.',
                    acceptAllBtn: 'Alle akzeptieren',
                    acceptNecessaryBtn: 'Nur notwendige akzeptieren',
                    showPreferencesBtn: 'Einstellungen verwalten'
                },
                preferencesModal: {
                    title: 'Cookie-Einstellungen verwalten',
                    acceptAllBtn: 'Alle akzeptieren',
                    acceptNecessaryBtn: 'Nur notwendige akzeptieren',
                    savePreferencesBtn: 'Auswahl speichern',
                    closeIconLabel: 'Schließen',
                    sections: [
                        {
                            title: 'Notwendige Cookies',
                            description: 'Diese Cookies sind für das Funktionieren der Website unerlässlich und können nicht deaktiviert werden.',
                            linkedCategory: 'necessary'
                        },
                        {
                            title: 'Performance und Analytik',
                            description: 'Diese Cookies sammeln Informationen darüber, wie Sie unsere Website nutzen. Alle Daten sind anonymisiert und können nicht verwendet werden, um Sie zu identifizieren.',
                            linkedCategory: 'analytics'
                        },
                        {
                            title: 'Weitere Informationen',
                            description: 'Für weitere Informationen zu unserer Cookie-Richtlinie und Ihren Wahlmöglichkeiten kontaktieren Sie uns bitte.'
                        }
                    ]
                }
            }
        }
    }
});
