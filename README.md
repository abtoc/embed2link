# embed2link

Extract embedded URL or link URL in document.

## Installation

```
composer config repositories.abtc/embed2link vcs https://github.com/abtoc/embed2link.git
composer require abtc/embed2link
```

## Usage

### Convert Embed to Link URL

```php
use Abtc\Embed2Link;

Embed2Link::convert('https://...');
```

### Link URL in Documents

```php
use Abtc\Embed2Link;

Embed2Link::extract('<ifram src="..">...</iframe>');
Embed2Link::extract('<a href="..">...</a>');
```
