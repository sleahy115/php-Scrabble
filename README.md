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

| Behavior - What does wordScore() return?                      | Input                       | Output                     |
|----------------------------------------------------------------|-----------------------------|----------------------------|
|  1.User enters word                                              |  "hello"                    | ["h","e", "l","l","o" ] |
|  2.Convert word array to upper case                              |  ["h","e", "l","l","o" ]   |  ["H","E", "L","L","O" ] |
|  3.Check word array against onePointArray                        |  ["h","e", "l","l","o"] [A, E, I, O, U, L, N, R, S, T]  |  ["E","L","L","O"] |
|  4.Count number of matches                                       |  ["E","L","L","O"]                     |   4                         |
|  5.Set score                                                     |  4              | 4|
|  6.Repeat steps 3-5 for the rest of the point arrays  and output total score           | 4 + 4           |8|


* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5 - Create twig framework with a form to enter word, and output the score. 

* End specifications
