<? require ('templates/header.php'); ?>
<title>Understanding the Iran-Contra Affairs</title>
<style>
.gallery-filtered {
  display: none;
}
</style>
</head>
<? require ('templates/hearingsbanner.php'); ?>
<div style="margin: 10px 0px 0px 20px; width: 760px" align="justify" id="welcomenote">
	<div align="left" class="bread_crumbs">
		<a href="index.php">Home</a> &raquo; <a href="thehearings.php">The Hearings</a> &raquo; Video Gallery
	</div>
	<table>
	<tr>
		<td colspan='2' height='50'>
			<h2>The Hearings: Video Gallery</h2>
		</td>
	</tr>
	<tr>
		<td width='225' valign="top">
			<table bgcolor='#eeeee9' width="225" align="center" border='0'>
			<tr>
				<td align="center">
					<strong>Browse Videos</strong>
				</td>
			</tr>
      <tr>
        <td>
          <div style="width: 80%; margin: auto;">
            <span style="font-size: 9px;">Enter last name of senator, official, or attorney. For clips sorted by witness only, see below.</span>
            <input id="gallerysearch" placeholder="Search" style="display: block; width: 100%; padding: 0 5px;">
          </div>
        </td>
      </tr>
			<tr>
				<td align="center" valign="top">
					<div style="margin: 0px 0px 0px 20px; width: 225px" align="left" id="welcomenote">
						<br/>
            <div id="galleryfilters"></div>
					</div>
				</td>
			</tr>
			</table>
		</td>
		<td align="justify" valign="top">
			<div style="margin: 0px 0px 0px 10px; width: 490px" align="left" id="welcomenote">
        <a name="headertop" id="headertop"></a>
        <div id="gallerymaincontent"></div>
      </div>
    </td>
  </tr>
</table>
<div align='center' class="top_link">
  <p>
    [ <a href="#headertop">Return to top</a> ]
  </p>
</div>
<br/>
</div>
<br/><br/>
<? require ('templates/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.12/handlebars.min.js"></script>
<script src="gallery.js"></script>
<script src="gallery-actors.js"></script>
<script id="filters-template" type="text/x-handlebars-template">
  <a href="#all" class="content_link">VIEW ALL VIDEOS</a> ({{videos.length}})<br/>
  {{#eachInMap actors}}
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#{{key}}" class="content_link">{{value.name}}</a> ({{galleryCount value.name}})<br/>
  {{/eachInMap}}
</script>
<script id="main-template" type="text/x-handlebars-template">
  {{#if actor}}
    {{> blurb actor}}
  {{else}}
    <h3>ALL VIDEOS ({{videos.length}})</h3>
  {{/if}}
  <div align="center">
    <div class="gallery">
      {{> gallery}}
    </div>
  </div>
</script>
<script id="gallery-template" type="text/x-handlebars-template">
  {{#each videos}}
    <div class="galleryvideocontainer .video-{{actorKey key}}" data-keywords="{{json keywords}}">
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
<script id="blurb-template" type="text/x-handlebars-template">
  <h3>{{toUpperCase name}} ({{galleryCount name}}){{#if profile}} - <a href="{{profile}}" class="content_link">Profile</a>{{/if}}</h3>
  <p>{{{description}}}</p>
</script>
<script>
  Handlebars.registerHelper('toUpperCase', s => s.toUpperCase());
  Handlebars.registerHelper('json', JSON.stringify);
  Handlebars.registerHelper("duration", d => Math.floor(d / 60) + ':' + (s => s < 10 ? '0' + s : s)(d % 60));
  var initials = n => {
    var match = n.match(/^([A-Z])[A-Za-z]*\s+([A-Z])[A-Za-z]*$/);
    return (match[1] + match[2]).toLowerCase();
  };
  var actorKey = k => k.match(/^[a-z]+/);
  Handlebars.registerHelper('galleryCount', n => videos.filter(v => actorKey(v.key) == initials(n)).length);
  Handlebars.registerHelper('actorKey', actorKey);
  Handlebars.registerHelper( 'eachInMap', function ( map, block ) {
   var out = '';
   new Array(...map.keys()).map(function(prop) {
      out += block.fn({key: prop, value: map.get(prop)});
   });
   return out;
} );

  Handlebars.registerPartial('gallery', document.getElementById('gallery-template').innerHTML);
  Handlebars.registerPartial('blurb', document.getElementById('blurb-template').innerHTML);

  document.getElementById('galleryfilters').innerHTML = Handlebars.compile(document.getElementById('filters-template').innerHTML)({videos: videos, actors: actors});

  var template = Handlebars.compile(document.getElementById('main-template').innerHTML);
  (window.onhashchange = () => {
    var key = window.location.hash.substring(1);
    var actor = key && actors.get(key);
    document.getElementById('gallerymaincontent').innerHTML = template({videos: actor ? videos.filter(v => actorKey(v.key) == key) : videos, actor: actor})
  })();

  document.getElementById('gallerysearch').oninput = function() {
    var query = this.value.toLowerCase();
    var videoContainers = new Array(...document.querySelectorAll('#gallerymaincontent .galleryvideocontainer'));
    videoContainers.forEach(vc => vc.classList.remove('gallery-filtered'));
    if (this.value !== '') {
      videoContainers.filter(vc => !JSON.parse(vc.dataset.keywords).reduce((a, k) => a || k.toLowerCase().match(new RegExp('\\b' + query)), false)).forEach(vc => vc.classList.add('gallery-filtered'));
    }
  };
</script>
