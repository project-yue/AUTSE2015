var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('body', {data : {'title' : 'SERLER', 'name' : 'Yue'}});
});

module.exports = router;
