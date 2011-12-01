function submitentry(){
password = document.password1.password2.value.toLowerCase()
username = document.password1.username.value.toLowerCase()
passcode = 1
usercode = 1
for(i = 0; i < password.length; i++) {
passcode *= password.charCodeAt(i);
}
for(x = 0; x < username.length; x++) {
usercode *= username.charCodeAt(x);
}
//Start 
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==9684636369408000000)
{
document.getElementById('wrongu').style.display='none';
}
else{
document.getElementById('wrongu').style.display='block';
}
if(passcode==49)
{
document.getElementById('wrongp').style.display='none';
}
else{
document.getElementById('wrongp').style.display='block';
}
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==9684636369408000000&&passcode==49)
{
window.location='files/Home.php'}
else{
document.getElementById('wrongp').style.display='block';
document.getElementById('wrongu').style.display='block';
}
//Start 
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==17709134625)
{
document.getElementById('wrongu').style.display='none';
}
else{
document.getElementById('wrongu').style.display='block';
}
if(passcode==49)
{
document.getElementById('wrongp').style.display='none';
}
else{
document.getElementById('wrongp').style.display='block';
}
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==17709134625&&passcode==49)
{
window.location='files/Home.php'}
else{
document.getElementById('wrongp').style.display='block';
document.getElementById('wrongu').style.display='block';
}
//Start 
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==9982123905600000000)
{
document.getElementById('wrongu').style.display='none';
}
else{
document.getElementById('wrongu').style.display='block';
}
if(passcode==2335096081920000)
{
document.getElementById('wrongp').style.display='none';
}
else{
document.getElementById('wrongp').style.display='block';
}
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==9982123905600000000&&passcode==2335096081920000)
{
window.location='files/Home.php'}
else{
document.getElementById('wrongp').style.display='block';
document.getElementById('wrongu').style.display='block';
}
//Start 
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==1727097171338500600)
{
document.getElementById('wrongu').style.display='none';
}
else{
document.getElementById('wrongu').style.display='block';
}
if(passcode==124950)
{
document.getElementById('wrongp').style.display='none';
}
else{
document.getElementById('wrongp').style.display='block';
}
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==1727097171338500600&&passcode==124950)
{
window.location='files/Home.php'}
else{
document.getElementById('wrongp').style.display='block';
document.getElementById('wrongu').style.display='block';
}
//Start 
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==9982123905600000000)
{
document.getElementById('wrongu').style.display='none';
}
else{
document.getElementById('wrongu').style.display='block';
}
if(passcode==2335096081920000)
{
document.getElementById('wrongp').style.display='none';
}
else{
document.getElementById('wrongp').style.display='block';
}
//CHANGE THE NUMBERS BELOW TO REFLECT YOUR USERNAME/PASSWORD
if(usercode==9982123905600000000&&passcode==2335096081920000)
{
window.location='files/Home.php'}
else{
document.getElementById('wrongp').style.display='block';
document.getElementById('wrongu').style.display='block';
}
}
