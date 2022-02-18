var express = require('express');
var router = express.Router();
var db = require('../database');

router.get('/index', function(req, res, next) {
  res.render('index');
  console.log("test");
});

router.post('/signin', function(req, res, next) {
  const userDetails=req.body;
  console.log(userDetails.Username);
  console.log("test")

  var sql = 'select username from users where username like ?';
  db.query(sql, userDetails.Username,function (err, data) {
      if (err) throw err;
      if (!data.length) {
        console.log("No user found!");
      } else {
        sql = 'select `password` from users where username like \''+userDetails.Username+'\'';
        db.query(sql, userDetails.Password,function (err, data) {
          console.log(data[0].password);
          if (err) throw err;
          if (data[0].password == userDetails.Password) {
            console.log("Welcome! You have been authenticated!");
            res.redirect('/welcome.html');
          } else {
            console.log("Your password does not match. Go away!");
            res.redirect('/goaway.html');
          }
        });
      }
  });
});
module.exports = router;
