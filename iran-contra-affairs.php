<? require ('templates/header.php'); ?>
<title>Understanding the Iran-Contra Affairs - The Iran-Contra Affairs</title>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
  $(window).ready(
    function(){
      $('#overview_outline li').not('#overview_download').find('span').click(
        function(e){
          $('#dynamiccontent > p').remove();
          $('#overview_outline ul').not($(e.target).parent().next('ul')).slideUp();
          $(e.target).parent().next('ul').slideDown();
          $('#overview_root').slideDown();
          var $section = $('div#overview_' + $.trim($(e.target).text().match(/[A-Za-z0-9 ]+/)[0]).replace(/ /g, '_')).slideDown();
          $('div.overview_section').not($section).slideUp();
          $section.find('div.overview_section').slideDown();
          $section.parentsUntil('#overview_root', '.overview_section').slideDown();
          
          $('a').each(function(i,e){
            if ($(e).attr('href').substring(0,1) === '#'){
              $(e).click(function(){
                $('span:contains(Bibliography)').click()
              });
            }
          });
        }
      );
    }
  );
</script>
</head>
<? require ('templates/irancontrabanner.php'); ?>
    
<div style="margin: 10px 0px 0px 20px; width: 760px" align="justify" id="welcomenote"><div align="left" class="bread_crumbs"><a href="index.php">Home</a> &raquo;  The Iran Contra Affairs</div>
<table>
<tr>
<td colspan=2 height=50><h2>The Iran Contra Affairs</h2></td></tr>
<tr>
<td width=225 valign="top">
	<table bgcolor=#f6ebe9 width="225" align="center" border=0>
    <tr><td align="center"><strong>Section Contents</strong></td></tr>
    <tr>
      <td align="left" valign="top">
        <div class="teaser-content">
        
          <u>Overview</u>
          <ul id="overview_outline">
            <li id="overview_download"><a href="overview.pdf" target="_blank">PDF Version</a></li>
            <li><span>Introduction</span></li>
            <li><span>Institutional History: NSC and CIA</span></li>
            <li><span>The Nicaraguan Story</span></li>
            <ul>
              <li><span>Somoza Dynasty</span></li>
              <li><span>Sandinistas in Power: U.S.-Nicaraguan relations still diplomatic</span></li>
              <li><span>Reagan Administration: Intervention and Propoganda</span></li>
              <li><span>Boland I & II and the Beginnings of Covert Defiance of Congress</span></li>
              <li><span>The Diversion Scheme</span></li>
              <li><span>Intelligence Authorization Act: Congress Open to Re-supporting Contras</span></li>
            </ul>
            <li><span>The Iran Story</span></li>
            <ul>
              <li><span>From Secular to Islamic Republic</span></li>
              <li><span>Iran's need for Weapons Result in U.S. Opportunities</span></li>
              <li><span>The Enterprise</span></li>
              <li><span>Lisbon Airport Crisis</span></li>
              <li><span>The Second Channel</span></li>
            </ul>
            <li><span>Unraveling the Story</span></li>
            <li><span>Investigating the Iran-Contra Affair</span></li>
            <ul>
              <li><span>The Tower Commission</span></li>
              <li><span>Independent Counsel Walsh</span></li>
              <li><span>Oliver North</span></li>
              <li><span>John Poindexter</span></li>
            </ul>
            <li><span>Bibliography</span></li>
          </ul>
          
          <u>Timelines</u>
          <ul>
            <li><a href="timeline-n-i.php">Nicaragua and Iran</a></li>
            <li><a href="timeline-nicaragua.php">Nicaragua</a></li>
            <li><a href="timeline-iran">Iran</a></li>
          </ul>
          <u>Nicaragua</u>
          <ul>
            <li><a href="n-background.php">Background</a></li>
            <li><a href="n-sandinistas.php">The Sandinistas</a></li>
            <li><a href="n-contras.php">The Contras</a></li>
            <li><a href="n-contrasus.php">U.S. Support</a></li>
            <li><a href="n-since.php">Nicaragua Since Iran-Contra</a></li>
          </ul>
          <u>Iran</u>
          <ul>
            <li><a href="i-background.php">Background</a></li>
            <li><a href="i-otherconflicts.php">Other Relevant Conflicts</a></li>
            <li><a href="i-thebeginning.php">The Beginning of the Affair</a></li>
            <li><a href="i-theexpansion.php">The Expansion</a></li>
            <li><a href="i-since.php">Iran Since Iran-Contra</a></li>
          </ul>
        </div>
      </td></tr>
    </table>
    
</td>
<td align="justify" valign="top" id="dynamiccontent"><p>The Iran-Contra Affairs of the 1980s stemmed from the Reagan Administration's foreign policies toward two seemingly unrelated countries, Nicaragua and Iran.&nbsp; The Administration believed that changes to these countries that occurred in the 1970s threatened U.S. national interests.</p>
  <p>In Nicaragua, a socialist movement (the Sandinistas) seized power through a revolution in 1979.&nbsp; The Administration, fearful of the potential spread of socialism throughout Latin America, eventually backed paramilitaries (the contras) who sought to overthrow this revolutionary regime.&nbsp; In the section on Nicaragua, you will find a brief background of U.S. policy toward the region since the 19th Century; information on the history, composition, ideologies, and policies of the Sandinistas and contras; and a detailed description of the actions the United States took in Nicaragua from 1979 until the Iran-Contra Affairs.&nbsp; You will also find a brief description of Nicaragua since the affairs.</p>
  <p>In 1979, power also changed hands in Iran when a radical Islamic movement overthrew the U.S.-backed government.&nbsp; Because the revolutionary government was unfriendly toward the United States and potentially allied with the Soviet Union, the Administration tried to bolster moderate elements within Iran, a policy that became more complicated when Iranian-backed Lebanese terrorist groups seized American hostages.&nbsp; In the Iran section, you will find a history of U.S. foreign policy toward Iran, as well as a history of Iran's domestic politics.&nbsp; Additionally, you will find a detailed section on the Reagan Administration's policies toward Iran with regard to both the regime and U.S. hostages.</p>
  <p>&nbsp;</p><? include('overview.html') ?></td></tr></table>
</div>


<? require ('templates/footer.php'); ?>
