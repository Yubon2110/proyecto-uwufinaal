require('dotenv').config();

const sql = require('mssql');

const config = {
  user: process.env.DB_USER,
  password: process.env.DB_PASSWORD,
  server: process.env.DB_SERVER,
  database: process.env.DB_DATABASE,
};

async function connectToDatabase() {
    try {
      await sql.connect(config);
      console.log('Conexión a la base de datos establecida.');
  
      // Realiza una consulta de ejemplo
      const result = await sql.query`SELECT * FROM NombreDeTuTabla`;
      console.log('Datos recuperados:', result.recordset);
  
    } catch (err) {
      console.error('Error al conectar a la base de datos:', err);
    } finally {
      sql.close();
    }
  }

  