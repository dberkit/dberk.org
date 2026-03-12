/* TO DO
  add a mechanism for popping up defined terms
  make sure audio file is fully loaded before playback attempted
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
