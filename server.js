const express = require('express');
const mysql = require('mysql');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const port = 3000;

app.use(cors());
app.use(bodyParser.json());

// Koneksi ke database
const db = mysql.createConnection({
    host: 'localhost',
    user: 'root',
    password: '', // Sesuaikan dengan password MySQL Anda
    database: 'faskes'
});

db.connect((err) => {
    if (err) throw err;
    console.log('Connected to database');
});

// Endpoint login
app.post('/login', (req, res) => {
    const { email, password } = req.body;

    const query = 'SELECT * FROM users WHERE email = ? AND password = ?';
    db.query(query, [email, password], (err, results) => {
        if (err) throw err;

        if (results.length > 0) {
            const user = results[0];
            res.status(200).json({ success: true, role: user.role });
        } else {
            res.status(401).json({ success: false, message: 'Invalid email or password' });
        }
    });
});



app.listen(port, () => {
    console.log(`Server running on http://localhost:${port}`);
});
