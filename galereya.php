<head>
<style>

#next{
//background:url('next.png') no-repeat;
position:absolute;
margin-top:30%;
right:20px;
width:40px;
height:40px;
opacity:100%;
}

#next:hover{opacity:40%;}

#back{
//background:url('back.png') no-repeat;
position:absolute;
margin-top:30%;
left:20px;
width:40px;
height:40px;
opacity:100%;
}


#back:hover{opacity:40%;}

</style>
</head>
<body>




<img src="back.png" id="back"></img>

<img src="next.png" id="next"></img>

<div class="container" style="background:white;padding:5px 5px 5px 5px;border-radius:5px;border:1px solid gray;margin-left:120px;margin-right:120px;">
<label style="margin-left:50px;">Prioritet:</label>
<button style="background:rgba(255,128,128,0.8);color:white;font-size:15px;border-radius:5px;">TARİX</button>
<button style="background-color:rgba(128,128,255,0.8);color:white;font-size:15px;border-radius:5px;">REYTİNQ</button>
<label style="margin-left:50px;">Rayon</label>
<select style="width:120px;">
<option value="All">Bütün rayonlar</option>
<option value="Baku">Bakı</option>
<option value="Lankaran">Lənkəran</option>
<option value="Zaqatala">Zaqatala</option>
<option value="Calilabad">Cəlilabad</option>
<option value="Ordubad">Ordubad</option>
<option value="Quba">Quba</option>
<option value="Imisli">İmişli</option>
<option value="Other">Digərləri</option>
</select>
<label style="margin-left:50px;">Axtarış#</label>
<input type="text" style="width:120";></input>
</div>

<div  style="background-color:white;margin-top:25%;margin-left:25%;width:55%;height:90px;border:1px solid gray; border-radius:5px;opacity:80%;"><h3 style="text-align:center;padding-top:15px;">Verilənlər bazasına 	heç bir məlumat daxil edilməyib!</h3></div>

</body>