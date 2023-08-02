//lets get all require elements

const form = document.querySelector("form");
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) =>
{
    e.preventDefault();
    statusTxt.style.color = "red"; 
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); //creating new xml object
    xhr.open("POST", "message.php", true); //sending post request to the message.php file
    xhr.onload = () => //once ajax loaded
    {
        if(xhr.readyState == 4 && xhr.status == 200){ //if ajax response status is 200 & ready status is 4 means there is no error
            let response = xhr.response; // storing ajax response in response variable
            if(response.indexOf("email and passsword field is required") != -1 || response.indexOf("Enter e valid email address!") || response.indexOf("Sorry, failde to send your message"))
            {
                statusTxt.style.color = "red"; 
            }
            else{
                form.reset();
                setTimeout(() => {
                    statusTxt.style.display = "none";
                }, 3000);
            }
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(form); //creating new formData object. This obj is used to send form data
    xhr.send(formData); //sending form data


}