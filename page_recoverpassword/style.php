<style>

@import url(https://fonts.googleapis.com/css?family=Raleway:700,400,300);

html, h1, h2, h3, h4, h5, h6, p {
    font-family: 'Helvetica', sans-serif;
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
  padding-top: 0px;
  cursor: pointer;
  background-color: black;
}

@media (max-width : 320px) {
    .head {
        height: 900px;
    }
}

.backgroud {
    content: url("images/bg_wall.png");
    position: absolute;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    opacity: .15;
}

/* Start Page */
.body {
  background-image: url("images/bg_header.png");
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  min-height: 93vh;
  width: auto;
}
/* End Page */

/* Start Description */
.header-content {
	margin-top: 100px;
	color: #fff;
}

.header-content h1 {
	font-size: 42px;
	line-height: 54px;
}

.header-content p {
	font-weight: 400;
	font-size: 16px;
}
/* End Description */

/* Start Form */
form {
  /* background-color: #111111; */
  background: transparent;
  margin: 0 auto;
  margin-top: 20px;
  text-align: center;
  min-width: 350px;
  border-radius: 10px;
  box-shadow:
      0 0 0 2px #fa641b,
      0 0 0 4px #fe9e3b,
      0 0 0 5px #e43e10;
}

.parsley-custom-error-message {
  color: red;
}

input[type=text], input[type=password],
input[type=text]:focus, input[type=password]:focus {
    margin-top: 15px !important;
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 2px solid #B51515;
    background-color: transparent;
    box-sizing: border-box;
    border-radius: 10px;
    text-align: center;
    font-size: 15px;
    color: #F28F36 !important;
}

input[type=text]:focus, input[type=password]:focus {
  outline: none;
  box-shadow:
  0 0 0 .5px #fa641b,
  0 0 0 1px #fe9e3b,
  0 0 0 1.5px #e43e10;
  color: #F28F36 !important;
}

input[type=text]::-webkit-input-placeholder, input[type=password]::-webkit-input-placeholder {
  text-align: center;
  color: #F28F36 !important;
  font-weight: bold;
  font-size: 15px;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
    transition: background-color 5000s ease-in-out 0s;
    color: #F28F36 !important;
    -webkit-text-fill-color: #F28F36 !important;
}

button { /*confirm*/
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border-radius: 10px;
  	font-size: 15px;
    font-weight: bold;
}

button:hover {
    /* opacity: 0.8; */
}

/* Acertar cor do laranja */
.buttonConfirm {
  margin-top: 45px !important;
  margin-bottom: 35px !important;
  background-color: transparent;
  min-width: 150px !important;
  min-height: 30px;
  box-shadow:
    0 0 0 2px #fa641b,
    0 0 0 3px #fe9e3b,
    0 0 0 4px #e43e10;
 font-size:20px;
 -webkit-text-fill-color: #F28F36;
 -webkit-text-stroke:1px #D66B36
}

.buttonLost {
  margin-left: 0px;
  margin-bottom: 30px !important;
  background-color: transparent !important;
  min-width: 250px !important;
  font-size:15px;
  color: #F28F36;
}

.cancelbtn {
    width: auto;
    background-color: #f44336;
}

.submitbtn {
    width: auto;
    padding: 10px 18px;
    min-width: 150px;
}

.container-form {
    padding-top: 50px;
    padding-bottom: 0px;
}

.container-form-cancel {
  margin-top: -10px;
  padding: 0px;
  min-width: 350px;
}

span.psw {
    margin: 8px 0;
    float: right;
    padding: 10px 18px;
}

/* End Form */
</style>
