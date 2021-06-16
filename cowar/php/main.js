$(".hey").click((e) => {
  let textvalues = displayData(e);
  let id = $("input[name*='hospital_id']");
  let hospitalname = $("input[name*='hospital_name']");
  let hospitaladdress = $("input[name*='hospital_address']");
  let hospitalpincode = $("input[name*='hospital_pincode']");
  let hospitalcontact = $("input[name*='hospital_contact']");

  id.val(textvalues[0]);
  hospitalname.val(textvalues[1]);
  hospitaladdress.val(textvalues[2]);
  hospitalpincode.val(textvalues[3]);
  hospitalcontact.val(textvalues[4]);
  alert(`You have choosen id = ${textvalues[0]} to edit ,Press ok to continue`);
});

function displayData(e) {
  let id = 0;
  const td = $("#tbody tr td");

  let textvalues = [];
  for (const value of td) {
    if (value.dataset.id == e.target.dataset.id) {
      textvalues[id++] = value.textContent;
    }
  }
  return textvalues;
}
