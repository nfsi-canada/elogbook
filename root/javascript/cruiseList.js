let fakeData = ["PACSAFE-leg 5", "PACSAFE-leg 4", "PACSAFE-leg 3", "PACSAFE-leg 2" , "PACSAFE-leg 1","PACSAFE-leg 5", "PACSAFE-leg 4", "PACSAFE-leg 3", "PACSAFE-leg 2" , "PACSAFE-leg 1"];
let fakeDataTwo = [3456788, 252352, 2525235, 242342342 , 24234242, 3456788, 252352, 2525235, 242342342 , 24234242];
let fakeDataThree = ["Nova scoitia", "Artic circle", "Rome", "Atlantis" , "Mars","Nova scoitia", "Artic circle", "Rome", "Atlantis" , "Mars"];

let fakeDataFour = ["2024-03-01", "2024-03-01", "2024-03-02", "2024-03-07" , "2024-03-05","2024-03-01", "2024-03-03", "2024-03-03", "2024-03-03" , "2024-03-03"];
let fakeDataFive = ["2024-03-09", "2024-03-09", "2024-03-05", "2024-03-06" , "2024-03-05","2024-03-03", "2024-03-03", "2024-03-03", "2024-03-03" , "2024-03-03"];

let list = document.getElementById("clItems");

for (i = 0; i < fakeData.length; ++i) {

    let tr = document.createElement('tr');


    let th = document.createElement('th');
    let th2 = document.createElement('th');
    let th3 = document.createElement('th');
    let th4 = document.createElement('th');
    let th5 = document.createElement('th');

    th.innerText = fakeData[i];
    tr.appendChild(th);

    th2.innerText = fakeDataTwo[i];
    tr.appendChild(th2);

    th3.innerText = fakeDataThree[i];
    tr.appendChild(th3);

    th4.innerText = fakeDataFour[i];
    tr.appendChild(th4);

    th5.innerText = fakeDataFive[i];
    tr.appendChild(th5);

    let viewLogs = document.createElement('th');
    let link = document.createElement('a');
    link.setAttribute('href',"logs.php");
    let button = document.createElement('button');
    button.innerText = "View Logs";
    link.appendChild(button);
    viewLogs.appendChild(link);
    tr.appendChild(viewLogs);

    let editCruise = document.createElement('th');
    let button3 = document.createElement('button');
    button3.innerText = "Edit Cruise"; 
    editCruise.appendChild(button3);
    tr.appendChild(editCruise);

    let expData = document.createElement('th');
    let button2 = document.createElement('button');
    button2.innerText = "Export Data"; 
    expData.appendChild(button2);
    tr.appendChild(expData);
        
    list.appendChild(tr);
}


