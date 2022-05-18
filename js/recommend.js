


function reco()
{

var selectedM = document.getElementById('majors');
var d = document.getElementById('displayRecommend');


if(selectedM.options[selectedM.selectedIndex].value=="swe"){
  d.innerHTML = "<img src=\"images/mimo.png\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">Mimo</a>" ;
}
else if(selectedM.options[selectedM.selectedIndex].value=="it"){
    d.innerHTML = "<img src=\"images/Rstudio.png\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">Rstudio</a>" ;
  }

else if(selectedM.options[selectedM.selectedIndex].value=="cs"){
    d.innerHTML = "<img src=\"images/dis.jpg\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">Computer Science Dictionary</a>" ;
  }

else if(selectedM.options[selectedM.selectedIndex].value=="is"){
    d.innerHTML = "<img src=\"images/SoloLearn.png\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">SoloLearn</a>" ;
  }
  
else if(selectedM.options[selectedM.selectedIndex].value=="ds"){
    d.innerHTML = "<img src=\"images/anaconda.png\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">Anaconda</a>" ;
  }

else if(selectedM.options[selectedM.selectedIndex].value=="cys"){
    d.innerHTML = "<img src=\"images/vm.png\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">VMware</a>" ;
  }

else if(selectedM.options[selectedM.selectedIndex].value=="iot"){
    d.innerHTML = "<img src=\"images/shark.png\" alt=\"\" width=\"100\" height=\"100\"><br><a href=\"reviews.html\">Wireshark</a>" ;
  }




}


