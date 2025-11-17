<?php

require_once __DIR__ . '/../src/load.php';

$now = dateToYearFloat('now');

/** @var list<KnowledgeCollection> $knowledgeCollections */
$knowledgeCollections = require __DIR__ . '/../config/knowledge.php';

ob_start();
?>
<!-- Generated on <?= date('Y-m-d') ?> -->
<!doctype html>
<html lang="en">
    <head>
        <title>Robert Wesner - Knowledge Base</title>
        <link rel="stylesheet" href="index.css?v5">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <main>
            <h1>Robert Wesner - Knowledge</h1>
            <section id="general">
                <p>
                    This is a collection of my experience with software development and more.
                </p>
                <p>
                    I have been a software developer since late 2019 and spend much of my time outside work honing these skills.
                </p>
                <div>
                    My preferred technology stack consists of:
                    <ul>
                        <li>
                            <?= InlineLogo::img('programming_language/php') ?> PHP8
                            (<?= InlineLogo::img('lib/symfony') ?>  Symfony,
                            <a href="https://github.com/RobertWesner/simple-mvc-php">my own framework</a>),
                        </li>
                        <li>
                            <?= InlineLogo::img('programming_language/go') ?> Go
                            (<?= InlineLogo::img('lib/gin') ?> Gin),
                        </li>
                        <li>
                            <?= InlineLogo::img('programming_language/kotlin') ?>Kotlin,
                        </li>
                        <li>
                            <?= InlineLogo::img('programming_language/javascript') ?> JavaScript
                            (<?= InlineLogo::img('lib/react') ?> React).
                        </li>
                    </ul>
                </div>
            </section>
            <section id="fancy">
                <?php foreach ($knowledgeCollections as $collection): ?>
                    <div class="timeline-container">
                        <h2><?= $collection->getName() ?></h2>
                        <?php /* Not my actual birthdate in case anyone asks */ ?>
                        <div class="timeline" style="--min: 2013; --max: <?= $now ?>">
                            <?php foreach ($collection->getAll() as $knowledge): ?>
                                <div class="timespan-container <?= $knowledge->getCssClass() ?>">
                                    <?php foreach ($knowledge->getRanges() as $range): ?>
                                        <span class="timespan level-<?= $knowledge->getLevel() ?> <?= isset($range[1]) ? '' : 'current' ?>" style="--from: <?= $range[0] ?>; --to: <?= $range[1] ?? $now ?>;">
                                        <img
                                            src="./img/<?= $collection->getKey() ?>/<?= strtolower(preg_replace('/\W/', '', str_replace(['#', '+'], ['sharp', 'plus'], $knowledge->getName()))) ?>.png"
                                            title="<?= $knowledge->getName() ?>"
                                            alt="<?= $knowledge->getName() ?>"
                                        >
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </section>
            <section id="raw">
                <?php foreach ($knowledgeCollections as $collection): ?>
                    <div class="timeline-container">
                        <h2><?= $collection->getName() ?></h2>
                        <table class="timeline-table">
                            <thead>
                                <tr>
                                    <th>Logo</th>
                                    <th>Language</th>
                                    <th>Proficiency</th>
                                    <th>Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($collection->getAll() as $knowledge): ?>
                                    <tr class="<?= $knowledge->getCssClass() ?>">
                                        <th>
                                            <img
                                                src="./img/<?= $collection->getKey() ?>/<?= $knowledge->getSanitizedName() ?>.png"
                                                title="<?= $knowledge->getName() ?>"
                                                alt=""
                                                width="80"
                                            >
                                        </th>
                                        <td>
                                            <?= $knowledge->getName() ?>
                                        </td>
                                        <td>
                                            <span class="level-<?= $knowledge->getLevel() ?>">
                                                <?= ucfirst($knowledge->getLevel()) ?>
                                            </span>
                                        </td>
                                        <td class="timeframes">
                                            <ul>
                                                <?php foreach ($knowledge->getRanges() as $range): ?>
                                                    <li>
                                                        <b><?= yearFloatToDate($range[0]) ?></b> to <b><?= yearFloatToDate($range[1]) ?? '<span class="now">now</span>' ?></b>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <div>
                                                <?php $years = round($knowledge->getYears()); ?>
                                                Worked
                                                <b class="years" data-years="<?= min($years, 5) ?>">
                                                    <?php if ($years != 0): ?>
                                                        <?= $years ?> year<?= $years > 1 ? 's' : '' ?>
                                                    <?php endif; ?>
                                                </b>
                                                with <?= $knowledge->getName() ?>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php endforeach; ?>
            </section>
        </main>
        <aside id="options">
            <label class="option">
                Only show relevant
                <input id="relevant-option" type="checkbox" checked>
            </label>
            <label class="option">
                Show timeline data
                <input id="timeline-option" type="checkbox">
            </label>
        </aside>
        <footer>
            <div id="imprint">
                <div>
                    <a href="https://datenschutz.robertwesner.de/datenschutzerklaerung" target="_blank">
                        Datenschutzerklärung
                    </a>
                    &dash;
                    <a href="https://datenschutz.robertwesner.de/dataprotection" target="_blank">
                        Data protection
                    </a>
                </div>
                <div>
                    <a href="https://datenschutz.robertwesner.de/impressum" target="_blank">
                        Impressum
                    </a>
                    &dash;
                    <a href="https://datenschutz.robertwesner.de/impressum" target="_blank">
                        Imprint
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>
<?php

echo preg_replace('/\s+/', ' ', ob_get_clean());
