var express = require('express');
var server = express();
require("dotenv").config();
var routes = require('./routes/routes');
const cors = require('cors');
const mongoose = require('mongoose')
const path = require('path');
const session = require("express-session");
const socketIO = require('socket.io');
const { v4:uuidv4 } = require("uuid");

const {generateMessage, generateLocationMessage} = require('./utils/message');
const {isRealString} = require('./utils/isRealString');
const {Users} = require('./utils/users');

const sessionMiddleware = session({
    secret:uuidv4(),
    resave:false,
    saveUninitialized:true
})
server.use(sessionMiddleware);
server.use(express.json());
server.use(express.urlencoded({extended: false}))

server.use(routes);
const port = process.env.PORT || 8001

const http = require('http').createServer(server);

const io = require('socket.io')(http,{
  cors: { origin : "*"}
});

let users = new Users();

mongoose.set("strictQuery", false)
mongoose.
connect(process.env.connect)
// connect = "mongodb+srv://esionlinetraining:7tW9tH7IHASzQ15w@cluster0.ndrkeyj.mongodb.net/dclmwebcast_db"
.then(() => {
    console.log('connected to MongoDB')

const wrap = middleware => (socket, next) => middleware(socket.request, {}, next);
io.use(wrap(sessionMiddleware));

io.on('connection', (socket) => {
    console.log("A new user just connected");
  
    socket.on('join', (params, callback) => {
      if(!isRealString(params.name) || !isRealString(params.room)){
        return callback('Name and room are required');
      }
  
      socket.join(params.room);
      users.removeUser(socket.id);
      users.addUser(socket.id, params.name, params.room);
  
      io.to(params.room).emit('updateUsersList', users.getUserList(params.room));
      socket.emit('newMessage', generateMessage('Admin', `Welocome to ${params.room}!`));
  
      socket.broadcast.to(params.room).emit('newMessage', generateMessage('Admin', "New User Joined!"));
  
      callback();
    })
  
    socket.on('createMessage', (message, callback) => {
      let user = users.getUser(socket.id);
  
      if(user && isRealString(message.text)){
          io.to(user.room).emit('newMessage', generateMessage(user.name, message.text));
      }
      callback('This is the server:');
    })
  
    socket.on('createLocationMessage', (coords) => {
      let user = users.getUser(socket.id);
  
      if(user){
        io.to(user.room).emit('newLocationMessage', generateLocationMessage(user.name, coords.lat, coords.lng))
      }
    })
  
    socket.on('disconnect', () => {
      let user = users.removeUser(socket.id);
  
      if(user){
        io.to(user.room).emit('updateUsersList', users.getUserList(user.room));
        io.to(user.room).emit('newMessage', generateMessage('Admin', `${user.name} has left ${user.room} chat room.`))
      }
    });
  });
  
  // server.listen(port, ()=>{
  //   console.log(`Server is up on port ${port}`);
  // })
  http.listen(port, () => console.log(`Listening on port ${port}`));
  

}).catch((error) => {
    console.log(error)
})

