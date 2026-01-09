# Brain Games (PHP)

### Hexlet tests and linter status

[![Actions Status](https://github.com/Brokgar/php-project-45/actions/workflows/hexlet-check.yml/badge.svg)](https://github.com/Brokgar/php-project-45/actions)
[![Bugs](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=bugs)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)
[![Code Smells](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=code_smells)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)
[![Duplicated Lines (%)](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=duplicated_lines_density)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)
[![Lines of Code](https://sonarcloud.io/api/project_badges/measure?project=Brokgar_php-project-45&metric=ncloc)](https://sonarcloud.io/summary/new_code?id=Brokgar_php-project-45)

---

## Описание проекта

**Brain Games** — консольное PHP-приложение с набором обучающих мини-игр.  
Каждая игра задаёт пользователю вопросы, на которые необходимо дать правильные ответы.  
Для победы нужно **ответить правильно три раза подряд**.

Проект разработан в учебных целях и демонстрирует:

- работу с PHP CLI-приложениями;
- использование Composer;
- организацию кода и автозагрузку;
- тестирование и линтинг;
- работу с Makefile.

---

## Доступные игры

- **brain-even** — определение чётного числа;
- **brain-calc** — вычисление математических выражений;
- **brain-gcd** — поиск наибольшего общего делителя;
- **brain-progression** — поиск пропущенного элемента прогрессии;
- **brain-prime** — определение простого числа.

---

## Минимальные требования

- PHP **>= 8.0**
- Composer
- Git
- Linux / macOS  
  *(для Windows допускается использование WSL)*

---

## Установка

```bash
git clone https://github.com/Brokgar/php-project-45.git
cd php-project-45
make install
```

---

## Запуск игр

Запуск через make:

make brain-even
make brain-calc
make brain-gcd
make brain-progression
make brain-prime


Или напрямую:
./bin/brain-even

---

## Примеры игрового процесса

Ниже приведены записи asciinema, демонстрирующие успешное и неуспешное прохождение игр:

Brain-even
https://asciinema.org/a/WqNoAAKN5s3qoGI3

Brain-calc
https://asciinema.org/a/1HRptBjUNfdKO6fS

Brain-gcd
https://asciinema.org/a/41TUS7ByStsaNVdg

Brain-progression
https://asciinema.org/a/xLQiUvTPj6QzXff8

Brain-prime
https://asciinema.org/a/juRcEWo1LN1S1siU

---

## Проверка качества кода
Запуск линтера:

make lint

---

## Git ignore

В репозитории отсутствуют временные и служебные файлы.
Все лишние файлы добавлены в .gitignore, включая:
vendor/
.idea/
.vscode/
временные файлы ОС

---

Проект выполнен в рамках обучения на платформе Hexlet.
