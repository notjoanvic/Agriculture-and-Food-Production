<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Food Production</title>
<style>
    /*BBBBBBBBBBBBBBBOOOOOOOOOOOOOOOOODDDDDDDDDDDDDDDDDDYYYYYYYYYY*/
    * a {
        text-decoration: none;
    }
    body {
        background-image: url("https://images.unsplash.com/photo-1586771107445-d3ca888129ff?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
        background-color: beige;
        background-repeat: no-repeat;
        background-size: cover;
        height:100vh;
        margin: 0;
    }
    #mainBody {
        position: relative;
        height: auto;
        width: 100%;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.267);
        /*Top Right Bottom Left */
        color:rgb(255, 255, 255);
    }

    /*HHHHEEEEEEEEEEEEAAAAAAAAAAAAAAAADDDDDDDDDDDDEEEEEEEEEEEEERRRRRRRRRRR*/

    #nav {
        position:relative;
        display: flex;
        background-color: #052501;
    }
    #menu {
        position: absolute;
        top:20%;
        text-align: center;
        right: 0;
    }
    #menu a {
        margin-right: 10px;
        border-right: 1px solid grey;
        font-family: 'Times New Roman';
        padding: 5px 10px 5px 5px;
        font-size: 25px;
        color:white;
        
    }
    #menu a:hover {
        text-decoration: underline #fdde87c7;
    }

    /*MAAAAAAAAAAAAAAAAAAAAAAAAAAAAAIIIIIIIIIIIIIIIIIIIIIIIIIIIINNNNNNNNNNNNN*/

    #main {
        position: relative;
        margin: 5px;
        background-color: rgba(0, 0, 0, 0.404);
        padding: 1vh;
    }
    #article {
        position: relative;
        background-color: #291601b2;
        display: flex;
        column-gap:15px;
        padding: 3vh;
        align-items: center;
        justify-content: center;
    }
    #introduction {
        position: relative;
        max-width: 550px;
        max-height: 250px;
        padding: 0 3vh 3vh 3vh;
        background-color: #291601;
        border-radius: 20%;
        overflow: hidden;
    }
    #product-preview {
        position: relative;
        display:flex;
    }
    #product-preview h3, a{
        display: inline-block;
        text-align: center;
        padding:0 5px 0 5px;
        color:aliceblue;
        &:hover {text-decoration: underline aliceblue;}
    }

    #product-preview img{
        height: 160px;
        width: 160px;
        border-radius: 20px;
        transition: 1s;
        &:hover {transform: scale(1.2);}
    }

    /*FOOOOOOOOOOOOOOOOOOOOOTTTTTTTTTTTTTTTTTTTTTEEEEEEEEEEEEEEEEEEEERRRRRRRRR*/

    #footer {
        position: relative;
        display: flex;
        background-color: #291601;
        height: auto;
        align-items: center;
        justify-content: center;
    }
    #findUs {
        list-style-type: none;  
        text-decoration: none;
        display: inline-flex;
    }
    #findUs li{
        padding: 0 20px 0 20px;
        border-right: .5px solid black;
        height: 30px;
    }
    #findUs img {
        height: 30px;
        width: 30px;
        &:hover{
            mix-blend-mode: multiply;
            transition:.3s;
        }
    }
</style>
</head>
<body>
    <div id="mainBody">

        <header id="header">
            <nav id="nav">
                <img style="padding-left: 0%; height: 20ox; width: 70px;  mix-blend-mode: color-burn;" src="Pics/Logo.PNG"/>
                <h1 style="padding-left: 1%;"><span style="color: rgb(10, 148, 10);">Agriculture</span> & <span style=" color:rgb(250, 201, 151);">Food Production</span></h1>
                <div id="menu">
                    <a style="text-decoration: underline rgb(197, 115, 47); color: rgb(197, 115, 47); padding: 5px;" href="homeAFP.html"><span>Home</span></a>
                    <a href="aboutAFP.html"><span>About</span></a>
                    <a href="products.html"><span>Products</span></a>
                    <a href="servicesAFP.html"><span>Services<span></a>
                    <a href="loginAFP.html" style="border: none;"><span>Log-in</span></a>
                </div>
            </nav>
        </header>

        <main id="main">
            <article id="article">
                <div id="introduction">
                    <p style="font-size: 40px;">
                        <span style="color:#4bc714;">Agriculture</span> & 
                        <span style="color:rgb(250, 201, 151);">Food Production</span>
                    </p>
                    <p style="font-size: 20px; font-family: Gill Sans;"> - Your direct source for quality agricultural food products. 
                        Explore a selection of fresh, locally harvested agricultural foods. 
                        Join us in supporting sustainable farming practices while enjoying the best agricultural products.
                    </p>
                </div>
                <div id="product-preview">
                    <h3><a href="#">Crops</a><p><img src="https://www.free-css.com/assets/files/free-css-templates/preview/page264/moon/assets/images/offer1.png"/></p></h3>
                    <h3><a href="#">Vegetables</a><p><img src="https://www.free-css.com/assets/files/free-css-templates/preview/page264/moon/assets/images/offer2.png"/></p></h3>
                    <h3><a href="#">Friuts</a><p><img src="https://images.unsplash.com/photo-1619566636858-adf3ef46400b?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></p></h3>
                    <h3><a href="#">Live-Stocks</a><p><img src="https://images.unsplash.com/photo-1523238606579-fcc8ffd63ab7?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"/></p></h3>
                </div>
            </article>

            <div id="slide-show">
                  <img src=""/>
                  <img src=""/>
                  <img src=""/>
            </div>
        </main>

        <footer id="footer">
            <h2 style="font-family: serif; color:rgb(255, 255, 255); position: absolute; left: 10px;">© 2023-2024 <span style="color: rgb(10, 148, 10);">A</span><span style="color:rgb(250, 201, 151);">FP</span> Org.</h2>
            <h3 style="font-family: Times New Roman; position: absolute; right: 30px; bottom: 5px;">Contact Us: (63+)9123456789</h3>
            <ul id="findUs">
                <li><a href="#"><img src="https://cdn1.iconfinder.com/data/icons/social-media-2285/512/Colored_Facebook3_svg-512.png"/></a></li>
                <li><a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Instagram_colored_svg_1-512.png"/></a></li>
                <li style="border: none;"><a href="#"><img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Youtube_colored_svg-512.png"/></a></li>
            </ul>
        </footer>

    </div>
</body>
</html>