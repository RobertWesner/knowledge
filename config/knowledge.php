<?php

require_once __DIR__ . '/../src/load.php';

$knowledgeCollections = [];

/*
 * THE "ROADMAP" (aka. things that might be fun to learn and possibly useful)
 *
 *  Functional programming without a clear project goal:
 *      - Erlang
 *      - Elixir
 *      - Haskell
 *      - OCaml
 *      - PureScript ;)
 *      - Elm
 *      - Scala (JVM)
 *
 *  Compiled general purpose:
 *      - Zig (to learn "proper" memory safety)
 *      - Odin
 *
 *  Cross platform GUI:
 *      - Dart with Flutter
 *      - C# with Eto or Avalonia (MAUI doesnt target Linux for some reason)
 *      - Kotlin with Compose
 *      - Go with Wails
 *      - Electron and/or Tauri
 *
 *  WebAssembly:
 *      - Rust (again)
 *      - Zig (again)
 *      - Kotlin (again)
 *      - C# (again again)
 *
 *  Lisp:
 *      - CommonLisp
 *      - Scheme
 *      - Racket
 *      - Clojure (JVM) [https://www.braveclojure.com/clojure-for-the-brave-and-true/]
 *
 *  OSDev:
 *      - Rust [https://os.phil-opp.com/]
 *
 *  What even... how:
 *      - Prolog
 *
 *  Kind of completely useless for me:
 *      - COBOL (just COBOL, no mainframes, for the hell of it)
 *      - Fortran (more like ForFun)
 *      - Ada
 *      - Pascal
 *      - Delphi
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
    // LÖVE2D & ComputerCraft :)
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
    ->push('Rust', Knowledge::LEVEL_BEGINNER, [
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
 * Svelte and Vue sound like fun.
 * Angular I should have a look at someday...
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

return $knowledgeCollections;
