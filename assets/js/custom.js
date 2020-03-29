$(document).ready(function() {

  $("main#spapp > section").height($(document).height() - 60);

  var app = $.spapp({pageNotFound : 'error_404'}); // initialize

  // define routes
  app.route({
    view: 'view_1',
    onCreate: function() { $("#view_1").append($.now()+': Written on create<br/>'); },
    onReady: function() { $("#view_1").append($.now()+': Written when ready<br/>'); }
  });
  app.route({
    view: 'home', 
    load: 'index.html' 
  });
  app.route({
    view: 'charts', 
    load: 'charts.html' 
  });
  app.route({
    view: 'data', 
    load: 'data.html' 
  });
  app.route({
    view: 'form', 
    load: 'form.html' 
  });
  app.route({
    view: 'view_2', 
    load: 'view_2.html' 
  });
  app.route({
    view: 'view_3', 
    onCreate: function() { $("#view_3").append("I'm the third view"); }
  });

  // run app
  app.run();

});