const allTasks= document.getElementById("allTasks");
const timeByAscList = document.getElementById("taskByTimeAsc");
const timeByDescList = document.getElementById("taskByTimeDesc");
const statusNotFinished = document.getElementById("taskNotFinished");
const statusBusy = document.getElementById("taskBusy");
const statusFinished = document.getElementById("taskFinished");


const timeByAscBtn = document.getElementById("filterByTimeAsc");
const timeByDescBtn = document.getElementById("filterByTimeDesc");
const statusNotFinishedBtn = document.getElementById("filterByNotFinished");
const statusBusyBtn = document.getElementById("filterByBusy");
const statusFinishedBtn = document.getElementById("filterByFinished");

timeByAscBtn.onclick = showTasksByTimeAsc;
timeByDescBtn.onclick = showTasksByTimeDesc;
statusNotFinishedBtn.onclick = showTasksNotFinished;
statusBusyBtn.onclick = showTasksBusy;
statusFinishedBtn.onclick = showTasksFinished

var menu = document.getElementById("filterTasks");
menu.addEventListener("change", showData);

function showData(event) {
  if (menu.value == '0'){
      showAllTasks();
  } else if (menu.value == '1') {
    showTasksByTimeAsc();
  } else if (menu.value == '2') {
    showTasksByTimeDesc();
  } else if (menu.value == '3') {
    showTasksNotFinished();
  } else if (menu.value == '4'){
      showTasksBusy();
  } else if (menu.value == '5'){
      showTasksFinished();
  }
}

//show element
function show (element){
    element.classList.remove("hidden");
}

//hide element
function hide(element){
    element.classList.add("hidden");
}

function showAllTasks(){
    hide(timeByDescList);
    hide(statusNotFinished);
    hide(statusBusy);
    hide(statusFinished);
    hide(timeByAscList);
    show(allTasks);
}

function showTasksByTimeAsc(){
    hide(allTasks);
    hide(timeByDescList);
    hide(statusNotFinished);
    hide(statusBusy);
    hide(statusFinished);
    show(timeByAscList);
}

function showTasksByTimeDesc(){
    hide(allTasks);
    hide(timeByAscList);
    hide(statusNotFinished);
    hide(statusBusy);
    hide(statusFinished);
    show(timeByDescList);
}

function showTasksNotFinished(){
    hide(allTasks);
    hide(timeByAscList);
    hide(statusBusy);
    hide(statusFinished);
    hide(timeByDescList);
    show(statusNotFinished);
}

function showTasksBusy(){
    hide(allTasks);
    hide(timeByAscList);
    hide(statusFinished);
    hide(timeByDescList);
    hide(statusNotFinished);
    show(statusBusy);
}

function showTasksFinished(){
    hide(allTasks);
    hide(timeByAscList);
    hide(statusBusy);
    hide(statusNotFinished);
    hide(timeByDescList);
    show(statusFinished);
}
