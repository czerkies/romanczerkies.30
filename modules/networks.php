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
                'title' => 'LinkedIn'
            ],
            [
                'value' => 'GitHub',
                'link' => 'https://github.com/czerkies',
                'title' => 'GitHub'
            ],
            [
                'value' => 'Strava',
                'link' => 'https://strava.com/athletes/roman_czerkies',
                'title' => 'Strava'
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