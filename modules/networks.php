<section class="section">
    <h3 class="section__title">Réseaux</h3>
    <ul class="section__content list"><?php foreach([
            [
                'value' => 'Twitter',
                'link' => '//twitter.com/roman_czerkies',
                'title' => 'Roman Czerkies (@roman_czerkies) / Twitter'
            ],
            [
                'value' => 'LinkedIn',
                'link' => '//linkedin.com/in/romanczerkies',
                'title' => 'Roman Czerkies | LinkedIn'
            ],
            [
                'value' => 'GitHub',
                'link' => '//github.com/czerkies',
                'title' => 'czerkies (Roman Czerkies) · GitHub'
            ],
            [
                'value' => 'Strava',
                'link' => '//strava.com/athletes/roman_czerkies',
                'title' => 'Profil de cycliste Strava | Roman Czerkies'
            ]
        ] as $link) { ?><li class="list__item">
            <a 
                href="<?= $link['link'] ?>" 
                title="<?= $link['title'] ?>"
                class="list__content"
            ><?= $link['value'] ?></a>
        </li><?php } ?>
    </ul>
</section>