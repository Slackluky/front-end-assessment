# BOTIKA FRONT END ASSESSMENT TEST


## :gear: PERSIAPAN SEBELUM CODING:


### Recommended IDE Setup

- [VS Code](https://code.visualstudio.com/) + [Volar](https://marketplace.visualstudio.com/items?itemName=Vue.volar) (and disable Vetur)

### Requirements:

- Composer.
- PHP 8.1+
- MySQL/MariaDB.
- Node js 14.18+, 16+.
- npm
- some of umm... SKILL

### CARA MENGERJAKAN

- clone repository ini
- checkout ke branch dengan nama mu
- commit di setiap perubahan fitur

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

#### Konfigurasi Mysql:

By default, the API use a MySQL Database.

```
Pertama, buatlah database di mysql lokal

lalu import dari file .sql ./api/dump-fe-assessment-202302101331.sql
```

lalu isi database host, name dan kredensial di `.env` file:

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
- get all products `GET /products`


## :computer: WAKTUNYA NGODING!

### BACKEND

di projek ini sudah controller, routes and model (/api/src/Repository) yang dibutuhkan, anda hanya tinggal menyelesaikannya


### FRONTEND

disini sudah ada satu laman  `` '/' `` di ``src\App.vue ``

- kamu harus membuat laman tersebut menjadi responsive dan menyelesaikan fungsi CRUD disana

- Optimasikan SEO pada web ini

- Gunakanlah API tersebut secara efisien
  
- buatlah fitur search yang berfungsi secara efisien (BONUS)
  
#### tips :bulb:

- Kamu bisa menggunakan UI framework yang kamu kuasai (Bootstrap etc) yang kompatibel dengan vue
- kamu bisa buat atau meneruskan component yang kamu butuhkan
