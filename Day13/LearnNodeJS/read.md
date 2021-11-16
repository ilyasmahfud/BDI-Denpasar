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