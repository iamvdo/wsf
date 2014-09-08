var jade = require('jade');

module.exports = function (id, year, seance) {
  var result = '<section><h2>No files here.</h2><section>';
  var r = new XMLHttpRequest();
  r.open("GET", year + '/' + seance + '/' + 'slides.jade', false);
  r.send();
  if (r.status === 200) {
    var f = jade.render(r.responseText);
    result = f.toString();
  }
  document.getElementById(id).innerHTML = result;
};