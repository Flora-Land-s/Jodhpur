const{
    createPool
} = require('mysql');

const pool = createPool({
    host: "localhost",
    user: "root",
    password: "",
    database: "flora_lands",
    connectionLimit: 10
})
pool.query(`Create table User_credentials(Id bigint(255),Name varchar(70),Email varchar(255),password varchar(20),Confirm_password varchar(20), Mobile_no  varchar(20), Gender varchar(10))`,(err,result,fields)=>{
    if(err){
        return console.log(err);
    }
    return console.log(result);
})