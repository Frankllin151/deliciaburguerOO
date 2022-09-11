let menu = document.querySelector('.menumain')
menu.addEventListener('click', e =>
  document.querySelector('.menu_dl').classList.toggle('myStyle')
)
/*home.php*/
function sendEmail() {
  let form = document.querySelector('.positionemailsend')
  form.style.display = 'flex'
  let body = document.querySelector('body')
  var r = body.style.r
  var g = body.style.g
  var b = body.style.b
  r = 5
  g = 5
  b = 5
  body.style.backgroundColor = 'rgba(' + r + ',' + g + ',' + b + ',0.89)'
  body.style.overflowY = 'hidden'
}
/*closed sendemail*/
let closedemail = document.querySelector('.closed')

function closedmodal() {
  let getform = document.querySelector('.positionemailsend')
  getform.style.display = 'none'

  let backcolor = document.querySelector('body')
  backcolor.style.backgroundColor = 'white'
  backcolor.style.overflowY = 'visible'
}
/***** */
