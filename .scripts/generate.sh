#!/bin/sh

#
# Script for myself to sync the awesome-seo-chrome extensions repo over now and then.
#
# @see: https://github.com/awesome-seo-tools/seo-browser-extensions
#

git clone git@github.com:awesome-seo-tools/seo-browser-extensions.git /tmp/seo-browser-extensions;

php .scripts/generate.php \
    "SEO Chrome Extensions" \
    seo-chrome-extensions-header.md \
    /tmp/seo-browser-extensions/README.md \
    seo-chrome-extensions-footer.md \
    ./src/site/seo-chrome-extensions.md

rm -rf  /tmp/seo-browser-extensions;
