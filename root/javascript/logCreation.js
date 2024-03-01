var list = document.getElementById('zone');
var item = document.getElementById('Instruments');
item.onsubmit = function(evt) {
  evt.preventDefault();
  var Instrument = document.getElementById('Instrument').value;
  var item = document.createElement('li');
  item.appendChild(document.createTextNode(Instrument));
  list.appendChild(item);
}


var date = new Date();

document.getElementById("date").value = date.getFullYear() + "-" + (date.getMonth()<10?'0':'') + (date.getMonth() + 1) + "-" + (date.getDate()<10?'0':'') + date.getDate();

document.getElementById("time").value = (date.getHours()<10?'0':'') + date.getHours()  + ":" + (date.getMinutes()<10?'0':'') + date.getMinutes();