<style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    *{
        margin:0;
        font-family:roboto;
    }
    a{
        text-decoration: none;
        color:black;
    }
    body{
        display:flex;
        background:rgba(255, 255, 255, 0.97);
        text-align: center;
        min-height: 99vh;
        justify-content:center;
        flex-wrap:wrap;
    }
    .body-style-1{
        background:rgba(209, 252, 212, 0.43)
    }
    li a:hover:not(.active) {
        background-color: #111;
    }
    .active {
         background-color:rgb(11, 165, 31);
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    li {
        float: left;
        list-style-type: none;
    }
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    .active {
        background-color:rgb(11, 165, 31);
    }
    .myButton1{
        width:250px;
        height:60px;
        margin-top:100px;
        background-color:rgb(21, 143, 7);
        border-radius:15px;
        display: flex;
        opacity: 1;
    }
    .myButton1:hover{
        width:250px;
        height:60px;
        margin-top:100px;
        background-color:rgb(16, 88, 8);
        border-radius:15px;
        display: flex;
        opacity: 1;
    }
    .myButton2{
        width:300px;
        margin-top:100px;
        height: 500px;
        background-color:rgb(21, 143, 7);
        border-radius:15px;
        display: flex;
        opacity: 1;
        padding: 70px 0;
        text-align: center;
        color:rgb(255, 255, 255);
        
    }
    .myButton2:hover{
        width:300px;
        margin-top:100px;
        height: 500px;
        background-color:rgb(16, 88, 8);
        border-radius:15px;
        display: flex;
        opacity: 1;
        padding: 70px 0;
        text-align: center;
        color:rgb(255, 255, 255);
    }
    .backButton{
        position: absolute;
        width:40px;
        height:40px;
        top:30px;
        left:25px;
    }
    .holder{
        display: flex;
        width:100%;
        justify-content:center;
        align-items: justify;
        column-gap: 70px;


    }
    .loginPopup{
        margin:auto;
        margin-top:50px;
        width: 400px;
        height: wrap;
        border-radius:20px;
        background-color:rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
        text-align:center;
        font-family:roboto;

    }
    .bodycontainer {
        align-self:center;
        margin:auto;
    } 
    .header{

        width: 100%;;
        height: 100px;
        text-align:center;
        background-color:rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.27);
        position: fixed;
        z-index:9;

    }
    .no1{
        color: green;
        font-size: 50px;
        font-family:roboto;
        text-align :center;
        margin-top :25px;
        margin-bottom:30px;
    }
    .no2{
        color:rgb(255, 255, 255);
        text-align:center;
        margin:auto;
        text-decoration: none;
        font-family:roboto;
    }   
    .no3{
        color: black;
        font-size: 1px;
        text-align:center;
    }
    .no4{
        color: rgb(255, 255, 255);;
        font-family:roboto;
        font-size:12px;
    }
    .no5{
        position:absolute;
        font-size:35px;
        padding-top:755px;
        color: #000;;
        margin:auto;
        font-family:roboto;
    }
    .no-hover-effect{
        text-decoration: none;
    }
    .no-hover-effect:hover{
        text-decoration: none;
    }
    .date{
        font-size:120px;
        font-family:roboto;
        color:rgb(21, 143, 7);
        margin-bottom:0px;
        width:100%;
    }
    .time{
        font-size:40px;
        font-family:roboto;
        margin:auto;
        width:100%;
    }
    .day{
        font-size:20px;
        font-family:roboto;
        color:rgb(21, 143, 7);
        margin:auto;
        width:100%;
    }
    .toWaterbutton{
        position:relative;
        display:flex;
        color:rgb(255, 255, 255);;
        background-color:rgb(21, 143, 7);
        border-radius:0px 0px 5px 5px;
        font-size:14px;
        align-items:center;
        justify-content:center;
        width: 100%;
        height:25px;
    }
    .wateredButton{
        position:relative;
        display:flex;
        color:rgb(255, 255, 255);;
        background-color:rgb(89, 91, 216);
        border-radius:0px 0px 5px 5px;
        font-size:14px;
        align-items:center;
        justify-content:center;
        width: 100%;
        height:25px;
    }
    .wateredStatus{
        min-width: 80%;
        max-width:80%;
        min-height: 70%;
        max-height:70%;
        margin-top:0px;
    }
    .waterDiv{
        display:flex;
        cursor: pointer;
        font-size:14px;
        min-width:100px;
        align-self:flex-end;
        align-items:flex-end;
        justify-content:center;
        flex-wrap:wrap;
        margin-bottom:10px;
        margin-left:10px;
        padding:0px;
        border-radius:5px;
        border:none;
        background-color:rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgb(197, 206, 255);
        width:100px;
        height:120px;
        transition:all 1s ease;
    }
    .waterDiv:hover{
        transform:scale(1.1);
    }
    .fill-div {
        display: block;
        font-family:"roboto";
        height: 100%;
        width: 100%;
        text-align:center;
        font-size:25px;
        text-decoration: none;
        color:rgb(255, 255, 255);
    }
    .fill-div:hover {
        display: none;
    }
    .footer{
        height: 10px;
        width: 100%;
        align-self:bottom;
        text-align:center;
        background-color:#19741e;
        box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.66);
        padding:20px;
        position: fixed;
        bottom:0;
        z-index:5;
    }
    .roundedImage {
        border-radius: 50%;
    }
    .homepageContainer01{
        display:flex;
        justify-content:center;
        align-items:center;
        align-self:flex-end;
        margin-bottom:100px;
        border-radius:5px;
        background-color:rgb(228, 247, 229);
        width:90%;
        height:200px;
        transition:all 0.5s ease;
    }
    .homepageContainer01:hover{
        background-color:rgb(170, 243, 174);
        box-shadow:1px 1px 20px rgb(199, 199, 199);
        transform:scale(1.05);
        transition:all 1s ease;
    }
    .homepageContainer02{
        display:flex;
        border-radius:5px;
        background-color:rgb(221, 253, 255);
        box-shadow:1px 1px 20px rgb(199, 199, 199);
        width:98%;
        height:180px;
        margin-bottom:10px;
        overflow:scroll;
        transition:all 1s ease;
    }
    .homepageContainer03{
        display:flex;
        align-self:center;
        justify-content:space-evenly;
        margin-top:50px;
        border-radius:5px;
        background-color:rgba(255, 255, 255, 0);
        width:98%;
        height:420px;
        transition:all 1s ease;
    }
    .homepageContainer04{
        display:flex;
        justify-content:center;
        border-radius:5px;
        margin-top:120px;
        background-color:rgba(255, 255, 255, 0);
        width:200px;
        height:100px;
        flex-wrap:wrap;
        transition:all 1s ease;
    }
    .homepageContainer05{
        display:flex;
        border-radius:5px;
        margin-top:120px;
        background-color:rgba(255, 255, 255, 0);
        width:200px;
        height:80px;
        flex-wrap:wrap;
        transition:all 1s ease;
    }
    .cards{
        display:flex;
        border-radius:5px;
        width:300px;
        height:400px;
        align-items:flex-end;
        flex-wrap:wrap;
        border:0;
        background-color:white;
    }
    .cards:hover{
        background-color:rgb(21, 107, 11);
        transform:scale(1.02);
        transition:all 0.5s ease;
        color:white;
    }
    .cards:hover h1.date,
    .cards:hover h1.day {
            color: rgb(5, 32, 3);
    }
    .pageButtons{
        width:300px;
        height:250px;
    }
    .adminViewIcon{
        opacity: 1;
        width:40px;
        height:40px;
        border-radius:100%;
        border:0;
        background-color:rgb(16, 95, 16);
        color:rgba(0,0,0,0);
    }
    .adminViewIcon:hover{
        opacity: 0;
    }
    .adminViewLabel{
        opacity: 0;
        width:30px;
        height:40px;
        color:rgba(16, 95, 16, 0);
        transition:all 0.2s ease;
        overflow:hidden;
        font-family:arial;
        font-weight:bold;
        background-color:rgb(16, 95, 16);
        border-radius:5px 20px 20px 5px;
        border:0;
    }
    .adminViewLabel:hover{
        opacity: 1;
        width:170px;
        height:40px;
        color:white;
    }
    .adminAction{
        width:170px;
        height:40px;
        color:white;
        overflow:hidden;
        font-family:arial;
        font-weight:bold;
        background-color:rgb(16, 95, 16);
        border-radius:5px;
        border:0;
        transition:all 0.2s ease;
    }
    input[type=text].adminAction{
        
        width:170px;
        height:40px;
        color:black;
        font-family:arial;
        background-color:rgb(226, 226, 226);

    }
    .adminAction:hover{
        background-color:rgb(7, 65, 7);
    }
    input.adminAction:hover{
        background-color:rgb(255, 255, 255);
    }
    .contentHolder{
        display:flex;
        flex-wrap:wrap;
        width:98vw;
        padding:20px;
        align-self:flex-end;
        margin-bottom:41px;
        overflow-y:scroll;
        gap:40px;
        align-items:space-evenly;
        justify-items:space-evenly;
        height:71vh;
        /* height:81vh; */
        /* background-color:red; */
    }
    .plantCard{
        position: relative;
        display:flex;
        height:250px;
        width:200px;
        border-radius: 10px;
        background-color:rgba(255, 255, 255, 0.56);
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
        flex-wrap:wrap;
        transition:all 0.5s ease;
        text-decoration: none;
    }
    .plantCard:hover{
        transform:scale(1.05);
    }
    .Card{
        position: relative;
        display:flex;
        height:300px;
        width:600px;
        border-radius: 10px;
        background-color:rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
        transition:all 0.5s ease;
        text-decoration: none;
    }
    .Card:hover{
        transform:scale(1.025);
    }
    .plantCardImg{
        border-radius: 10px 10px 0px 0px;
        height:200px;
        width:200px;
        overflow: hidden;
        display: flex;
        position: absolute;
        justify-content: center;
    }
    .plantCardName{
        font-size:20px;
        font-family:"roboto",serif;
        color:rgb(3, 126, 3);
        margin:auto;
        margin-bottom:15px;
        border-bottom
    }
    .CardImg{
        overflow: hidden;
        display: flex;
        position: absolute;
        top: 10px;
        right: 10px;
        border-radius: 15px;
        height: 280px;
        width: 200px;
        justify-content: center;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.14);
    }
    .CardName{
        position:absolute;
        top:30px;
        left:10px;
        font-size:35px;
        font-family:roboto;
        font-weight: 500;
        color:rgb(3, 126, 3);
        margin:auto;
        margin-bottom:15px;
        text-decoration: none;
        padding-bottom:5px;
        border-bottom: 3px solid rgb(3, 126, 3);
    }
    .custormerDetails{
        position: relative;
        display: block;
        margin-top:20px;
        text-align:left;
        font-family:roboto;
        font-weight: 300;
        font-size:18px;
        color:rgb(0, 0, 0);
        width: 100%;
        /* background-color: gold; */
    }
