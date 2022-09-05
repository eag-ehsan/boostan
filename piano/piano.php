<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="keywords" content="Covid19 test program">
    <meta name="description" content="Covid19 test program ">




    <title>تمرین برنامه نویسی پی اچ پی</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/lrnitor.css">
	  <link href="css/main.css" rel="stylesheet" type="text/css">
	  <link href="css/all.css" rel="stylesheet" type="text/css">
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script src="js/audiosynth.js"></script>
<script src="js/audiosynth.view.js"></script>
<!--	<script src="js/lrnitor.js"></script>-->

<style>

</style>


</head>
<body>

<div class="pann">


	<div class="custom-select" style="width:200px; display:none;">
		<select id="sound">
			<option value="0" selected="">Keyboard</option>
			<option value="1">Organ</option>
				<option value="2">Acoustic Guitar</option>
				<option value="3">EDM, bro!</option>
		</select>
	</div>
	<div class="pann-mid">
		<label for="sli1">Volume:</label>
		<input type="range" min="1" max="100" value="50" class="slider" id="sli1">
	<label id="lsli1">50</label>
	</div>
	<div class="pann-mid">
		<label for="sli2">Sinch:</label>
		<input type="range" min="1800" max="2200" value="2000" class="slider" id="sli2">
		<label id="lsli2">2.00</label>
	</div>
	<div class="pann-mid">
		<label for="sli3">Dmn1:</label>
		<input type="range" min="1" max="200" value="100" class="slider" id="sli3">
		<label id="lsli3">1</label>
	</div>
	<div class="pann-mid">
		<label for="sli4">Wave1:</label>
		<input type="range" min="1" max="400" value="100" class="slider" id="sli4">
		<label id="lsli4">1</label>
	</div>
	<div class="pann-mid">
		<label for="sli5">Wave2:</label>
		<input type="range" min="1" max="400" value="75" class="slider" id="sli5">
		<label id="lsli5">0.75</label>
	</div>
	<div class="pann-mid">
		<label for="sli6">Wave3:</label>
		<input type="range" min="1" max="300" value="10" class="slider" id="sli6">
		<label id="lsli6">0.10</label>
	</div>

