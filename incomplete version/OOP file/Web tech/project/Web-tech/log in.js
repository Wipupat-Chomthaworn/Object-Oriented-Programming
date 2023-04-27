// let name = localStorage.getItem("Name");
let user = "a1";
let target = document.getElementById("textacct");
let access = false;

function setName(arg) {
  localStorage.setItem("Name", arg);
}
// function setName(ar) {
//     localStorage.setItem("Name", user);
//   }
function getName() {
  if (access) {
    // setName(user);
    // user = localStorage.getItem("Name");
    console.log(user);
    target.innerHTML = localStorage.getItem("Name");
  } else {
    // user = "anonymous";
    target.innerHTML = localStorage.getItem("Name");
    setName(user);
    console.log(user);
    console.log('da');
 }
 target.innerHTML = localStorage.getItem("Name");
}

// getName();
