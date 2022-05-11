let menu = document.querySelector('#menu-bars');
let header = document.querySelector('header');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    header.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    header.classList.remove('active');
}

let cursor1 = document.querySelector('.cursor-1');
let cursor2 = document.querySelector('.cursor-2');

window.onmousemove = (e) => {
    cursor1.style.top = e.pageY + 'px';
    cursor1.style.left = e.pageX + 'px';
    cursor2.style.top = e.pageY + 'px';
    cursor2.style.left = e.pageX + 'px';
}

document.querySelectorAll('a').forEach(links =>{
    links.onmouseenter =() =>{
        cursor1.classList.add('active');
        cursor2.classList.add('active');
    }

    links.onmouseleave =() =>{
        cursor1.classList.remove('active');
        cursor2.classList.remove('active');
    }
});

// /* ----------- FONCTION APPARITION DES ELEMENTS AU SCROLL ----------- */

// window.addEventListener('scroll', reveal);

//     function reveal(){
//       var reveals = document.querySelectorAll('.reveal');

//       for(var i = 0; i < reveals.length; i++){

//         var windowheight = window.innerHeight;
//         var revealtop = reveals[i].getBoundingClientRect().top;
//         var revealpoint = 100;

//         if(revealtop < windowheight - revealpoint){
//           reveals[i].classList.add('active');
//         } 
//       }
//     }

// /* ----------- FONCTION APPARITION DES ELEMENTS AU SCROLL FIN ----------- */



/* Fonction Jquery et ajax qui va permètre d'éviter le scroll au clique sur le bouton envoyer. */
$(function () {

    $('#contact-form').submit(function(e){

        e.preventDefault();
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({

            type: 'POST',
            url: 'php/contact.php',
            data: postdata,
            dataType: 'json',
            success: function(result) {

                if(result.isSuccess){

                    $("#contact-form").append("<p style='color:green;width:300px;padding:5px;'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>");
                    $("#contact-form")[0].reset();

                }else{

                    $("#surname + .comments").html(result.surnameError);
                    $("#email + .comments").html(result.emailError);
                    $("#number + .comments").html(result.numberError);
                    $("#message + .comments").html(result.messageError);
                }

            }
        });
    });
})

