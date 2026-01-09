### Hexlet tests and linter status:
[![Actions Status](https://github.com/Brokgar/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Brokgar/php-project-45/actions)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)


Описание проекта

Brain Games — это консольное приложение с набором обучающих мини‑игр. Каждая игра задаёт пользователю вопросы, на которые нужно дать правильные ответы. Для победы необходимо ответить правильно три раза подряд.
Проект разработан в учебных целях и демонстрирует:
работу с PHP CLI‑приложениями;
использование Composer;
организацию кода и автозагрузку;
тестирование и линтинг;
работу с Makefile.

Доступные игры:
brain-even — определение чётного числа;
brain-calc — вычисление математических выражений;
brain-gcd — поиск наибольшего общего делителя;
brain-progression — поиск пропущенного элемента прогрессии;
brain-prime — определение простого числа.

Минимальные требования:
PHP >= 8.0
Composer
Git
ОС Linux / macOS (для Windows допускается использование WSL)



Примеры игрового процесса:
Ниже приведены записи asciinema, демонстрирующие успешное и неуспешное прохождение каждой игры.
1. Brain-even        https://asciinema.org/a/WqNoAAKN5s3qoGI3
2. Brain-calc        https://asciinema.org/a/1HRptBjUNfdKO6fS
3. Brain-gcd         https://asciinema.org/a/41TUS7ByStsaNVdg
4. Brain-progression https://asciinema.org/a/xLQiUvTPj6QzXff8
5. Brainprime        https://asciinema.org/a/juRcEWo1LN1S1siU

Проверка качества кода
Запуск линтера:
make lint


Git ignore
В репозитории отсутствуют временные и служебные файлы. Все лишние файлы добавлены в .gitignore, включая:
vendor/
.idea/
.vscode/
временные файлы ОС


Проект выполнен в рамках обучения на платформе Hexlet.


