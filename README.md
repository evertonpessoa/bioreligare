## Bioreligare

### Development environment

Using [kool](https://github.com/kool-dev/kool), of course!

Follow these steps to get up and running:

- Clone the repo
- Get proper `.env``

```console
$ cp .env.example .env
```

- Start the containers

```console
$ kool start
```

- Install dependencies

```console
$ kool run composer install
$ kool run artisan key:generate
$ kool run artisan migrate:fresh --seed
$ kool run yarn install
$ kool run yarn dev
```

- Images folder:

* Copy files from `public/img/` folder to `storage/app/public/` folder:

```console
$ cp -a public/img/. storage/app/public/
$ kool run artisan storage:link
```

That is it, you should be able to navigate to http://localhost now and check it out.

- Admin panel (Nova)

http://localhost/nova
login: admin@fireworkweb.com
password: qwe@2021

- How to put recaptcha key at .env file:
https://gitlab.fireworkweb.com/firework/firework/-/wikis/Creating-recaptcha
