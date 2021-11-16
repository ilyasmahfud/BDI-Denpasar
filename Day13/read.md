# Start

```
npm init
```
###### Langkah
- enter dan enter
- done sampai muncul file package.json
- buat file index.js        

# Readline
###### Langkah
```
npm install -readline-sync
```

# Buuble

langkah
===============================================================
1. jalankan perintah berikut di terminal:
  ```
  npm install --save-dev @babel/cli @babel/core @babel/preset-env
  ```
2. buat file 
  .babelrc
3. isikan file `.babelrc` dengan codingan berikut:
```
{
  "presets": [
    ["@babel/env", {
      "targets": {
        "node": "current"
      }
    }]
  ],
  "plugins": [
    "@babel/plugin-proposal-class-properties",
    "@babel/plugin-proposal-object-rest-spread"
  ]
}
```
4. import codingan berikut di `index.js`
  ```
  import readline from 'readline-sync';
  ```
5. Edit `package.json` bagian script dengan menambahkan codingan berikut
```
"build": "babel index.js -d dist",
"start": "npm run build && node dist/index.js"
```
6. jalankan perintah berikut di terminal
  npm start

# CodeIgniter
- instal Composer
- init project
```
composer create-project codeigniter4/appstarter `nama-project`
```
- run project (masuk ke project: cd `name-project`)
```
php spark serve
```
- membuat migration
```
php sparck make:migration nama-migrasi
```
# Tugas
1. setup env
2. buat database 
3. buat migrations
4. lakukan migration
5. buat models
6. buat controllers
7. buat routes
8. buat view