<style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    *{
        margin:0;
        background-color:none;
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
        font-family:arial;

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
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
        position: fixed;
        z-index:5;

    }
    .no1{
        color: green;
        font-size: 50px;
        font-family:"roboto",serif;
        text-align :center;
        margin-top :25px;
        margin-bottom:30px;
    }
    .no2{
        color:rgb(255, 255, 255);
        text-align:center;
        margin:auto;
        text-decoration: none;
        font-family:arial;
    }   
    .no3{
        color: black;
        font-size: 1px;
        text-align:center;
    }
    .no4{
        color: rgb(255, 255, 255);;
        font-family:arial;
        font-size:12px;
    }
    .no5{
        position:absolute;
        font-size:35px;
        padding-top:755px;
        color: #000;;
        margin:auto;
        font-family:arial;
    }
    .date{
        font-size:120px;
        font-family:roboto;
        color:rgb(21, 143, 7);
        margin:auto;
        padding-top:10px;
        width:100%;
    }
    .time{
        font-size:40px;
        font-family:roboto;
        margin:auto;
        padding-top:10px;
        width:100%;
    }
    .day{
        font-size:20px;
        font-family:roboto;
        color:rgb(21, 143, 7);
        margin:auto;
        padding-top:10px;
        width:100%;
    }
    .toWatered{
        position:relative;
        color:rgb(255, 255, 255);;
        background-color:rgb(21, 143, 7);
        border-radius:0px 0px 5px 5px;
        outline:none;
        border:0;
        cursor: pointer;
        font-size:14px;
        width: 100%;
        height:25px;
        margin:auto;
        margin-bottom:0;
    }
    .watered{
        position:relative;
        color:rgb(255, 255, 255);;
        background-color:rgb(89, 91, 216);
        border-radius:0px 0px 5px 5px;
        outline:none;
        border:0;
        cursor: pointer;
        font-size:14px;
        width: 100%;
        height:25px;
        margin:auto;
        margin-bottom:0;
    }
    .wateredStatus{
        min-width: 80%;
        max-width:80%;
        min-height: 70%;
        max-height:70%;
        margin-top:0px;
    }
    .fill-div {
        display: block;
        font-family:"roboto";
        height: 100%;
        width: 100%;
        text-align:center;
        font-size:25px;
        text-decoration: none;
        color:rgb(255, 255, 255);;
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
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
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

    .toWater{
        display:flex;
        min-width:100px;
        align-self:flex-end;
        align-items:flex-end;
        justify-content:center;
        flex-wrap:wrap;
        margin-bottom:10px;
        margin-left:10px;
        border-radius:5px;
        background-color:rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgb(197, 206, 255);
        width:100px;
        height:120px;
    }
    .toWater:hover{
        transform:scale(1.05);
        transition:all 0.2s ease;
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

</style>