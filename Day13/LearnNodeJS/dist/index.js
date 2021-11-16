"use strict";

var _readlineSync = _interopRequireDefault(require("readline-sync"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

// function penjumlahan(a,b) {
//     return a+b;
// }
// function pengurangan(a,b) {
//     return a-b;
// }
// function perkalian(a,b) {
//     return a*b;
// }
// function pembagian(a,b) {
//     return a/b;
// }
// function akar(a,b) {
//     return a**(1/b);
// }
// console.log(penjumlahan(5,6));
// console.log(pengurangan(5,6));
// console.log(perkalian(5,6));
// console.log(pembagian(5,6));
// console.log(akar(27,3));
// Tipe data
const bilangan1 = 1;
let bilangan2 = bilangan1;
bilangan2 = 10;
console.log(bilangan1, bilangan2);
const arr = [1, 2];
const arr2 = arr;
arr2[0] = 9;
console.log(arr[0], arr2[0]); // 5x3, masing2 baris memiliki tipe data berbeda

var arrd = [[0, "a", false], [1, "b", true], [2, "c", false], [3, "d", true], [4, "e", true]];
console.log(arrd); // loop the outer array

for (let i = 0; i < arrd.length; i++) {
  // get the size of the inner array
  var innerArrayLength = arrd[i].length; // loop the inner array

  for (let j = 0; j < innerArrayLength; j++) {
    console.log('[' + i + ',' + j + '] = ' + arrd[i][j]);
  }
}