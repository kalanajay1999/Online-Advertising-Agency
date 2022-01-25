function checkbox(){
        if (document.getElementById('checkBX').checked)
        {   
        
            document.getElementById('uname').disabled=true; 
            document.getElementById('uaddress').disabled=true; 
            document.getElementById('unumber').disabled=true; 
            document.getElementById('uemail').disabled=true; 
            document.getElementById('uid').disabled=true; 
            
        }
    
    
}

function caclBudget(){
    var days=document.getElementById('adDays').value;
    var budget=document.getElementById('adBudget').value;
    
    var result = parseFloat(budget)/parseFloat(days);
    document.getElementById('budgetdisplay').innerHTML="Ad budget per day:Rs. "+result;
    
    
}
function policyDisplay(){
    document.getElementById('plcy').style.border = " solid Black";
    document.getElementById('plcy').innerHTML= "1) Restriction Policy"+"- We dont promote alchoal, gambling and dating favoured content "+"<br>"+"2) Branding policy"+"- Ad creators are prohibitted in using copy right brand names "+"<br>"+"3) Logo policy"+"- Ad creators are prohibitted in promoting copyright logos"+"<br>"+"4) Other platform policy"+"- when user share ads on other platforms they are allowed only to create ads under their specific platform policies";
    
    
}


