
    var row;
    var login;
    var infraction;
   
   
   function declare(btn) {
        // Trouver la ligne parente du bouton
         row = btn.closest('tr');
       
        // Trouver la valeur de la cellule td correspondante
        // username = row.querySelector('td').innerHTML.value;

        login=row.querySelector('#log').getAttribute('value');
        // let nomTab = username.split(", ")
        // let nom= nomTab[0];
        console.log(login);
        

        infraction = row.querySelector('select').value; 
        console.log(infraction);
        // call ajax;
        $(document).ready(function (){
            $.ajax({
                type: "post",
                url: "../../controller/User/AjoutInfactionController.php",
                data: 
                {
                    log:login,
                    infractionLibel :infraction
                },
                success: function (response) {
                    console.log(response);
                    if(response == 'success'){
                

                        alert("Solde Infraction incrémenter ");
                    }else{
                        alert(response);
                    }
                    
                }
            });
           
});
   } 
        

//     }
    // Ajouter un gestionnaire d'événements au bouton "Declare"
    

    