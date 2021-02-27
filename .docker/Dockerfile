FROM    php:7.4-apache-buster

LABEL   maintainer="Frederick Tyteca"

# copying all files (but .dockerignore(d)) in /app
COPY    . /app
WORKDIR /app
RUN 	mkdir -p bootstrap/cache && \
        chmod -R ug+rw storage bootstrap && \
        chmod g+s storage/logs

# ==================================================
# Small things
# ==================================================
# enabling mod rewrite
RUN     a2enmod rewrite && a2enmod ssl

# setting timezone
ENV     TZ=Europe/Paris
RUN     ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# default vhost replaced by custom one
# mainly documentRoot /app/public
COPY    .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# symlink for storage (the same that is created with "artisan storage:link")
RUN     if [ -L public/storage ]; then unlink public/storage; fi
RUN     if [ ! -L public/storage ]; then ln -s /app/storage/app/public public/storage; fi