/* form CSS */
    label{
        float:left;
        color:rgb(16, 88, 8);
    }
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=password], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size:20px;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .formContainer {
        border-radius: 10px;
        background-color:rgb(255, 255, 255);
        padding: 20px;
    }
    .error{
        display:flex;
        align-items:center;
        justify-content:center;
        margin-bottom:20px;
        height:40px;
        background-color:rgb(255, 245, 245);
        border-style: solid;
        border-color: rgba(255, 0, 0, 0.24);
        border-radius:5px;
        border-width:1px;
        color: #cc0033;
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        text-shadow: 1px 1px rgba(250,250,250,.3);
    }
    .done{
        display:flex;
        align-items:center;
        justify-content:center;
        margin-bottom:20px;
        height:40px;
        background-color:rgb(245, 255, 245);
        border-style: solid;
        border-color: rgba(0, 255, 0, 0.24);
        border-radius:5px;
        border-width:1px;
        color:rgb(0, 204, 51);
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        text-shadow: 1px 1px rgba(250,250,250,.3);
    }
    .bgImage{
        background-image: url("images/loginicon.png");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
        }

/* navigation Panel */
.navigationButton {
    width:30px;
    height:30px;
    background-color:rgba(241, 241, 241, 0);
    color: white;
    border: none;
    cursor: pointer;
    opacity: 1;
    position: fixed;
    top: 130px;
    left: 25px;
}
.navigationButton:hover{
    width:30px;
    height:30px;
    background-color:rgba(241, 241, 241, 0);
    color: white;
    border: none;
    cursor: pointer;
    opacity: 1;
    position: fixed;
    top: 130px;
    left: 25px;
}

