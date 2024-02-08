let fakeData = ["Condor", "Bluenose", "Kingston", "Atlantica" , "Offshore New Zealand, R/V Tangaroa"];
let fakeDataTwo = [3456788, 252352, 2525235, 242342342 , 24234242];

let list = document.getElementById("clItems");
for (i = 0; i < fakeData.length; ++i) {
    let li = document.createElement('li');
    li.innerText = "NAME: " + fakeData[i] + " " + "ID:" + " " + fakeDataTwo[i] + " " ;
    list.appendChild(li);
    
    
    let link = document.createElement('a');
    link.setAttribute('href',"logs.html");
    let button = document.createElement('button');
    button.innerText = "View Logs";
    link.appendChild(button);
    li.appendChild(link);


    let button2 = document.createElement('button');
    button2.innerText = "Exsport Data"; 
    li.appendChild(button2);
}

