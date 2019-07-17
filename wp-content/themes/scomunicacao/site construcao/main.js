
var app = document.getElementById('app');

var typewriter = new Typewriter(app, {
loop: true
});

typewriter.typeString('Site em construção. Em breve novidades.')
.pauseFor(1500)
.deleteAll()
.start();


