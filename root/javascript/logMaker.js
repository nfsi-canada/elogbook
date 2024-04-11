var date = new Date();

document.getElementById("date").value = date.getFullYear() + "-" + (date.getMonth()<10?'0':'') + (date.getMonth() + 1) + "-" + (date.getDate()<10?'0':'') + date.getDate();

document.getElementById("time").value = date.toTimeString().replace(/.*(\d{2}:\d{2}:\d{2}).*/, "$1");