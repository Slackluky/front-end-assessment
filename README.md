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

### How To

clone this repo to your machine
checkout to a branch after your name
commit every function / feature update

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

```
first you can create new database on your local machine

then import database from dump ./api/dump-fe-assessment-202302101331.sql
```

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




## :computer: CODING TIME:

### BACKEND

there's already have the controller, routes and model (/api/src/Repository), you just need to complete them


### FRONTEND

theres already a page at `` '/' `` in ``src\App.vue ``

- you have to develop the page into responsive website with the ability to Create, Update and Delete the products there

- SEO optimization will be valuable

- make the API consumption as effective as possible will have a plus
  
- make the search feature working as effective as possible will have a plus
#### tips :bulb:

- you can use any vue component based ui framework that you prefer
- you can create any necessary component or complete the existing components
