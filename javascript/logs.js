// lets say that the data sent curise PK was its id 3456788//

let cID = 3456788; // sent id 

// the app will find a crusie that matches the id and pull the list of logs from that cruise 

//mock database//

    // id/title/author/time/date/disc

let fakeDataBase = [
    
    [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23],
    ["2023-12-20","2024-01-02","2024-1-20","2024-02-02","2024-02-19","2024-02-20", "2023-12-20","2024-01-02","2024-1-20","2024-02-02","2024-02-19","2024-02-20","2023-12-20","2024-01-02","2024-1-20","2024-02-02","2024-02-19","2024-02-20", "2023-12-20","2024-01-02","2024-1-20","2024-02-02","2024-02-19","2024-02-20"],
    ["16:46","23:46","01:46","6:16","09:06","11:57","16:46","23:46","01:46","6:16","09:06","11:57","16:46","23:46","01:46","6:16","09:06","11:57","16:46","23:46","01:46","6:16","09:06","11:57"], 
    ["DEPLOYMENT", "RECOVERY", "DEPLOYMENT", "COMMENTS" , "RECOVERY", "DEPLOYMENT","DEPLOYMENT", "RECOVERY", "DEPLOYMENT", "COMMENTS" , "RECOVERY", "DEPLOYMENT","DEPLOYMENT", "RECOVERY", "DEPLOYMENT", "COMMENTS" , "RECOVERY", "DEPLOYMENT","DEPLOYMENT", "RECOVERY", "DEPLOYMENT", "COMMENTS" , "RECOVERY", "DEPLOYMENT"],
    ["some stuff happend",
    "nothing happend",
    "this is some crazy da da right here",
    "there once was a ship that put to sea, the name of the ship was a..",
    "billy o tea, some say the wellerman comes to...",
    "bring us sugar tea and rum, this of course being a referance to a well known sea shanty that...",
    "some stuff happend",
    "nothing happend",
    "this is some crazy da da right here",
    "there once was a ship that put to sea, the name of the ship was a..",
    "billy o tea, some say the wellerman comes to...",
    "bring us sugar tea and rum, this of course being a referance to a well known sea shanty that I happen to like, da da da tah da da da, da da, da da da da, good song true story, da da da dum da da dum dum da dum...",
    "some stuff happend",
    "nothing happend",
    "this is some crazy da da right here",
    "there once was a ship that put to sea, the name of the ship was a..",
    "billy o tea, some say the wellerman comes to...",
    "bring us sugar tea and rum, this of course being a referance to a well known sea shanty that...",
    "some stuff happend",
    "nothing happend",
    "this is some crazy da da right here",
    "there once was a ship that put to sea, the name of the ship was a..",
    "billy o tea, some say the wellerman comes to...",
    "bring us sugar tea and rum, this of course being a referance to a well known sea shanty that I happen to like, da da da tah da da da, da da, da da da da, good song true story, da da da dum da da dum dum da dum..."],
    ["Mladen", "Katie", "Gramm", "Jon", "Forde", "phil","Mladen", "Katie", "Gramm", "Jon", "Forde", "phil","Mladen", "Katie", "Gramm", "Jon", "Forde", "phil","Mladen", "Katie", "Gramm", "Jon", "Forde", "phil"]                    
]

let list = document.getElementById("logs");

for (i = 0; i < fakeDataBase[1].length; i++) {            

    let tr = document.createElement('tr');
    
    for (j = 1; j < fakeDataBase.length; j++) {         // i = 2 beacuse we skip id 

        let li = document.createElement('th');
        li.innerText = fakeDataBase[j][i];
        tr.appendChild(li);
        list.appendChild(tr);
    }
    let viewData = document.createElement('th');
    let link = document.createElement('a');
    link.setAttribute('href',"log.html");
    let button = document.createElement('button');
    button.innerText = "View"; 
    link.appendChild(button);
    viewData.appendChild(link);
    tr.appendChild(viewData);

    let editData = document.createElement('th');
    let linkTwo = document.createElement('a');
    linkTwo.setAttribute('href',"TBD.html");
    let buttonTwo = document.createElement('button');
    buttonTwo.innerText = "Edit"; 
    linkTwo.appendChild(buttonTwo);
    editData.appendChild(linkTwo);
    tr.appendChild(editData);
}

