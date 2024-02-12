// lets say that the data sent curise PK was its id 3456788//

let cID = 3456788; // sent id 

// the app will find a crusie that matches the id and pull the list of logs from that cruise 

//mock database//

    // id/title/author/time/date/disc

let fakeDataBase = [
    
    [0, 1, 2, 3 , 4, 5],
    ["Log 1", "Log 2", "Log 3", "Log 4" , "Log 5", "Log 6"],
    ["Mladen", "Katie", "Gramm", "Jon", "Forde", "phil"],   
    ["16:46","23:46","01:46","6:16","09:06","11:57"], 
    ["03/01/2023","03/07/2024","05/01/2023","11/05/2023","12/12/2023","30/12/2025"],
    ["some stuff happend",
    "nothing happend",
    "this is some crazy da da right here",
    "there once was a ship that put to sea, the name of the ship was a..",
    "billy o tea, some say the wellerman comes to...",
    "bring us sugar tea and rum, this of course being a referance to a well known sea shanty that I do enjoy, i mean even with my bad spelling I hope to properly convay that idea, this is ment to be a long text in a  log entry..."]                     
]

let list = document.getElementById("logs");

for (i = 0; i < fakeDataBase.length; i++) {             // i = 1 beacuse we dont creat any elements for the ID

    let lTitle = document.createElement('li');
    lTitle.innerText = fakeDataBase[1][i];
    list.appendChild(lTitle);

    let br = document.createElement('br');
    lTitle.appendChild(br);


    
    let link = document.createElement('a');
    link.setAttribute('href',"log.html");
    let button = document.createElement('button');
    button.innerText = "View Full Log"; 
    link.appendChild(button);
    lTitle.appendChild(link);


    for (j = 2; j < fakeDataBase.length; j++) {         // i = 2 beacuse we skip id and log number and display info

        let ul = document.createElement('ul');
    
        let li = document.createElement('li');
        li.innerText = fakeDataBase[j][i];
        ul.appendChild(li);

        list.appendChild(ul);
    }
    
}

