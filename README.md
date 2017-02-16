# Scrabble PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Lab, 2/16/2017

#### By Sarah Leahy , Leah Sherrell

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy, Leah Sherrell

## License
* MIT

## Specifications
* Phase 1 - Dependencies and .gitignore.
* Phase 2 - Scrabble class: exceptions property and empty constructor, getter, setter and wordScore() methods.
* Phase 3 - Build Test cases and implement Scrabble methods

| Behavior - Our Program should Handle?                     | Input                       | Output                     |
|----------------------------------------------------------------|-----------------------------|----------------------------|
|  One letter one point word     |  "a"                    |  Score  = 1
|  Two letter two point word                          | "no"   |  Score = 2|
|  Two letter three point word                       |  "go" |  Score = 3 |
|  Repeating letter word                                      |  "food"                     |   Score = 7    |                   |  Repeating letter, all possible score arrays checked | "queen" | Score = 14 |



* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Create twig framework with a form to enter word, and output the score.

* End specifications
