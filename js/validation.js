function validate(){
    if(document.getElementById('frmname').value.length == 0){
        document.getElementById('frmnameerror').innerHTML = '* enter name';
        document.getElementById('frmname').classList.add('border_error');
        return false;
    }
    else if(document.getElementById('frmphone').value.length == 0){
        document.getElementById('frmnameerror').innerHTML = '';
        document.getElementById('frmname').classList.remove('border_error');
        document.getElementById('frmphoneerror').innerHTML = '* enter phone number';
        document.getElementById('frmphone').classList.add('border_error');
        return false;
    }
    else if(document.getElementById('frmemail').value.length == 0){
        document.getElementById('frmphoneerror').innerHTML = '';
        document.getElementById('frmphone').classList.remove('border_error');
        document.getElementById('frmemailerror').innerHTML = '* enter email';
        document.getElementById('frmemail').classList.add('border_error');
        return false;
    }
    else if(document.getElementById('frmcomment').value.length == 0){
        document.getElementById('frmemailerror').innerHTML = '';
        document.getElementById('frmemail').classList.remove('border_error');
        document.getElementById('frmcommenterror').innerHTML = '* enter comment';
        document.getElementById('frmcomment').classList.add('border_error');
        return false;
    }
    
}
		   
function nameonly(evt)
{
    var keyCode = (evt.which) ? evt.which : evt.keyCode
    if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123) && keyCode != 32){

        return false;
    }else{

        return true;
    }
     
}
function phonevalidate(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode > 31 && charCode != 43) && (charCode < 48 || charCode > 57) ){

        return false;
    }else{
        if(document.getElementById('frmphone').value.length <= 14){
            return true;
        }
        else{
            return false;
        }
        return true; 
    }
}