.form-closed {
    display:none;
    height:100vh;
    width: 0px;
    bottom: 0;
    left: 0px;
    z-index:4;
    background-color:#19741e;
    box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.57);
    overflow:hidden;
    transition:all 0.2s ease;
}
.form-popup {
    display: block;
    position: fixed;;
    height:100vh;
    bottom: 0;
    left: 0px;
    z-index:4;
    background-color:#19741e;
    box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.57);
    transition:all 0.2s ease;
    overflow:hidden;
}
.form-container {
    max-width: 300px;
    min-width:300px;
    height:100%;
    margin-top:110px;
    padding:10px;
}
.navButton{
    display:flex;
    align-items:center;
    text-align:center;
    width:100%;
    height:50px;
    border-bottom: 1px solid white;
    transition:all 0.5s ease;
    color:rgb(255, 255, 255);
    margin:auto;
    text-decoration: none;
    font-family:roboto;
    font-size:22px;
}
.navButton:hover{
    background-color:rgb(6, 85, 26);
}
.navButtonActive{
    display:flex;
    align-items:center;
    text-align:center;
    width:100%;
    height:50px;
    border-bottom: 1px solid white;
    transition:all 0.5s ease;
    color:rgb(0, 0, 0);
    margin:auto;
    text-decoration: none;
    font-family:roboto;
    font-size:22px;
    font-weight:600;
}

