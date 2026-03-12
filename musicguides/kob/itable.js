/* TO DO
	Developed by David Berk, Jan-Feb of 2016
	
	A Flash-free interactive audio framework, built using simple HTML tables and
	HTML5 audio.  Sometimes less is more.
*/

var musicGuideTable = function(url, cn, bgc) {
	// url to audio file, column number for timings, bg color of highlight
  sectionTimes = new Array();
  currentRow = null;
  bgColor=bgc;
	
	for(i=1; i<document.getElementById("musicGuide").rows.length; i++) {
		document.getElementById("musicGuide").rows[i].addEventListener("click", this.rowClick);
  	sectionTimes[i] = timeStringToSeconds(document.getElementById("musicGuide").rows[i].cells[(cn-1)].innerHTML);
	}
  
	mySound = new Audio([url]);
	mySound.addEventListener("timeupdate", this.checkForNextSection);
  
	document.getElementById("playpause").addEventListener("click", this.togglePlay);
	
	timediv = document.getElementById("time");
};

musicGuideTable.prototype.rowClick = function() {	
	if(currentRow) {
		document.getElementById("musicGuide").rows[currentRow].style.backgroundColor = null;  // remove bg color
  }
  else {
    mySound.play();
  }
  
	this.style.backgroundColor = bgColor;

  mySound.currentTime = sectionTimes[this.rowIndex];
  currentRow = this.rowIndex;
  
	if(mySound.paused) {
  	mySound.play();
  }
};

musicGuideTable.prototype.checkForNextSection = function() {
	timediv.innerHTML = secondsToTimeString(mySound.currentTime);
	
	if(mySound.currentTime > sectionTimes[(parseInt(currentRow) + 1)]) {
		if(currentRow) {
			document.getElementById("musicGuide").rows[currentRow].style.backgroundColor = null; // remove bg color
  	}
  
		document.getElementById("musicGuide").rows[currentRow].style.backgroundColor = null;
  	currentRow++;
		document.getElementById("musicGuide").rows[currentRow].style.backgroundColor = bgColor;
  }
};

musicGuideTable.prototype.togglePlay = function() {
	if(mySound.paused) {
  	mySound.play();
  }
  else {
  	mySound.pause();
  }
  if(mySound.currentTime==0) {
  	currentRow = 1;
		document.getElementById("musicGuide").rows[currentRow].style.backgroundColor = bgColor;
  }
};

function timeStringToSeconds(str) {
  var a = str.split(':'); // split it at the colons
  var seconds = (+a[0]) * 60 + (+a[1]);
  
  return seconds;
}

function secondsToTimeString(sec) {
	var minutes = parseInt( sec / 60 ) % 60;
	var seconds = sec % 60 | 0;
	
	var timestamp = minutes + ":" + (seconds  < 10 ? "0" + seconds : seconds);

  return timestamp;
}
