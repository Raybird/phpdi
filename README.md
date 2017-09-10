# phpdi

Try php di

# Docker for windows

php composer 

`docker run -it --rm -v .:/app composer/composer init`

windows volume use %cd%

`docker run -it --rm -v %cd%:/app composer/composer init`

`docker run -it --rm -v %cd%:/app composer/composer install`


`docker run -it --rm -v %cd%:/app composer/composer require doctrine/annotations`
