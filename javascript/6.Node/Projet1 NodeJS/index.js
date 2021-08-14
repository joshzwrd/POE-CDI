const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const cors = require('cors');

const postData = [];

function addPost(title, content) {
    postData.push({
        title :title,
        content: content,
    });
}

addPost('Article 1', 'È universalmente riconosciuto che un lettore che osserva il layout di una pagina viene distratto dal contenuto testuale se questo è leggibile.');
addPost('Article 2', 'Al contrario di quanto si pensi, Lorem Ipsum non è semplicemente una sequenza casuale di caratteri.');
addPost('Article 3', 'Molte versioni del testo sono state prodotte negli anni, a volte casualmente');

app.use(express.static('client'));
app.use(cors({origin: 'http://127.0.01:3000'}));

app.get('/', function (req, res) {
    res.sendFile(__dirname + '/client/index.html')
})

app.get('/api/posts', function (req, res) {
    res.send(postData);
})

app.post('/api/posts', function (req, res) {
    console.log(req.body);
    addPost();
})


app.listen(3000)