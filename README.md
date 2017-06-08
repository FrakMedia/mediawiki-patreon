# About

Patreon for MediaWiki will hook into your campiagn via the Patreon API and check to see if the current user that is logged in and/or registered and add them to a MediaWiki user group.

## History


# License

Patreon for MediaWiki is released under the MIT license

http://www.opensource.org/licenses/mit-license.php

See LICENSE for more details

# Installation

## Download

There are three places to download the EmbedVideo extension. The first is directly from its GitHub project page, where active development takes place.  If you have git, you can use this incantation to check out a read-only copy of the extension source:

```
git clone https://github.com/FrakMedia/mediawiki-patreon.git
```

Downloadable archive packages for numbered releases will also be available from the github project page.

## Installation Instructions

1. Download the contents of the extension, as outlined above.
2. Create an Patreon folder in the extensions/ folder of your MediaWiki installation.
3. Copy the contents of this distribution into that folder

In your LocalSettings.php please insert your API key settings for your Patreon campaign at the top

```

```

Also include...

For Mediawiki 1.19 through 1.23 add the following line to your LocalSettings.php:

```php
require_once("$IP/extensions/Patreon/Patreon.php");
```

For Mediawiki 1.24 and up add the following line to your LocalSettings.php:

```php
wfLoadExtension("Patreon");
```

# Usage


# Credits

The original version of Patreon for MediaWiki was written by Shane A. Froebel.

See CREDITS for details