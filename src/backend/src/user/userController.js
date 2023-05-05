var userService = require('./userService');
 
var getDataConntrollerfn = async (req, res) =>
{

     try {
        var items = await userService.getDataFromDBService();
        res.send({ "status": true, "data": items });
        //res.status(200).json(items);
    } catch (error) {
        res.status(500).json({message: error.message})
    }
}
 
var createUserControllerFn = async (req, res) =>
{
    var status = await userService.createUserDBService(req.body);
    if (status) { 
        res.send({ "status": true, "message": "User created successfully" });
    } else {
        res.send({ "status": false, "message": "Error creating user" });
    }
}    

var updateUserController = async (req, res) =>
{
    console.log(req.params.id);
    console.log(req.body);
    
    var result = await userService.updateUserDBService(req.params.id,req.body);
 
     if (result) {
        res.send({ "status": true, "message": "User Updateeeedddddd"} );
     } else {
         res.send({ "status": false, "message": "User Updateeeedddddd Faileddddddd" });
     }
}

var deleteUserController = async (req, res) =>
{
     console.log(req.params.id);
     var result = await userService.removeUserDBService(req.params.id);
     if (result) {
        res.send({ "status": true, "message": "User Deleteddd"} );
     } else {
         res.send({ "status": false, "message": "User Deleteddd Faileddddddd" });
     }
}
module.exports = { getDataConntrollerfn, createUserControllerFn,updateUserController,deleteUserController };