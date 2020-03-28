document.querySelector("#aboutNav").onclick = function() {
  document.querySelector("#about").scrollIntoView({ behavior: 'smooth' });
}

document.querySelector("#faqNav").onclick = function() {
  document.querySelector("#frequently").scrollIntoView({ behavior: 'smooth' });
}