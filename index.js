var jade = require('jade');
var Prism = require('prismjs');

module.exports = function (id, year, seance) {
  var result = '<section><h2>No files here.</h2><section>';
  var r = new XMLHttpRequest();
  r.open("GET", '/' + year + '/' + seance + '/' + 'slides.jade', false);
  r.send();
  if (r.status === 200) {

    var stringJade = "-var root = '/images/';\nmixin img (name)\n  img.fragment.current-visible.overlay(class!=attributes.class,src=root+name)\nmixin img2 (name)\n  img.fragment(class!=attributes.class,src=root+name)\n" + r.responseText;
    result = jade.render(stringJade);
    document.getElementById(id).innerHTML = result;

    var codes = document.querySelectorAll('code[class^=language-]');
    for (var i = codes.length - 1; i >= 0; i--) {
      var code = codes[i];
      var lang = code.className.replace('language-','');
      code.innerHTML = Prism.highlight(code.innerHTML, lang);
    };
  }
};