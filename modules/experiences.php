<section class="section">
    <h3 class="section__title">Experiences</h3>
        <div class="section__content">
        <?php foreach([
            [
                'title' => "Développeur Web Full Stack",
                'date_start' => "2016",
                'date_end' => "Aujourd'hui",
                'enterprise' => "Primeum",
                'content' => [
                    "Développement d'applications web avec l'ensemble des équipes.",
                    "Spécialisation EcmaScript, React & CSS.",
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
                    "Spécialisation CSS3 & HTML5.",
                    "Simplification de l'interface."
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