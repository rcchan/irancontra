<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js"></script>
<script src="gallery.js"></script>
<script id="gallery-template" type="text/x-handlebars-template">
  {{#each videos}}
    <div class="galleryvideocontainer">
      <div class="galleryvideothumbnail">
        <a href="v-{{key}}.php"><img src="thumbnails/{{key}}.jpg" /></a>
      </div>
      <div class="galleryvideolink">
        <a href="v-{{key}}.php" class="video">{{title}}</a>
        <br />
        ({{duration duration}})
      </div>
    </div>
  {{/each}}
</script>
<script>
var pad = s => s < 10 ? 0 + s : s;
Handlebars.registerHelper("duration", d => Math.floor(d / 60) + ':' + pad(d % 60));
document.write(Handlebars.compile(document.getElementById('gallery-template').innerHTML)({videos: videos}));
</script>
