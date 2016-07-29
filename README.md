# Demo CakePHP 3.x Cell

## What is the Cell

View cells are small mini-controllers that can invoke view logic and render out templates.

The idea of cells is borrowed from cells in Ruby, where they fulfill a similar role and purpose.


## When to use Cells

Cells are ideal for building reusable page components that require interaction with models, view logic, and rendering logic.

A simple example would be the cart in an online store, or a data-driven navigation menu in a CMS.

## Installation

clone this repo to your computer then we will follow this command to download all related packages

```
composer update
```

Then you need create a database named `demo`, and do import `config/schema/demo.sql` into your DB.

Next we are already to run.

```
bin/cake server
```

## Preview

![Reuse page component](http://image.prntscr.com/image/d269c0ea5df843618788184a1826f5e1.png)