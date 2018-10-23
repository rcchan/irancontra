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
<!--
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-os1.php"><img src="thumbnails/os1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-os1.php" class="video">Opening statement by Sen. Inouye</a>
    <br />
    (12:13)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-os2.php"><img src="thumbnails/os2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-os2.php" class="video">Opening statement by Rep. Hamilton</a>
    <br />
    (5:59)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-os3.php"><img src="thumbnails/os3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-os3.php" class="video">Opening statement by Sen. Rudman</a>
    <br />
    (2:29)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-os4.php"><img src="thumbnails/os4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-os4.php" class="video">Opening statement by Rep. Cheney</a>
    <br />
    (4:20)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rs1.php"><img src="thumbnails/rs1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rs1.php" class="video">Secord on Financing the Operation</a>
    <br />
    (15:40)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rs2.php"><img src="thumbnails/rs2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rs2.php" class="video">Secord on the Enterprise's Profits</a>
    <br />
    (9:32)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rs4.php"><img src="thumbnails/rs4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rs4.php" class="video">Secord on Misleading Testimony</a>
    <br />
    (2:02)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rs5.php"><img src="thumbnails/rs5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rs5.php" class="video">Secord on Reagan's Awareness</a>
    <br />
    (1:44)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rs6.php"><img src="thumbnails/rs6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rs6.php" class="video">Secord and Senator Boren on Secord's Expertise</a>
    <br />
    (5:05)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rs7.php"><img src="thumbnails/rs7.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rs7.php" class="video">Secord and Representative Bloomfield on Reagan's Burden</a>
    <br />
    (5:25)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm1.php"><img src="thumbnails/rm1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm1.php" class="video">McFarlane on Reagan's Meeting With Saudi Leader</a>
    <br />
    (7:09)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm2.php"><img src="thumbnails/rm2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm2.php" class="video">McFarlane on Choosing Freed Hostages</a>
    <br />
    (2:06)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm3.php"><img src="thumbnails/rm3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm3.php" class="video">McFarlane on Legality and Shredding Documents</a>
    <br />
    (4:30)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm4.php"><img src="thumbnails/rm4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm4.php" class="video">McFarlane on Oil-Drilling Equipment</a>
    <br />
    (3:11)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm5.php"><img src="thumbnails/rm5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm5.php" class="video">McFarlane Contradicting Himself</a>
    <br />
    (4:52)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm6.php"><img src="thumbnails/rm6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm6.php" class="video">McFarlane and Senator Ruman on DEA Caper</a>
    <br />
    (4:33)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm7.php"><img src="thumbnails/rm7.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm7.php" class="video">McFarlane and Senator Mitchell on Misleading Testimony</a>
    <br />
    (9:51)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-rm8.php"><img src="thumbnails/rm8.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-rm8.php" class="video">McFarlane and Senator Cohen on Casey's Influence</a>
    <br />
    (1:45)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ac1.php"><img src="thumbnails/ac1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ac1.php" class="video">Opening Statement By Calero</a>
    <br />
    (1:12)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ac2.php"><img src="thumbnails/ac2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ac2.php" class="video">Calero On Arms Payment</a>
    <br />
    (1:12)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ac3.php"><img src="thumbnails/ac3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ac3.php" class="video">Calero on Reagan, Casey</a>
    <br />
    (1:45)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-fr1.php"><img src="thumbnails/fr1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-fr1.php" class="video">Rodriguez on Bush Meeting</a>
    <br />
    (1:15)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ea1.php"><img src="thumbnails/ea1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ea1.php" class="video">Abrams on "Monitor[ing] Ollie"</a>
    <br />
    (2:52)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ea2.php"><img src="thumbnails/ea2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ea2.php" class="video">Abrams on Soliticiting Brunei</a>
    <br />
    (3:49)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ea3.php"><img src="thumbnails/ea3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ea3.php" class="video">Abrams Arguing With Rep. Brooks</a>
    <br />
    (2:28)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ea4.php"><img src="thumbnails/ea4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ea4.php" class="video">Abrams and Sen. Nunn on How to Operate Government</a>
    <br />
    (0:38)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ea5.php"><img src="thumbnails/ea5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ea5.php" class="video">Abrams and Sen. Inouye on Being "Immoral"</a>
    <br />
    (3:26)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ah1.php"><img src="thumbnails/ah1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ah1.php" class="video">Hakim on "B. Button" and North's Death Insurance</a>
    <br />
    (7:59)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ah3.php"><img src="thumbnails/ah3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ah3.php" class="video">Hakim on North and the Hostages</a>
    <br />
    (5:47)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ah4.php"><img src="thumbnails/ah4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ah4.php" class="video">Hakim on North's Use of Reagan's Name</a>
    <br />
    (4:36)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ah5.php"><img src="thumbnails/ah5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ah5.php" class="video">Hakim on War with Russia</a>
    <br />
    (5:47)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-ah6.php"><img src="thumbnails/ah6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-ah6.php" class="video">Hakim Told by Sen. Inouye of the "Drastically Wrong" Situation</a>
    <br />
    (4:48)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-fh2.php"><img src="thumbnails/fh2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-fh2.php" class="video">Hall on Altering Documents</a>
    <br />
    (2:02)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-fh3.php"><img src="thumbnails/fh3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-fh3.php" class="video">Hall Calling North "An American Hero"</a>
    <br />
    (1:00)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-fh4.php"><img src="thumbnails/fh4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-fh4.php" class="video">Hall on Hiding Documents Under Her Clothes</a>
    <br />
    (2:28)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-fh6.php"><img src="thumbnails/fh6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-fh6.php" class="video">Hall Talks to Rep. Foley About Going "About the Written Law"</a>
    <br />
    (2:55)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on1.php"><img src="thumbnails/on1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on1.php" class="video">North Being "Here to Tell It All"</a>
    <br />
    (6:07)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on2.php"><img src="thumbnails/on2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on2.php" class="video">North on Shredding</a>
    <br />
    (1:39)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on3.php"><img src="thumbnails/on3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on3.php" class="video">North on More Shredding</a>
    <br />
    (5:25)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on4.php"><img src="thumbnails/on4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on4.php" class="video">North on the Signed Arms-For-Hostages Finding</a>
    <br />
    (11:51)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on5.php"><img src="thumbnails/on5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on5.php" class="video">North on Countries Who Wanted to Donate</a>
    <br />
    (1:49)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on6.php"><img src="thumbnails/on6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on6.php" class="video">North on Reagan's Knowledge of Private Fundraising</a>
    <br />
    (1:05)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on7.php"><img src="thumbnails/on7.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on7.php" class="video">North on the "Neat Idea" of the Diversion</a>
    <br />
    (2:36)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on8.php"><img src="thumbnails/on8.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on8.php" class="video">North on His Family's Safety and Meetiing Abu Nidal</a>
    <br />
    (4:56)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on9.php"><img src="thumbnails/on9.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on9.php" class="video">North on Casey's Knowledge</a>
    <br />
    (3:26)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on10.php"><img src="thumbnails/on10.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on10.php" class="video">North on Who in the Cabinet Knew What</a>
    <br />
    (4:58)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on11.php"><img src="thumbnails/on11.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on11.php" class="video">North on the Democratic Process and "Difference Between Lives and LIes"</a>
    <br />
    (15:45)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on12.php"><img src="thumbnails/on12.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on12.php" class="video">North on Why He's Not Lying Now</a>
    <br />
    (2:03)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on13.php"><img src="thumbnails/on13.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on13.php" class="video">North on Getting Fired and Covering Up the Diversion</a>
    <br />
    (19:33)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on14.php"><img src="thumbnails/on14.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on14.php" class="video">North on Shredding Embarassing Documents</a>
    <br />
    (3:50)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on16.php"><img src="thumbnails/on16.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on16.php" class="video">North on Reagan's "Body and Soul" Request</a>
    <br />
    (2:01)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on17.php"><img src="thumbnails/on17.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on17.php" class="video">North on Plausible Deniability</a>
    <br />
    (10:36)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-new1.php"><img src="thumbnails/new1.png" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-new1.php" class="video">Senator Mitchell on Patriotism and Disagreement With Government Policies</a>
    <br />
    (4:19)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on20.php"><img src="thumbnails/on20.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on20.php" class="video">North's Final Statement</a>
    <br />
    (0:44)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on21.php"><img src="thumbnails/on21.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on21.php" class="video">Rep. Hamilton on Patriotism</a>
    <br />
    (2:32)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-on22.php"><img src="thumbnails/on22.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-on22.php" class="video">Sen. Inouye on Military Ethics and the Nuremberg Trials</a>
    <br />
    (10:08)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp1.php"><img src="thumbnails/jp1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp1.php" class="video">Poindexter on Destroying the Finding</a>
    <br />
    (13:31)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp2.php"><img src="thumbnails/jp2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp2.php" class="video">Poindexter on Reagan's Knowledge of Selling Arms to Iran</a>
    <br />
    (6:17)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp3.php"><img src="thumbnails/jp3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp3.php" class="video">Poindexter on Keeping Reagan's Unaware</a>
    <br />
    (7:35)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp4.php"><img src="thumbnails/jp4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp4.php" class="video">Poindexter on Boland's Application to NSC</a>
    <br />
    (3:34)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp5.php"><img src="thumbnails/jp5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp5.php" class="video">Poindexter on What Reagan Approved</a>
    <br />
    (3:53)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp6.php"><img src="thumbnails/jp6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp6.php" class="video">Poindexter on reagan's Knowledge of North's Activities</a>
    <br />
    (2:25)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp7.php"><img src="thumbnails/jp7.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp7.php" class="video">Poindexter "Not Recall[ing]" Anything</a>
    <br />
    (7:06)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp8.php"><img src="thumbnails/jp8.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp8.php" class="video">Sen. Trible Asking Poindexter About the Naval Honor Code </a>
    <br />
    (1:39)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-jp9.php"><img src="thumbnails/jp9.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-jp9.php" class="video">Rep. Hamilton on Where the "Buck Stops"</a>
    <br />
    (2:56)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-gs1.php"><img src="thumbnails/gs1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-gs1.php" class="video">Shultz on Opposing Arms For Hostages</a>
    <br />
    (1:29)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-gs2.php"><img src="thumbnails/gs2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-gs2.php" class="video">Shultz on Reagan's Insistence on Hostage Recovery</a>
    <br />
    (4:33)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-gs3.php"><img src="thumbnails/gs3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-gs3.php" class="video">Shultz on Advisers Misleading Reagan</a>
    <br />
    (3:38)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-gs4.php"><img src="thumbnails/gs4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-gs4.php" class="video">Shultz on Reagan's Response to Press Conference</a>
    <br />
    (1:00)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-gs6.php"><img src="thumbnails/gs6.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-gs6.php" class="video">Senator Mitchell Asks Shultz Whether Reagan Kept Him Out of the Loop</a>
    <br />
    (5:12)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-gs7.php"><img src="thumbnails/gs7.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-gs7.php" class="video">Rep. DeWine Asks Shultz Why He Kept Himself Unaware</a>
    <br />
    (2:25)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-em2.php"><img src="thumbnails/em2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-em2.php" class="video">Meese on What Poindexter and the White House Knew</a>
    <br />
    (1:03)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-em3.php"><img src="thumbnails/em3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-em3.php" class="video">Meese on Boland's Applicability to the NSC</a>
    <br />
    (1:43)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-em4.php"><img src="thumbnails/em4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-em4.php" class="video">Sen. Rudman Asks Meese Why Reagan Did Not Talk to Poindexter or North</a>
    <br />
    (6:14)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-em7.php"><img src="thumbnails/em7.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-em7.php" class="video">Sen. Nunn Asks Meese About His Gathering of Information</a>
    <br />
    (5:40)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-dr1.php"><img src="thumbnails/dr1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-dr1.php" class="video">Regan on the "Bait and Switch"</a>
    <br />
    (6:23)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-dr2.php"><img src="thumbnails/dr2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-dr2.php" class="video">Regan on "Oil Drilling" as Cover Story</a>
    <br />
    (1:10)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-dr3.php"><img src="thumbnails/dr3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-dr3.php" class="video">Regan on Reagan's Lack of Knowledge</a>
    <br />
    (3:09)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-dr4.php"><img src="thumbnails/dr4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-dr4.php" class="video">Rep. Stokes Questions Regan on Reagan's Immunity Decisions</a>
    <br />
    (3:08)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-dr5.php"><img src="thumbnails/dr5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-dr5.php" class="video">Sen. Nunn Questions Regan on Wanting Neither Side to Win Iran-Iraq War</a>
    <br />
    (5:26)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cw1.php"><img src="thumbnails/cw1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cw1.php" class="video">Weinberger on Who Was Winning the Iran-Iraq War</a>
    <br />
    (2:49)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cw2.php"><img src="thumbnails/cw2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cw2.php" class="video">Rep. Aspin Questions Weinberger on Not Dealing with Iranian Moderates</a>
    <br />
    (5:38)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cw3.php"><img src="thumbnails/cw3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cw3.php" class="video">Rep. Broomfield Questions Weinberger on Iranian Relationship</a>
    <br />
    (4:03)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cw4.php"><img src="thumbnails/cw4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cw4.php" class="video">Weinberger Tells Sen. Sarbanes About "People With Their Own Agenda"</a>
    <br />
    (2:41)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cw5.php"><img src="thumbnails/cw5.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cw5.php" class="video">Sen. Nunn Questions Weinberger on Lack of Cabinet Communication</a>
    <br />
    (4:45)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cs1.php"><img src="thumbnails/cs1.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cs1.php" class="video">Closing Statement by Rep. Cheney</a>
    <br />
    (6:26)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cs2.php"><img src="thumbnails/cs2.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cs2.php" class="video">Closing Statement by Sen. Rudman</a>
    <br />
    (9:24)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cs3.php"><img src="thumbnails/cs3.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cs3.php" class="video">Closing Statement by Rep. Hamilton</a>
    <br />
    (5:04)
  </div>
</div>
<div class="galleryvideocontainer">
  <div class="galleryvideothumbnail">
    <a href="v-cs4.php"><img src="thumbnails/cs4.jpg" /></a>
  </div>
  <div class="galleryvideolink">
    <a href="v-cs4.php" class="video">Closing Statement by Sen. Inouye</a>
    <br />
    (10:01)
  </div>
</div>
-->
