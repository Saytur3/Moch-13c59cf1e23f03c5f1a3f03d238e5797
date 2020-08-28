function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  h = (h < 10)?"0"+h:h;
  m = (m < 10)?"0"+m:m;
  s = (s < 10)?"0"+s:s;
  document.getElementById('waktu').innerHTML =
  h + ":" + m + ":" + s;
  var time = setTimeout(startTime, 500);
}
