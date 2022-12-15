const mysql = require('mysql');

const conection = mysql.createConnection({
    host:'localhost',user: 'root', password:'',database:'laboratorio'
})

conection.connect( (err) => {
    if(err) throw err
    console.log('Conexion Ok')
})

conection.query('SELECT * FROM proyectores', (err,rows) => {
    if(err) throw err
    console.log('Estos son los datos de la tabla')
    console.log(rows)
})

conection.end()