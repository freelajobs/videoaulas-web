<style>

@import url(https://fonts.googleapis.com/css?family=Raleway:700,400,300);

html, h1, h2, h3, h4, h5, h6, p {
    font-family: 'Raleway', sans-serif;
}

p {
    line-height: 24px;
    font-size: 15px;
}

h1, h2, h4{
    font-weight: bold;
}

h4{
    text-transform: uppercase;
}

h1, h2, h3, h4, h5, h6, p, img, .btn {
    -moz-transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

body {
  padding-top: 10px;
  cursor: pointer;
  background-color: black;
}

/* Start Blick 1 Image */
.head {
  background-image: url("images/bg_header.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  /* min-height: 1000px;
  max-height: 1100px; */
  width: auto;
}


.backgroud {
    content: url("images/logo_wall.png");
    display: block;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    max-width: 50%;
    z-index: 1;
}

.header-content {
    margin-top: -15%;
    position: relative;
    display: block;
    text-align: center;
    /*background-color: green;*/
    color: #fff;
    /*Animation*/
    visibility: visible;
    animation-name: fadeInLeft;
}

@media (max-width : 480px) {
    .head {
        margin-top: 5%;
        height: 900px;
    }

    .backgroud {
        max-width: 100%;
    }

    .header-content {
        margin-top: -20%;
    }
}

@media (max-width : 990px) {
    .join-section  {
        min-height: 600px !important;
        margin-bottom: -100px !important;
    }
}

/* Start Logo */
.logo {
    overflow: auto;
    overflow: auto;
    top: -100px;
    /*Animation*/
    visibility: visible;
    animation-name: fadeIn;
}

/* End Logo */

/* Start Description */

.header-content h1 {
    font-size: 42px;
    line-height: 54px;
}

.header-content p {
    margin-top: 10px;
    font-weight: 400;
    font-size: 16px;
}
/* End Description */

/* Start Header Download */
.download-icons {
  display: inline-block;
  margin-top: -50px;
  height: 300px;
}

.download-icon-ios {
    display:inline;
    background-color: rgba(0, 0, 0, 0);
    content: url(images/btn_apple.png);
    width: 268px;
    height: 92px;
    margin: 10px;
    border: none;
}

.download-icon-android {
    display:inline;
    background-color: rgba(0, 0, 0, 0);
    content: url(images/btn_google.png);
    width: 268px;
    height: 92px;
    margin: 10px;
    border: none;
}
/* End Header Download */

/* End Block 1 */

/* Start Tarja Beneficios */
.services {
  background-image: url("images/bg_service.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding-top: 30px;
  padding-bottom: 30px;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  color: #ffffff;
  text-align: center;
}

.service-options {
    min-height: 600px;
}

.services-list{
    padding-top: 13%;
    /* padding-bottom: 30px; */
}

.services-list img {
  width: 40%
}

.services h4, .services p{
    padding-right: 30px;
    padding-left: 30px;
}

.services h4{
    padding-bottom: 4px;
    margin-top: 28px;
}

.services-list:hover h4{
    letter-spacing: 0.5px;
}

.services-list:hover p {
    letter-spacing: 0.1px;
}
/* End Tarja Beneficios */

/* Start Features */
.appdiv {
    height: 100%;
    padding-top: 50px;
}

.appimg {
   content: url("images/monitormockup.png"); 
   display: inline-block;
   max-width: 500px;
   max-height: 500px;
   width: 80%;
   height: 80%;
}

.features {
    background-image: url("images/bg_features.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 0px;
    padding-bottom: 60px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #ffffff;
    text-align: center;
}

.features-title {
    text-align: center;
}

.features-left {
	text-align: right;
}

.features-left h4, .features-left p{
	padding-right: 60px;
}
.features-left div:hover h4, 
.features-right div:hover h4, 
.features-left div:hover p, 
.features-right div:hover p {
	color: #ddd;
    letter-spacing: 0.05px;
}

.features-left div:hover h4, 
.features-right div:hover h4, 
.features-left div:hover p, 
.features-right div:hover p {
	color: #ddd;
    letter-spacing: 0.05px;
}

.features-right h4, .features-right p{
	padding-left: 60px;
}

.features-left div, .features-right div{
	margin-bottom: 36px;
}

.features-list-1 i, .features-list-2 i, .features-list-3 i, .features-list-4 i{
	transform:translate(0px, 40px);
}

.feature_icon {
    height: 55px;
    font-size: 4em;
}
/* End Features */

/* Start Line */
.line {
    border-bottom: 2px solid #ffffff;
    width: 80px;
    margin-top: 12px;
    margin-bottom: 18px;
}

.title-style{
    font-size: 16px;
}
/* End Line */

/* Start Partner */
.partner {
    background-image: url("images/bg_partner.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 70px;
    padding-bottom: 70px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #ffffff;
    text-align: center;
}

.partner-content {
    margin-top: 8%;
}

.partner h4{
    text-transform: none;
    color: #ffffff;
}

.partner-title {
    margin-bottom: 40px;
    text-align: center;
    visibility: visible;
    animation-name: fadeInDown;
}

.partner-title h1 {
    font-size: 30px;
}

.partner-list div{
    padding-top: 30px;
}

.partner-list img {
    height: 100px;
}

.partner-list div:hover h4,
.partner-list div:hover p {
    color: #ddd;
    letter-spacing: 0.1px;
}
/* End Partner */

/* Start Join */
.join-section  {
    background-image: url("images/bg_join.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    padding-top: 50px;
    padding-bottom: 0px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    color: #ffffff;
    text-align: left;
    min-height: 420px;
}

.join-section-child {
    padding-top: 3%;
    min-height: 420px;
}

.join-section  h2 {
    font-size: 36px;
}

.button-join {
    width: 300px;
    height: 120px;
    padding: 14px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-color: transparent;
    background-image: url(images/model_join.gif);
}

.button-join:focus {
    outline:0;
}

@keyframes glowing {
  0% {
    box-shadow: 0 0 20px #B51515;
  }
  25% {
    box-shadow: 0 0 20px #D66B36;
  }
  50% {
    box-shadow: 0 0 20px #B51515;
  }
  75% {
    box-shadow: 0 0 20px #D66B36;
  }
  100% {
    box-shadow: 0 0 20px #B51515;
  }
}


/* End Join */

/* Start Top Page */
@media only screen and (max-width : 768px) {
    a.top-page{
            outline: 1px solid red;
            display: none;
    }
}

a.top-page {
	margin-top: 75px;
	position: relative;
	float: left;
	padding: 10px 20px;
	color:#444;
	border-radius: 6px;
	background-color: rgba(255,255,255,0.2);
	    -webkit-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, height 0s, line-height 0s;
    -moz-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, height 0s, line-height 0s;
    -o-transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, height 0s, line-height 0s;
    transition: color 0.2s ease-in-out, background-color 0.2s ease-in-out, border-color 0.2s ease-in-out, height 0s, line-height 0s;
}

a.top-page:hover {
	background-color: rgba(0,0,0,0.2);
	color:#fff;
	text-decoration: none;
}
/* End Top Page */
</style>
