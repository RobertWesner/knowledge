<?php

require __DIR__ . '/src/load.php';

function dateToYearFloat(string $date): float
{
    $timestamp = strtotime($date);

    return (float)date('Y', $timestamp) + (
        (float)date('n', $timestamp) - 1
        + (float)date('d', $timestamp) / 31
    ) / 12;
}

function yearFloatToDate(?float $year): ?string
{
    if ($year === null) {
        return null;
    }

    return DateTime::createFromFormat('!m', (int)((($year - floor($year)) * 12 + 1)))->format('F') . ' ' . floor($year);
}

$now = (float)date('Y') + ((float)date('n') - 1) / 12;
$knowledgeCollections = [];

/*
 * THE "ROADMAP" (aka. things that might be fun to learn and possibly useful)
 *
 *  Functional programming without a clear project goal:
 *      - Erlang
 *      - Elixir
 *      - Haskell
 *      - PureScript ;)
 *
 *  Compiled general purpose:
 *      - Zig (the "better" C)?
 *
 *  Cross platform GUI:
 *      - Dart with Flutter
 *      - C# with Eto
 *      - Kotlin with Compose
 *      - Go with Wails
 *      - Electron and/or Tauri
 *
 *  WebAssembly:
 *      - Rust (again)
 *      - Kotlin (again)
 *
 *  OSDev:
 *      - Rust (https://os.phil-opp.com/)
 *
 *  Personal hell:
 *      - COBOL
*/
$knowledgeCollections[] = (new KnowledgeCollection('programming_language', 'Programming Languages'))
    ->push('Visual Basic .NET', Knowledge::LEVEL_BASIC, [
        [2014, 2015.5],
    ], 'irrelevant')
    ->push('Java', Knowledge::LEVEL_BEGINNER, [
        [2018.2, 2018.8],
        [2019.6, 2019.7],
        [dateToYearFloat('2024-12-13')],
    ])
    ->push('C++', Knowledge::LEVEL_BASIC, [
        [2019, 2019.25],
        [2020, 2020.25],
        [dateToYearFloat('2024-10-30'), dateToYearFloat('2024-11-17')],
    ])
    ->push('Lua', Knowledge::LEVEL_BEGINNER, [
        [2019, 2020.75],
    ])
    ->push('Javascript', Knowledge::LEVEL_PROFICIENT, [
        [2019]
    ])
    ->push('PHP', Knowledge::LEVEL_EXPERT, [
        [2019.5],
    ])
    ->push('MySQL / MariaDB', Knowledge::LEVEL_PROFICIENT, [
        [2019.5, 2023.3],
        [2023.9, 2024.2],
        [2024.8],
    ])
    ->push('Typescript', Knowledge::LEVEL_PROFICIENT, [
        [2020, 2023.3],
        [dateToYearFloat('2025-07-12')],
    ])
    ->push('NASM - x86 Assembly', Knowledge::LEVEL_BASIC, [
        [2020.2, 2020.3],
        [2023.1, 2023.2],
        [dateToYearFloat('2024-10-30'), dateToYearFloat('2024-12-07')],
    ]) // on and off, not sure of the range... it's guesstimated
    ->push('Python', Knowledge::LEVEL_BEGINNER, [
        [2020.4, 2021.5],
        [2024, dateToYearFloat('2024-03-26')],
    ])
    ->push('Rust', Knowledge::LEVEL_BASIC, [
        [dateToYearFloat('2024-10-17'), dateToYearFloat('2024-10-19')],
        [dateToYearFloat('2025-08-18')],
    ])
    ->push('Ruby', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2024-12-20'), dateToYearFloat('2025-03-02')],
    ])
    ->push('Kotlin', Knowledge::LEVEL_BASIC, [
        [dateToYearFloat('2024-12-30'), dateToYearFloat('2024-12-30')],
    ])
    ->push('Go', Knowledge::LEVEL_PROFICIENT, [
        // started writing go at work on: 2025-07-25
        [dateToYearFloat('2025-03-07')],
    ])
    ->push('C#', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2025-08-14')],
    ]);

/*
 * Svelte sounds like fun.
 */
$knowledgeCollections[] = (new KnowledgeCollection('lib', 'Frameworks, libraries, and everything in between'))
    ->push('Löve 2D', Knowledge::LEVEL_BEGINNER, [
        [2019, 2020],
    ])
    ->push('Symfony1', Knowledge::LEVEL_PROFICIENT, [
        [2019.75, 2023.3],
    ])
    ->push('jQuery', Knowledge::LEVEL_BEGINNER, [
        [2019.75, 2023.3],
    ])
    ->push('Bootstrap', Knowledge::LEVEL_PROFICIENT, [
        [2019.75],
    ])
    ->push('Symfony', Knowledge::LEVEL_PROFICIENT, [
        [2020.2, 2023.3],
        [2024.8],
    ])
    ->push('React', Knowledge::LEVEL_BEGINNER, [
        [2021.2, 2021.85],
        [dateToYearFloat('2025-04-05')],
    ])
    ->push('MongoDB', Knowledge::LEVEL_BEGINNER, [
        [2022.2, 2022.4],
    ])
    ->push('Hybrids', Knowledge::LEVEL_PROFICIENT, [
        [2022.85, 2023.15],
        [dateToYearFloat('2024-10-27')],
    ])
    ->push('Laravel', Knowledge::LEVEL_BEGINNER, [
        [2024.55, 2024.75],
    ])
    ->push('NativePHP', Knowledge::LEVEL_PROFICIENT, [
        [2024.55, 2025],
    ])
    ->push('Spring', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2024-12-13')],
    ])
    ->push('Gin', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2025-03-28')],
    ])
    ->push('React Native', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2025-07-12')],
    ]);

