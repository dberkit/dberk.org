<?php
	define("VALID_IP",     "143.44");
?>
<html>
	<head>
		<title>Olivier Messiaen :: Quatuor pour la Fin du Temps</title>
		<meta name="description" content="A web resource on Olivier Messiaen's Quartet for the End of Time" />
		<meta name="keywords" content="Messiaen, Olivier Messiaen, Quartet for the End of Time, music theory, music analysis" />
			
		<link rel="stylesheet" href="stylesheets/screen.css"/>
		
<!-- 	<link href="css/liquid-green.css" rel="stylesheet" type="text/css" /> -->

		<script src="lib/prototype.js" type="text/javascript"></script>

		<script src="src/livepipe.js" type="text/javascript"></script>
		<script src="src/tabs.js" type="text/javascript"></script>
		
		<script type="text/javascript" src="soundmanager/soundmanager2.js"></script>
		<script type="text/javascript" src="soundmanager/inlineplayer.js"></script>
		
<!--		<script src="lib/effects.js" type="text/javascript"></script> -->
<!--		<script src="src/cookie.js" type="text/javascript"></script> -->
<!--		<script src="lib/scriptaculous.js" type="text/javascript"></script> -->
<!--		<script src="src/event_behavior.js" type="text/javascript"></script> -->
<!--		<script src="src/hotkey.js" type="text/javascript"></script> -->
<!--		<script src="src/scrollbar.js" type="text/javascript"></script> -->
<!--		<script src="/lib/controls.js" type="text/javascript"></script> -->
<!--		<script src="lib/dragdrop.js" type="text/javascript"></script> -->
<!--		<script src="lib/slider.js" type="text/javascript"></script> -->
<!--		<script src="lib/resizable.js" type="text/javascript"></script> -->		
<!--		<script src="src/contextmenu.js" type="text/javascript"></script> -->
<!--		<script src="src/progressbar.js" type="text/javascript"></script> -->
<!--		<script src="src/rating.js" type="text/javascript"></script> -->
<!--		<script src="src/selection.js" type="text/javascript"></script> -->
<!--		<script src="src/selectmultiple.js" type="text/javascript"></script> -->
<!--		<script src="src/textarea.js" type="text/javascript"></script> -->
<!--		<script src="src/window.js" type="text/javascript"></script> -->
			
