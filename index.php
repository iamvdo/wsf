<!doctype html>
<html lang="fr">

  <head>
    <meta charset="utf-8">
    <title>WSF</title>

    <meta name="description" content="">
    <meta name="author" content="Vincent De Oliveira">
    <meta name="robots" content="noindex, nofollow, noarchive">
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
          if (isset($a)) {
            if ($a == 2) { 
            ?>
            <p>Mineure</p>
            <ul>
              <li><a href="/?2">2A - Intégration</a></li>
              <li><a href="/tp/2/intro"><strong>TP:</strong> Site d'intro</a></li>
            </ul>
            <p>Majeure</p>
            <ul>
              <li><a href="/?2/html">2A - HTML</a></li>
              <li><a href="/?2/css">2A - CSS</a></li>
              <li><a href="/?2/rwd">2A - RWD</a></li>
              <li><a href="/tp/2/balises/index_html5.html"><strong>TP:</strong> Balises HTML5</a></li>
              <li><a href="/tp/2/form"><strong>TP:</strong> Formulaire</a></li>
              <li><a href="/tp/2/css3ftw"><strong>TP:</strong> Boutons CSS3</a></li>
              <li><a href="/tp/2/transitions"><strong>TP:</strong> Transitions CSS</a></li>
              <li><a href="/tp/2/animations"><strong>TP:</strong> Animations CSS</a></li>
              <li><a href="/tp/2/transforms"><strong>TP:</strong> Transformations</a></li>
              <li><a href="/tp/2/rwd"><strong>TP:</strong> RWD</a></li>
              <li><a href="/tp/2/video"><strong>TP:</strong> Vidéo HTML5</a></li>
              <li><a href="/tp/2/microdata"><strong>TP:</strong> Microdonnées</a></li>
            </ul>
            <?php 
            } elseif ($a == 1) {
            ?>
              <ul>
                <li><a href="/?1">Introduction au WWW</a></li>
                <li><a href="/?1/html/regles">HTML - Concept, règles et structure</a></li>
                <li><a href="/?1/html/elements">HTML - Éléments</a></li>
                <li><a href="/?1/html/formulaires">HTML - Formulaires</a></li>
                <li><a href="/?1/css/regles">CSS - Introduction</a></li>
                <li><a href="/?1/css/selecteurs">CSS - Sélecteurs</a></li>
                <li><a href="/?1/css/proprietes">CSS - Propriétés</a></li>
                <li><a href="/?1/css/positionnement">CSS - Positionnement</a></li>
                <li><a href="/?1/css/css3">CSS - Effets graphiques CSS3</a></li>
              </ul>
            <?php
            }
          } else { ?>
            <p><a href="1">Année 1</a> ou <a href="2">Année 2</a></p>
          <?php 
          }
          ?>
        </section>
      </div>

    </div>

    <div class="reveal-overlay"></div>

    <div class="retour"><a id="retourLien" href="#">Retour accueil cours</a></div>

    <script src="/browserify.js"></script>

    <script>
    var path = window.location.search.replace('?', '');
    var link = document.getElementById('retourLien');
    link.href = '/' + path[0];
    </script>
    <script>VDO('slides', path);</script>
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
          { src: '/reveal/plugin/prismjs/prism.js', async: true, callback: function () { Prism.highlightAll(); } },
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
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-17376769-7', 'auto');
    ga('send', 'pageview');
    </script>

  </body>
</html>