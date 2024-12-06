let menu = document.querySelector('#menu-btn');
let nav = document.querySelector('.navbar');



menu.onclick = () => {
    menu.classList.toggle('fa-times');
    nav.classList.toggle('active');
}

window.oncscroll = () => {
    menu.classList.remove('fa-times');
    nav.classList.remove('active');
}

function chekBlanc(event){
    //event.preventDefault();

    document.getElementById('errorMsg').classList.remove('active');
    //document.getElementById('successMsg').classList.remove('active');
    document.getElementById('errorMsg').textContent= '';
    //document.getElementById('successMsg').textContent= '';

    //get values from the form
    const name = document.getElementById('fname').value;
    const number = document.getElementById('phoneNum').value;
    const email = document.getElementById('email').value;
    const date = document.getElementById('bookDate').value;

    //track errors
    let isValid = true;
    // let errorMessage ='';
    //validate the fileds of the form

    if(name == null || name == '' || number == null || number == '' || email == null || email == '' || date == null || date == '' ){
        
        document.getElementById('errorMsg').classList.add('active');
        document.getElementById('errorMsg').textContent = "field is required!";
        isValid = false;
        return(false) ;
    }
    


    //if form is valid, show the success message
   else {
        // document.getElementById('errorMsg').textContent = '';
        // document.getElementById('successMsg').classList.add('active');
        // document.getElementById('successMsg').textContent = "Appointment booked successfully!";
        return(true);
        
    }

}

//event listener for staying at scroll position before unload

window.addEventListener("beforeunload", function() { 
   sessionStorage.setItem("scrollPosition", window.scrollY);
 });

 window.onload = function() { 
    const savedScrollPosition = sessionStorage.getItem("scrollPosition"); 
    
    if (savedScrollPosition) { 
        window.scrollTo(0, savedScrollPosition); // Optional: Clear the saved position after restoring 
        sessionStorage.removeItem("scrollPosition"); } 
    };

