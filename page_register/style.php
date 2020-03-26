<style>
@import url(https://fonts.googleapis.com/css?family=Raleway:700,400,300);
@import "css/segmented-control.css";

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

@media (max-width : 480px) {
    .head {
        height: 900px;
    }
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

.backgroud {
    content: url("images/bg_wall.png");
    position: absolute;
    left: 0;
    right: 0;
    margin-left: auto;
    margin-right: auto;
    max-width: 100%;
    opacity: .15;
    /* z-index: -100; */
}

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

/* Start Progressbar Blocks */
.progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	counter-reset: step;
}

.progressbarText {
  margin-top: 50px;
}

.progressbar li {
  margin-top: 5px;
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 12px;
  width: 25%;
	float: left;
	position: relative;
  font-weight: bold;
}

.progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 30px;
	line-height: 30px;
	display: block;
	font-size: 12px;
	color: #F28F36;
	background: #111111; /*Cor sem seleciona*/
  box-shadow:
    0 0 0 .5px #fa641b,
    0 0 0 1px #fe9e3b,
    0 0 0 1.5px #e43e10;
  /* background-color: transparent !important; */
 	border-radius: 5px;
	margin: 0 auto 5px auto;
}
/* End Progressbar Blocks */

/* Start Progressbar Connectors */
.progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: #111111; /*Cor sem seleciona*/
  box-shadow:
    0 0 0 .5px #fa641b,
    0 0 0 1px #fe9e3b,
    0 0 0 1.5px #e43e10;
  /* background-color: transparent !important; */
	position: absolute;
  left: 50%;
	top: 14px;
  z-index: -1 !important;
}

.progressbar li:last-child:after {
	content: none;
}

.progressbar li.active:before,
.progressbar li.active:after{
  z-index: -1 !important;
	background: #F28F36;
  box-shadow:
      0 0 0 .5px #CC3C20,
      0 0 0 1px #D66B36,
      0 0 0 1.5px #CC3C20;
	color: white;
}
/* End Progressbar Connectors */

/* Start MultiForm */
.multi-form { /*navbar*/
	max-width: 80%;
  min-width: 320px;
  height: auto;
  margin: 50px auto;
	text-align: center;
	position: relative;
  z-index: 1;
}

.multi-form fieldset {
	background: transparent;
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10% 5%;
	position: relative;
  min-width: 320px;
  color: white;

  color: #F28F36;
  text-align: center;
  border-radius: 10px;
  box-shadow:
      0 0 0 2px #fa641b,
      0 0 0 4px #fe9e3b,
      0 0 0 5px #e43e10;
}

/*Hide all except first fieldset*/
.multi-form fieldset:not(:first-of-type) {
	display: none;
}

/*Inputs Text Area*/
/* .multi-form input[type='text'], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
  color: black;
  outline: none;
} */

.multi-form textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border-radius: 10px;
  background-color: #262626;
  border: 2px solid #B51515;
  color: #F28F36;
  font-weight: bold;
  text-align: justify;
  resize: none;
}

.form_terms {
  font-size: 12px;
  height: 200px;
  text-justify: inter-word;
  justify-content:center;
  background-color: transparent !important;
  border: 2px solid #B51515;
}

/*buttons*/
.button { /*confirm*/
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-weight: bold;
  margin-left: 45px;
  margin-right: 45px;
}

input:focus {
    outline:0 !important;
}


button:focus {
    outline:0 !important;
}

.multi-form .next-button {
  margin-top: 45px !important;
  margin-bottom: 25px !important;
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
.multi-form .next-button:hover{
    /* opacity: 0.8; */
}

.multi-form .next-button:disabled{
    /* opacity: 0.6; */
}

.multi-form .previous-button {
  margin-top: 45px !important;
  margin-bottom: 25px !important;
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
.multi-form .previous-button:hover {
    /* opacity: 0.8; */
}

.multi-form .search-button {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
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
.multi-form .search-button:hover {
    /* opacity: 0.8; */
}

.multi-form .action-button {
  margin-top: 25px !important;
  margin-bottom: 25px !important;
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

.multi-form .action-button:hover {
    /* opacity: 0.8; */
}
/* End MultiForm */

/*headings*/
.multi-form-title {
	font-size: 20px;
	text-transform: uppercase;
	color: #fff;
}

.multi-form-subtitle {
	font-weight: normal;
	font-size: 12px;
	color: #fff;
	margin-bottom: 20px;
  margin-top: 0px;
}

.multi-form-asterisk {
  font-weight: bold;
  color:red;
  font-size:15px;
}

.field-block label {
  width: 150px;
  text-align: right;
}

@media only screen and (max-width : 768px) {
  .field-block label {
    width: 280px;
    text-align: left;
  }
}

.field-block input, .field-block input:focus {
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

.field-block input:focus {
  outline: none;
  box-shadow:
  0 0 0 .5px #fa641b,
  0 0 0 1px #fe9e3b,
  0 0 0 1.5px #e43e10;
  color: #F28F36 !important;
}

.field-block input::-webkit-input-placeholder, .field-block input::-webkit-input-placeholder {
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

.parsley-custom-error-message {
  color: red;
}

/* Start Segmented */
.segmented-control {
  width: 300px;
}

.segmented-control__label {
  border: 2px solid #B51515;
  box-shadow:
  0 0 0 .5px #fa641b,
  0 0 0 1px #fe9e3b,
  0 0 0 1.5px #e43e10;
}

.segmented-control__label__left {
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
}

.segmented-control__label__right {
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
}

.segmented-control__input:checked + .segmented-control__label {
    background: #fe9e3b;
    color: #e43e10;
    font-weight: bold;
}

.segmented-control__input:hover + .segmented-control__label {
    background: #fe9e3b;
    color: #e43e10;
    /* font-weight: bold; */
}

@media (max-width : 480px) {
    .multi-form fieldset {
      width: 100%;
	    margin: 0 0% 5%;
    }

    .segmented-control {
      width: 80%;
    }

    .map {
      width: 120% !important;
      margin-left: -10%;
    }
}
/* End Segmented */
</style>
