var jade = require('jade');
var Prism = require('prismjs');

var Ajax = function (id, path) {
  // path == 1/html/elements
  // path == 1/html
  var r = new XMLHttpRequest();
  r.open("GET", '/' + path + '.jade', false);
  r.send();

  if (r.status === 200) {

    var stringJade = "-var root = '/images/';\nmixin img (name)\n  img.fragment.current-visible.overlay(class!=attributes.class,src=root+name)\nmixin img2 (name)\n  img.fragment(class!=attributes.class,src=root+name)\n" + r.responseText;
    result = jade.render(stringJade);
    document.getElementById(id).innerHTML = result;

    // prism code
    var codes = document.querySelectorAll('code[class^=language-]');
    for (var i = codes.length - 1; i >= 0; i--) {
      var code = codes[i];
      var lang = code.className.replace('language-','');
      code.innerHTML = Prism.highlight(code.innerHTML, lang);
    };

    // add navigation
    var h1 = document.querySelectorAll('.slides h1');
    for (var i = h1.length - 1; i >= 0; i--) {
      var p = document.createElement('p');
      p.className = 'u-small';
      var msg;
      if (h1[i].parentNode.parentNode.localName === 'section') {
        msg = 'Utilisez les flèches <strong>↓</strong> et <strong>↑</strong>';
      } else {
        msg = 'Utilisez les flèches <strong>←</strong> et <strong>→</strong> pour naviguer.<br><strong>Echap.</strong> pour une vue générale.';
      }
      p.innerHTML = msg;
      h1[i].parentNode.appendChild(p);
    };

  } else if (r.status === 404) {
    path += '/intro';
    Ajax(id, path);
  }
}

module.exports = function (id, path) {
  var result = '<section><h2>No files here.</h2><section>';
  Ajax(id, path);
};