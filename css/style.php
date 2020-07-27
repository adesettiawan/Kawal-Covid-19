<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Muli', sans-serif;}

.nav_style{
    background-color: #1E90FF!important;
}
.nav_style a{
    color: white;
}

/* main header */

.main_header{
    height: 480px;
    width: 100%;
}

.rightside h1{
    font-size: 3rem;
}

.row{
    margin-left: 0!important;
    margin-right: 0!important;
}

.leftside img{
    animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat{
    0%
    {
        transform: scale(.75);
    }
    20%
    {
        transform: scale(1);
    }
    40%
    {
        transform: scale(.75);
    }
    60%
    {
        transform: scale(1);
    }
    80%
    {
        transform: scale(.75);
    }
    100%
    {
        transform: scale(.75);
    }
}

.corona-terkini{
    margin: 0 0 30px 0;
}

.corona-terkini h3{
    color: #FF7675;
}

.corona-terkini h1{
    font-size: 2rem;
    text-align: center;
}

.sub-section{
    background-color: #fbfafd;
}

.section-header h1{
    font-size: 2.2rem;
}

.footer-style{
    background-color: #1E90FF!important;
    margin: 0;
    padding-top: 20px;
    padding-bottom: 20px;
}

.footer-style p{
    margin-bottom: 0!important;
}

#myBTN{
    display: none;
    position: fixed;
    bottom: 80px;
    right: 40px;
    z-index: 99;
    border: none;
    outline: none;
    background-color: #00A8FF;
    color: white;
    cursor: pointer;
    padding: 10px;
    border-radius: 10px;
}

#myBTN:hover{
    background: #606060;
}

@media(max-width:768px){
    .main_header{
        height: 700px;
        text-align: center;
    }
    .main_header h1{
        text-align: center;
        padding: 0;
        width: 100%;
        font-size: 30px;
    }

    .count_style{
        display: inline!important;
    }

    .count_style p{
        text-align: center;
    }
    .count_style h1{
        text-align: center;
    }

    .about_img{
        margin-left: 0!important;
    }
}
</style>