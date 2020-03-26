<style>
/* Start TopBar */
.top-menu {
  position: fixed;
  overflow: hidden;
  height: 35px;
  /* width: 100%; */
  width: auto;
  right: 1%;
  top: 0;
  z-index: 10;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
  border: none;
  -webkit-transition: all 300ms linear;
  -moz-transition: all 300ms linear;
  -o-transition: all 300ms linear;
  -ms-transition: all 300ms linear;
  transition: all 100ms linear;
}

.top-menu:hover {
  height: 170px;
}
/* End TopBar */

/* Start button Top-Menu */
.top-menu a {
	display: block;
	box-sizing: border-box;
	width: 100%;
	height: 100%;
	text-decoration: none;
	background: rgba(0,0,0,0.5);
	transition: background 0.2s;
	-webkit-border-radius: 0 0 10px 10px;
	border-radius: 0 0 10px 10px;
	border: none;
}

.top-menu a:hover {
	background: url(img/ie-stripe-bg-hover.png) repeat;
	background: rgba(0,0,0,0.95);
	transition: background 1s;
}
/* End button Top-Menu */

/* Start Title Top-Menu */
.top-title {
  background: rgba(0,0,0,0.5);
  height: 35px;
}

.top-title p {
  padding: 2px 0px 0px 20px;
  line-height: 30px;
  font-family: 'Raleway', sans-serif;
  font-weight: 500;
  font-size: 20px;
  color: #ffffff;
}

.top-title p:hover {
  color: #dddddd;
}
/* Start Title Top-Menu */

/* Start Icon Top-Menu */
.top-title-icon {
  padding: 0px 0px 0px 80px;
  margin: -8px 0px 0px 0px;
  color: #ffffff;
}

.top-title-icon:hover {
  margin: -8px 0px 0px 0px;
  color: #dddddd;
}
/* End  Icon Top-Menu */

/* Start SubItens */
.top-options {
  margin-left: -15px;
  margin-right: 10px;
  padding: 10px 0px 0px 0px;
  font-family: 'Raleway', sans-serif;
  font-size: 15px;
}

.top-options ul {
  list-style-type: circle;
}

.top-options li {
  color: #ffffff;
  margin: 0;
  padding-bottom: 10px;
  box-sizing: border-box;
  line-height: 20px;
}

.top-options li:hover {
  color: #cccccc;
  text-decoration: underline;
}
/* End SubItens */

/* Start navbar*/
.navbar {
    /* configuration */
    -webkit-align-items: center;
    -webkit-flex-direction: row;
    -webkit-justify-content: space-between;
    -ms-flex-align: center;
    -ms-flex-direction: row;
    -ms-flex-pack: justify;
    box-sizing:border-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    justify-content: space-between;
    position: fixed;
    align-items: center;
    background-image: url("images/navbar.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    border: 0;
    height: 60px;
    width:100%;
    z-index: 9999;
}

.navbar a {
  text-decoration: none;
  color: #ffffff;
}

.navbar a:hover {
  color: #d66b36;
}

.navbar, ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

.navbar_logo {
    padding-left: 20px;
    content: url("images/logo-footer.png");
    width: 250px;
    height: auto;
}
/*End navibar*/

/* Start Footer */
.container{
    overflow: hidden;
}

.footer-info {
    flex-shrink: 0;
    background-image: url("images/footer.png");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    top: 0;
    right: 0;
    bottom: 0px;
    left: 0;
    width:100%;
    min-height: 80px;
    position: relative;
}

.footer-info img{
    content: url("images/logo-footer.png");
    width: 250px;
    padding-top: 20px;
    height: auto;
}

.footer-nav ul{
    text-decoration: none;
    text-align: center;
    list-style-type: none;
    padding-top: 20px;
    height: auto;
}

.footer-nav li{
    display: inline;
    padding: 6px;
}

.footer-nav li a{
    color: #c0c0c0;
}

.footer-info p{
    color: #c0c0c0;
    margin-top: 10px;
    text-align: center;
    padding-top: 20px;
    height: auto;
}
/* End Footer */


/* Start Logo */
.logo{
    margin-top: 120px;
}

/* End Logo */
</style>
