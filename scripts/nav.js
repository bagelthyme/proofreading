document.querySelector("#aboutNav").onclick = function() {
  document.querySelector("#about").scrollIntoView({ behavior: 'smooth' });
}

document.querySelector("#faqNav").onclick = function() {
  document.querySelector("#frequently").scrollIntoView({ behavior: 'smooth' });
}

document.querySelector("#scrollUp").onclick = function() {
  document.querySelector("body").scrollIntoView( {behavior: 'smooth' });
}

var $burger = $('#menuToggle');
var $logo = $('#logo');
var $nav = $('nav ul');
var $phone = $('nav p');
var hidden = true;

$burger.on('click', () => {
    if (hidden) {
        $logo.css('display', 'none');
        $nav.css('overflow', 'unset');
        $nav.css('visibility', 'unset');
        $phone.css('overflow', 'unset');
        $phone.css('visibility', 'unset');
        hidden = false;
    } else {
        $logo.css('display', 'unset');
        $nav.css('overflow', 'hidden');
        $nav.css('visibility', 'hidden');
        $phone.css('overflow', 'hidden');
        $phone.css('visibility', 'hidden');
        hidden = true;
    }
})