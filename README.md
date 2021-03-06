# Html Tag Appendar
Find word and append provided HTML tag around word.

[![Latest Version](https://img.shields.io/packagist/v/nexuslinkservices/html-tag-appendar.svg?style=flat-square)](https://packagist.org/packages/nexuslinkservices/html-tag-appendar)
[![Software License](http://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-appendar/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-appendar/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-appendar/badges/build.png?b=master)](https://scrutinizer-ci.com/g/nexuslinkservices/html-tag-appendar/build-status/master)

## Installation

If you use composer, you can add this package by running 

````
composer require galiteintechnologies/html-tag-appendar
````

## Usage

```
<?php

use HtmlTagAppendar\StringTagAppendar;

$stringTagAppendar = new StringTagAppendar();
        
$content = "This content has some dummy text. I want to highlight dummy text with bold tag.";        

$result = $stringTagAppendar->appendAround($content, "dummy", "<b>");
```

## Output

```
This content has some <b>dummy</b> text. I want to highlight <b>dummy</b> text with bold tag.
```

## CONTRIBUTING:

Pull requests are always welcome.
