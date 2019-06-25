<?php

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    'dashboard' => 'Řídicí panel',

    // Incidents
    'incidents' => [
        'title'                    => 'Incidenty &amp; Odstávky',
        'incidents'                => 'Incidenty',
        'logged'                   => '{0} Nejsou hlášeny žádné incidenty, dobrá práce. | Zapsali jste jeden incident. | Nahlásili jste <strong>:count</strong> incidenty(ů).',
        'incident-create-template' => 'Vytvořit šablonu',
        'incident-templates'       => 'Šablony incidentů',
        'add'                      => [
            'title'   => 'Nahlásit incident',
            'success' => 'Incident byl přidán.',
            'failure' => 'Došlo k chybě při přidávání události, opakujte akci.',
        ],
        'edit' => [
            'title'   => 'Upravit incident',
            'success' => 'Incident aktualizován.',
            'failure' => 'Došlo k chybě při editaci události, opakujte akci.',
        ],
        'delete' => [
            'success' => 'Událost byla odstraněna a už se nebude zobrazovat na stavové stránce.',
            'failure' => 'Událost se nepodařilo smazat, opakujte akci.',
        ],

        // Incident templates
        'templates' => [
            'title' => 'Šablony incidentů',
            'add'   => [
                'title'   => 'Vytvořit šablonu incidentu',
                'message' => 'Měli byste přidat šablonu události.',
                'success' => 'Byla vytvořena nová šablona události.',
                'failure' => 'Se šablonou události se něco pokazilo.',
            ],
            'edit' => [
                'title'   => 'Upravit šablonu',
                'success' => 'Šablona události byla aktualizována.',
                'failure' => 'Při aktualizaci šablony incidentu se něco pokazilo',
            ],
            'delete' => [
                'success' => 'Šablona události byla smazána.',
                'failure' => 'Šablonu události se nepodařilo smazat, opakujte akci.',
            ],
        ],
    ],

    // Incident Maintenance
    'schedule' => [
        'schedule'     => 'Plánovaná údržba',
        'logged'       => '{0} Žádná údržba není v plánu, skvělá práce.|Je v plánu jedna údržba.|Je v plánu <strong>:count</strong> údržb.',
        'scheduled_at' => 'Naplánováno na :timestamp',
        'add'          => [
            'title'   => 'Přidat plánovanou údržbu',
            'success' => 'Údržba byla přidána.',
            'failure' => 'Něco se pokazilo při přidávání údržby, zkus to znova.',
        ],
        'edit' => [
            'title'   => 'Upravit naplánovanou údržbu',
            'success' => 'Údržba byla aktualizovaná!',
            'failure' => 'Něco se pokazilo při úpravě údržby, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Plánovaná údržba byla smazána a nebude se zobrazovat na hlavní stránce.',
            'failure' => 'Plánovaná údržba nemohla být smazána, zkus to znova.',
        ],
    ],

    // Components
    'components' => [
        'components'         => 'Služby',
        'component_statuses' => 'Stavy služeb',
        'listed_group'       => 'Seskupeno podle :name',
        'add'                => [
            'title'   => 'Přidat službu',
            'message' => 'Měli byste přidat službu.',
            'success' => 'Služba vytvořena.',
            'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
        ],
        'edit' => [
            'title'   => 'Upravit službu',
            'success' => 'Služba byla aktualizována.',
            'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Služba byla smazána!',
            'failure' => 'Služba nemůže být odstraněna, opakujte akci.',
        ],

        // Component groups
        'groups' => [
            'groups'        => 'Skupina služeb|Skupiny služeb',
            'no_components' => 'Můžete přidat skupinu služeb.',
            'add'           => [
                'title'   => 'Přidat skupinu služeb',
                'success' => 'Skupina služeb byla přidána.',
                'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
            ],
            'edit' => [
                'title'   => 'Upravit skupinu komponent',
                'success' => 'Skupina služeb byla aktualizována.',
                'failure' => 'Něco se pokazilo se skupinou služby, zkus to znova.',
            ],
            'delete' => [
                'success' => 'Skupina služeb byla smazána!',
                'failure' => 'Skupina komponent nemohla být smazána, zkus to znova.',
            ],
        ],
    ],

    // Metrics
    'metrics' => [
        'metrics' => 'Metriky',
        'add'     => [
            'title'   => 'Vytvořit metriku',
            'message' => 'Měli byste přidat metriku.',
            'success' => 'Metrika vytvořena.',
            'failure' => 'Něco se pokazilo s metrikou, zkus to znova.',
        ],
        'edit' => [
            'title'   => 'Upravit metriku',
            'success' => 'Metrika aktualizována.',
            'failure' => 'Něco se pokazilo s metrikou, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Měření bylo smazáno a už se nebude zobrazovat na stavové stránce.',
            'failure' => 'Měření nemohlo být odstraněno, opakujte akci.',
        ],
    ],
    // Subscribers
    'subscribers' => [
        'subscribers'      => 'Odběratelé',
        'description'      => 'Pokud dojde ke vzniku incidentu nebo služby, odběratelé obdrží aktualizace e-mailem.',
        'verified'         => 'Ověřeno',
        'not_verified'     => 'Neověřeno',
        'subscriber'       => ': e-mail, přihlášen: datum',
        'no_subscriptions' => 'Přihlášeno k zasílání všech aktualizací',
        'add'              => [
            'title'   => 'Přidat nového odběratele',
            'success' => 'Odběratel přidán.',
            'failure' => 'Něco se pokazilo při přidávání odběratele, opakujte akci.',
            'help'    => 'Zadejte každého odběratele na nový řádek.',
        ],
        'edit' => [
            'title'   => 'Aktualizovat odeběratele',
            'success' => 'Odběratel aktualizován.',
            'failure' => 'Něco se pokazilo při úpravě odběratele, zkus to znova.',
        ],
    ],

    // Team
    'team' => [
        'team'        => 'Tým',
        'member'      => 'Člen',
        'profile'     => 'Profil',
        'description' => 'Členové týmu budou moci přidat &amp; upravit komponenty a incidenty.',
        'add'         => [
            'title'   => 'Přidat nového člena týmu',
            'success' => 'Nový člen týmu byl přidán.',
            'failure' => 'Člena týmu se nezdařilo přidat, opakujte akci.',
        ],
        'edit' => [
            'title'   => 'Aktualizovat profil',
            'success' => 'Profil byl aktualizován.',
            'failure' => 'Něco se pokazilo při aktualizaci profilu, zkus to znova.',
        ],
        'delete' => [
            'success' => 'Člen týmu byl smazán a již nebude mít přístup do řídícího panelu!',
            'failure' => 'Člena týmu se nezdařilo přidat, opakujte akci.',
        ],
        'invite' => [
            'title'   => 'Pozvat nového člena týmu',
            'success' => 'Pozvánka byla odeslána',
            'failure' => 'Pozvánka nemohla být odeslána, zkus to znova.',
        ],
    ],

    // Settings
    'settings' => [
        'settings'  => 'Nastavení',
        'app-setup' => [
            'app-setup'   => 'Nastavení aplikace',
            'images-only' => 'Nahrány mohou být pouze obrázky.',
            'too-big'     => 'Soubor, který nahráváte, je příliš velký. Nahrajte obrázek menší než :velikost',
        ],
        'analytics' => [
            'analytics' => 'Monitoring přístupů',
        ],
        'localization' => [
            'localization' => 'Lokální nastavení',
        ],
        'customization' => [
            'customization' => 'Vlastní nastavení',
            'header'        => 'Vlastní hlavička HTML',
            'footer'        => 'Vlastní zápatí HTML',
        ],
        'security' => [
            'security'   => 'Zabezpečení',
            'two-factor' => 'Uživatelé bez dvoufaktorového ověřování',
        ],
        'stylesheet' => [
            'stylesheet' => 'Šablona stylů',
        ],
        'theme' => [
            'theme' => 'Nastavení vzhledu',
        ],
        'edit' => [
            'success' => 'Nastavení uložena.',
            'failure' => 'Nastavení nelze uložit.',
        ],
        'credits' => [
            'credits'       => 'Autoři',
            'contributors'  => 'Přispěvatelé',
            'license'       => 'Cachet je open-sourcový projekt pod BSD-3-licencí, vydávaný <a href="https://alt-three.com/?utm_source=cachet&utm_medium=credits&utm_campaign=Cachet%20Credit%20Dashboard" target="_blank">Alt Three Services Limited</a>.',
            'backers-title' => 'Podporovatelé a sponzoři',
            'backers'       => 'Chcete-li podpořit budoucí rozvoj, podívejte se na CrowdIn a GitHub.',
            'thank-you'     => 'Děkujeme každému z :count přispěvatelů.',
        ],
    ],

    // Login
    'login' => [
        'login'      => 'Přihlášení',
        'logged_in'  => 'Jste přihlášeni.',
        'welcome'    => 'Vítejte zpět!',
        'two-factor' => 'Zadejte prosím váš token.',
    ],

    // Sidebar footer
    'help'        => 'Nápověda',
    'status_page' => 'Stavová stránka',
    'logout'      => 'Odhlásit',

    // Notifications
    'notifications' => [
        'notifications' => 'Oznámení',
        'awesome'       => 'Vynikající.',
        'whoops'        => 'Jejda.',
    ],

    // Widgets
    'widgets' => [
        'news'             => 'Poslední novinky',
        'news_subtitle'    => 'Získat nejnovější aktualizace',
    ],

    // Welcome modal
    'welcome' => [
        'welcome' => 'Vítejte na vaší nové stavové stránce!',
        'message' => 'Vaše stavová stránka je téměř připravená! Možná si budete chtít nakonfigurovat tato extra nastavení',
        'close'   => 'Přejít rovnou do řídícího panelu',
        'steps'   => [
            'component'  => 'Vytvořit komponenty',
            'incident'   => 'Vytvořit incident',
            'customize'  => 'Přizpůsobit',
            'team'       => 'Přidat uživatele',
            'api'        => 'Připravit API token',
            'two-factor' => 'Dvoufaktorové ověření',
        ],
    ],

];
