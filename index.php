<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">

    <title>WSF</title>

    <meta name="description" content="">
    <meta name="author" content="Vincent De Oliveira">
    <link rel="icon" href="http://iamvdo.me/images/favicon.png"/>

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <link rel="stylesheet" href="/reveal/css/reveal.min.css">
    <!-- For syntax highlighting -->
    <link rel="stylesheet" href="/reveal/plugin/prismjs/prism.css">
    <link rel="stylesheet" href="/reveal/vdo/theme_vdo.css" id="theme">
    <link rel="stylesheet" href="/reveal/plugin/nav/nav.css">

    <!-- If the query includes 'print-pdf', include the PDF print sheet -->
    <!-- <link rel="stylesheet" href="/reveal/css/print/pdf.css"> -->
    <script>
      if( window.location.search.match( /print-pdf/gi ) ) {
        var link = document.createElement( 'link' );
        link.rel = 'stylesheet';
        link.type = 'text/css';
        link.href = '/reveal/css/print/pdf.css';
        document.getElementsByTagName( 'head' )[0].appendChild( link );
      }
    </script>

    <!--[if lt IE 9]>
    <script src="lib/js/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="reveal">

      <!-- Any section element inside of this container is displayed as a slide -->
      <div class="slides" id="slides">
        <section>
          <h2>Cours / TP</h2>
          <?php 
          if ($a == 2) { 
          ?>
          <p>Mineure</p>
          <ul>
            <li><a href="?2-intro">2A - Intégration</a></li>
            <li><a href="tp/intro">TP: Site d'intro</a></li>
          </ul>
          <p>Majeure</p>
          <ul>
            <li><a href="?2-html">2A - HTML</a></li>
            <li><a href="?2-css">2A - CSS</a></li>
            <li><a href="?2-rwd">2A - RWD</a></li>
            <li><a href="tp/balises/index_html5.html">TP: Balises HTML5</a></li>
            <li><a href="tp/form">TP: Formulaire</a></li>
            <li><a href="tp/css3ftw">TP: Boutons CSS3</a></li>
            <li><a href="tp/transitions/">TP: Transitions CSS</a></li>
            <li><a href="tp/animations">TP: Animations CSS</a></li>
          </ul>
          <?php 
          } else {
          ?>
          <p>Année 1</p>
          <?php
          } ?>
        </section>
      </div>

    </div>

    <div class="reveal-overlay"></div>

    <div class="retour"><a href="/<?php echo $a; ?>">Retour accueil cours</a></div>

    <script src="/browserify.js"></script>
    <script>
    var re = /\?([0-9]{1})-(\S+)/gi; 
    var str = window.location.search;
    var m = re.exec(str);
    var annee = m[1];
    var seance = m[2];
    </script>
    <script>VDO('slides', annee, seance);</script>
    <script src="/reveal/plugin/live-coding/live-coding.js"></script>
    <script src="/reveal/lib/js/head.min.js"></script>
    <script src="/reveal/js/reveal.js"></script>
    <script>

      // master?
      var file = 'client';
      var secret = null;
      if (window.location.pathname.indexOf('master') !== -1) {
        file = 'master';
        secret = '14113166897031981646';
      }

      // Full list of configuration options available here:
      // https://github.com/hakimel/reveal.js#configuration
      Reveal.initialize({
        controls: true,
        progress: false,
        history: true,
        center: false,

        transitionSpeed: 'slow',

        theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
        transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

        multiplex: {
          secret: secret,
          id: 'f3d2266194ccc98f',
          url: 'revealjs.jit.su:80'
        },
        // Parallax scrolling
        //parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
        //parallaxBackgroundSize: '2100px 900px',

        // Optional libraries used to extend on reveal.js
        dependencies: [
          { src: '/reveal/lib/js/classList.js', condition: function() { return !document.body.classList; } },
          //{ src: '/reveal/plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
          //{ src: '/reveal/plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
          //{ src: '/reveal/plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
          //{ src: '/reveal/plugin/prismjs/prism.js', async: true },
          { src: '/reveal/plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
          { src: '/reveal/plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } },
          //{ src: '/reveal/plugin/prefixfree/prefixfree.js', async: true },
          //{ src: '/reveal/plugin/live-coding/live-coding.js', async: true, condition: function() { return !!document.body.classList; }},
          { src: '/reveal/plugin/nav/nav.js', async: true},
          { src: '//cdnjs.cloudflare.com/ajax/libs/socket.io/0.9.10/socket.io.min.js', async: true },
          { src: '/reveal/plugin/multiplex/' + file + '.js', async: true }
        ]
      });

    </script>

  </body>
</html>