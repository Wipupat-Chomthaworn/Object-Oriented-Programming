let access = false;
let uname = "Anonymous 001";
let ta = document.getElementById("textacct");

function log(uname){
  ta.innerHTML=uname;
}
function checkFirstVisit() {
  if(document.cookie.indexOf('mycookie')==-1) {
    // cookie doesn't exist, create it now
    document.cookie = 'mycookie=1';
    ta.innerHTML=uname;
  }
  else {
    // not first visit, so alert
    alert('You refreshed!');
    ta.innerHTML=uname;
  }
}