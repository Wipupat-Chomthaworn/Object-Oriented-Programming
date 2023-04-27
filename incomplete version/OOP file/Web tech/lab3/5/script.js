
const preview = document.getElementById("preview");
preview.addEventListener("click", create);

function create(){
  let Name = document.getElementById("name").value;
  let Phone = document.getElementById("phone").value;
  let Email = document.getElementById("email").value;
  let Company = document.getElementById("company").value;

  const Name1 = document.getElementById("name1");
  const Phone1 = document.getElementById("phone1");
  const Email1 = document.getElementById("email1");
  const Company1 = document.getElementById("company1");

  Name1.innerHTML = Name;
  Phone1.innerHTML = Phone;
  Email1.innerHTML = Email;
  Company1.innerHTML = Company;
  event.preventDefault()
}