/* Profile Viewer*/
.Profile_container{
    position: relative;
    margin:auto;
    margin-top: 200px;
    background-color:white;
    display:flex;
    width:80%;
    height:35vh;
    border-radius: 15px;
}
.popUpFormContainer{
    position: absolute;
    flex-direction:row;
    align-self:center;
    background-color: white;
    border-radius:10px;
    display:flex;
    width:70vw;
}
.inputContainer{
    position:relative;
    width:90%;
    margin-top:5px;
    margin-left:30px;
}
.imageUpload{
    position:relative;
    display: flex;
    margin-right:auto;
    margin-left:auto;
    margin-top:10px;
    overflow: hidden;
    border-radius: 10px;
    background-color: rgba(255, 255, 255, 0);
    justify-content:center;
    width:300px;
    height:330px;
}
option{
    font-family:arial;
}
.ProfileDetails{
        display: block;
        margin-bottom:15px;
        text-align:left;
        font-family:roboto;
        font-weight: 300;
        font-size:25px;
        color:rgb(0, 0, 0);
        width: 100%;
        /* background-color: gold; */
    }
.invoice_container{
    position: relative;
    margin-top: 10px;
    margin-bottom: 100px;
    background-color:white;
    width:80%;
    min-height:370px;
    border-radius: 15px 15px 0px 0px;
    overflow:scroll;
}
/*table*/
.customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 0px;
}
.customers tr {
    height:50px;
}
.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #04AA6D;
  color: white;
}
</style>
