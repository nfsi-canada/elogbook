var list = document.getElementById('zone');
var item = document.getElementById('Instruments');
item.onsubmit = function(evt) {
  evt.preventDefault();
  var Instrument = document.getElementById('Instrument').value;
  var item = document.createElement('li');
  item.appendChild(document.createTextNode(Instrument));
  list.appendChild(item);
}

var list2 = document.getElementById('zone2');
var item2 = document.getElementById('Stations');
item2.onsubmit = function(evt2) {
  evt2.preventDefault();
  var Station = document.getElementById('Station').value;
  var item2 = document.createElement('li');
  item2.appendChild(document.createTextNode(Station));
  list2.appendChild(item2);
}

var list3 = document.getElementById('zone3');
var item3 = document.getElementById('Crew');
item3.onsubmit = function(evt3) {
  evt3.preventDefault();
  var name = document.getElementById('name').value;
  var item3 = document.createElement('li');
  item3.appendChild(document.createTextNode(name));
  list3.appendChild(item3);
}