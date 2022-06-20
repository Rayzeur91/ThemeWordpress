
</div>
<?php wp_footer() ?>

<footer>
  <div id="div-footer">
    <div id="firstbar-footer">
        <div>
            <a class="btnfooter" href="https://www.facebook.com/institutadiosformation">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a class="btnfooter" href="https://www.tiktok.com/@institutadios?">
              <i class="fab fa-tiktok"></i>
            </a>
            <a class="btnfooter" href="https://www.youtube.com/channel/UCzaXWTLISx4bluWNTVPiFEQ">
              <i class="fab fa-youtube"></i>
            </a>
            <a class="btnfooter responsive-mobile" href="https://www.youtube.com/channel/UCzaXWTLISx4bluWNTVPiFEQ">
              <i class="fas fa-phone"></i>
            </a>
        </div>
        <div class="div-img responsive-only-desktop">
           <img src="https://institutadios.com/wp-content/uploads/2021/11/Logo-entête.png" alt="Logo" class="img-logo">
        </div>
        <div class="text-phone-footer responsive-only-desktop">
          <i class="fas fa-phone"></i>
          <a id="phone-footer" href="tel:0180272015"> 01 80 27 20 15</a>
    </div>
        
    </div>  
    <hr width="95%" clas="responsive-only-desktop" color="#2f7dc0">      
    <div id="scdbar-footer" class="text-color-footer">
           <div class="responsive-only-desktop"><a class="scdcolor" href="https://institutadios.com/"> Accueil</a></div>
            <div class="responsive-only-desktop"><a class="scdcolor"  href="https://institutadios.com/la-methode/">La méthode</a> </div>
            <div class="responsive-only-desktop"><a class="scdcolor"  href="https://institutadios.com/addictions-problemes/">Addictions</a> </div>
            <div class="responsive-only-desktop"><a class="scdcolor"  href="https://app.acuityscheduling.com/schedule.php?owner=17912714&appointmentType=category:Visio1ereSeancesdEvaluationGenerale%20----">Prendre RDV</a> </div>
            <div class="responsive-only-desktop"><a class="scdcolor"  href="https://institutadios.com/contact/">Contacts</a> </div>
    </div>
    <div id="legal-footer" class="text-color-footer">
      <div><span>Mentions légales</span> </div>
      <div class="cercle responsive-only-desktop"></div>
      <div><span>CGUV</span> </div>
      <div class="cercle responsive-only-desktop"></div>
      <div><span>Politique de confidentialité</span></div>
      <div class="cercle responsive-only-desktop"></div>
      <div><span>Cookies</span> </div>
    </div>
  </div>
</footer>
<style>
body{
  padding: 0;
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}
footer
{
  background-color: #003563 ;
  padding-top: 3%;
  padding-bottom: 3%;
  font-family: 'Montserrat', sans-serif;
}
#div-footer
{
}
#firstbar-footer
{
 display: flex ;
 justify-content: space-around;
 padding-bottom: 1%;
}
.btnfooter{
  display: inline-block;
  width: 35px;
  height: 35px;
  background: #f1f1f1;
  margin: 5px;
  border-radius: 30%;
  box-shadow: 0 5px 15px -5px #00000070;
  color: #3498db !important;
  overflow: hidden;
  position: relative;
  text-align: center;
}
.btnfooter i{
  line-height: 35px;
  font-size: 18px;
  transition: 0.2s linear;
  font-weight: bolder;
}
.btnfooter:hover i{
  transform: scale(1.3);
  color: #f1f1f1;
}
.btnfooter::before{
  content: "";
  position: absolute;
  width: 120%;
  height: 120%;
  background: #3498db;
  transform: rotate(45deg);
  left: -110%;
  top: 90%;
}
.btnfooter:hover::before{
  animation: aaa 0.7s 1;
  top: -10%;
  left: -10%;
}
@keyframes aaa {
  0%{
    left: -110%;
    top: 90%;
  }50%{
    left: 10%;
    top: -30%;
  }100%{
    top: -10%;
    left: -10%;
  }
}
.div-img
{
width: 150px;
}
.img-logo
{
  transform: translateY(-20%);
  justify-content: center;
  max-width: 100%;
}
.text-phone-footer
{
  color: white ;
  margin-top: 1%;
  font-weight: bolder;
}
#scdbar-footer
{
  display: flex;
  gap: 2%;
  justify-content: center;
  font-size: 17px;
	color: red !important ;
}
.scdcolor
{color:white !important;}
#legal-footer
{
  display: flex;
  justify-content: center;
  gap: 2.5%;
  font-size: 15px;
}
.text-color-footer
{
  color: white;
  padding-top: 1.5%;
}
#phone-footer
{
  color: white;
  font-size: 17px;
}
.cercle{
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: white;
    margin-top: 8px;
}
.responsive-mobile
{
  display: none;
}

@media only screen and (max-width: 500px) {
  body {
    background-color: lightblue;
  }
  .responsive-only-desktop
  {
  display: none;
  }
  .responsive-mobile
  {
  display: inline-block;
  }
  #legal-footer
  {
    font-size: 12px;
    padding-bottom: 2%;
		padding-left: 4%;
		padding-right: 9%;
  }
}
#colorscdbar
	{color:red !important }
</style>
</body>
</html>