var mongoose = require('mongoose');
var Schema = mongoose.Schema;
 
var userSchema = new Schema({
 
    name: {
        type: String,
        required: true 
    },
    details: {
        type: String,  
        required: true 
    },
    no: {
        type: String,
        required: true
    }
});
 
module.exports = mongoose.model('items', userSchema);
