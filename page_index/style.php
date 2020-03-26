<style>
@import url(https://fonts.googleapis.com/css?family=Helvetica:700,400,300);

html, h1, h2, h3, h4, h5, h6, p {
    font-family: 'Raleway', sans-serif;
}

p {
    line-height: 24px;
    font-size: 15px;
    color: white;
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
button {
    display: inline-block;
    background-color: rgba(0, 0, 0, .9);
    width: 300px;
    height: 60px;
    max-width: 80%;
    border-radius: 5px;
    border: none;
    color: #fff;
    font-size: 25px;
    font-weight: bold;
    box-shadow:
        0 0 0 2px #fa641b,
        0 0 0 3px #fe9e3b,
        0 0 0 4px #e43e10;
    -webkit-text-fill-color: #F28F36;
    -webkit-text-stroke:1px #D66B36;
    margin: 10px;
}

button:focus {
    outline:0;
}

.box-button {
    margin-top: -50px;
}

.button-box {
    height: 220px;
}
.button-box p {
    text-align: center;
    margin: 10px;
}

/* End Block 1 */

/* Start Modal */ 
.modal {
    display: inline-block;
    background-color: rgba(0, 0, 0, .5);
    height: 100%;
}

.modal .alert {
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    background-color: #111;
    border-radius: 5px;
    border: none;
    box-shadow:
        0 0 0 2px #fa641b,
        0 0 0 3px #fe9e3b,
        0 0 0 4px #e43e10
        !important;
    color: white;
    max-height: 90%;
}

.modal .img_age {
    content: url("images/plus_age.png");
    display: block;
    height: 100px;
    margin: 30px;
}

.modal p {
    font-size: 20px;
}

.modal button {
    display: inline-block;
    background-color: rgba(0, 0, 0, .9);
    width: 150px;
    height: 50px;
    border-radius: 5px;
    border: none;
    font-size: 20px;
    font-weight: bold;
    margin-left: 30px;
    margin-right: 30px;
    margin-top: 30px;
    margin-bottom: 30px;
}

.btn_close {
    box-shadow: 
        0 0 0 2px #fa1b1b, 
        0 0 0 3px #fe3b3b, 
        0 0 0 4px #e41010;
    -webkit-text-fill-color: #f23636;
    -webkit-text-stroke: 1px #d63636;
}

.btn_enter {
    box-shadow: 
        0 0 0 2px #29fa1b, 
        0 0 0 3px #3efe3b, 
        0 0 0 4px #10e42a;
    -webkit-text-fill-color: #39f236;
    -webkit-text-stroke: 1px #36d64a;
}

@media (max-width : 480px) {
    .modal .img_age {
        height: 70px;
        margin: 10px;
    }
    .modal h2 {
        font-size: 20px;
    }
    .modal p {
        font-size: 15px;
    }
    .modal button {
        margin: 15px;
    }
}
/* End Modal */ 
</style>