<script type="text/javascript">


			function checkAll(field) {
				for (i = 0; i < field.length; i++) {
					field[i].checked = true ;
					Effect.BlindDown('mvt'+(i+1), { duration: 1.5 });
				}
			}
			
			function uncheckAll(field) {
				for (i = 0; i < field.length; i++) {
					field[i].checked = false ;
					Effect.BlindUp('mvt'+(i+1), { duration: 1.5 });
				}
			}
			

		</script>

	
		
	<style>
		#main .navtabs ul.section_tabs {
			margin:0;
		}

		#main .navtabs ul.subtabs_overview,
		#main .navtabs ul.subtabs_elements,
		#main .navtabs ul.subtabs_analysis {
			margin:0 0 10px 0;
		}

		#main .navtabs ul.section_tabs li.tab a,
		#main .navtabs ul.subtabs_overview li.tab a,
		#main .navtabs ul.subtabs_elements li.tab a,
		#main .navtabs ul.subtabs_analysis li.tab a {
			font-size:10px;
			padding:0;
			width:168px;
		}

		#main .navtabs ul.subtabs_elements li.tab a {
			width:168px;
		}

		#main .navtabs ul.subtabs_analysis li.tab a {
			width:105px;
		}
		
		#main .navtabs ul.subtabs_overview li.tab a {
			width:168px;
		}
		
		.td1 {
			background-color: #ffee99;
			text-align: left;
		}
		.td2 {
			background-color: #ddeeff;
			text-align: left;
		}
		.td3 {
			background-color: #eeffdd;
			text-align: left;
		}
	</style>

	</head>
	<body class="index">
		

		<div id="outer_container">
			<div id="container">
				<div id="header"></div>
				<div id="main">
					<div id="main_container">
					<!-- available width = 840px {2/420, 3/280, 4/210, 5/168, 6/140, 7/120, 8/105-->
					
						<div class="navtabs">
							<ul class="section_tabs" id="main_tabs">
								<li class="tab"><a href="#intro">Intro</a></li>
								<li class="tab"><a href="#listen">Listen</a></li>
								<li class="tab"><a href="#analysis">Analysis</a></li>
								<li class="tab"><a href="#musicalelements">Musical&nbsp;Elements</a></li>
								<li class="tab"><a href="#biblical">Biblical Source</a></li>
							</ul>
	
						<script>
							document.observe('dom:loaded',function(){
								new Control.Tabs('main_tabs',{
									linkSelector: 'li.tab a'
								});
							});
						</script>
						</div>

						<div id="intro">
							<p><img src="images/messiaen2.jpg" width="230" height="220" align="right">							
<p>Olivier Messiaen was born in Avignon, France on December 10, 1908, and so in 2008 we celebrate his centennial.  He was a composer, organist, and renowned teacher, and one of the most significant French musicians of his generation.  According to Grove Music Online, Messiaen "was a musician apart. The sources of his music may be traced on the one hand to the French organ tradition and on the other to the innovations of Debussy, Stravinsky and Bartók, but right at the start of his career he found a modal system that has a completely individual sound, and to this he remained true, even when he vastly extended the possibilities of his style after World War II.  He was alone, too, among major 20th-century composers in his joyously held Catholic faith, which again was unswerving, however much he came to value non-European cultures, especially Indian and Japanese.  As a teacher he instructed many of the most prominent composers of the next two generations."  The musicologist Paul Griffiths gives a brief general description of Messiaen's music as follows:

<div id="quote">"He had his music move with a singleness of purpose, even while it drew on a range of sources (chant and late Romantic orchestral sound, birdsongs and irregular rhythmic patterns) with no attempt at synthesis.  Indeed, his mosaic forms, coupled with static harmonies derived from his personal system of modes, give even his earliest pieces an original sense of time not as flow but as pre-existing, revealing itself to human temporality in sequences of brilliant unalike instants."</div></p>

<p>Messiaen's most significant composition, the Quartet for the End of Time, received its premiere performance on January 15, 1941 under extraordinary and unusual circumstances.  Messiaen wrote the work while a captive in a German prisoner of war camp during World War Two. That camp was the Stalag VIII A, located near the town of Görlitz-Moys in Silesia, Germany. During the course of his captivity, Messiaen met three fellow prisoners who were also accomplished musicians: Etienne Pasquier, a world-class cellist who had already secured an international reputation as a member of the Pasquier Trio; Jean Le Boulaire, a violinist who had studied at the Paris Conservatory; and Henri Akoka, a clarinetist who was a member of the Paris-based Orchestre National de la Radio.  Accordingly, Messiaen scored his quartet for violin, cello, clarinet, and piano, and these four prisoners gave the piece that first performance in 1941 before an audience largely consisting of other prisoners of war.  The performance took place in one of the prison barracks that had been converted into a makeshift theater, and with Messiaen playing on an old upright piano.</p>

<p>The quartet exemplifies all of the principal characteristics mentioned above, drawing upon plainchant, imitating birdsongs, using irregular rhythmic patterns, and above all serving as a profound expression of Messiaen's Catholic faith: the title refers to a passage in the book of Revelation, where an angel announces "there will be no more time."</p>

<p>The Quartet for the End of Time provides many interesting possibilities for discussion in Freshman Studies.  There are two fascinating stories connected with the piece-the story of its composition in a prison camp, and the apocalyptic story told by the piece itself.  [Whether we can believe him or not, Messiaen claimed that these two stories were not directly related to one another!]  In addition, the quartet can be approached from many different angles: the use of many interesting or novel ways to organize musical time, the use of birdsong, the use of tone color and of color imagery (the angel is crowned with a rainbow), and the representation of other elements from Messiaen's biblical inspiration.  Each movement may be critically compared with specific passages in the composer's preface to the work, and the analysis given on this website greatly facilitates such comparisons.</p>

<p>Soon after the 1941 premiere of the quartet, Messiaen was released, and within a year he had been appointed to a position teaching harmony at the Paris Conservatory.  His classes became legendary, and he trained and influenced nearly all of the most important musicians (including Boulez, Xenakis, and Stockhausen) in Europe's post war avant-garde.  Messiaen died in Paris on April 28, 1992.</p>
<div id="credits">
<p>This web site was designed by David Berk. The &quot;Analysis,&quot; &quot;Musical Elements,&quot; and &quot;Biblical Source&quot; sections were all written by Gene Biringer. The &quot;Introduction&quot; was written by Howard Niblock. Comments and suggestions can be sent to <a href="mailto:david.berk@lawrence.edu">david.berk@lawrence.edu</a>. We hope you enjoy using this resource!</p></div>
						</div>
						
						<div id="listen">
							<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
							<h3>Listen to the Quartet</h3>
							<p>Click the <img src="img/sound.gif" alt="image" width="13" height="12" border="0"/> icon to play in RealPlayer.</p>
							<table id="my_table" cellspacing="0">
								<tbody>
									<tr class="shaded">
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_liturgie_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>I. Liturgie de cristal</td>
									</tr>
									<tr>
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_vocalise_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>II. Vocalise, pour l'Ange qui announce la fin du Temps</td>
									</tr>
									<tr class="shaded">
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_abime_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>III. Ab&icirc;me des oiseaux</td>
									</tr>
									<tr>
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_intermede_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>IV. Interm&egrave;de </td>
									</tr>
									<tr class="shaded">
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_louange_eternite_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>V. Louange &agrave; l'Eternit&eacute; de J&eacute;sus</td>
									</tr>
									<tr>
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_danse_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>VI. Danse de la fureur, pour les sept trompettes</td>
									</tr>
									<tr class="shaded">
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_fouillis_78352rg.rm" target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>VII. Fouillis d'arcs-en-ciel, pour l'Ange qui announce la fin du Temps</td>
									</tr>
									<tr>
										<td><a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_louange_immortalite_78352rg.rm"  target="_blank"><img src="img/sound.gif" alt="image" width="13" height="12" border="0"/></a></td>
										<td>VIII. Louange &agrave; l'Immortalit&eacute; de J&eacute;sus</td>
									</tr>
								</tbody>
							</table><br>
							
								<?php } else { ?>
							<p>Certain portions of this site are restricted to oncampus use only.</p>
							<?php } ?>
							
							<h3>About the Performers</h3>
							<p>Messiaen composed <em>Quatour pour la Fin du Temps</em> in 1940-41 for the following performers, who gave the premier performance on January 15, 1941 at Stalag VIIIA in Gorlitz, Silesia, the concentration camp in which they were imprisoned.</p>
							<ul>
							  <li>Jean Le Boulaire, violin</li>
						      <li>Henri Akoka, clarinet</li>
						      <li>Etienne Pasquier, cello </li>
						      <li>Olivier Messiaen, piano </li>
						  </ul>
							<p>In Freshman Studies we are using the 1976 RCA recording of the Quartet, performed by <strong>Tashi</strong>, an innovative ensemble of four  musicians that formed in the 1970s in order to perform music from outside the mainstream classical tradition. <strong>Tashi</strong> is:</p>
							<ul>
								<li>Peter Serkin, piano</li>
								<li>Ida Kavafian, violin</li>
								<li>Fred Sherry, cello</li>
								<li>Richard Stoltzman, clarinet</li>
							</ul>
								


						</div>

					      
					<!-- </div> -->
						
						<div id="analysis">
							<div class="navtabs">
								<ul class="subtabs_analysis" id="analysis_tabs">
									<li class="tab"><a href="#mvt1">I.</a></li>
									<li class="tab"><a href="#mvt2">II.</a></li>
									<li class="tab"><a href="#mvt3">III.</a></li>
									<li class="tab"><a href="#mvt4">IV.</a></li>
									<li class="tab"><a href="#mvt5">V.</a></li>
									<li class="tab"><a href="#mvt6">VI.</a></li>
									<li class="tab"><a href="#mvt7">VII.</a></li>
									<li class="tab"><a href="#mvt8">VIII.</a></li>
								</ul>
		
							<script>
								document.observe('dom:loaded',function(){
									new Control.Tabs('analysis_tabs',{
										linkSelector: 'li.tab a'
									});
								});
							</script>
							</div>
														
							<div id="mvt_buffer">
							<div id="mvt1">
							<h3>I. Liturgie de cristal (Crystal liturgy)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_liturgie_78352rg.rm" target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />									</a>
								<?php } else { } ?>
							</div>
							<div id="instrumentation"><p>violin, clarinet, cello (harmonics), and piano</p></div>
							<div id="analysis_quote">
								<div id="quote">
									<p>&quot;Between three and four in the morning, the awakening of birds: a solo blackbird or nightingale improvises, surrounded by a shimmer of sound, by a halo of trills lost very high in the trees. Transpose this onto a religious plane and you have the harmonious silence of Heaven.&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_i-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_i-form.gif" alt="image" width="785" height="186" border="0" /></a></div>
					    	</div>
							</div></div>
							
							
							<div id="mvt_buffer">
							<div id="mvt2">
							<h3>II. Vocalise, pour l'Ange qui announce la fin du Temps (Vocalise, for the Angel who announces the end of Time)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_vocalise_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
							<div id="instrumentation"><p>violin, clarinet, cello, and piano (clarinet tacit in the middle section) </p></div>
							<div id="analysis_quote">
								<div id="quote">
									<p>&quot;The first and third sections (very short) evoke the power of the mighty Angel, crowned with a rainbow and clothed by a cloud, who sets one foot upon the sea and one foot upon the earth. In the middle section &ndash; these are the impalpable harmonies of heaven. On the piano, gentle cascades of blue-orange chords, garlanding, with their distant carillon the quasi-plansong chanting of the violin and cello.&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_ii-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_ii-form.gif" alt="image" width="785" height="167" border="0" /></a></div>
					    	</div>
							</div></div>
							
							
							<div id="mvt_buffer">
							<div id="mvt3">
							<h3>III. Ab&icirc;me des oiseaux (Abyss	of	the	birds)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_abime_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
							<div id="instrumentation"><p>clarinet solo </p></div>
							<div id="analysis_quote">
								<div id="quote">
									<p>&quot;Clarinet solo. The abyss is Time, with its sorrows and its weariness. The birds are the opposite of Time; they are our desire for light, for stars, for rainbows and joyful songs!&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_iii-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_iii-form.gif" alt="image" width="785" height="106" border="0" /></a></div>
					    	</div>
							</div></div>

							
							<div id="mvt_buffer">
							<div id="mvt4">
							<h3>IV. Interm&egrave;de (Intermezzo)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_intermede_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
					    	<div id="instrumentation"><p>violin, clarinet, and cello </p></div>
							<div id="analysis_quote">
								<div id="quote">
					    			<p>&quot;A <a href="#">scherzo</a> of more superficial character than the other movements, but linked to them nonetheless by melodic reminiscences.&quot;</p>
				          		</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
				          	</div>
				          	<div id="analysis_image"><p><b>Click to enlarge</b></p>
				          	  <div align="center"><a href="images/analysis/messiaen-qrt_iv-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_iv-form.gif" alt="image" width="785" height="129" border="0" /></a></div>
				          	</div>
							</div></div>

							
							<div id="mvt_buffer">
							<div id="mvt5">
							<h3>V. Louange &agrave; l'Eternit&eacute; de J&eacute;sus (Praise for the Eternity of Jesus)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_louange_eternite_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
					    	<div id="instrumentation"><p>cello and piano </p></div>
							<div id="analysis_quote">
								<div id="quote">
					    			<p>&quot;Jesus is here considered as the Word. A long phrase for the cello, infinitely slow, magnifies with love and reverence the eternity of this powerful and gentle Word, 'which the years can never efface'. Majestically, the melody unfolds in a kind of tender and supreme distance. 'In the beginning was the Word, and the Word was in God, and the Word was God.' [John 1:1]&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_v-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_v-form.gif" alt="image" width="785" height="137" border="0" /></a></div>
					    	</div>
							</div></div>

							
							<div id="mvt_buffer">
							<div id="mvt6">
							<h3>VI. Danse de la fureur, pour les sept trompettes  (Dance of fury, for the seven trumpets)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_danse_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
					    	<div id="instrumentation"><p>violin, clarinet, cello, and piano </p></div>
							<div id="analysis_quote">
								<div id="quote">
					    			<p>&quot;Rhythmically the most characteristic piece of the set. The four instruments in unison are made to sound like gongs and trumpets (the first six trumpets of the apocalypse followed by various catastrophes, the trumpet of the seventh angel announcing the consummation of the mystery of God). The use of added values, augmented or diminished rhythms, and non-retrogradable rhythms. Music of stone, fearful granite sonorities; the irresistible movement of steel, enormous blocks of purple fury, of icy intoxication. Listen above all to the terrible fortissimo of the theme in augmentation and the changes in register of its different notes, towards the end of the piece.&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_vi-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_vi-form.gif" alt="image" width="785" height="141" border="0" /></a></div>
					    	</div>
							</div></div>

							
							<div id="mvt_buffer">
							<div id="mvt7">
							<h3>VII. Fouillis d'arcs-en-ciel, pour l'Ange qui announce la fin du Temps (Tumult of rainbows, for the angel who announces the end of Time)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_fouillis_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
					    	<div id="instrumentation"><p>violin, clarinet, cello, and piano </p></div>
							<div id="analysis_quote">
								<div id="quote">
					    			<p>&quot;Certain passages from the second movement return. The mighty Angel appears, and above all the rainbow which crowns him (the rainbow: a symbol of peace, wisdom, and of all sounding and luminous vibrations). In my dreams, I hear recognized chords and melodies, I see known colours and forms; then, after this transitory stage, I pass beyond reality and submit in ecstasy to a dizziness, a gyratory interlocking of superhuman sounds and colours. These swords of fire, these flows of blue-orange lava, these sudden stars; this is the tumult of rainbows.&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_vii-form-large.gif" target="_blank"><img src="images/analysis/messiaen-qrt_vii-form.gif" alt="image" width="785" height="233" border="0" /></a></div>
					    	</div>
							</div></div>

							
							<div id="mvt_buffer">
							<div id="mvt8">
							<h3>VIII. Louange &agrave; l'Immortalit&eacute; de J&eacute;sus (Praise for the Immortality of Jesus)</h3>
							<div id="btn">
								<?php if(substr($_SERVER['REMOTE_ADDR'], 0, 6) == VALID_IP) { ?>
									<a href="http://www.lawrence.edu:8888/ramgen/eres/music/muhi/202/messiaen_quartet_time_louange_immortalite_78352rg.rm"  target="_blank" >
										<img src="images/play-in-realplayer.gif" alt="play" width="146" height="25" align="top" border="1" />
									</a>
								<?php } else { } ?>
							</div>							
					    	<div id="instrumentation"><p>violin and piano </p></div>
							<div id="analysis_quote">
								<div id="quote">
					    			<p>&quot;A long violin solo, acting as a pendant to the cello solo of the fifth movement. Why this second eulogy? It is addressed more specifically to the second aspect of Jesus &ndash; the man Jesus &ndash; to the Word made flesh, resurrected immortally to grant us life. It is all love. Its slow ascent towards the extreme high register is the ascent of man towards his God, of the Child of God towards his Father, of the deified Being towards Paradise.&quot;</p>
								</div>
								<div id="source"><p>From Messiaen's preface to the published score, p. i. Translated by Anthony Pople.</p></div>
							</div>
					    	<div id="analysis_image"><p><b>Click to enlarge</b></p>
					    	  <div align="center"><a href="images/analysis/messiaen-qrt_viii-form-larg.gif" target="_blank"><img src="images/analysis/messiaen-qrt_viii-form.gif" alt="image" width="785" height="131" border="0" /></a></div>
					    	</div>
							</div></div>

						</div>
						
						<div id="musicalelements">
							<div class="navtabs">
								<ul class="subtabs_elements" id="elements_tabs">
									<li class="tab"><a href="#texture">Texture</a></li>
									<li class="tab"><a href="#rhythm">Rhythm & Meter</a></li>
									<li class="tab"><a href="#scale">Scale & Mode</a></li>
									<li class="tab"><a href="#birdsong">Birdsong</a></li>
									<!--<li class="tab"><a href="#color">Color</a></li>-->
									<li class="tab"><a href="#glossary">Glossary</a></li>
								</ul>
		
							<script>
								document.observe('dom:loaded',function(){
									new Control.Tabs('elements_tabs',{
										linkSelector: 'li.tab a'
									});
								});
							</script>
							</div>
							
							<div id="texture">
							<h3>Texture</h3>
							<p>Much as  the texture of a fabric arises from the distinctive qualities of its individual threads and the way in which the threads are woven together,  texture in music arises from the various qualities of the instrumental or vocal parts and the ways in which the parts are combined. In a piece of fabric, threads might differ in  color, weight, and thickness, and they  can be woven together in various ways; similarly, in a piece of music each part has its own distinctive timbre (tone color), register (highness or lowness), and dynamic (loudness or softness), and it can be combined with others in different ways. The heterogeneous instrumentation of Messiaen's quartet &ndash;  violin, clarinet, 'cello, and piano &ndash; promises a rich and varied musical texture, and indeed part of the composition's appeal is its exploration of the sonic and textural possibilities of this distinctive combination of instruments. </p>
							<p>Musical textures can be thick or thin, simple or complex, and all gradients  in between, depending on the number of parts being played and on the way in which they interact. Musicians make a basic distinction  between <a href="#">monophonic</a> (&quot;one voiced&quot;) and <a href="#">polyphonic</a> (&quot;many voiced&quot;) textures, but especially in the latter category there are many possibilities. The following examples from Messiaen's quartet give some sense of the range of possibilities. </p>
							<h4>Monophonic texture</h4>
							<p>The entire third movement, for clarinet solo, is a straightforward example of a monophonic texture: one instrument playing a  melody. Here is an excerpt from the end of the piece. </p>
							
							<div id="example_number">
							  <p>Example 1: &quot;Abyss of the Birds,&quot; bars 35-37 </p>
							</div>
							<div id="play"><a href="audio/texture/01-messiaen-qrt_iii.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/01-messiaen-qrt_iii_35-37.gif" alt="image" width="725" height="149" /></div>
							
							<p>A more complex example of a monophonic texture occurs in the sixth movement,  which consists throughout of a single melody played simultaneously by the four instruments but in different registers &ndash; the various parts separated by the interval of an octave. </p>
							<p>Example 2: </p>
							
							<div id="example_number">
							  <p>Example 2:  &quot;Dance of Fury, for the Seven Trumpets,&quot; bars 1-4 </p>
							</div>
							<div id="play"><a href="audio/texture/02-messiaen-qrt_vi.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/02-messiaen-qrt_vi_1-4.gif" alt="image" width="573" height="707" /></div>
							
							<h4>Polyphonic texture</h4>
							<p>There are several types of polyphonic texture, and the next example, from the beginning of the eighth movement (&quot;Praise to the Immortality of Jesus&quot;), illustrates a common type and one that Messiaen uses frequently in the Quartet: <a href="#">melody and accompaniment</a>. In this instance, the 'cello melody is accompanied by repeated chords in the accompaniment. The succession of chords can also be heard as consisting of four distinct parts, but because they are played by the same instrument in the same rhythm, they have a timbral and rhythmic identity that is characterisitic of a <a href="#">homophonic</a> (&quot;same voiced&quot;) texture. Thus the polyphonic texture of the passage as a whole consists of a monophonic melody and a homophonic accompaniment. </p>

							<div id="example_number">
							  <p>Example 3:  &quot;Praise to the Immortality of Jesus,&quot; bars 1-3</p>
							</div>
							<div id="play"><a href="audio/texture/03-messiaen-qrt_viii.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/03-messiaen-qrt_viii_1-3.gif" alt="image" width="725" height="301" /></div>

                            <p>Another common type of polyphonic texture features individual parts that, while unified by harmony and key, are distinguishably independent melodies. This texture, called <a href="#">contrapuntal</a> after the practice of combining melodies in <a href="#">counterpoint</a>,  occurs infrequently in Messiaen's Quartet; the following illustration (Example 4) is from a string quartet by Joseph Haydn (1832-1809). Johann Wolfgang von Goethe is said to have compared the classical string quartet to &quot;a conversation among four educated equals&quot; &ndash; an apt description of the contrapuntal texture often found in chamber music, in which each instrumental part is clearly independent from the others while unfied by the common topic of &quot;conversation&quot;: the musical themes and variations. In the course of such a conversation, one instrument might present an idea, develop it a bit, be interrupted by another which develops the idea further or digresses before yet another introduces a new idea altogether, the first now perhaps pausing to reflect a bit before offering a rebuttal or posing a question. </p>
    
							<div id="example_number">
							  <p>Example 4:  Joseph Haydn, String Quartet in C major, Op. 74, no. 3, II, bars 61-64 </p>
							</div>
							<div id="play"><a href="audio/texture/04-fjh-qrt_76n3_ii.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/04-fjh-qrt_76n3_ii_v3.gif" alt="image" width="753" height="377" /></div>
	
	                        <p>Perhaps the closest Messiaen comes to a genuinely contrapuntal texture is in the fourth movement &ndash; the most traditional in form, harmony, and rhythm and meter. Although the movement begins (Example 5a) with the violin, clarinet, and cello in rhythmic unison &ndash; each playing the same melody but in three different octaves &ndash; the texture subtly changes in bar 10, when the instruments diverge and play different melodic lines, though still in the same rhythm. This is a step toward the harmonious independence of melodic lines that is the hallmark of counterpoint. </p>
	                        <div id="example_number">
							  <p>Example 5a:  &quot;Intermezzo,&quot;  bars 1-14</p>
							</div>
							<div id="play"><a href="audio/texture/05a-messiaen-qrt_iv.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/05a1-messiaen-qrt_iv_1-8.gif" alt="image" width="523" height="417" /></div>
							<div id="musical_example"><img src="images/texture/05a2-messiaen-qrt_iv_9-14.gif" alt="image" width="519" height="387" /></div>
	
	                        <p>Later in the movement the texture becomes even more contrapuntal (Example 5b), when the principal and accompanying melodies are clearly differentiated by rhythm. In bars 41-44, the violin and cello introduce a melody that will become the principal theme of the sixth movement while the clarinet accompanies with staccato repeated notes. In bar 45 the conversation takes a different turn, as the clarinet takes over the melody while the strings (in rhythmic unison) play a more active accompaniment. The dialogue continues in bar 49-51 as the violin and cello echo the end of the clarinet melody and are themselves echoed by the clarinet. </p>
	                        <div id="example_number">
							  <p>Example 5b:  &quot;Intermezzo,&quot; bars 45-51</p>
							</div>
							<div id="play"><a href="audio/texture/05b-messiaen-qrt_iv.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/05b-messiaen-qrt_iv_44-51.gif" alt="image" width="521" height="590" /></div>
	
							<h4>Heterophonic texture </h4>
							<p>The term <a href="#">heterophony</a> (&quot;different voiced&quot;) can be understood in at least two ways. Ethnomusicologists use it to describe textures in which a melody in one part (e.g., a sung part) is simultaneously combined with a  varied form of the same melody (usually more elaborate) played by one or more of the other parts (e.g., instruments). Heterophonic textures of this kind do not occur in Messiaen's Quartet; whenever a melody is simultaneously sounded in more than one part, it is always exactly the same except for  possible octave transpositions.  </p>
							<p>However, the term can also describe  certain polyphonic textures, like that of the first movement of Messiaen's Quartet, in which there is no discernable relationship among some of the parts. This is highly unusual  in music of the 18th and 19th centuries, in which the different parts of a polyphonic texture, even if recognizably distinct, are generally unified in some way: by being in the same key, by using the same or similar  melodic or rhythmic ideas, or by  imitating one another at some interval other than an octave (as in a fugue by Bach). In &quot;Liturgie de cristal,&quot; however, the violin and clarinet parts, which are meant to evoke birdsong, are so independent of the  cello part and, especially, the homophonic  piano part that they seem to occupy a wholly different sonic world. Rather than a &quot;conversation among equals&quot; on a  topic of common interest, here four characters are speaking simulatneously, unresponsive and perhaps even oblivious to the others. Instead of a harmonious counterpoint between independent but related melodies, we hear a juxtaposition of seemingly unrelated ideas &ndash; a true heterophony. </p>
	
							<div id="example_number">
							  <p>Example 6: &quot;Liturgie de cristal,&quot; bars 1-7</p>
							</div>
							<div id="play"><a href="audio/texture/06-messiaen-qrt_i.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/texture/06-messiaen-qrt_i_1-7-a.gif" alt="image" width="522" height="626" /></div>
							<div id="musical_example"><img src="images/texture/06-messiaen-qrt_i_1-7-b.gif" alt="image" width="538" height="634" /></div>
	
							<p>&nbsp;</p>
							<p>&nbsp; </p>
							<div id="next_prev"><p><a href="#rhythm">Next >> "Rhythm & Meter"</a></p></div>
							</div>
							
							<div id="rhythm">
							<h3>Rhythm & Meter</h3>
							<p>Like many composers of the 20th century, Messiaen sought to free <a href="#">rhythm</a> from the metrical regularity that is characteristic of western classical music of the 18th and 19th centuries and of  much popular music even today. Minuets and waltzes in triple <a href="#">meter</a>, marches and polkas in duple &ndash; each gives rise not only to a steady beat but to a regular grouping of beats: 1-2-3, 1-2-3, 1-2-3 or 1-2, 1-2, 1-2. Messiaen's music abounds in rhythms that defy such regularity. This is not to say that Messiaen's rhythms are  free, unpatterned, or incoherent, but rather that, even when patterned, they include irregularities and complications that defy any sense of regular metrical grouping.</p>
							<p>In <em>The Technique of My Musical Language</em> (1944), a treatise written only a few years after the Quartet was composed, Messiaen credits his study of ancient Greek and Hindu rhythms  as stimulating his experiments in unmetered (&quot;ametrical&quot;) rhythm. He cites three specific techniques, examples of which abound in the Quartet:</p>
							<ul>
							  <li>use of added rhythmic values</li>
							  <li>rhythmic augmentation and diminution</li>
							  <li>non-retrogradable rhythms</li>
							</ul>
							<div id="next_prev"><p><a href="#texture">Prev << "Texture"</a>
							<a href="#scale">Next >> "Scale & Mode"</a></p></div>
							
							</div>
							
						  <div id="scale">
							<h3>Scale &amp; Mode</h3>
							<p>Like many composers, Messiaen bases his harmonic and melodic language upon <a href="#">scales</a> or <a href="#">modes</a>. Consciously or not, composers use scales and modes to generate the pitches of a composition; listeners can hear them as the abstract patterns that underlay a particular melody or harmonic progression. For example, in the principal theme from  the last movement of Beethoven's Fifth Symphony, we can hear the C major scale as the source of the melody's pitches and its structural basis. Although the melody consists of many more than seven pitches, each is a member of the the major scale whose first and most stable degree is C. </p>

							

							<div id="example_number"><p>Example 1: Beethoven, Symphony no. 5, fourth movement</p></div>

							<div id="play"><a href="audio/scale_mode/ex1-lvb-sym5_iv.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex1-lvb-sym5_iv-cmaj-lvb.gif" alt="image" width="707" height="72" /></div>
							<!-- 300 dpi TIFF image from Finale converted to Grayscale and resized to 100 dpi in Photoshop.  This avoids some, but not all, of the staff line blurring. -->
							
							<br /><br />
		
							<div id="play"><a href="audio/scale_mode/ex1a-cmaj_scale.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex1-lvb-sym5_iv-cmaj-scale.gif" alt="image" width="306" height="69" /></div>
							
							
							<p>The numbers 2 and 1 below the scale refer to the size of the interval (in <a href="#">semitones</a>) between adjacent pitches of the scale. Two semitones make a whole tone. </p>
							<p>Now listen to a portion of the main theme from the well-known first movement of the same symphony. This theme is based upon a C minor scale, which has a very different sound and character from the major scale built on the same pitch. Notice that some of the wholetones (2) and semitones (1) appear in different locations compared with the C major scale and that the sixth and seventh tones of the scale (A-flat and B-natural) are separated by 3 semitones. These different patterns of intervals give each type of scale its distinctive tonal quality. </p>
							
							
							<div id="example_number"><p>Example 2: Beethoven, Symphony no. 5, first movement</p></div>

							<div id="play"><a href="audio/scale_mode/ex2-lvb-sym5_i.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex2-lvb-sym5_i-cmin-lvb.gif" alt="image" width="705" height="97" /></div>
							<!-- 300 dpi TIFF image from Finale converted to Grayscale and resized to 100 dpi in Photoshop.  This avoids some, but not all, of the staff line blurring. -->
							
							<br />
		
							<div id="play"><a href="audio/scale_mode/ex2a-cmin_scale.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex2-lvb-sym5_i-cmin-scale.gif" alt="image" width="309" height="71" /></div>
							
							<p>The major and minor scales shown above are each modified by the pitch letter-name C, which refers to their first &ndash; and, in these scales, most stable  &ndash; pitch.  This is a convenient way of differentiating among various forms of the same scale, such as C major versus B-flat major or C minor versus F-sharp minor. </p>
							<h3>Transposition of scales </h3>
							<p>We can build any  scale or mode beginning on any pitch and still recognize it as  the same type as long as we maintain the pattern of of <a href="#">intervals</a> between successive pitches. This process, known as <a href="#">transposition</a>, preserves the  interval content of the scale  but changes its pitch content.  Thus in the following example the  major scales built on C, E, and B-flat  consist of the same series of intervals (represented by the arabic numbers below the staff), even though each scale is a distinct collection of pitches &ndash; higher or lower as the case may be. As you listen to the examples you can hear how the scales appear the same yet different. </p>
														
							<div id="example_number"><p>Example 3: Transposition of the major scale</p></div>

							<div id="play"><a href="audio/scale_mode/ex3-transpd_maj_scales.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex3-transp-maj_scale.gif" alt="image" width="702" height="100" /></div>
							<!-- 300 dpi TIFF image from Finale converted to Grayscale and resized to 100 dpi in Photoshop.  This avoids some, but not all, of the staff line blurring. -->
						
							<br />

							
							<h3><strong>Messiaen's Modes of Limited Transposition </strong></h3>
							<p>While Messiaen occasionally uses traditional scales like major and minor, he is more interested in a category of scales he  calls &quot;modes of limited transposition.&quot;  The term is unique to Messiaen and a bit confusing, since as we've seen any scale can be transposed to begin on any pitch. What Messiaen means by &quot;limited transposition&quot; is that, depending on the mode, only a limited number of transpositions will actually produce a new collection of pitches while preserving the  mode. Certain transpositions will  result in the same collection of pitches as the original form. As we'll see, only a few scales feature this property. Major and minor scales, for instance, do not; every transposition of either of these scales produces a different collection of pitches (having at least one different pitch). </p>

							<h4>Mode 1: the whole-tone scale </h4>
							<p>Let's take a look, then, at the first of Messiaen's modes of limited transposition, otherwise known as the <a href="#">whole-tone  scale</a>.  A whole-tone scale is a six-note (hexatonic) scale built on successive whole tones (e.g., do-re).  In the following example, a whole-tone scale is generated step-by-step beginning with C.</p>

							<div id="example_number"><p>Example 4: Generation of the whole-tone scale (Messiaen's Mode 1) beginning on C </p></div>
							<div id="play"><a href="audio/scale_mode/ex4-mode1-c-movie6.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex4-mode1-c-movie6.gif" alt="image" width="707" height="86" /></div>
							
                            <p>If we now transpose the whole-tone scale so that it begins one semitone higher (t=1), on D-flat, an entirely new collection of pitches results. </p>

							<div id="example_number"><p>Example 5: Whole-tone scale beginning on D-flat </p></div>
							<div id="play"><a href="audio/scale_mode/ex5-mode1-db.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex5-mode1-db.gif" alt="image" width="706" height="78" /></div>

							<p>Although the two collections sound alike because each is a whole-tone scale, they are as distinct as possible from one another because they share no common tones.  This property (no common pitches under transposition)  is found in many other scales, including the familiar major scale:</p>
							<table width="405" border="0" cellpadding="1">
                              <tr>
                                <td width="125" height="30">C major scale:</td>
                                <td width="25" height="30"><div align="center">C</div></td>
                                <td width="25" height="30"><div align="center">D</div></td>
                                <td width="25" height="30"><div align="center">E</div></td>
                                <td width="25" height="30"><div align="center">F</div></td>
                                <td width="25" height="30"><div align="center">G</div></td>
                                <td width="25" height="30"><div align="center">A</div></td>
                                <td width="25" height="30"><div align="center">B</div></td>
                                <td width="25" height="30"><div align="center">(C)</div></td>
                              </tr>
                              <tr>
                                <td width="125" height="30">C-sharp major scale:</td>
                                <td height="30"><div align="center">C#</div></td>
                                <td height="30"><div align="center">D#</div></td>
                                <td height="30"><div align="center">E#</div></td>
                                <td height="30"><div align="center">F#</div></td>
                                <td height="30"><div align="center">G#</div></td>
                                <td height="30"><div align="center">A#</div></td>
                                <td height="30"><div align="center">B#</div></td>
                                <td height="30"><div align="center">(C#)</div></td>
                              </tr>
                            </table>
							<p>However, if we transpose the whole-tone scale yet again, now beginning on D-natural (t=2), the resulting form of the scale is identical in pitch content to the original version on C (t=0) while sharing no common tones with the transposition on D-flat. Compared with the original form on C, the transposition beginining on D is said to be maximally redundant in pitch content. </p>
							
							<div id="example_number"><p>Example 6: Whole-tone scale beginning on D-natural </p></div>
							<div id="play"><a href="audio/scale_mode/ex6-mode1-d.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex6-mode1-d.gif" alt="image" width="708" height="77" /></div>
							
							
							<p>If we now consider all of the possible transpositions of the whole-tone scale, we find that they fall into two groups on the basis of pitch content; each of the transpositions in Group 1 contains the same six pitches (ordered differently as a result of the different tranpositions), while each of the transpositions of Group 2 contain the remaining six pitches (likewise in different orderings according to the particular transposition).  (Some pitches have alternative spellings; e.g., A-sharp is the same as B-flat.)</p>
							<table width="780" border="0" cellpadding="4" cellspacing="0">
                              <tr>
                                <td colspan="7" class="td1"><div align="center"><b>Group 1</b></div></td>
                                <td colspan="7" class="td2"><div align="center"><b>Group 2</b></div></td>
                              </tr>
                              <tr>
                                <td class="td1"><b>t=0</b></td>
                                <td class="td1">C</td>
                                <td class="td1">D</td>
                                <td class="td1">E</td>
                                <td class="td1">F#</td>
                                <td class="td1">G#</td>
                                <td class="td1">A#</td>
                                <td class="td2"><b>t=1</b></td>
                                <td class="td2">Db</td>
                                <td class="td2">Eb</td>
                                <td class="td2">F</td>
                                <td class="td2">G</td>
                                <td class="td2">A</td>
                                <td class="td2">B</td>
                              </tr>
                              <tr>
                                <td class="td1"><b>t=2</b></td>
                                <td class="td1">D</td>
                                <td class="td1">E</td>
                                <td class="td1">F#</td>
                                <td class="td1">G#</td>
                                <td class="td1">A#/Bb</td>
                                <td class="td1">C</td>
                                <td class="td2"><b>t=3</b></td>
                                <td class="td2">Eb</td>
                                <td class="td2">F</td>
                                <td class="td2">G</td>
                                <td class="td2">A</td>
                                <td class="td2">B</td>
                                <td class="td2">C#/Db</td>
                              </tr>
                              <tr>
                                <td class="td1"><b>t=4</b></td>
                                <td class="td1">E</td>
                                <td class="td1">F#</td>
                                <td class="td1">G#</td>
                                <td class="td1">A#/Bb</td>
                                <td class="td1">C</td>
                                <td class="td1">D</td>
                                <td class="td2"><b>t=5</b></td>
                                <td class="td2">F</td>
                                <td class="td2">G</td>
                                <td class="td2">A</td>
                                <td class="td2">B</td>
                                <td class="td2">C#/Db</td>
                                <td class="td2">Eb</td>
                              </tr>
                              <tr>
                                <td class="td1"><b>t=6</b></td>
                                <td class="td1">F#</td>
                                <td class="td1">G#</td>
                                <td class="td1">A#/Bb</td>
                                <td class="td1">C</td>
                                <td class="td1">D</td>
                                <td class="td1">E</td>
                                <td class="td2"><b>t=7</b></td>
                                <td class="td2">G</td>
                                <td class="td2">A</td>
                                <td class="td2">B<br>
                                </td>
                                <td class="td2">C#/Db</td>
                                <td class="td2">Eb</td>
                                <td class="td2">F</td>
                              </tr>
                              <tr>
                                <td class="td1"><b>t=8</b></td>
                                <td class="td1">G#</td>
                                <td class="td1">A#/Bb</td>
                                <td class="td1">C</td>
                                <td class="td1">D</td>
                                <td class="td1">E</td>
                                <td class="td1">F#</td>
                                <td class="td2"><b>t=9</b></td>
                                <td class="td2">A</td>
                                <td class="td2">B</td>
                                <td class="td2">C#/Db</td>
                                <td class="td2">Eb</td>
                                <td class="td2">F</td>
                                <td class="td2">G</td>
                              </tr>
                              <tr>
                                <td class="td1"><b>t=10</b></td>
                                <td class="td1">A#/Bb</td>
                                <td class="td1">C</td>
                                <td class="td1">D</td>
                                <td class="td1">E</td>
                                <td class="td1">F#</td>
                                <td class="td1">G#</td>
                                <td class="td2"><b>t=11</b></td>
                                <td class="td2">B</td>
                                <td class="td2">C#/Db</td>
                                <td class="td2">Eb</td>
                                <td class="td2">F</td>
                                <td class="td2">G</td>
                                <td class="td2">A</td>
                              </tr>
                            </table>
							<p>Generalizing, we can say that any form of the whole-tone scale transposes into itself under six transpositions (t=0, t=2, t=4, t=6, t=8, t=10).  Only a small number of very special scales &ndash; symmetrical scales &ndash; feature this kind of redundancy, and none do so to this extent.  By way of comparison, the major scale is not symmetrical; no major scale transposes into itself under any transposition (except for the trivial identity transposition, t=0, which is true of every scale). </p>
							<p>Symmetrical scales, then, are those which feature a high degree of intervallic redundancy &ndash; that is, contain a lot of one kind of interval and few or none of another.  For example, the whole-tone scale features only whole tones (major 2nds) between successive pitches and only two other types of interval (major 3rds and tritones) between non-successive pitches.  The whole-tone scale completely excludes other intervals like the minor <br>
							  second (semitone), minor 3rd, perfect 4th and 5th.  By comparison, the major scale consists of at least one instance of each of these intervals, and each interval is represented a different number of times. </p>
							<p>A scale's symmetry or asymmetry has distinct musical consequences.  Music composed with symmetrical scales often gives the impression of stasis or, at least, depends on  factors other than pitch (rhythm, texture, dyanmics) to impart a sense of drama, development, or progression.  In part this is because of the high degree of intervallic redundancy in symmetrical scales; the different harmonies that are possible within the scale just aren't very different from one another. In turn, the relative absence of harmonic differentiation tends to keep any one pitch or harmony from predominating.  In contrast, the wealth of different intervals found in asymmetrical scales like major and minor  contributes to dynamic continuum in which certain pitches and chords are very stable (restful) while others are very unstable (tending to gravitate toward stability or resolution).   Music based on major and minor scales, such as the two Beethoven excerpts, conveys a strong sense of forward motion and sounds very dynamic and dramatic. </p>
							
                            <p>Composers of the 20th century, including Messiaen, often made use of symmetrical scales and other pitch collections in which each of the pitches is more-or-less equal in tonal gravity.  Such music can still be dramatic, but  its dynamism will depend more on other factors. For example, in <a href="http://www.lawrence.edu:8888/ramgen/eres/music/muth/301/debussy_preludes_book1_voiles_724356585621.rm" target="_blank">Claude Debussy's prelude for piano <em>Voiles</em> (&quot;Sails&quot;)</a>, the entire opening section is based on a single transposition of the whole-tone scale, and any sense of forward motion is carried by the rhythm and the gradually thickening texture, as melodies and chords are repeated in combination.  Nor does the low, repeated tone that enters at the end of the first phrase provide a sense of stability as it might in a composition based on major or minor scales.  The general feeling of the lengthy first section, despite the thickening texture, is one of harmonic stasis; there is rhythmic activity but no sense in which the pitch material compels motion of any sort.  Indeed, the first section of the piece gives the impression of a sailboat stalled on a windless day, and it's not until the beginning of the second section, where the whole-tone scale gives way to fresh harmonic material (a pentatonic scale) that the sail billows and a sense of harmonic motion is felt. </p>
							<p>Because of its high degree of redundancy the whole-tone scale can tire the ear after a while, which is why composers tend not to use it for long passages of music (unless, like Debussy, they want to express a sense of stasis, in which case it works quite well).  More typically, however, composers use the whole-tone scale briefly; it is a film composers' clich&eacute; to to use the whole-tone scale to underscore moments of tense anticipation, premonition of the future, the sprinkling of fairy dust, or the inhabitants of the planet Zargon.   In a passage from  <em>The Technique of my Musical Language</em>, Messiaen  distances himself from the scale because it can be so obvious, and indeed where the whole-tone scale occurs in the Quartet, it is generally found in circumstances like those the composer describes here:</p>
							<p>&quot;Claude Debussy . . . and after him Paul Dukas . . . have made such remarkable use of [the whole-tone scale] that there is nothing more to add. Then we shall carefully avoid making use of it, <em>unless it is concealed in a superposition of modes which renders it unrecognizable</em>....&quot; (<em>Technique</em>, p. 59; translated by Paul Satterfield. Emphasis added.) </p>
							
							<p>In the first movement, the cello, playing harmonics, continuously repeats the following melodic pattern, which is based on five notes of the whole-tone scale on B-flat, while the other parts play music derived from other modes. Listen for the high, eerie sustained notes that begin right after the clarinet's first phrase; the melody is so high it might sound more like a violin than a cello. </p>
							
							<div id="example_number">
							  <p>Example 7: Cello part from the opening of &quot;Liturgie de cristal&quot; (mvt 1) </p>
							</div>
							<div id="play"><a href="audio/scale_mode/ex7-mvt1-opening.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex7-mode1_mvt_i-excerpt.gif" alt="image" width="707" height="90" /></div>


							<div id="play"><a href="audio/scale_mode/ex7-mode1-mvt1-mode.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex7-mode1_mvt_i-mode.gif" alt="image" width="309" height="63" /></div>



							<p>In the next example, from the sixth movement, the principal melody consists of five pitches of the whole-tone scale beginning on E along with one pitch, B-natural not in the scale but clearly heard as an ornamental tone.</p>
							
							<div id="example_number">
							  <p>Example 8: Principal melody from the opening of &quot;Danse de la fureur" (mvt 6)  </p>
							</div>
							<div id="play"><a href="audio/scale_mode/ex8-mvt6-opening.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex8-mode1_mvt_iv-excerpt.gif" alt="image" width="708" height="83" /></div>


							<div id="play"><a href="audio/scale_mode/ex8-mode1_mvt6-mode.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex8-mode1_mvt_iv-mode.gif" alt="image" width="307" height="59" /></div>


							<h4>Mode 2: the octatonic scale </h4>
							<p>Messiaen makes extensive use of the octatonic scale throughout his compositional career and particularly in the Quartet.  As its name suggests, the octatonic scale consists of eight distinct notes, as opposed to five in the pentatonic scale, six in the whole-tone scale, or seven in both major and minor.  The symmetry of the octatonic scale is readily apparent in its alternation of semitones (1) and wholetones (2) between successive pitches. Whereas the whole-tone scale has two distinct forms, the octatonic scale has three: those at t=0, t=1, and t=2 (Examples 9a-c).</p>
							  
							  <div id="example_number"><p>Example 9a: The octatonic scale on C (t=0) </p></div>
							<div id="play"><a href="audio/scale_mode/ex9a-octatonic-t0.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex9a-octatonic-t0.gif" alt="image" width="751" height="100" /></p>
						    </div>
							  
							  <div id="example_number"><p>Example 9b: The octatonic scale on C# (t=1) </p></div>
							<div id="play"><a href="audio/scale_mode/ex9b-octatonic-t1.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex9b-octatonic-t1.gif" alt="image" width="752" height="101" /></p>
						    </div>
							  
							  <div id="example_number"><p>Example 9c: The octatonic scale on D (t=2) </p></div>
							<div id="play"><a href="audio/scale_mode/ex9c-octatonic-t2.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex9c-octatonic-t2.gif" alt="image" width="751" height="101" /></p>
						    </div>	
							  
							  <p> The next transposition, on D# (t=3), is simply a reordering of the same pitch content as the original form on C (t=0). As in the whole-tone scale, the preservation of exact pitch content under transposition accounts for Messiaen's conception of the octatonic scale as a mode of &quot;limited transposition.&quot; </p> 
							  
							  <div id="example_number"><p>Example 9d: The octatonic scale on D# (t=3) </p></div>
							<div id="play"><a href="audio/scale_mode/ex9d-octatonic-t3.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex9d-octatonic-t3.gif" alt="image" width="752" height="101" /></p>
						    </div>
							  
							 <p>The twelve transpositions of the octatonic scale, then, fall into three groups:</p>                           

	<table width="785" border="0" cellpadding="3" cellspacing="0">
	   <tr>
		 <td colspan="9" class="td1"><div align="center"><b>Group 1</b></div></td>
		 <td colspan="9" class="td2"><div align="center"><b>Group 2</b></div></td>
		 <td colspan="9" class="td3"><div align="center"><b>Group 3</b></div></td>
	   </tr>
	   <tr>
		 <td class="td1"><b>t=0</b></td>
		 <td class="td1">C</td>
		 <td class="td1">C#</td>
		 <td class="td1">D#</td>
		 <td class="td1">E</td>
		 <td class="td1">F#</td>
		 <td class="td1">G</td>
		 <td class="td1">A</td>
		 <td class="td1">Bb</td>
		 <td class="td2"><b>t=1</b></td>
		 <td class="td2">C#</td>
		 <td class="td2">D</td>
		 <td class="td2">E</td>
		 <td class="td2">F</td>
		 <td class="td2">G</td>
		 <td class="td2">G#</td>
		 <td class="td2">A#</td>
		 <td class="td2">B</td>
		 <td class="td3"><b>t=2</b></td>
		 <td class="td3">D</td>
		 <td class="td3">Eb</td>
		 <td class="td3">F</td>
		 <td class="td3">F#</td>
		 <td class="td3">G#</td>
		 <td class="td3">A</td>
		 <td class="td3">B</td>
		 <td class="td3">C</td>
	   </tr>
	   <tr>
		 <td class="td1"><b>t=3</b></td>
		 <td class="td1">D#</td>
		 <td class="td1">E</td>
		 <td class="td1">F#</td>
		 <td class="td1">G</td>
		 <td class="td1">A</td>
		 <td class="td1">Bb</td>
		 <td class="td1">C</td>
		 <td class="td1">C#</td>
		 <td class="td2"><b>t=4</b></td>
		 <td class="td2">E</td>
		 <td class="td2">F</td>
		 <td class="td2">G</td>
		 <td class="td2">G#</td>
		 <td class="td2">A#</td>
		 <td class="td2">B</td>
		 <td class="td2">C#</td>
		 <td class="td2">D</td>
		 <td class="td3"><b>t=5</b></td>
		 <td class="td3">F</td>
		 <td class="td3">F#</td>
		 <td class="td3">G#</td>
		 <td class="td3">A</td>
		 <td class="td3">B</td>
		 <td class="td3">C</td>
		 <td class="td3">D</td>
		 <td class="td3">Eb</td>
	   </tr>
	   <tr>
		 <td class="td1"><b>t=6</b></td>
		 <td class="td1">F#</td>
		 <td class="td1">G</td>
		 <td class="td1">A</td>
		 <td class="td1">Bb</td>
		 <td class="td1">C</td>
		 <td class="td1">C#</td>
		 <td class="td1">D#</td>
		 <td class="td1">E</td>
		 <td class="td2"><b>t=7</b></td>
		 <td class="td2">G</td>
		 <td class="td2">G#</td>
		 <td class="td2">A#</td>
		 <td class="td2">B</td>
		 <td class="td2">C#</td>
		 <td class="td2">D</td>
		 <td class="td2">E</td>
		 <td class="td2">F</td>
		 <td class="td3"><b>t=8</b></td>
		 <td class="td3">G#</td>
		 <td class="td3">A</td>
		 <td class="td3">B</td>
		 <td class="td3">C</td>
		 <td class="td3">D</td>
		 <td class="td3">Eb</td>
		 <td class="td3">F</td>
		 <td class="td3">F#</td>
	   </tr>
	   <tr>
		 <td class="td1"><b>t=9</b></td>
		 <td class="td1">A</td>
		 <td class="td1">Bb</td>
		 <td class="td1">C</td>
		 <td class="td1">C#</td>
		 <td class="td1">D#</td>
		 <td class="td1">E</td>
		 <td class="td1">F#</td>
		 <td class="td1">G</td>
		 <td class="td2"><b>t=10</b></td>
		 <td class="td2">A#</td>
		 <td class="td2">B</td>
		 <td class="td2">C#</td>
		 <td class="td2">D</td>
		 <td class="td2">E</td>
		 <td class="td2">F</td>
		 <td class="td2">G</td>
		 <td class="td2">G#</td>
		 <td class="td3"><b>t=11</b></td>
		 <td class="td3">B</td>
		 <td class="td3">C</td>
		 <td class="td3">D</td>
		 <td class="td3">Eb</td>
		 <td class="td3">F</td>
		 <td class="td3">F#</td>
		 <td class="td3">G#</td>
		 <td class="td3">A</td>
	   </tr>
	 </table>

							  <p>As mentioned above, Messiaen uses the octatonic scale throughout the Quartet and in a variety of ways. In the opening section of the third movement (Example 10), the melody of the A section slowly unfolds the t=4 (Group 2) form of the octatonic scale. Messiaen gives prominence to certain notes and intervals through repetition, duration, register, accent, or melodic patterning: the E in bars 1, 6, 10, and 12; the interval of a tritone (first two notes of bar 1, bar 6, several instances in bar 11); and the many minor thirds (e.g., the last two notes of bar 1). Tritones (6 semitones) and minor thirds (3 semitones) are characteristic intervals of the octatonic scale. </p>
							  
							  <div id="example_number"><p>Example 10: "Abyss of the Birds," bars 1-12 (clarinet solo) </p></div>
							<div id="play"><a href="audio/scale_mode/ex10-qrt_iii_1-12.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex10-messiaen-qrt_iii_1-12.gif" alt="image" width="752" height="476" /></div>


							<div id="play"><a href="audio/scale_mode/ex10-octatonic-e.mp3">PLAY</a></div>

							<div id="musical_example"><img src="images/scale_mode/ex10-octatonic-e.gif" alt="image" width="450" height="102" /></div>

							  <p>Messiaen uses the same form of the octatonic scale at the beginning of the fourth movement (Example 11a). As in the previous excerpt (and indeed in several movements of the quartet, notably V and VIII) he emphasizes E but here goes a step further by emphasizing the notes of the melody that are members of the E major triad (Example 11b). This is one reason why the opening of the fourth movement sounds so traditional &ndash; much like a piece in the key of E major with a few &quot;wrong notes&quot; tossed in. Comparative listening to the two melodies (Exx. 10 and 11) provides insight into another of Messiaen's statements about the modes of limited transposition: that they &quot;are at once in the atmosphere of several tonalities, <em>without polytonality</em> [more than one tonality sounding simultaneously], the composer being free to give predominance to one of the tonalities or to leave the tonal impression unsettled.&quot; (<em>The Technique of my Musical Language</em>, 58; emphasis original). In the clarinet solo (Example 10) we sense E as a prominent tone but not in any particular key; in the fourth movement melody (Example 11), we hear E strongly in the context of E major. </p>
							  
							<div id="example_number">
							  <p>Example 11a: "Intermezzo," bars 1-14</p>
							</div>
							<div id="play"><a href="audio/scale_mode/ex11-qrt_iv.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex11-messiaen-qrt_iv_1-14.gif" alt="image" width="570" height="611" /></div>
							
							<div id="example_number"><p>Example 11b: Analysis of Intermezzo, bars 1-4 showing underlying E major triad</p></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex11-qrt_iv_1-4-analysis.gif" alt="image" width="751" height="125" /> </p>
							</div>

						    <p>In the opening of the Intermezzo (Example 11a), the single melody played in octaves gives way, in bars 11-14, to a true three-part texture in which the instruments play different melodic lines in counterpoint. Coinciding with this textural change is a change of modal transposition from  t=4  to  t=11  of the octatonic scale.  This transposition, by the interval of a perfect 5th (7 semitones), and the emphasis on the B major triad (last chord in bars 12 and 14) make this passage sound much like a modulation to the dominant in tonal music — another way in which the fourth movement evokes Messiaen's compositional antecedents. The opening of the seventh movement (Example 12a) offers another example of Messiaen's compositional use of the octatonic scale.  The passage consists of a melody played &quot;dreamily&quot; in a high register by the cello and accompanied by a fairly static harmonic progression that is activated by a steady rhythm and by leaps between registers; in the example the piano part is reduced to the basic chord progression (<em>The Technique of my Musical Language</em>, II: 54). The octatonic scale is divided between the two instruments; each phrase of the cello melody (bars 1-3, 4-6, and 7-12) introduces five pitches of the scale (the other notes are repetitions), while the piano reinforces those while also containing the three remaining pitches.
						    <p>Focussing now on the melody alone, notice how each of the three phrases gradually descends and broadens to the last two notes, which span a minor third: A-F# in bar 3, F#-D# in bar 6, and Eb-C in bars 9-12. Now comparing the three statements, notice how they too gradually descend from one to the next &ndash; and that they do so in a patterned way.  The first two form what is known as a <strong>melodic sequence</strong>, in which a melody is repeated exactly except that it is transposed to a different pitch level. The interval of tranposition here is none other than the minor third (3 semitones), the most common and characteristic iinterval of the octatonic scale; for example, the Bb in bar 4 that begins the second phrase is a minor 3rd lower than the Db in bar 1 that begins the first, and so on for each pair of corresponding pitches.  Although the third phrase does not continue the sequence exactly (rhythms and intervals subtly change), it continues the transpostion by minor third (e.g., it begins and ends a minor 3rd lower than phrase 2). This choice of this transposition is significant, because it allows Messiaen to preserve the same form of the octatonic scale for the entire twelve bars.  But it does so in a way we find interesting, because we hear different subsets of the scale in each of the three phrases. This lends a sense of harmonic unity or stasis to the opening passage as a whole while allowing an easy, mild drifting quality from phrase to phrase &ndash; much like we experience in a dream. 

							<div id="example_number">
							  <p>Example 12a: "Tangle of rainbows, for the Angel who announces the end of Time," bars 1-12</p>
							</div>
							<div id="play"><a href="audio/scale_mode/ex12-qrt_vii-mode2.mp3">PLAY</a></div>
							<div id="musical_example"><img src="images/scale_mode/ex12-messiaen-qrt_vii_1-12.gif" alt="image" width="573" height="592" /></div>                             
							  <div id="example_number">
							    <p>Example 12b: The octatonic scale on C (t=0) </p>
							  </div>
							<div id="play"><a href="audio/scale_mode/ex9a-octatonic-t0.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex9a-octatonic-t0.gif" alt="image" width="751" height="100" /></p>
						    </div>
							  
							  <h4>Mode 3</h4>
						    <p>Messiaen's third mode of limited transposition is a nine-note scale that can be generated from a single three-note cell, C-D-Eb (Example 13a). Transposed a major 3rd higher, the cell becomes E-F#-G; yet another major 3rd higher, it is Ab-Bb-Cb(=B). Mode 3 has four distinct forms (t=0, t=1, t=2, and t=3), of which the remaining transpositions are reorderings of the first four. Although Messiaen rarely uses Mode 3 in its complete form, there is a remarkable passage in the first movement in which the clarinet &ndash; for once sounding more like a clarinet than a bird &ndash; plays an ascending run consisting of forms of Modes 1, 2, and 3 in succession (Example 13b). </p>
							
							    <div id="example_number">
						        <p>Example 13a: Mode 3 on C (t=0) </p>
						      </div>
							<div id="play"><a href="audio/scale_mode/ex13a-mode_3.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex13a-mode_3.gif" alt="image" width="748" height="125" /></p>
						    </div>
							  
							  <div id="example_number">
							    <p>Example 13b: "Crystal liturgy," bars 37-38 (audio includes full texture) </p>
							  </div>
							<div id="play"><a href="audio/scale_mode/ex13b-qrt_i_37-38-mode_3.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex13b-qrt_i_37-38-mode_3.gif" alt="image" width="750" height="175" /></p>
						    </div>
							
						    <h4>Modes 4-7</h4>
						    <p>Messiaen does not use any of the remaining modes of limited transposition in the Quartet, although each is symmetrical and preserves exact pitch content at certain transpositions.  To check your understanding of the modes and their transposition, you might try to determine the transpositions that give rise to complete redundancy of pitch. </p>
							
						      <div id="example_number">
						        <p>Example 14: Mode 4 on C (t=0) </p>
						      </div>
							<div id="play"><a href="audio/scale_mode/ex14-mode_4.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex14-mode_4.gif" alt="image" width="750" height="125" /></p>
						    </div>
							  
							  <div id="example_number">
							    <p>Example 15: Mode 5 on C (t=0) </p>
							  </div>
							<div id="play"><a href="audio/scale_mode/ex15-mode_5.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex15-mode_5.gif" alt="image" width="753" height="102" /></p>
						    </div>
							  
							  <div id="example_number">
							    <p>Example 16: Mode 6 on C (t=0) </p>
							  </div>
							<div id="play"><a href="audio/scale_mode/ex16-mode_6.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex16-mode_6.gif" alt="image" width="750" height="126" /></p>
						    </div>
							  
							  <div id="example_number">
							    <p>Example 17: Mode 7 on C (t=0) </p>
							  </div>
							<div id="play"><a href="audio/scale_mode/ex17-mode_7.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/scale_mode/ex17-mode_7.gif" alt="image" width="753" height="101" /></p>
						    </div>
							  
						      <div id="next_prev"><p><a href="#rhythm">Prev << "Rhythm & Meter"</a> 
                              <a href="#birdsong">Next >> "Birdsong"</a></p></div>
                          </div>
                             
                             
							<div id="birdsong">
							<h3>Birdsong</h3>
							<p>Messiaen heard in birdsong an intimation of the divine and attempted to represent it in his music, not literally, as he indicates in the following quotation, but imaginatively. </p>
							<p>&quot;Paul Dukas [Messiaen's composition teacher at the Paris Conservatory] used to say, 'Listen to the birds. They are great masters.' I confess not having awaited this advice to admire, analyze, and notate some songs of birds. Through the mixture of their songs, birds make extremely refined jumbles of <a href="#">rhythmic pedals</a>. Their melodic contours, those of merles especially, surpass the human imagination in fantasy. Since they use untempered intervals smaller than the semitone, and as it is ridiculous servilely to copy nature, we are going to give some examples of melodies of the 'bird' genre which will be transcription, transformation, and interpretation of the volleys and trills of our little servants of immaterial joy.&quot; (<em>The Technique of my Musical Language</em>, p. 34; translated by John Satterfield.) </p>
							<p>Here is the first of the examples Messiaen provides, from the third movement clarinet solo, of which he elsewhere writes: &quot;The birds are the opposite of Time; they are our desire for light, for stars, for rainbows and joyful songs!&quot; (Preface to the score, p. ii; translated by Anthony Pople.) </p>
						
							  <div id="example_number"><p>Example 1: "Abîme des oiseaux," bars 14-17 (clarinet solo) </p></div>
							<div id="play"><a href="audio/birdsong/birdsong-ex1-mvt3.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/birdsong/birdsong-ex1-mvt3.gif" alt="image" width="752" height="227" /></p>
							  </div>
							
							<p>The representation of birdsong also figures prominently in the violin and clarinet parts of the first movement (Example 2), where again it seems to evoke a liminal state between the physical, temporal presence that birds themselves embody and the qualities of transcendence and timelessness to which, as Messiaen suggests, their songs point. What is the effect of the other two instruments in this passage (cello, playing harmonics and piano; not shown in the notated example)? Do they sound related in any way to the birdsong representations? If so, how? If not, what is the effect? </p>
							
							  <div id="example_number">
							    <p>Example 2: "Crystal liturgy," bars 1-7 (violin and clarinet parts only; audio includes full texture) </p>
							  </div>
							<div id="play"><a href="audio/birdsong/birdsong-ex2-mvt1.mp3">PLAY</a></div>
							<div id="musical_example">
							  <p><img src="images/birdsong/birdsong-ex2-mvt1.gif" alt="image" width="541" height="414" /></p>
							  </div>
							
							<div id="next_prev"><p><a href="#scale">Prev << "Scale & Mode"</a>
							<a href="#glossary">Next >> "Glossary"</a></p></div>
							
							</div>
							
							<!--
							<div id="color">
							<h3>Color</h3>
							<p>Future text about color goes here.</p>
							<div id="next_prev"><p><a href="#birdsong">Prev << "Birdsong"</a>
							<a href="#glossary">Next >> "Glossary"</a></p></div>
							</div>
							-->
							
							
							<div id="glossary">
							<h3>Glossary</h3>
							<p><strong>chord: </strong>three or more pitches perceived as a unit of harmony and thus usually sounding simultaneously. Sometimes, however, chords can be arpeggiated (each pitch played in succession), but the effect is understood not as melody but as a chord unfolded over time. </p>
							
							<p><strong>interval: </strong>the distance or relationship between two pitches. Quantitatively, we can measure intervals either by semitones (1 through 11) or by a combination of a general name (unison, 2nd, 3rd, 4th, 5th, 6th, 7th, octave) plus a modifier (major, minor, perfect, augmented, diminished). The following table shows how the two systems correspond. Qualitatively, some intervals (perfect unisons, octaves, and 5ths) sound very stable (consonant) whereas others (minor 2nds, major 7ths, augmented 4ths. and diminished 5ths) sound very unstable (dissonant).</p>
							
							<table id="my_table" cellspacing="0">
							<tbody>
                              <tr valign="top">
                                <td width="50%"><strong>Interval name</strong></td>
                                <td width="50%"><strong># of semitones</strong></td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">perfect unison</td>
                                <td width="50%">0</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">minor 2nd</td>
                                <td width="50%">1</td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">major 2nd</td>
                                <td width="50%">2</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">minor 3rd</td>
                                <td width="50%">3</td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">major 3rd</td>
                                <td width="50%">4</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">perfect 4th</td>
                                <td width="50%">5</td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">augmented 4th</td>
                                <td width="50%">6</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">diminished 5th</td>
                                <td width="50%">6</td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">perfect 5th</td>
                                <td width="50%">7</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">minor 6th</td>
                                <td width="50%">8</td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">major 6th</td>
                                <td width="50%">9</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">minor 7th</td>
                                <td width="50%">10</td>
                              </tr>
                              <tr class="shaded" valign="top">
                                <td width="50%">major 7th</td>
                                <td width="50%">11</td>
                              </tr>
                              <tr valign="top">
                                <td width="50%">perfect octave (8ve)</td>
                                <td width="50%">12</td>
                              </tr>
							</tbody>
                            </table>

							<p><strong>mode: </strong>loosely synonymous with <strong>scale</strong> but also connoting a qualitative ethos that extends beyond the quantitative relationships among the pitches and intervals to include associations with particular colors, times of day, seasons, elements, and emotions.</p>
														
							<p><strong>pitch: </strong>a measure of the highness or lowness of a discrete musical sound, expressed by its frequency of vibration in cycles per second (or Herz, abbreviated Hz) or by the conventional letter names of the musical alphabet: A, B-flat, C-sharp, and so forth. Thus the orchestra tunes to a pitch vibrating at 440 Hz, and we call that pitch A &ndash; specifically A-440, to distinguish it from other A&rsquo;s higher or lower.</p>
							
							<p><strong>rondo:</strong> a highly sectional musical form consisting of alternating refrains (A) and contrasting episodes (B). The classical rondo generally consists of either five sections (A B A B A or A B A C A) or seven (A B A C A B A). The fourth movement of Messiaen&rsquo;s quartet (<em>Interm&egrave;de</em>) is strongly reminiscent of rondo form, though modified in delightfully idiosyncratic ways.</p>
							<p><strong>scale</strong>: a collection of distinct <strong>pitches</strong>, conventionally represented in ascending order within an octave, that forms the basic material from which a melody or series of chords is composed. There are many different kinds of scale, each with its own distinctive  characteristics owing to the particular collection of pitches and the intervals they form with one another. The number of pitches in a scale is variable, ranging from five (as in the pentatonic scale) to twelve (as in the chromatic scale), although many scales, including the familiar major and minor, consist of seven pitches &ndash; which divides the octave into just enough parts to make things interesting without exceeding human perceptual limitations. The etymology of the word is instructive; deriving from the Middle English <em>scalae</em>, meaning &ldquo;ladder,&rdquo; the word evokes both the ascending quality of the scale as well as the steps from one pitch to the next, which correspond to the ladder&rsquo;s rungs. See also <strong>mode</strong>.</p>
							
							<p><strong>scherzo</strong>: a type of musical composition (or single movement of a multi-movement composition) characterized by a quick tempo, rhythmic freshness and surprise, sometimes jagged melodic contours, and a playful or sometimes ironic character. (Italian <em>scherzo</em>, joke.) As developed by Haydn and Beethoven, the scherzo/trio gradually supplanted the minuet/trio as the &ldquo;dance&rdquo; movement of multi-movement compositions in the late 18th and 19th centuries. Messiaen&rsquo;s scherzo movement (IV. <em>Interm&egrave;de</em>) retains no vestige of the 18th- and 19th-century scherzo&rsquo;s form (ABA) or meter (triple), but its lively tempo, character, and rhythmic vitality recall the traditional scherzo, as does the movement&rsquo;s more traditional harmony.</p>
							
							
							<p><strong>semitone:</strong> the smallest interval in traditional western music, spanning the syllables mi-fa or ti-do and, more generally, any two adjacent notes on the piano keyboard.&nbsp; Equivalent to a <em>minor second</em>.</p>
							
							
							<p><strong>ternary form:</strong> any three-part musical form, of which <strong>A B A</strong> or its variant A B A&rsquo; are by far the most common.&nbsp; Perhaps more than any other musical form, the A B A ternary form, embodying the principle of statement-contrast-restatement, is common to many musical cultures and to stylistic and historical periods spanning hundreds of years. Several of the movements of Messiaen's quartet are in a straightforward or modified ternary form: II: <em>Vocalise, pour l'Ange qui annonce la fin du Temps</em>, III: <em>Ab&icirc;me des oiseaux</em>, OTHERS. </p>
							
							
							<p><strong>trio:</strong> in musical form, the contrasting B section of a larger A B A form (e.g., minuet-trio-minuet or scherzo-trio-scherzo) traditionally characterized by a change of key, change of character, and reduction in texture (originally from four or more parts to three &ndash; hence the term).&nbsp; The C section of the fourth movement of Messiaen&rsquo;s quartet has the character of a trio, and while there is no reduction of texture (in that the three instruments play throughout the movement) there is a distinct change to a lighter texture and milder key that are very characteristic of the trio in a traditional ABA form.&nbsp; Then too, this &ldquo;trio&rdquo; section occurs in a modified rondo form.</p>
							 
							<p><strong>whole tone:</strong> an interval spanning the distance of two semitones, such as between do-re, re-mi, fa-sol, sol-la, and la-ti, or, more generally, between every other note on the piano keyboard. Equivalent to a <em>major second</em>.</p>
							
							

							<div id="next_prev">
							  <p><a href="#birdsong">Prev << "Birdsong"</a></p>
							</div>
							
							</div> <!-- glossary -->
							
						</div> <!-- musical elements -->
						
							<div id="biblical">
						    <h3>Biblical Source</h3>
					      <p>In his preface to the score of the Quartet, Messiaen cites several verses from&nbsp;chapter 10 of the <em>Revelation of John</em> as the &quot;subject&quot; of the work and its direct inspiration. </p>
					      <p> The book of Revelation, the last in the New Testament, is an example of <strong>apocalyptic</strong> literature (Greek <em>apokalyptein</em>, &quot;to uncover&quot;), described by Robert Mounce as a body of Judeo-Christian works dating from ca. 200 BCE to 150 CE that &quot;purports to be a divine disclosure, usually through a celestial intermediary to some prominent figure in the past, in which God promises to intervene in human history to bring times of trouble to an end and destroy all wickedness.&quot;<sup>1</sup> According to Mounce, apocalyptic literature has several distinguishing characteristics: </p>
					      <ol>
					        <li>It is <strong>eschatological</strong>, in that &quot;it treats a period of time yet future when God will break into this world of time and space to bring the entire system to a final reckoning.&quot;</li>
					        <li>It is <strong>dualistic</strong>, bringing	into	opposition	two supernatural powers, Satan and God and the two ages they represent, &quot;the present one that is temporal and evil, and the one to come that is timeless and perfectly righteous.&quot; These in turn represent two opposing worlds, &quot;the presesnt visible universe and the perfect world that has existed before time in heaven.&quot;</li>
					        <li>It is characterized by a <strong>rigid determinism</strong> &quot;in which everything moves forward as divinely preordained according to a definite time schedule and toward a predetermined end.<sup>2</sup></li>
					        </ol>
							<p>Apocalyptic literature also tends to be revelatory,  richly symbolic, and pseudonymous.  Although the author of the book of Revelation identifies himself as John, scholars today disagree about whether this is the same person as the apostle John or the author of the Gospel of John. In any case, although John humbly describes himself as a servant of God (1:1), it is clear from the epistolary style that he is a person of some stature and authority in the early church. John also mentions (1:9) that  his vision took place while he was in exile on the   island of Patmos (in the Aegean Sea near modern-day Turkey). Most scholars date the letter from the latter half of the 1st century CE. </p> 
							<p> The verses that inspired Messiaen to compose the Quartet are reproduced below on the left as they appear in French in Messiaen's preface to the score. On the right is an English translation of the same passage.</p>
					        <table width="843" border="0" cellpadding="5" bgcolor="#FFFFCC">
                            <tr>
                              <td width="45%" valign="top"><p>&laquo;Je vis un ange plein de force, descendant du ciel, rev&ecirc;tu d'une nu&eacute;e, ayant un arc-en-ciel sur la t&ecirc;te. &nbsp;Son visage &eacute;tait comme le soleil, ses pieds comme des colonnes de feu. &nbsp;Il posa son pied droit sur la mer, son pied gauche sur la terre, et, se tenant debout sur la mer et sur la terre, il leva la main versa le Ciel et jura par Celui qui vit dans les si&egrave;cles des si&egrave;cles, disant: Il n'y aura plus de Temps; mais au jour de la trompette du septi&egrave;me ange, le myst&egrave;re de Dieu se consommera.&raquo; (<em>Apocalypse de Saint Jean</em>, Chapitre X)</p></td>
                              <td width="10%">
                              <td width="45%" valign="top"><p>&ldquo;I saw a mighty angel descending from heaven, clothed in a cloud, having a rainbow on his head.&nbsp;&nbsp;His face was as the sun, his feet as columns of fire. He placed his right foot on the sea, his left foot on the earth, and, supporting himself on the sea and on the earth, he raised his hand towards Heaven and swore by Him who lives forever and ever, saying: There will be no more Time; but on the day of the trumpet of the seventh angel, the mystery of God will be completed.&quot; (<em>Revelation</em> 10:1-2,5-7;&nbsp;<em>Oxford Annotated Bible</em>)&nbsp;&nbsp;</p></td>
                            </tr>
                          </table>
					      <p>Chapter 10 as a whole appears below in the King James version. Here the boldface type shows  the verses Messiaen selected for his preface, while regular typeface shows those verses he chose not to include. </p>
					      <table width="841" border="0" cellpadding="1" bgcolor="#FFFFCC">
                            <tr>
                              <td><p>&quot;<strong><sup>1</sup>And I saw another mighty angel come down from heaven, clothed with a cloud: and a rainbow was upon his head, and his face was as it were the sun, and his feet as pillars of fire:</strong> <sup>2</sup>And he had in his hand a little book open: <strong>and he set his right foot upon the sea, and his left foot on the earth,</strong> <sup>3</sup>And cried with a loud voice, as when a lion roareth: and when he had cried, seven thunders uttered their voices. <sup>4</sup>And when the seven thunders had uttered their voices, I was about to write: and I heard a voice from heaven saying unto me, Seal up those things which the seven thunders uttered, and write them not. <strong><sup>5</sup>And the angel which I saw stand upon the sea and upon the earth lifted up his hand to heaven, <sup>6</sup>And sware by him that liveth for ever and ever, who created heaven, and the things that therein are, and the earth, and the things that therein are, and the sea, and the things which are therein, that there should be time no longer: <sup>7</sup>But in the days of the voice of the seventh angel, when he shall begin to sound, the mystery of God should be finished,</strong> as he hath declared to his servants the prophets. <sup>8</sup>And the voice which I heard from heaven spake unto me again, and said, Go and take the little book which is open in the hand of the angel which standeth upon the sea and upon the earth. <sup>9</sup>And I went unto the angel, and said unto him, Give me the little book. And he said unto me, Take it, and eat it up; and it shall make thy belly bitter, but it shall be in thy mouth sweet as honey. <sup>10</sup>And I took the little book out of the angel's hand, and ate it up; and it was in my mouth sweet as honey: and as soon as I had eaten it, my belly was bitter. <sup>11</sup>And he said unto me, Thou must prophesy again before many peoples, and nations, and tongues, and kings.&quot;</p></td>
                            </tr>
                          </table>
					      <p>Of the passage that Messaien found most inspirational in composing the Quartet,  it is worth noting that most modern translations render the Greek <em>chronos</em> as &quot;delay&quot; rather than as &quot;time&quot;: &quot;There will be no more delay&quot; or &quot;There should be delay no longer.&quot; However, &quot;no more time&quot; is central to Messiaen's  conception of the work as evoking a sense of eternity:</p>
					      <p>&quot;There are people who understand [the Biblical passage as] 'there will be no more delay.' That's not it. [It's] 'there will be no more Time' with a capital 'T'; that is to say, there will be no more space, there will be no more time. One leaves the human dimension with cycles and destiny to rejoin eternity. So, I finally wrote this quartet dedicating it to this angel who declared the end of Time.&quot;<sup>3</sup> </p>
					      <p><sup>1</sup>Robert Mounce, <em>The Book of Revelation</em>, rev. ed (Grand Rapids: Erdmanns, 1998): 1.<br>
					        <sup>2</sup>Ibid., 3.<br>
				            <sup>3</sup>Quoted in Rebecca Rischin, <em>For the End of Time: The Story of the Messiaen Quartet</em> (Cornell University Press, 2003): 51. </p>
					      
					      </div>
						
					</div> <!-- main_container -->
		  </div> <!-- main -->
				
				<div id="footer">
					<p><a href="http://www.lawrence.edu">Lawrence University</a> &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.lawrence.edu/conservatory/">Conservatory of Music</a> &nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp; <a href="http://www.lawrence.edu/dept/it/">Instructional Technology</a></p>
				</div>
				
			</div> <!-- container -->
		</div> <!-- outer_container -->
	</body>
</html>
