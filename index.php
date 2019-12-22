<?php include ('header.php'); ?>
    <section class="section">
        <h3 class="section__title">À Propos</h3>
        <p class="section__content">Développeur web spécialisé dans le design, prototype et dévelopemment d'interface utilisateur.<br>Largement inspiré du minimalisme et brutalisme, l'ensemble des créations tendent à un design simple et inclusif.</p>
    </section>
    <section class="section">
        <h3 class="section__title">Réseaux</h3>
        <ul class="section__content list"><?php foreach([
                [
                    'value' => 'Twitter',
                    'link' => 'https://twitter.com/roman_czerkies',
                    'title' => 'twitter'
                ],
                [
                    'value' => 'LinkedIn',
                    'link' => 'https://linkedin.com/in/romanczerkies',
                    'title' => 'linkedIn'
                ],
                [
                    'value' => 'GitHub',
                    'link' => 'https://github.com/czerkies',
                    'title' => 'github'
                ],
                [
                    'value' => 'Strava',
                    'link' => 'https://strava.com/athletes/roman_czerkies',
                    'title' => 'strava'
                ]
            ] as $link) { ?><li class="list__item">
                <a 
                    href="<?= $link['link'] ?>" 
                    title="<?= $link['value'] ?>"
                    class="list__content"
                ><?= $link['value'] ?></a>
            </li><?php } ?>
        </ul>
    </section>
    <section class="section">
        <h3 class="section__title">Experiences</h3>
            <div class="section__content section__content--cadre">
            <?php foreach([
                [
                    'title' => "Développeur Web Full Stack",
                    'date_start' => "2016",
                    'date_end' => "Aujourd'hui",
                    'enterprise' => "Primeum",
                    'content' => [
                        "Développement d'applications web avec l'ensemble des équipes.",
                        "Spécialisation EcmaScript & CSS.",
                        "Re-design d'interface.",
                        "Création des maquettes d'interfaces utilisateurs.",
                    ]
                ],
                [
                    'title' => "Développeur Back End",
                    'date_start' => "2015",
                    'date_end' => "2016",
                    'enterprise' => "Baltazare",
                    'content' => [
                        "Nouvelle organisation, travail en équipe et partage de connaissance.",
                        "Spécialisation PHP, SQL et Wordpress.",
                        "Création des modules d'administrations.",
                    ]
                ],
                [
                    'title' => "Web Designer & Intégrateur Web",
                    'date_start' => "2013",
                    'date_end' => "2016",
                    'enterprise' => "Roman Czerkies",
                    'content' => [
                        "Intégration web, création de design et d'animation.",
                        "Utilisation de Wordpress.",
                        "Travail en collaboration avec une équipe SEO.",
                    ]
                ],
                [
                    'title' => "Développeur Web",
                    'date_start' => "2006",
                    'date_end' => "2013",
                    'enterprise' => "Productions ROLIEN",
                    'content' => [
                        "Création et développement de <a href='http://rolien.fr'>rolien.fr</a>.",
                        "Interface tendant au minimalisme.",
                    ]
                ]
            ] as $exp) { ?>
                <div class="experience">
                    <h4 class="experience__title"><?= $exp['title'] ?></h4>
                    <h5 class="experience__subtitle"><?= $exp['date_start'] ?>&#8213;<?= $exp['date_end'] ?> &#183; <?= $exp['enterprise'] ?></h5>
                    <ul class="experience__content"><?php if (isset($exp['content']) && is_array($exp['content']))
                        foreach ($exp['content'] as $item) { ?><li class="experience__item"><?= $item ?></li><?php }
                    ?></ul>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="section">
        <h3 class="section__title">Contact</h3>
        <ul class="section__content list">
            <li class="list__item">
                <a 
                    href="romanczerkies.vcf"
                    title="Télécharger la Carte de Visite" 
                    class="list__content"
                >Carte de Visite</a>
            </li>
        </ul>
    </section>
<?php include('footer.php') ?>