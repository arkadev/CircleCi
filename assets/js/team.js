//Inserta un equipo a la base de datos por medio del controlador team
function insertTeam(name_tournament) {
    console.log(name_tournament);     
    data = {
        name_tournament: name_tournament,
        name: $('#name').val()
    };
    $.ajax({
        url: 'team/insertTeam',
        data: data,
        type: 'post',
        success: function () {
            location.reload();
        }
    });    
};



//Crea el torneo por medio del controlador torneo
function createTourn() {
    $.ajax({   
        success: function () {            
            alert("Torneo Creado");
            location.reload();
        }
    });
};

function isImpar(){	
	$(function () {				
		if(($("#tableTeams tr").length-1)%2==1){						
			$("#myModal").modal();
		}else{
			location.href="tournament";
		}
	});
};

function validateName(){
	$(document).keyup(function(tecla){			
		if($("#name").val().trim().length > 1) {
			$('#insertTeam').attr("disabled", false);
		}else{				
			$('#insertTeam').attr("disabled", true);							
		};			
		if(tecla.which >= 48 && tecla.which <= 90 || tecla.which == 32){				
			$("#name").val($("#name").val().substr(0, 45));				
		}			
	});		
};

function disabledInitTourn(){
	$(function () {								
		if($("#tableTeams tr").length>2){
			$('#initTourn').attr("disabled", false);
		}				
	});
};

function keyEnterInsertTeam(){
	$(document).ready(function(){               
        $('#name').keypress(function(e){   
            if(e.which == 13 && $("#name").val().trim().length > 1){				   
				insertTeam();					
            }
        });    
              
    });  
};