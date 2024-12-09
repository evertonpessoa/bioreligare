FROM kooldev/php:7.4 AS composer

COPY . /app

RUN mkdir -p /root/.ssh \
    && chmod 700 /root/.ssh \
    && cp nova.rsa /root/.ssh/id_rsa \
    && chmod 400 /root/.ssh/id_rsa \
    && ssh-keyscan -H gitlab.fireworkweb.com > /root/.ssh/known_hosts \
    && chmod 644 /root/.ssh/known_hosts

RUN composer install --no-interaction --prefer-dist --optimize-autoloader --quiet

FROM kooldev/node:14 AS node

COPY --from=composer /app /app
RUN yarn install && yarn prod

FROM kooldev/php:7.4-nginx-prod

COPY --from=node --chown=kool:kool /app /app

RUN ln -s /app/storage/app/public /app/public/storage && chown kool. /app/public/storage
