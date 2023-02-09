# BOTIKA FRONT END ASSESSMENT TEST


## :gear: BEFORE YOU CODE:


### Recommended IDE Setup

- [VS Code](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur)

### Requirements:

- Composer.
- PHP 8.1+
- MySQL/MariaDB.
- Node js 14.18+, 16+.
- npm
- some of umm... SKILL



## Vue 3 + Vite

```bash
npm install

npm run dev
```



## The API:

You can run the api with the following commands:

```bash
cd ./api
composer install
composer test
composer start
```

#### Configure your connection to MySQL Server:

By default, the API use a MySQL Database.

You should check and edit this configuration in your `.env` file:

```
DB_HOST='127.0.0.1'
DB_NAME='yourMySqlDatabase'
DB_USER='yourMySqlUsername'
DB_PASS='yourMySqlPassword'
DB_PORT='3306'
```

## :bookmark: ENDPOINTS:

### BY DEFAULT:

- Hello: `GET /`

- Health Check: `GET /status`

