import readline from 'readline-sync';

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

const arr = [1,2];
const arr2 = arr;

arr2[0]=9;
console.log(arr[0], arr2[0]);

// 5x3, masing2 baris memiliki tipe data berbeda

var arrd =[
    [0,"a",false],
    [1,"b",true],
    [2,"c",false],
    [3,"d",true],
    [4,"e",true]
];

console.log(arrd);


// // loop the outer array
// for (let i = 0; i < mahasiswa.length; i++) {
//     // get the size of the inner array
//     var innerArrayLength = mahasiswa[i].length;
//     // loop the inner array
//     console.log(mahasiswa[i]);
//     // for (let j = 0; j < innerArrayLength; j++) {
//         //     console.log('[' + i + ',' + j + '] = ' + mahasiswa[i][j]);
//         // }
//     }
    
    // for (let i = 0; i < 20; i++) {
        //     if (i %3 == 0) {
            //         if (i%2!=0) {
                //             console.log(i);
                //         }
                //     }
                // }

var mahasiswa =[7,3.0,17];

var a = mahasiswa[3]>=18||mahasiswa[3]<=23;
var b = mahasiswa[0]>6&&mahasiswa[1]>=3;

var hasil = (mahasiswa[3]>=18||mahasiswa[3]<=23&&mahasiswa[0]>6&&mahasiswa[1]>=3)
console.log("Mahasiswa ", hasil?"":"belum", " bisa mengambil skripsi");

if (a==true && b==true) {
    console.log("blm dapat mengambil");
} else {
    console.log("blm dapat mengambil");
}

console.log("====== object ======");

//  nama, jenis, jumlah kaki, bertulang belakang, suara

var hewan = {
    nama : "Elang",
    jenis : "Aves",
    jumlah_kaki : 2,
    bertulang_belakang : true,
    suara : "wiuuuung"
};

console.log(hewan);