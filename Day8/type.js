const jenisKelamin = "laki-laki";
let golonganDarah = "AB";
var warnaRambut = "hitam";


// if (jenisKelamin == "laki-laki" && nama=="ilyas" ){
//     console.log("its mee");
// } else {
//     console.log("its not ilyas");
// }

var data1 = {
    'nama' : 'Bejo'
}
var data2 = {
    'nama' : 'Ojeb'
}

var mahasiswa = [];

mahasiswa.push(data1);
mahasiswa.push(data2);

var object = {
    'nama' : 'joni',
    'nip' : 12328748340,
    'gelar_depan' : 'Prof',
    'gelar_belakang' : ['S. Mat', 'M. T'],
    'mahasiswa_bimbingan' : {
        mahasiswa
    }
}

console.log(object);
console.log('nama dosen : '+object.gelar_depan + '. ' + object.nama + ', '+ object.gelar_belakang);

console.log('mahasiswa bimbingan : ' + object.mahasiswa_bimbingan.mahasiswa[1].nama);

console.log(mahasiswa);

let text = "";
const fruits = ["apple", "orange", "cherry"];
fruits.forEach(myFunction);

 
function myFunction(item, index) {
  console.log(item);
}

console.log(fruits);
console.log(fruits.push("salak"));
console.log(fruits);
console.log(fruits.join('-'));
console.log(fruits.pop());

var warna = ['kuning','hijau','biru','orange','merah'];

var hasil;

function search(data, key) {
    for (let i = 0; i < data.length; i++) {
        if (key ==data[i]) {
            hasil = data[i];
        }        
    }
}

search(warna, 'merah')

console.log(hasil);

var sort = warna.sort();

console.log(sort);