</div>
	<div id="keyboard" class="keyboard-holder">
			<div class="white key" id="KEY_C,-1" style="width: 40px; height: 200px; left: 0px;">
			<div class="label">
				<b>Q</b><br><br>C<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="black key" id="KEY_C#,-1" style="width: 30px; height: 120px; left: 25px;">
			<div class="label">
				<b>2</b><br><br>C<span name="OCTAVE_LABEL" value="-1">4</span>#
			</div>
		</div>
		<div class="white key" id="KEY_D,-1" style="width: 40px; height: 200px; left: 40px;">
			<div class="label">
				<b>W</b><br><br>D<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="black key" id="KEY_D#,-1" style="width: 30px; height: 120px; left: 65px;">
			<div class="label"><b>3</b><br><br>D<span name="OCTAVE_LABEL" value="-1">4</span>#
			</div>
		</div>
		<div class="white key" id="KEY_E,-1" style="width: 40px; height: 200px; left: 80px;">
			<div class="label">
				<b>E</b><br><br>E<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="white key" id="KEY_F,-1" style="width: 40px; height: 200px; left: 120px;">
			<div class="label"><b>R</b><br><br>F<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="black key" id="KEY_F#,-1" style="width: 30px; height: 120px; left: 145px;">
			<div class="label"><b>5</b><br><br>F<span name="OCTAVE_LABEL" value="-1">4</span>#
			</div>
		</div>
		<div class="white key" id="KEY_G,-1" style="width: 40px; height: 200px; left: 160px;">
			<div class="label"><b>T</b><br><br>G<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="black key" id="KEY_G#,-1" style="width: 30px; height: 120px; left: 185px;">
			<div class="label">
				<b>6</b><br><br>G<span name="OCTAVE_LABEL" value="-1">4</span>#
			</div>
		</div>
		<div class="white key" id="KEY_A,-1" style="width: 40px; height: 200px; left: 200px;">
			<div class="label"><b>Y</b><br><br>A<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="black key" id="KEY_A#,-1" style="width: 30px; height: 120px; left: 225px;">
			<div class="label">
				<b>7</b><br><br>A<span name="OCTAVE_LABEL" value="-1">4</span>#
			</div>
		</div>
		<div class="white key" id="KEY_B,-1" style="width: 40px; height: 200px; left: 240px;">
			<div class="label">
				<b>U</b><br><br>B<span name="OCTAVE_LABEL" value="-1">4</span>
			</div>
		</div>
		<div class="white key" id="KEY_C,0" style="width: 40px; height: 200px; left: 280px;">
			<div class="label"><b>I</b><br><br>C<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="black key" id="KEY_C#,0" style="width: 30px; height: 120px; left: 305px;">
			<div class="label"><b>9</b><br><br>C<span name="OCTAVE_LABEL" value="0">5</span>#
			</div>
		</div>
		<div class="white key" id="KEY_D,0" style="width: 40px; height: 200px; left: 320px;">
			<div class="label">
				<b>O</b><br><br>D<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="black key" id="KEY_D#,0" style="width: 30px; height: 120px; left: 345px;">
			<div class="label"><b>0</b><br><br>D<span name="OCTAVE_LABEL" value="0">5</span>#
			</div>
		</div>
		<div class="white key" id="KEY_E,0" style="width: 40px; height: 200px; left: 360px;">
			<div class="label"><b>P</b><br><br>E<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="white key" id="KEY_F,0" style="width: 40px; height: 200px; left: 400px;">
			<div class="label">
				<b>[</b><br><br>F<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="black key" id="KEY_F#,0" style="width: 30px; height: 120px; left: 425px;">
			<div class="label">
				<b>=</b><br><br>F<span name="OCTAVE_LABEL" value="0">5</span>#
			</div>
		</div>
		<div class="white key" id="KEY_G,0" style="width: 40px; height: 200px; left: 440px;">
			<div class="label">
				<b>]</b><br><br>G<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="black key" id="KEY_G#,0" style="width: 30px; height: 120px; left: 465px;">
			<div class="label">
				<b>A</b><br><br>G<span name="OCTAVE_LABEL" value="0">5</span>#
			</div>
		</div>
		<div class="white key" id="KEY_A,0" style="width: 40px; height: 200px; left: 480px;">
			<div class="label">
				<b>Z</b><br><br>A<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="black key" id="KEY_A#,0" style="width: 30px; height: 120px; left: 505px;">
			<div class="label">
				<b>S</b><br><br>A<span name="OCTAVE_LABEL" value="0">5</span>#
			</div>
		</div>
		<div class="white key" id="KEY_B,0" style="width: 40px; height: 200px; left: 520px;">
			<div class="label">
				<b>X</b><br><br>B<span name="OCTAVE_LABEL" value="0">5</span>
			</div>
		</div>
		<div class="white key" id="KEY_C,1" style="width: 40px; height: 200px; left: 560px;">
			<div class="label">
				<b>C</b><br><br>C<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div>
		<div class="black key" id="KEY_C#,1" style="width: 30px; height: 120px; left: 585px;">
			<div class="label">
				<b>F</b><br><br>C<span name="OCTAVE_LABEL" value="1">6</span>#
			</div>
		</div>
		<div class="white key" id="KEY_D,1" style="width: 40px; height: 200px; left: 600px;">
			<div class="label">
				<b>V</b><br><br>D<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div>
		<div class="black key" id="KEY_D#,1" style="width: 30px; height: 120px; left: 625px;">
			<div class="label">
				<b>G</b><br><br>D<span name="OCTAVE_LABEL" value="1">6</span>#
			</div>
		</div>
		<div class="white key" id="KEY_E,1" style="width: 40px; height: 200px; left: 640px;">
			<div class="label">
				<b>B</b><br><br>E<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div><div class="white key" id="KEY_F,1" style="width: 40px; height: 200px; left: 680px;">
			<div class="label">
				<b>N</b><br><br>F<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div><div class="black key" id="KEY_F#,1" style="width: 30px; height: 120px; left: 705px;">
			<div class="label">
				<b>J</b><br><br>F<span name="OCTAVE_LABEL" value="1">6</span>#
			</div>
		</div><div class="white key" id="KEY_G,1" style="width: 40px; height: 200px; left: 720px;">
			<div class="label">
				<b>M</b><br><br>G<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div><div class="black key" id="KEY_G#,1" style="width: 30px; height: 120px; left: 745px;">
			<div class="label">
				<b>K</b><br><br>G<span name="OCTAVE_LABEL" value="1">6</span>#
			</div>
		</div>
		<div class="white key" id="KEY_A,1" style="width: 40px; height: 200px; left: 760px;">
			<div class="label">
				<b>,</b><br><br>A<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div>
		<div class="black key" id="KEY_A#,1" style="width: 30px; height: 120px; left: 785px;">
			<div class="label">
				<b>L</b><br><br>A<span name="OCTAVE_LABEL" value="1">6</span>#
			</div>
		</div>
		<div class="white key" id="KEY_B,1" style="width: 40px; height: 200px; left: 800px;">
			<div class="label">
				<b>.</b><br><br>B<span name="OCTAVE_LABEL" value="1">6</span>
			</div>
		</div>




	</div>


			<div class="keyboard-options">
		Current Page [C<span id="OCTAVE_LOWER">4</span>-B<span id="OCTAVE_UPPER">6</span>]
		<img src="l.png" alt="left" id="-_OCTAVE" width="40" height="40">
		<img src="r.png" alt="right" id="+_OCTAVE" width="40" height="40"><br>
		<!-- <input type="button" id="-_OCTAVE" value="-">
		<input type="button" id="+_OCTAVE" value="+"><br> -->
		<!-- <i>(Use left/right arrows to adjust with keyboard)</i> -->
		</div>


</body>

<script type="text/javascript">

var a = new AudioSynthView();
a.draw();




</script>


<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</html>
