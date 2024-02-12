let fakeData = ["Log 1", "Log 2", "Kingston", "Atlantica" , "Offshore New Zealand, R/V Tangaroa"]; // simulation of database
let fakeDataTwo = ["SO HERE IS SOME EXAMPLE TEXT FOR THE PLACE HOLDER! I LOVE THIS PART OF THE JOB< WRITEING RANDOM TEXT< WOOOO!",
                   "LALALALA", 
                   "LALALALA", 
                   "LALALALA", 
                  ];  // simulation of database

let toLookFor = "Log 1"; //data passed in by user on previos page 

let doc = document.getElementById("info");

for (i = 0; i < fakeData.length; ++i) {


    if (fakeData[i] == toLookFor){
        
        let h1 = document.createElement('h1');
        h1.innerText = fakeData[i];
        doc.appendChild(h1);

        let p = document.createElement('p');
        p.innerText = fakeDataTwo[i];
        doc.appendChild(p);

    }
}
let fakeItems = ["I 1", "I 2", "I 3", "I 4"]

var list = document.getElementById('zone');
var item = document.getElementById('Instruments');

for (i = 0; i < fakeItems.length; ++i) {
    var Instrument = fakeItems[i];
    var item = document.createElement('li');
    item.appendChild(document.createTextNode(Instrument));
    list.appendChild(item);
}