$knowledgeCollections[] = (new KnowledgeCollection('ide', 'IDEs'))
    ->push('Visual Studio 2010 Express', Knowledge::LEVEL_BASIC, [
        [2014, 2015.5],
    ], 'irrelevant')
    ->push('Eclipse', Knowledge::LEVEL_BEGINNER, [
        [2018.2, 2018.8],
        [2019.6, 2019.7],
    ])
    ->push('Code::Blocks', Knowledge::LEVEL_BEGINNER, [
        [2019, 2019.5],
        [2020, 2021.5],
    ])
    ->push('Visual Studio Code', Knowledge::LEVEL_BEGINNER, [
        [2019.5],
    ])
    ->push('Jetbrains', Knowledge::LEVEL_EXPERT, [
        [2019.5],
    ]);

$knowledgeCollections[] = (new KnowledgeCollection('tool', 'Tools and other Software'))
    ->push('Gimp', Knowledge::LEVEL_PROFICIENT, [
        [2017],
    ])
    ->push('VirtualBox', Knowledge::LEVEL_PROFICIENT, [
        [2019.45, 2022],
    ])
    ->push('Docker', Knowledge::LEVEL_PROFICIENT, [
        [2022.1],
    ])
    ->push('KVM', Knowledge::LEVEL_PROFICIENT, [
        [2022.85],
    ])
    ->push('FreeCAD', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2023-07-06'), 2024.5],
        [dateToYearFloat('2025-06-10')],
    ])
    ->push('Gradle', Knowledge::LEVEL_BASIC, [
        [dateToYearFloat('2024-12-30')]
    ]);

$knowledgeCollections[] = (new KnowledgeCollection('os', 'Operating Systems'))
    ->push('Windows', Knowledge::LEVEL_BEGINNER, [
        [2013, 2019.8],
    ])
    ->push('Windows 10 VFIO Gaming', Knowledge::LEVEL_BEGINNER, [
        [2022.85, dateToYearFloat('2024-10-15')],
    ])
    ->push('Windows 11 VFIO Gaming', Knowledge::LEVEL_BEGINNER, [
        [dateToYearFloat('2024-10-15')],
    ])
    ->push('Linux Mint Cinnamon', Knowledge::LEVEL_PROFICIENT, [
        [2019.5],
    ])
    ->push('Ubuntu Server', Knowledge::LEVEL_PROFICIENT, [
        [2019.6],
    ])
    ->push('Xubuntu', Knowledge::LEVEL_PROFICIENT, [
        [2019.8, 2020.5],
    ])
    ->push('Arch Linux', Knowledge::LEVEL_PROFICIENT, [
        [2020.5, 2022.5],
    ])
    ->push('Artix', Knowledge::LEVEL_BEGINNER, [
        [2022.5, 2023.5],
    ])
    ->push('Gentoo', Knowledge::LEVEL_BEGINNER, [
        [2022.75, 2023.65],
    ])
    ->push('EndeavourOS', Knowledge::LEVEL_PROFICIENT, [
        [2023.65],
    ])
    ->push('Kubuntu', Knowledge::LEVEL_PROFICIENT, [
        [dateToYearFloat('2024-12-02')],
    ]);

ob_start();
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Robert Wesner - Knowledge Base</title>
        <link rel="stylesheet" href="./index.css?v2">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    <body>
        <main>
            <h1>Robert Wesner - Knowledge</h1>
            <p>
                This is a collection of my experience with software development and more.
            </p>
            <p>
                I have been a software developer since late 2019 and spend much of my time outside work honing these skills.
            </p>
            <section id="fancy">
                <?php foreach ($knowledgeCollections as $collection): ?>
                    <div class="timeline-container">
                        <h2><?= $collection->getName() ?></h2>
                        <?php /* Not my actual birthdate in case anyone asks */ ?>
                        <div class="timeline" style="--min: 2013; --max: <?= $now ?>">
                            <?php foreach ($collection->getAll() as $knowledge): ?>
                                <div class="timespan-container <?= $knowledge->getCssClass() ?>">
                                    <?php foreach ($knowledge->getRanges() as $range): ?>
                                        <span class="timespan level-<?= $knowledge->getLevel() ?> <?= isset($range[1]) ? '' : 'current' ?>" style="--from: <?= $range[0] ?>; --to: <?= $range[1] ?? $now + 0.2 ?>;">
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
                                                src="./img/<?= $collection->getKey() ?>/<?= strtolower(preg_replace('/\W/', '', str_replace(['#', '+'], ['sharp', 'plus'], $knowledge->getName()))) ?>.png"
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
                                            <?php $sum = 0 ?>
                                            <ul>
                                                <?php foreach ($knowledge->getRanges() as $range): ?>
                                                    <?php $sum += ($range[1] ?? dateToYearFloat('now')) - $range[0] ?>
                                                    <li>
                                                        <b><?= yearFloatToDate($range[0]) ?></b> to <b><?= yearFloatToDate($range[1]) ?? '<span class="now">now</span>' ?></b>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <div>
                                                <?php $sum = round($sum); ?>
                                                Worked
                                                <b class="years" data-years="<?= min($sum, 5) ?>">
                                                    <?php if ($sum == 0): ?>

                                                    <?php else: ?>
                                                        <?= $sum ?> year<?= $sum > 1 ? 's' : '' ?>
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
                <?php endforeach; ?></section>
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
            Generated on <?= date('Y-m-d') ?>
        </footer>
    </body>
</html>
<?php

echo preg_replace('/\s+/', ' ', ob_get_clean());
