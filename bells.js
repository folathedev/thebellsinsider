const mans=document.getElementById('mans');
mans.onclick= function()
{
    alert('WELCOME TO THE COLLEGE OF OF MANAGEMENT SCIENCE');
}

const nas=document.getElementById('nas');
nas.onclick=function()
{
    alert('WELCOME TO THE COLLEGE OF NATURAL SCIENCES')
}

const eng=document.getElementById('eng');
eng.onclick= function()
{
    alert('WELCOME TO THE COLLEGE OF ENGINEERING');
}

const envs=document.getElementById('envs');
envs.onclick=function()
{
    alert('WELCOME TO THE COLLEGE OF ENVIRONMENTAL SCIENCE');
}

function validateform(){
const fname=document.getElementById('fname').value;
const lname=document.getElementById('lname').value;
const telbox=document.getElementById('telbox').value;

if (fname==null || fname==""){
    alert('first name must be filled');
    return false;
}
 if (lname==null || lname==""){
    alert('Last name must be filled');
    return false;
 }

 if (telbox.length>12){
    alert('Confirm phone number');
    return false;
 }
}