var express = require('express');
var server = express();
var routes = require('./routes/routes');
const cors = require('cors');
const mongoose = require('mongoose')

server.use(cors());
server.use(express.json());
server.use(express.urlencoded({extended: false}))

server.use(routes);

mongoose.set("strictQuery", false)
mongoose.
connect('mongodb+srv://esionlinetraining:7tW9tH7IHASzQ15w@cluster0.ndrkeyj.mongodb.net/dclmwebcast_db')
.then(() => {
    console.log('connected to MongoDB')
    server.listen(8000, ()=> {
        console.log(`dclmdb is running on port 8000`)
    });
}).catch((error) => {
    console.log(error)
})
