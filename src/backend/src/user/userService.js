var userModel = require('./userModel');

module.exports.getDataFromDBService =  () => {
 
    return new Promise(function checkURL(resolve, reject) {
        const result = userModel.find({});
        if (result) {
            resolve(result);
        } else {
            reject(false);
        }
        
    }); 
   
}

module.exports.createUserDBService = (userDetails) => { 
 
    return new Promise(function myFn(resolve, reject) {
        var userModelData = new userModel();
        userModelData.name = userDetails.name;
        userModelData.details = userDetails.details;
        userModelData.no = userDetails.no;
 
       const result = userModelData.save({})
            if (result) {
                resolve(true);
            } else {
                reject(false);
            }
    });
}
 
module.exports.updateUserDBService = (id,userDetails) => {    
    console.log(id);
    console.log(userDetails);
    return new Promise(function myFn(resolve, reject) {
const result =  userModel.findByIdAndUpdate(id,userDetails);
        if (result) {
            resolve(result);
        } else {
            reject(false);
        }
    });
}

module.exports.removeUserDBService = (id) => {
    console.log(id);
    return new Promise(function myFn(resolve, reject) {
       const result =  userModel.findByIdAndDelete(id);
        if (result) {
            resolve(result);
        } else {
            reject(false);
        }
    });
}