const readline = require('readline-sync');


// var number1 = readline.question('Masukan Angka Pertama : ');
// var number2 = readline.question('Masukan Angka kedua : ');

// function jumlah(number1, number2) {
//     return number1 + number2;
// }

// var hasil = jumlah(parseInt(number1), parseInt(number2));
// console.info(hasil);


// var lanjut = readline.question('Mau Menjumlah lagi (ya) ?')

// while (lanjut == 'ya') {
    //     var a = readline.question('Masukan Angka Pertama : ');
    //     var b = readline.question('Masukan Angka kedua : ');
    
    //     function jumlah(a, b) {
        //         return a + b;
        //     }
        
        //     var hasil = jumlah(parseInt(a), parseInt(b));
        //     console.log(hasil);
        //     var lanjut = readline.question('Mau Menjumlah lagi (ya) ?')
        
        //     if (lanjut!='ya') {
            //         console.log('Wah berhenti'); 
            //     }
            // } 
var a;
var b;
var lanjut;

do {
    console.info('Program Penjumlahan');
    console.info('=======================');
    
    proses_input();
    
    console.log('hasi;nya = '+jumlah(parseInt(a), parseInt(b)));

    tanya();
    if (lanjut!='ya') {
        console.info('=======================');
        console.log('Wah berhenti'); 
    }
} while (lanjut == 'ya' || lanjut == 'y' );

function proses_input() {
    a = readline.question('Masukan Angka Pertama : ');
    b = readline.question('Masukan Angka kedua : ');
}

function jumlah(a, b) {
    return a + b;
}

function tanya() {
    console.info('=======================');
    lanjut = readline.question('Mau Menjumlah lagi (ya) ?')
    console.info('=======================');
}