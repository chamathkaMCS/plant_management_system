<style>
        @import url('https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&family=Outfit:wght@100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
    *{
        margin: 0;
        background-color:none;
        }
    body {
        background:rgba(255, 255, 255, 0.97);
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
    .container3{

        margin:auto;
        margin-top:50px;
        width: 500px;;
        height: 500px;;
        text-align:center;
        background-color:rgb(5, 54, 13);
        
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
        margin-top:150px;
      } 
    .header{

        width: 100%;;
        height: 100px;
        text-align:center;
        margin-top:-150px;
        background-color:rgb(255, 255, 255);
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
        position: fixed;

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
        text-align:center;
        background-color:rgb(25, 116, 30);
        box-shadow: 1px 1px 20px rgb(216, 213, 213);
        padding:20px;
        position: fixed;
        bottom:0;

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
        width:wrap;
        margin-bottom:20px;
        padding-top:15px;
        padding-bottom:-5px;
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
        text-shadow: 1px 1px rgba(250,250,250,.3);}
    .done{
        width:wrap;
        margin-bottom:20px;
        padding-top:15px;
        padding-bottom:-5px;
        height:40px;
        background-color:rgb(248, 255, 245);
        border-style: solid;
        border-color: rgba(0, 255, 64, 0.24);
        border-radius:5px;
        border-width:1px;
        color:rgb(0, 204, 61);
        font-family: Helvetica, Arial, sans-serif;
        font-size: 13px;
        font-weight: bold;
        text-shadow: 1px 1px rgba(250,250,250,.3);
        }

</style>