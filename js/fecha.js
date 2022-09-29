let hoy = new.Date();

let day     = hoy.getDate();
let month   = hoy.getMonth() + 1;
let year    = hoy.getFullYear;

//DD-MM-YYYY

let formato = ${day}-${month}-${year};
console.log(formato);

