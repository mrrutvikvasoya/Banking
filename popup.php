<style>
@keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}

/* BUTTON
========================================== */
.button {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
}
.button button {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-family: inherit;
  background-color: #ffffff;
  border: 0;
  padding: 15px 25px;
  color: #000000;
  text-transform: uppercase;
  font-size: 21px;
  letter-spacing: 1px;
  width: 200px;
  overflow: hidden;
  outline: 0;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
  visibility: visible;
  opacity: 1;
  font-weight: bold;
  box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.6);
}
.button button:hover {
  cursor: pointer;
  background-color: #8e6ac1;
  color: #ffffff;
}
.button button span {
  opacity: 1;
}
.button.clicked button {
  visibility: hidden;
  oacity: 0;
}
form{
  display: flex;
}
/* POP-UP
========================================== */
.pop-up {
  position: fixed;
  top: 50%;

  left: 50%;
  z-index: 2300000;
  -webkit-transform: translate(-50%, -50%) scale(0.9);
  -moz-transform: translate(-50%, -50%) scale(0.9);
  -ms-transform: translate(-50%, -50%) scale(0.9);
  -o-transform: translate(-50%, -50%) scale(0.9);
  transform: translate(-50%, -50%) scale(0.9);
  overflow-y: auto;
  box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.4);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  z-index: 10;
  background-color: #ffffff;
  width: 100%;
  height: 100%;
}
@media (min-width: 768px) {
  .pop-up {
    width: calc(100% - 40px);
    height: auto;
    max-width: 900px;
  }
}
.pop-up .content {
  width: 100%;
  max-width: 900px;
  overflow: hidden;
  text-align: center;
  position: relative;
  min-height: 100vh;
}
@media (min-width: 768px) {
  .pop-up .content {
    min-height: inherit;
  }
}
.pop-up .content .contai {
  padding: 100px 20px 140px;
}
@media (min-width: 568px) {
  .pop-up .content .contai {
    padding: 50px 20px 80px;
  }
}
@media (min-width: 768px) {
  .pop-up .content .contai {
    padding: 70px 0px 90px;
    max-width: 520px;
    margin: 0 auto;
  }
}
.pop-up .content .close {
  position: absolute;
  top: 20px;
  left: 20px;
  font-size: 1.1rem;
  letter-spacing: 0.05rem;
  color: #3e4146;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
.pop-up .content .close:hover {
  cursor: pointer;
  color: #f66867;
}
.pop-up .content .dots .dot {
  position: absolute;
  border-radius: 100%;
  z-index: 11;
}
.pop-up .content .dots .dot:nth-of-type(1) {
  top: -80px;
  right: -80px;
  width: 160px;
  height: 160px;
  background-color: #689bf6;
  -webkit-animation: float 6s ease-in-out infinite;
  -moz-animation: float 6s ease-in-out infinite;
  -o-animation: float 6s ease-in-out infinite;
  animation: float 6s ease-in-out infinite;
}
@media (min-width: 768px) {
  .pop-up .content .dots .dot:nth-of-type(1) {
    top: -190px;
    right: -190px;
    width: 380px;
    height: 380px;
  }
}
.pop-up .content .dots .dot:nth-of-type(2) {
  bottom: -120px;
  left: -120px;
  width: 240px;
  height: 240px;
  background-color: #f66867;
  -webkit-animation: float 8s ease-in-out infinite;
  -moz-animation: float 8s ease-in-out infinite;
  -o-animation: float 8s ease-in-out infinite;
  animation: float 8s ease-in-out infinite;
}
.pop-up .content .dots .dot:nth-of-type(3) {
  bottom: -50px;
  right: -50px;
  width: 100px;
  height: 100px;
  background-color: #ffd84c;
  -webkit-animation: float 4s ease-in-out infinite;
  -moz-animation: float 4s ease-in-out infinite;
  -o-animation: float 4s ease-in-out infinite;
  animation: float 4s ease-in-out infinite;
}
.pop-up .content .title h1 {
  text-align: center;
  color: #415cc5!important;
  text-transform: uppercase;
  font-weight: 900;
  font-size: 2.8rem;
  letter-spacing: 0.05rem;
}
.pop-up .content img {
  width: 100%;
  max-width: 220px;
  display: inline-block;
  margin: 30px 0 40px 0;
  opacity: 0;
  -webkit-transform: translateX(60px);
  -moz-transform: translateX(60px);
  -ms-transform: translateX(60px);
  -o-transform: translateX(60px);
  transform: translateX(60px);
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-backface-visibility: hidden;
}
@media (min-width: 768px) {
  .pop-up .content img {
    max-width: 300px;
  }
}
.pop-up .content .subscribe h1 {
  font-size: 1.5rem;
  color: #3e4146;
  line-height: 130%;
  letter-spacing: 0.07rem;
  margin-bottom: 30px;
}
.pop-up .content .subscribe h1 span {
  color: #415cc5!important;
}
.pop-up .content .subscribe form {
  overflow: hidden;
}
.pop-up .content .subscribe form input {
  width: 100%;
  float: left;
  padding: 15px 20px;
  text-align: center;
  font-family: inherit;
  font-size: 1.1rem;
  letter-spacing: 0.05rem;
  outline: 0;
}
.pop-up .content .subscribe form input[type=email] {
  margin-bottom: 15px;
  border: 1px solid #bec1c5;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
@media (min-width: 768px) {
  .pop-up .content .subscribe form input[type=email] {
    margin-bottom: 0px;
    width: 75%;
    border-right-width: 0px;
  }
}
.pop-up .content .subscribe form input[type=email]:focus {
  border-color: #3e4146;
}
.pop-up .content .subscribe form input[type=submit] {
  background-color: #5d678c!important;
  color: #ffffff;
  border: 1px solid #8e6ac1;
  transition: all 0.4s;
}
@media (min-width: 768px) {
  .pop-up .content .subscribe form input[type=submit] {
    width: 25%;
  }
}
.pop-up .content .subscribe form input[type=submit]:hover {
  cursor: pointer;
  background-color: #354170;
  border-color: #354170;
}
.pop-up.open {
  position: fixed;
  visibility: visible;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(1);
  -moz-transform: translate(-50%, -50%) scale(1);
  -ms-transform: translate(-50%, -50%) scale(1);
  -o-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
}
.pop-up.open img {
  opacity: 1;
  -webkit-transition: 1s;
  -moz-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  -webkit-transition-delay: 0.3s;
  -moz-transition-delay: 0.3s;
  -o-transition-delay: 0.3s;
  transition-delay: 0.3s;
  -webkit-transform: translateX(0px);
  -moz-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
}

#email{
      height: 21.5px;
}
@media only screen and (max-width: 600px) {
  form {
        flex-direction: column;
  }
}

</style>
<div class="pop-up">
  <div class="content">
    <div class="contai">
      <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>

      <span class="close">X</span>

      <div class="title">
        <h1>subscribe</h1>
      </div>

      <div class="subscribe">
        <h1>Subscribe to get the latest <span>news &amp; updates</span>.</h1>

        <form action="thank.php" method="POST">
          <input type="email" placeholder="Your email address" id="email" name="subscribeemail">
          <input type="submit" value="Subscribe" name="subbutton">
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  const myTimeout = setTimeout(myGreeting, 3000);
  function myGreeting() {
	  $(document).ready(function(){
    $('.pop-up').addClass('open');
    $('#index').css({"opacity":"0.1"});
  });
}


$('.pop-up .close').click(function(){
  $('.pop-up').removeClass('open');
  $('#index').css({"opacity":"1"});
});
</script>